<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function view(){

   	return view('main.home',[]);
   }

    //
}
