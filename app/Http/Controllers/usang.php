<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usang extends Controller
{
    //Tambahkan Kode
    public function index()
    {
      echo "Ini dari index punya Usang Controller";
    }

    public function bakar()
    {
      echo "Jadinya Bakso bakar";
    }
}
