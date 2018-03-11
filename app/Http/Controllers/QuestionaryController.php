<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Questionary;
use App\Question;
use App\Comment;
use App\User;
use App\Http\Requests\CreateQuestionaryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class QuestionaryController extends Controller
{

    //Mostrar cuestionarios
    public function show($slug)
    {

        $questionary = Questionary::where('slug', $slug)->first();
        $questions =  $questionary->questions;
        $answers = array();
        $comments = Comment::where('questionary_id', $questionary->id)->latest()->paginate(20);

        //dd($comments);
        foreach($questions as $question){
            $answer = Answer::where('question_id', $question->id)->paginate(3);
            array_push($answers,$answer);
        }

        return view('questionary.view', [
            'questionary' => $questionary,
            'questions'   => $questions,
            'answers' => $answers,
            'comments' => $comments
        ]);
    }

    //redirigir a la creacion de un cuestionario
    public function create()
    {
        return view('questionary.create');
    }

    //Crea un nuevo Cuestionario

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


    //Añade las preguntas al cuestionario recreando las relaciones para que pueda actualizar tambien si hay relaciones anteriores
    public function load($id)
    {

        $questionary = Questionary::where('id', $id)->first();

        $user = User::where('id', $questionary->user_id)->first();

        $questions = $user->questions()->latest()->paginate(6);


        return view('questionary.addQuestions', [
            'user' => $user,
            'questions' => $questions,
            'questionary' => $questionary
        ]);
    }


    //para mi la joya de la corona, recoger los datos mediante ajax para pasarlos al controlador (es decir, aqui) y poder mandarlos a la funcion anterior
    public function ajaxRequestPost()
    {

        $input = request()->all();

        $questions = $input["preguntas"];


            $idQuestionary = $input["cuestionario"];

            $questionary = Questionary::where('id', $idQuestionary)->first();


            $questionary->questions()->detach();

            foreach ($questions as $question) {
                $questionary->questions()->attach("" . $question);
            }



    }
    //Destruye un cuestionario
    public function destroy(Questionary $questionary)
    {
        $questionary->questions()->detach();
        $questionary->delete();
        return redirect()->route('user', Auth::user()->slug);
    }


}
