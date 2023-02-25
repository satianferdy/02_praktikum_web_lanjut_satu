<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function about(){
        return view("about");
    }

    public function article(Request $request, $id){
        return "Halaman Article " . $id;
    }
}
