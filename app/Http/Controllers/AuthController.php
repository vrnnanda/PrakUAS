<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UserDosen;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(10);
        return view('user',['user' => $user]);
    }
    public function formuliruser(){
        return view('formuser');
    }
    public function simpanuser(Request $request){
        $user = User::create([
            'name' => $request -> nama,
            'email' => $request -> email,
            'password' => bcrypt($request -> pass)
        ]);
        return redirect('/user')->with('alertambah', 'Data Berhasil disimpan');
    }
    public function edituser($id){
        $user = User::find($id);
        return view('edituser', ['user'=> $user]);
    }
    public function updateuser($id, Request $request){
        $user = User::find($id);
        $user -> nama = $request -> nama;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $mahasiswa -> save();
        return redirect ('/user') -> with('alertedit', 'Data Berhasil diubah');
    }
    public function login(){
        return view ('login');
    }
    public function cekLogin(Request $request){
        if (!Auth::attempt([
            'email' => $request-> email,
            'password' => $request-> pass
        ])){
            return redirect('/login');
        }
        else{
            return redirect('/dashboard');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login') -> with ('alertlogout', 'Anda Berhasil keluar dari website!');
    }
}
