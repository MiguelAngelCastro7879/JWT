<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function suma($x, $y){
        $resultado = $x + $y;
        return $resultado;
    }
    public function resta($x, $y){
        $resultado = $x - $y;
        return $resultado;
    }
    public function multiplicacion($x, $y){
        $resultado = $x * $y;
        return $resultado;
    }
    public function division($x, $y){
        $resultado = $x / $y;
        return $resultado;
    }
}
