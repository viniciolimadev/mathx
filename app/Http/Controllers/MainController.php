<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){

        echo 'apresentar a pagina inicial';
        
    }
    public function generateExercise(Request $request){

        echo 'gerar exercicios';
        
    }
    public function printExercise(){

        echo 'apresentar exercicios';
        
    }
    public function exportExercises(){

        echo 'gerar exercicios';
        
    }
}
