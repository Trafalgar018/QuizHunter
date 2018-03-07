@extends('layouts.app')

@section('content')
    <br>
    <h1>Quizs</h1>
    <hr>
    <div class="container">
    @forelse($questionaries as $questionary)
        <div class="form-control">
                <p><strong>Título:</strong> {{ $questionary['title'] }}</p>
                <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
                <p><strong>Autor:</strong><a href="/users/{{ $questionary->user->name }}">
                        {{ $questionary->user->name }}</a>
                </p>
        </div>
        <br>
    @empty
        <P>No hay quizs disponibles.</P>
    @endforelse
    </div>
@endsection

