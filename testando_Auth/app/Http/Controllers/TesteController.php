<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TesteController extends Controller{
    public function index(Request $req, $nome){
        $req->all();
        $req->only('nome');
        return "Hello World";
    }

    public function phpinfo(){
        phpinfo();
    }

    public function home(){
       return redirect('/home');
    }

    public function boatarde(){
        return view('/boa-tarde');
     }
}