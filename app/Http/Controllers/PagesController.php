<?php

namespace App\Http\Controllers;

use App\Questionary;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $questionaries = Questionary::orderBy('created_at', 'desc')->paginate(10);

        return view('home', [
            'questionaries' => $questionaries
        ]);
    }
}
