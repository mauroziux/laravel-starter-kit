<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InicioController extends Controller
{
    //

    public function __construct()
   {
       $this->middleware('minify');
   }
    public function index(){
      return view('app.inicio');
    }
    
}
