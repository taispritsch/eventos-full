<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InscricaoConfirmada;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'data_inscricao' => 'required|date',
            'nome_evento' => 'required|string',
            'data_evento' => 'required|date',
            'email' => 'required|email',
        ]);

        Mail::to('taisinha@gmail.com')->send(new InscricaoConfirmada($request->all()));

        return response()->json(['message' => 'E-mail enviado com sucesso'], 200);
    }
}
