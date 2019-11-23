<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class TrickController extends Controller
{
    public function pertama()
    {
    	// $siswa = Siswa::latest()->first();
    	// $siswa = Siswa::whereBetween('user_id',[1,10])->get();
    	// $siswa = Siswa::findOrFail($id);
    	// dd($siswa);
    	// 
    	// $siswa = Siswa::pluck('nama_depan','id');
    	// dd($siswa);
    	
    	// $siswa = Siswa::take(20)->get();

    	// $siswa = $siswa->map(function($s,$key){
    	// 	$s->user_id = $s->user_id + 2;
    	// 	return $s;
    	// });
    	$siswa = Siswa::find(20);
    	dd($siswa->user->avatar);
    	   	

    	echo $siswa->nama_depan;
    }
}
