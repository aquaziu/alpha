<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index() {
        $nama = 'dani keren';
        return view('biodata' , ['nama' => $nama]);
        }
}
