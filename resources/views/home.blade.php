@extends('layouts.app')

@section('content')
    <br>
    <h1>Últimos quizs</h1>
    <hr>
    @forelse($questionaries as $questionary)
        <div class="container">
            <div class="col-md-12" style="margin-top: 17px">
                <p><strong>Título:</strong><a href="/questionary/{{ $questionary->id }}">
                    {{ $questionary['title'] }}</a></p>
                <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
                <p><strong>Autor:</strong><a href="/users/{{ $questionary->user->name }}">
                        {{ $questionary->user->name }}</a>
                </p>
            </div>
        </div>
        <hr>

    @empty
        <h1>No hay quizs disponibles.</h1>
    @endforelse
@endsection

