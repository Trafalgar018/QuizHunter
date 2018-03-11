<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use App\Questionary;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    //Crea un Comentario

    public function store(CreateCommentRequest $request,$id)
    {

        $user = $request->user();
        $questionary = Questionary::where('id',$id)->first();

        Comment::create([
            'comment' => $request->input('comment'),
            'user_id' => $user->id,
            'questionary_id' => $questionary->id,
        ]);

        return redirect()->back();
    }
}
