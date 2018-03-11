<?php

namespace App\Http\Controllers;

use App\Valoration;
use App\Http\Requests\CreateValorationRequest;
use App\Questionary;
use Illuminate\Http\Request;

class ValorationController extends Controller
{
    //crea una valioracion
    public function store(CreateValorationRequest $request,$id)
    {

        $user = $request->user();
        $questionary = Questionary::where('id',$id)->first();

        Valoration::create([
            'valoration' => $request->input('valoration'),
            'user_id' => $user->id,
            'questionary_id' => $questionary->id,
        ]);

        return redirect()->back();
    }
}
