<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data =['okokok baru di coba 1','nice 2', 'array 3'];
        $seger=['seger1','seger2','seger3'];
        return view('index' , ['nama' => $data , 'segera' => $seger]);
    }
}