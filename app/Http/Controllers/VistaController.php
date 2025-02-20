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

    public function editar(string $id)
    {
        $user = Http::get("http://localhost:8000/api/users/{$id}")->json();
        return view('viewEditar', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only(['nombre', 'apellido', 'email', 'telefono', 'edad']);
        $response = Http::put("http://localhost:8000/api/users/{$id}", $data);

        if ($response->failed()) {
            return redirect()->back()->with('error', 'Error al actualizar el usuario.');
        }

        return redirect()->route('index')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
