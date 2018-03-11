@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 70px">
        <div class="signup-form-container">
            <div class="panel-body">
                <div class="form-body">

                    <form action="{{ Route('question_remake',$question) }}" method="post">
                        {{ csrf_field() }}

                        <div class="panel-boy" id="questions">

                            <!-- Formulario de preguntas -->

                            <div class="form-body">
                                <label class="col-md-4 control-label">Pregunta</label>

                                <div class="form-group @if( $errors->has('question'))has-error @endif">

                                    <div class="form-group">
                                        <textarea class="form-control" id="question" name="question"
                                                  rows="3" ></textarea>
                                    </div>
                                    @if($errors->has('question'))
                                        @foreach($errors->get('question') as $message)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @endforeach
                                    @endif


                                    <div>
                                        <label class="col-md-4 control-label">Respuestas</label>
                                    </div>

                                    <div class="container">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radios"
                                                   id="radios1" value="checked">
                                            <input class="form-control" id="answer1" name="answer1" value="{{ old('description') }}">
                                            <br>
                                            @if($errors->has('answer'))
                                                @foreach($errors->get('answer') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>

                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radios"
                                                   id="radios2" value="checked">
                                            <input class="form-control" id="answer2" name="answer2">
                                            <br>
                                            @if($errors->has('answer'))
                                                @foreach($errors->get('answer') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radios"
                                                   id="radios3" value="checked">
                                            <input class="form-control" id="answer3" name="answer3">
                                            <br>
                                            @if($errors->has('answer'))
                                                @foreach($errors->get('answer') as $message)
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                            </div>

                            <div class="form-footer" style="text-align: center">
                                <button type="submit" class="btn btn-info">Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection