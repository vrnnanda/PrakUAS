<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Matakuliah;

class MatkulController extends Controller
{
    public function matkul(){
        $matakuliah = Matakuliah::query()
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('matakuliah', ['matakuliah' => $matakuliah]);
    }
}
