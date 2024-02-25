<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @for($i=1;$i<10;$i++)
        <p>O valor de I é: {{ $i }}</p>
    @endfor

    @foreach ($ingredientes as $ing)
        <p>{{ $ing }} -
        @component('components.botao')
            @slot('href')
                https://google.com.br
            @endslot

            @slot('cor')
                blue
            @endslot
            Editar
        @endcomponent

        @component('components.botao')
            @slot('href')
                https://amazon.com
            @endslot

            @slot('cor')
                red
            @endslot
            Deletar
        @endcomponent
        </p>
    @endforeach



</body>
</html>
