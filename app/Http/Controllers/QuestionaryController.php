<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Questionary;
use App\Question;
use App\User;
use App\Http\Requests\CreateQuestionaryRequest;
use Illuminate\Http\Request;

class QuestionaryController extends Controller
{ 

	public function show($id)
    {

        $questionary = Questionary::where('id', $id)->first();
        $questions = Question::where('questionary_id', $id)->first();
        $answers = Answer::where('question_id', $questions->id)->first();


        return view('questionary.view', [
            'questionary' => $questionary,
            'question'    => $questions,
            'answer'      => $answers

        ]);
    }
    
    public function create()
    {
        return view('questionary.create');
    }

     public function store(CreateQuestionaryRequest $request)
     {


         $user = $request->user();

         Questionary::create([
             'title' => $request->input('title'),
             'tags' => $request->input('tags'),
             'description' => $request->input('description'),
             'dificult' => $request->input('dificult'),
             'user_id' => $user->id,

         ]);

         return redirect('/home');
     }

    public function load($name){


        $user = User::where('name', $name)->first();

        $questions = $user->questions()->latest()->paginate(6);

        return view('questionary.addQuestions', [
            'user'          => $user,
            'questions' => $questions
        ]);
    }
}
