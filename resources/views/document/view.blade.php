@extends('layouts.app')

@section('content')

    <div class="row" style="margin: 25px">
        <br>
        <h1>My Documents</h1>
    </div>

    <hr>
    <div class="container">
        @forelse($documents as $document)
            <div class="form-control col-md-12">
                <div class="row">
                    <div class="col-md-9" style="margin-top: 17px">
                                {{ $document['text'] }}</a></p>
                    </div>
                </div>
                <div class="row-control col-md-1">
                    <form action="{{ Route('document_delete', $document) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-default" style="margin: 25px">
                            <span class="fa fa-times-circle"></span>
                        </button>
                    </form>
                </div>
            </div>
            <br>
        @empty
            <P>No hay quizs disponibles.</P>
        @endforelse
    </div>
@endsection