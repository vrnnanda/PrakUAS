<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaApiController extends Controller
{
    public function all(){
        $mhs = Mahasiswa::all();
        return response() -> json([
            'success' => true,
            'message' => 'berhasil ditampilkan',
            'data' => $mhs
        ], 200);
    }
    public function create(Request $request){
        $mahasiswa = Mahasiswa::create([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidangminat' => $request -> minat,
        ]);

        if($mahasiswa){
            return response()-> json([
                'success'=> true,
                'message'=> 'Data berhasil ditambahkan'
            ], 200);
        }
        else{
            return respose()-> json([
                'success'=> false,
                'message'=> 'Data gagal ditambahkan'
            ], 401);
        }
    }
    public function update($id, Request $request){
        $mahasiswa = Mahasiswa::whereId($id)-> update([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'gender' => $request -> gender,
            'jurusan' => $request -> jurusan,
            'bidangminat' => $request -> minat
        ]);

        if($mahasiswa){
            return response()-> json([
                'success'=> true,
                'message'=> 'Data berhasil diupdate'
            ], 200);
        }
        else{
            return respose()-> json([
                'success'=> false,
                'message'=> 'Data gagal diupdate'
            ], 401);
        }
    }
    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa-> delete();
        
        if($mahasiswa){
            return response()-> json([
                'success'=> true,
                'message'=> 'Data berhasil dihapus'
            ], 200);
        }
        else{
            return respose()-> json([
                'success'=> false,
                'message'=> 'Data gagal dihapus'
            ], 401);
        }
    }
}
