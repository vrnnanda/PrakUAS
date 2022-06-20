<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dosen;

class DosenController extends Controller
{
    public function dosen(){
        $dosen = Dosen::query()
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('dosen', ['dosen' => $dosen]);
    }
}
