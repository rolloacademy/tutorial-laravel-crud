<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        $siswa = \App\Siswa::take(4)->get();        
        return view('test',['siswa' => $siswa]);
    }
}
