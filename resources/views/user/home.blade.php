@extends('layouts.app')

@section('content')
    <h1>My quizs</h1>
    <hr>
    <div class="container">
    @forelse($questionaries as $questionary)
        <div class="form-control">
            <div class="col-md-12" style="margin-top: 17px">
                <p><strong>Título:</strong> {{ $questionary['title'] }}</p>
                <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
            </div>
            <div class="container">
                <a type="button" class="btn btn-default" href="/questionary/load/{{$questionary['id']}}">
                    <span class="fa fa-pencil"></span>
                </a>
            </div>
        </div>
        <br>
    @empty
        <P>No hay quizs disponibles.</P>
    @endforelse
    </div>
@endsection

