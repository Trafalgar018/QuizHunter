<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    //Carga los cuestionarios para mandarlos a la vista externa (por otro usuario) del usuario autenticado
    public function index(User $user)
    {

        $questionaries = $user->questionaries()->paginate(6);

        return view('user.index', [
            'user'          => $user,
            'questionaries' => $questionaries
        ]);

    }
    //En este caso hace lo mismo pero las manda al home del usuario
    public function home($slug){

        $user = User::where('name', $slug)->first();

        $questionaries = $user->questionaries()->latest()->paginate(6);

        return view('user.home', [
            'user'          => $user,
            'questionaries' => $questionaries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug){
        $user = User::where('name', $slug)->first();

        $questionaries = $user->questionaries()->latest()->paginate(6);

        return view('user.index', [
            'user'          => $user,
            'questionaries' => $questionaries
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
