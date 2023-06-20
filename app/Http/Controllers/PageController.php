<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa; //untuk menghubungkan controller dengan model

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }

    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }

    public function mahasiswa()
    {
        $mhs = Mahasiswa::orderBy('nik', 'desc')->paginate(10); 
        return view('mahasiswa', ['key' => 'mahasiswa', 'mhs' => $mhs]); 
    }

    public function pencarian(Request $request)
    {
        $cari = $request->q;
        $mhs = Mahasiswa::where('nik', 'like', '%' .$cari.'%')->orWhere('nama', 'like', '%' .$cari.'%')->paginate(10);
        $mhs->appends($request -> all()); 
        return view('mahasiswa', ['key' => 'mahasiswa', 'mhs' => $mhs]);

    }

    public function tambah()
    {
        return view('formtambah', ['key' => 'mahasiswa']);
    }

    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }

    public function simpan(Request $request)
    {
        $bidang_minat = implode(',',$request->get('bidang_keahlian'));
        Mahasiswa::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tingkat_pendidikan' => $request->tingkat_pendidikan,
            'bidang_keahlian' => $bidang_minat,
            'gasal_21' => $request->gasal_21,
            'genap_21' => $request->genap_21,
            'gasal_22' => $request->gasal_22
        ]);
        return redirect('mahasiswa')->with('alert', 'Berhasil disimpan');
        
        //redirect untuk mengecek apakah data sudah ditambahkan atau belum
    }

    public function edit ($nik){
        $mhs = Mahasiswa::find($nik);
        return view('formedit', ['key' => 'mahasiswa', 'mhs' => $mhs]);
    }

    public function update ($nik, Request $request){
        
        $bidang_minat = implode(',',$request->get('bidang_keahlian'));
        $mhs = Mahasiswa::find($nik);
        $mhs->nik = $request->nik;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->tingkat_pendidikan = $request->tingkat_pendidikan;
        $mhs->bidang_keahlian=$bidang_minat;
        $mhs->gasal_21=$request->gasal_21;
        $mhs->genap_21=$request->genap_21;
        $mhs->gasal_22=$request->gasal_22;
        $mhs->save();
        return redirect('mahasiswa')->with('alert', 'Berhasil diupdate');
    }

    public function profilemhs ($nik){
        $mhs=Mahasiswa::find($nik);
        return view('profilemhs',['key' => 'mahasiswa','mhs'=>$mhs]);
    }

    public function delete ($nik){
        $mhs = Mahasiswa::find($nik);
        $mhs->delete();
        return redirect('mahasiswa')->with('alert', 'Berhasil dihapus');

    }

    public function setting(){

        return redirect('/setting');
    }
}
