<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::all();
        return response()->json($eventos, 200);
    }

    public function show($id)
    {
        try {
            $evento = Evento::with('inscricoes')->findOrFail($id);
            return response()->json($evento->inscricoes, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Evento não encontrado'], 404);
        }
    }
}
