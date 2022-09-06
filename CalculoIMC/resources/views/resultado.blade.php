<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <div class="box">
        <h1>Indice de Massa Corporal (IMC)</h1>
        <div class="">
            <div class="conteudo">                
                <p><b>IMC: </b>{{$valor}}</b></p> 
                <p><b>Diagnostico: </b>{{$observacao}}</p>                 
            </div>            
            <button class="button" onclick="window.location.href='{{URL('/')}}'">  Voltar</button>
        </div>
    </div>
</body>
</html>