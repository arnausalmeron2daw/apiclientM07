<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;

class ProviderController extends Controller
{
    public function index()
    {
        $response = Http::withToken(session('token'))->get('http://127.0.0.1:8000/api/provider');
        return $response->json();
    }

    public function show($id)
    {
        $response = Http::withToken(session('token'))->get("http://127.0.0.1:8000/api/provider/{$id}");
        return $response->json();
    }

    public function store(Request $request)
    {
        $response = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/provider', $request->all());
        return $response->json();
    }

    public function update(Request $request, $id)
    {
        $response = Http::withToken(session('token'))->put("http://127.0.0.1:8000/api/provider/{$id}", $request->all());
        return $response->json();
    }

    public function destroy($id)
    {
        $response = Http::withToken(session('token'))->delete("http://127.0.0.1:8000/api/provider/{$id}");
        return $response->json();
    }
}
