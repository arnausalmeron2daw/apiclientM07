<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $response = Http::withToken(session('token'))->get('http://127.0.0.1:8000/api/products');
        return $response->json();
    }

    public function show($id)
    {
        $response = Http::withToken(session('token'))->get("http://127.0.0.1:8000/api/products/{$id}");
        return $response->json();
    }

    public function store(Request $request)
    {
        $response = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/products', $request->all());
        return $response->json();
    }

    public function update(Request $request, $id)
    {
        $response = Http::withToken(session('token'))->put("http://127.0.0.1:8000/api/products/{$id}", $request->all());
        return $response->json();
    }

    public function destroy($id)
    {
        $response = Http::withToken(session('token'))->delete("http://127.0.0.1:8000/api/products/{$id}");
        return $response->json();
    }
}

