<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Welcome');
    }
    public function datadiri(){
        return 'Nama: Yudistira Mahesa <br> NIM: D212011039 <br> Kelas: KA-7B';
    }
    public function contact(){
        return'yudistiram323@gmail.com';
    }

}
