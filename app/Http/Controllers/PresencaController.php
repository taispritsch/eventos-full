<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presenca;

class PresencaController extends Controller
{
    public function index()
    {
        $presencas = Presenca::all();
        return response()->json($presencas, 200);
    }
    
    public function store(Request $request)
    {
        try {
            $request->validate([
                'inscricao_id' => 'required|exists:inscricoes,id',
                'data_presenca' => 'required|date',
            ]);

            $presenca = Presenca::create($request->all());

            return response()->json($presenca, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ocorreu um erro ao criar a presença'], 500);
        }
    }
}
