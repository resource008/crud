<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswacontroller extends Controller
{
    public function index()
    {

        //mengambil data dari tabel mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();

        //mengirim data mahasiswa ke view index
        return view('index',['mahasiswa'=> $mahasiswa]);
    }

    //method untuk menampilkan view form tambah mahasiswa
    public function tambah()
    {

        //memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table mahasiswa
    public function store(Request $request)
    {

        //insert data ke tabel mahasiswa
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'prodi' => $request->prodi
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    public function edit($id)
    {

        //mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('edit',['mahasiswa'=>$mahasiswa]);
    }

    //update data mahasiswa
    public function update(Request $request)
    {
        //update data mahasiswa
        DB::table('mahasiswa')->where('id',$request->id)->update([
            'id' => $request->id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'prodi' => $request->prodi
        ]);
        //alihkan redirect ke halaman mahasiswa
        return redirect('/mahasiswa');
    }

    //method untuk hapus data mahasiswa
    public function hapus($id)
    {
        //menghapus data mahasiswa berdasarkan id yang dipiih
        DB::table('mahasiswa')->where('id',$id)->delete();

        //alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }


}
