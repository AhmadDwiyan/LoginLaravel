<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanerController extends Controller
{
  public function clean()
  {
      //echo "Annyeonghaseyo, Fara Imnida";

      return view('tables');
  }
}
