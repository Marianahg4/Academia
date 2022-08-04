<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    public function totalHelado($opcion){
        $topping = '';
        $precioTopping = 0;
        $valorHelado = 3000;
        $totalPagar = 0;

        if($opcion == 1){
            $topping = 'chocolate';
            $precioTopping = 500;
        }
        else if($opcion == 2){
            $topping = 'Brownie';
            $precioTopping = 1000;
        }
        else if($opcion == 3){
            $topping = 'Delicatesse';
            $precioTopping = 1500;
        }

        $totalPagar = $precioTopping + $valorHelado;
        return 'el topping seleccionado es: ' . $topping . 'y el total a pagar es' . $totalPagar;

    }};
