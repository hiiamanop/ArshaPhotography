<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // jika ada sesion yang login, maka akan diarahkan ke routing contact
        $data = Contact::orderBy('nama', 'ASC')->get(); // select * from  users orderBy name ASC
        return view('backend.contact.index', compact('data'));
    }

    public function add()
    {
        // untuk menampilkan form add
        return view('backend.contact.add');
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'nama' => 'required',
                'email' => 'required|email',
                'plan' => 'required',
                'project_date' => 'required'
            ],
            [
                'nama.required' => 'Nama hotel harus diisi!',
                'email.required' => 'Email kota harus diisi!'
            ]
        );

        $contact = Contact::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'plan' => request('plan'),
            'project_date' => request('project_date'),
        ]);
        // ini biasanya hasil dari create itu meruoakan true or false
        if ($contact) {
            return redirect('contact'); // redirect to  routing yang namanya hotel sesuai dengan web.php
        } else {
            return redirect()->back(); // redirect ke halaman itulah 
        }
    }

    public function edit($id)
    {
        // query data berdasarkan id yang dipilih = $id
        $data = Contact::find($id); // select * from users where id = variable $id yang ada di parameter
        return view('backend.contact.edit', compact('data'));
    }

    public function update(Request $request)
    {
        //ambil data yang berdasarkan yang di kirim kan form edit
        $data = Contact::where('id', $request->id);

        // update data ke tabel
        $update = $data->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'plan' => $request->plan,
            'project_date' => $request->project_date
        ]);

        if ($update) {
            return redirect('contact'); // redirect ke routing yang namanya user sesuai di web.php
        } else {
            return redirect()->back(); // redirect ke halaman itulah/ kembali ke situlah
        }
    }

    public function destroy($id) // delete from users where id=$id
    {
        Contact::destroy($id);
        return redirect('contact');
    }
}
