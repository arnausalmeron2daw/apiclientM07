<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    function index(){
        $token=session('token');
        $response=Http::withToken($token)->get('http://127.0.0.1:8001/api/posts');
        $data=json_decode($response->data);
        $data = $data['data'];
        return view('dashboard',[
            'data' => $data
        ]);

    }
}
