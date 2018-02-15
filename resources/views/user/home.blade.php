@extends('layouts.app')

@section('content')
    <h1>My quizs</h1>
    <hr>
    @forelse($questionaries as $questionary)
        <div class="container">
            <div class="col-md-12" style="margin-top: 17px">
                <p><strong>Título:</strong> {{ $questionary['title'] }}</p>
                <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
            </div>
        </div>
        <hr>

    @empty
        <P>No hay quizs disponibles.</P>
    @endforelse
@endsection

