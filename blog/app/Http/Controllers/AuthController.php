<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome($data){
        return view('success')->with("data", $data);
    }

    public function register(Request $request){
        $data = $request->all();
        return $this->welcome($data);
    }
}
