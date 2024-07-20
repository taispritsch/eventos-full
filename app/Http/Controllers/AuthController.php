<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(Request $request)
{
    if (!$request->has(['email', 'password'])) {
        return response()->json(['message' => 'Campos de email e senha são obrigatórios'], 400);
    }

    $credentials = $request->only('email', 'password');

    return response()->json(['message' => 'Autenticado com sucesso'], 200);
}

}
