<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>{{ $nome == 'Gustavo' ? 'Sim' : 'Não' }}</h1>

    <span>O usuário é Gustavo?</span>
    @if ($nome == 'Gustavo')
        <h1>Sim</h1>
    @else
        <h2>Não</h2>
    @endif


</body>
</html>
