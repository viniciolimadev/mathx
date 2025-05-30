<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home():View{

        return view('home');
        
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
