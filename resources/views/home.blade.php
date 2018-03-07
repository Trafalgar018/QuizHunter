@extends('layouts.app')

@section('content')
    <br>
    <h1>Últimos quizs</h1>
    <hr>
    <div class="container">
    @forelse($questionaries as $questionary)
        <div class="form-control">
                <p><strong>Título:</strong><a href="/questionary/{{ $questionary->slug }}">
                        {{ $questionary['title'] }}</a></p>
                <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
                <p><strong>Autor:</strong><a href="/users/{{ $questionary->user->slug }}">
                        {{ $questionary->user->slug }}</a>
                </p>
        </div>
        <br>
    @empty
        <h1>No hay quizs disponibles.</h1>
    @endforelse
    </div>
@endsection

