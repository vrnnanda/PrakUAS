<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MhsController extends Controller
{
   public function mhs(){
       $mahasiswa = Mahasiswa::query()
       ->orderBy('id', 'desc')
       ->paginate(10);
       return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
   }
   public function pencarian(Request $request){
       $cari = $request -> cari;
       $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
       return view ('mahasiswa', ['mahasiswa' => $mahasiswa]);
   }
   public function formulirmhs(){
       return view('formulir');
   }
   public function simpanmhs(Request $request){
       $minat = implode(',',$request->minat);
       Mahasiswa::create([
           'nim' => $request -> nim,
           'nama' => $request -> nama,
           'gender' => $request -> gender,
           'jurusan' => $request -> jurusan,
           'bidangminat' => $minat
       ]);
       return redirect('/mahasiswa') -> with('alertambah', 'Data Berhasil disimpan');
   }
   public function editmhs($id){
       $mahasiswa = Mahasiswa::find($id);
       return view('editMhs', ['mahasiswa'=> $mahasiswa]);
   }
   public function updatemhs($id, Request $request){
       $minat = implode(',',$request-> minat);
       $mahasiswa = Mahasiswa::find($id);
       $mahasiswa -> nim = $request -> nim;
       $mahasiswa -> nama = $request -> nama;
       $mahasiswa -> gender = $request -> gender;
       $mahasiswa -> jurusan = $request -> jurusan;
       $mahasiswa -> bidangminat = $minat;
       $mahasiswa -> save();
       return redirect ('/mahasiswa') -> with('alertedit', 'Data Berhasil diubah');
   }
   public function deletemhs($id){
       $mahasiswa = Mahasiswa::find($id);
       $mahasiswa -> delete();
       return redirect ('/mahasiswa') -> with ('alertdelete', 'Data Berhasil dihapus');
   }
}
