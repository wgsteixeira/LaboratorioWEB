<?php

namespace App\Http\Controllers;
use App\Models\CalculoIMC;

class ControllerIMC extends Controller{
    public function index(){
        return view('home');
    }

    public function imc(){
        $resultado = new CalculoIMC();

        $valor = $resultado->calcular();

        if ($valor < 18.5) {
            $observacao =  "Abaixo do Peso";
          } elseif ($valor >= 18.6 and $valor <= 24.9) {
            $observacao =  "Peso ideal - Parabéns!!";
          } elseif ($valor >= 25 and $valor <= 29.9) {
            $observacao =  "Levemente acima do peso";
          } elseif ($valor >= 30 and $valor <= 34.9) {
            $observacao =  "Obesidade grau I";
          } elseif ($valor >= 35 and $valor <= 39.9) {
            $observacao =  "Obesidade grau II - Severa";
          } else {
            $observacao =  "Obesidade grau III - Mórbida";
          }          
        
        return view('resultado', ['valor'=>$valor,'observacao'=>$observacao]);
    }

    
}