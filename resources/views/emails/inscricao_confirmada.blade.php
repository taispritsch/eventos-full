<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição Confirmada</title>
</head>
<body>
    <h1>Inscrição Confirmada</h1>
    <p>Olá {{ $dados['nome'] }},</p>
    <p>Sua inscrição para o evento "{{ $dados['nome_evento'] }}" foi confirmada.</p>
    <p>Detalhes da inscrição:</p>
    <ul>
        <li>Data e hora da inscrição: {{ $dados['data_inscricao'] }}</li>
        <li>Data e hora do evento: {{ $dados['data_evento'] }}</li>
    </ul>
    <p>Obrigado por se inscrever!</p>
</body>
</html>
