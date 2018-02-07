<?php

namespace App\Http\Controllers;

use App\Questionary;
use App\Question;
use App\Http\Requests\CreateQuestionaryRequest;
use Illuminate\Http\Request;

class QuestionaryController extends Controller
{ 

	public function show(Questionary $questionary)
    {
        return view('questionary.show', [
            'questionary' => $questionary
        ]);
    }
    
    public function create()
    {
        return view('questionary.create');
    }

     public function store(CreateQuestionaryRequest $request){


        Question::create([
            'title'     => $request->input('question'),
            'answer_id' => '00000'

        ]);


        /**

	    $user = $request->user();

        Questionary::create([
            'title'   		=> $request->input('title'),
            'tags'    		=> $request->input('tags'),
            'description'   => $request->input('description'),
            'dificult'    	=> $request->input('dificult'),
            'questions_id'	=> '000000',
            'user_id'		=> $user->id,

        ]);

*/
        return redirect('/home');
    }
}
