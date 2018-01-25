<?php

namespace App\Http\Controllers;

use App\Questionary;
use App\Http\Requests\CreateQuestionaryRequest;
use Illuminate\Http\Request;

class QuestionaryController extends Controller
{ 

	public function show(Questionary $questionary)
    {
        return view('questionary.show', [
            'questionariy' => $questionary
        ]);
    }
    
    public function create()
    {
        return view('questionary.create');
    }

     public function store(CreateQuestionaryRequest $request){
        Questionary::create([
            'title'   		=> $request->input('title'),
            'tags'    		=> $request->input('tags'),
            'description'   => $request->input('description'),
            'dificult'    	=> $request->input('dificult'),
            'id_questions'	=> '000000',
            'id_author'		=> '000000'

        ]);

        return redirect('/');
    }
}
