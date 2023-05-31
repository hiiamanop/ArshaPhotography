<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssetsController extends Controller
{
    //menampilkan form login
    public function index()
    {
        $data = Assets::orderby('nama_Assets', 'ASC')->get();
        return view('backend.assets.index', compact('data'));
    }

    //menampilkan form add
    public function add()
    {
        return view('backend.assets.add');
    }
    // untuk proses simpan data
    public function store(Request $request)
    {
        // validasi
        request()->validate(
            [
                // apa saja yang di validasi

                'nama_Assets' => 'required',
                'gambar' => 'required|image|file',
                'status' => 'required'
            ],

            // custom message error validation
            [

                'nama_Assets.required' => 'Nama Assets harus diisi!',
                'gambar.required' => 'Gambar harus diisi!',
                'status.required' => 'Status harus diisi!'
            ]
        );

        // Assets data menggunakan teknik eloquent
        $pathgambar = $request->file('gambar')->store('Assets_images');
        $Assets = Assets::create([
            'nama_Assets' => request('nama_Assets'),
            'status' => request('status'),
            'gambar' => $pathgambar
        ]);
        // ini biasanya hasil dari create itu meruoakan true or false
        if ($Assets) {
            return redirect('assets'); // redirect to  routing yang namanya Assets sesuai dengan web.php
        } else {
            return redirect()->back(); // redirect ke halaman itulah 
        }
    }
    // untuk menampilkan form edit
    public function edit($id)
    {
        // query data berdasarkan id yang dipilih = $id
        $data = Assets::find($id); // select * from Assetss where id = variable $id yang ada di parameter
        return view('backend.assets.edit', compact('data'));
    }
    // untuk hapus data

    public function update(Request $request)
    {
        //ambil data berdasarkan yang dikirim oleh form edit
        $Assets = Assets::find($request->id);

        //jika gambar baru diupload
        if ($request->file('gambar')) {
            //hapus gambar lama
            Storage::delete($Assets->gambar);
            $pathgambar = $request->file('gambar')->store('Assets-images');


            //jika tidak upload
        } else {
            //$pathgambar ini isinya value yang ada di field gambar pada table Assetss
            $pathgambar = $Assets->gambar;
        }

        //ambil data yang berdasarkan yang di kirim kan form edit
        $data = Assets::where('id', $request->id);

        // update data ke tabel
        $update = $data->update([
            'nama_Assets' => $request->nama_Assets,
            'status' => $request->status,
            'gambar' => $pathgambar
        ]);

        if ($update) {
            return redirect('assets'); // redirect ke routing yang namanya Assets sesuai di web.php
        } else {
            return redirect()->back(); // redirect ke halaman itulah/ kembali ke situlah
        }
    }


    // untuk menghapus data
    public function destroy($id) // delete from Assetss where id=$id
    {
        $Assets = Assets::find($id);

        // hapus file gambar data Assets berdasarkan  id yang diplih
        Storage::delete($Assets->gambar);

        // hapus data Assets berdasarkan id
        Assets::destroy($id);
        return redirect('Assets');
    }
}
