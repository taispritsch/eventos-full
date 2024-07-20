<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;

class InscricaoController extends Controller
{
    public function index()
    {
        $inscricoes = Inscricao::all();
        return response()->json($inscricoes, 200);
    }

    public function show($id)
    {
        $inscricao = Inscricao::findOrFail($id);
        return response()->json($inscricao, 200);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'usuario_id' => 'required|exists:usuarios,id',
                'evento_id' => 'required|exists:eventos,id',
                'data_inscricao' => 'required|date',
            ]);

            $inscricao = new Inscricao();
            $inscricao->fill($request->all());
            $inscricao->save();

            return response()->json($inscricao, 201);
        } catch (ValidationException $e) {
            return response()->json(['message' => 'Erro ao fazer inscrição.'], 200);
        }
    }

    public function destroy($id)
    {
        try {
            $inscricao = Inscricao::findOrFail($id);
            $inscricao->delete();

            return response()->json(['message' => 'Inscrição cancelada com sucesso'], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Inscrição não encontrada'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Ocorreu um erro ao cancelar a inscrição.'], 500);
        }
    }
}
