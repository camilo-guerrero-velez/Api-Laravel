<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('viewLogin');
    }

    public function index()
    {
        $response = Http::get('http://localhost:8000/api/users');
        $data = $response->json(); 


        $users = $data['users'] ?? [];

        return view('viewUsuarios', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('viewCrearUsuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
