<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function reg(Request $response){

        $response = Http::post('http://127.0.0.1:8000/api/register',$request->all());

        if($response->succesfull()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('register.index');
        }

    }
}
