@extends('layouts.app')

@section('content')
    <div class="row" style="margin: 25px">
    <br>
    <h1>My quizs</h1>
    <a href="/questions/{{ Auth::user()->slug }}" style="margin: 5px;margin-left: 40px">
        <button class="btn btn-info">Ver mis preguntas</button>
    </a>
        <a href="/documents/{{ Auth::user()->slug }}" style="margin: 5px;margin-left: 40px">
            <button class="btn btn-info">Ver mis documentos</button>
        </a>

    </div>

    <hr>
    <div class="container">
        @forelse($questionaries as $questionary)
            <div class="form-control col-md-12">
                <div class="row">
                    <div class="col-md-9" style="margin-top: 17px">
                        <p><strong>Título:</strong><a href="/questionary/{{ $questionary->slug }}">
                                {{ $questionary['title'] }}</a></p>
                        <p><strong>Descripción:</strong> {{ $questionary['description'] }}</p>
                    </div>
                    <div class="row-control col-md-1">
                        <a href="/questionary/load/{{$questionary['id']}}">
                            <button type="submit" class="btn btn-default"
                                    href="/questionary/load/{{$questionary['id']}}" style="margin: 25px">
                                <span class="fa fa-pencil"></span>
                            </button>
                        </a>
                    </div>
                    <div class="row-control col-md-1">
                        <form action="{{ Route('questionary_delete', $questionary->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-default" style="margin: 25px">
                                <span class="fa fa-times-circle"></span>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
            <br>
        @empty
            <P>No hay quizs disponibles.</P>
        @endforelse
    </div>
@endsection

