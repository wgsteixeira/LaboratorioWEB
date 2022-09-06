<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do IMC</title>

<link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">
</head>
<body>
    <div class="box">
    <h1>Calculo IMC <br>Indice de Massa Corporal</h1>
    <p>O IMC é um cálculo simples que permite avaliar se a pessoa está dentro do peso que é considerado ideal para a sua altura. Também conhecido como Índice de Massa Corporal, o IMC é uma fórmula utilizada por vários profissionais de saúde, incluindo médicos, enfermeiros e nutricionistas, para saber, de uma forma rápida, se a pessoa precisa ganhar ou perder peso.</p>

    <div class="painel">
        <div class="conteudo">
            <form action="{{url('/resultado')}}" method="get">
                <label for="altura">Digite Sua Altura</label>
                <input type="float" class="input"  name="altura" required/>
                <label for="peso">Digite Seu Peso</label>
                <input type="float" class="input" name="peso" required/>
                <button class="button" type="submit">Calcular IMC</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>