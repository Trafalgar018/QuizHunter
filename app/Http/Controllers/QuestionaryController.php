<?php

namespace App\Http\Controllers;

use App\Answer;
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

     public function store(CreateQuestionaryRequest $request)
     {


         $user = $request->user();

         $questionary = Questionary::create([
             'title' => $request->input('title'),
             'tags' => $request->input('tags'),
             'description' => $request->input('description'),
             'dificult' => $request->input('dificult'),
             'user_id' => $user->id,

         ]);

         /** Faltaria implementar un bucle para recorrer cada div de preguntas
          * pero necesitamos saber cuantos div hay */


         $question = Question::create([
             'title' => $request->input('question'),
             'questionary_id' => $questionary->id,

         ]);

         for ($i = 1; $i <= 3; $i++) {


             Answer::create([
                 'answer' => $request->input('answer' . $i),
                 //'correct'=> $request->input('radio1'),
                 'question_id' => $question->id,
             ]);

         }
         return redirect('/home');
     }
}
