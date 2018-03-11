<?php

namespace App\Http\Controllers;

use App\Questionary;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    //Recogemos todos los cuestionarios los ordenamos por su fecha de creacion y los mostramos en la vista principal de la pagina
    public function home(){
        $questionaries = Questionary::orderBy('created_at', 'desc')->paginate(10);

        return view('home', [
            'questionaries' => $questionaries
        ]);
    }
}
