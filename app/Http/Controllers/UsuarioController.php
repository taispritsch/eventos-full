<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios, 200);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nome' => 'required|string',
                'email' => 'required|email|unique:usuarios,email',
                'senha' => 'required|min:6',
            ]);

            $usuario = Usuario::create([
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => bcrypt($request->senha), 
            ]);

            return response()->json($usuario, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ocorreu um erro ao criar o usuário'], 500);
        }
    }

}
