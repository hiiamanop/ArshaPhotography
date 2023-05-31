<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //menampilkan form login
    public function index()
    {
        $data = User::all(); // SELECT * FROM USERS
        $data1 = user::orderBy('name','ASC')->get(); // select * from  users orderBy name ASC
        return view('backend.user.index' , compact('data','data1')); // mengambil data susuai database

    }

    //menampilkan form add
    public function add()
    {
        return view('backend.user.add');
    }
    // untuk proses simpan data
    public function store()
    {
        // validasi
        request()->validate([
            // apa saja yang di validasi
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:5',
                       
        ],
        
        // custom message error validation
        [
            'name.required' => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            'email.unique' => 'Email telah terpakai!',
            'email.email' => 'Format email tidak sesuai!',
            'password.required' => 'password harus diisi!',
            'password.min' => 'Password minimal 5 angka!',
            'level.required' => 'level harus diisi!',
        ]
        );
            
        // user data menggunakan teknik eloquent
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(\request('password')),
            
        ]);
        // ini biasanya hasil dari create itu meruoakan true or false
        if($user) {
            return redirect('user'); // redirect to  routing yang namanya user sesuai dengan web.php
        }else{
            return redirect()->back(); // redirect ke halaman itulah 
        }
    }
    // untuk menampilkan form edit
    public function edit($id)
    {
        // query data berdasarkan id yang dipilih = $id
        $data = User::find($id); // select * from users where id = variable $id yang ada di parameter
        return view('backend.user.edit',compact('data'));
    }
    
    // untuk hapus data
    public function update(Request $request)
    {
        //ambil data yang berdasarkan yang di kirim kan form edit
        $data = User::where('id',$request->id);

        // update data ke tabel
        $update = $data->update([
            'name' => $request->name,
            // jika form password kosong, maka yang akan di input adalah data yang lama di tabel
            // jika form password diisi, maka replace data yang lama dengan data yyang diinputkan dari form
            'password' => $request->password == '' ? $data->first()->password : Hash::make ($request->password),
            
        ]);

        if($update){
            return redirect('user'); // redirect ke routing yang namanya user sesuai di web.php
        } else {
            return redirect()->back(); // redirect ke halaman itulah/ kembali ke situlah
        }
    }    

    // untuk menghapus data
    public function destroy($id) // delete from users where id=$id
    {
        User::destroy($id);
        return redirect('user');
    }
}
