@extends('layouts.app')

@section('content')
    <h1>Quizs</h1>
    <hr>
    @forelse($questionaries as $questionary)
        <div class="container">
            <div class="col-md-12" style="margin-top: 17px">
                <p><strong>Título:</strong> {{ $questionary['title'] }}</p>
                <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
                <p><strong>Autor:</strong><a href="/users/{{ $questionary->user->name }}">
                        {{ $questionary->user->name }}</a>
                </p>
            </div>
        </div>
        <hr>

    @empty
        <P>No hay quizs disponibles.</P>
    @endforelse
@endsection

