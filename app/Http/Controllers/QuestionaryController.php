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

	public function show($slug)
    {

        $questionary = Questionary::where('slug', $slug)->first();

        $questions = Question::where('questionary_id', $questionary->id);
        $answers = null;

        foreach ($questions as $question) {
            $answers = Answer::where('question_id', $question->id);
        }

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
             'slug' => str_slug($request->input(['title'], "-")),
             'description' => $request->input('description'),
             'dificult' => $request->input('dificult'),
             'user_id' => $user->id,

         ]);

         return redirect('/home');
     }

    public function load($id){

        $questionary = Questionary::where('id', $id)->first();

        $user = User::where('id', $questionary->user_id)->first();

        $questions = $user->questions()->latest()->paginate(6);


        return view('questionary.addQuestions', [
            'user'          => $user,
            'questions'     => $questions,
            'questionary'   => $questionary
        ]);
    }


    public function ajaxRequestPost(){

        $input = request()->all();

        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }
}
