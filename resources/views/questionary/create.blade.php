@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 70px">
        <div class="signup-form-container">
            <div class="panel-heading" style="margin: 20px">
                <h2>Crear cuestionario</h2>
            </div>
            <div class="panel-body">
                <div class="form-body">


                    <form action="{{ url('/') }}/questionary/create" method="post">
                        {{ csrf_field() }}
                        <label for="title" class="col-md-4 control-label">Título</label>
                        <div class="form-group @if( $errors->has('title'))has-error @endif">
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        </div>
                        @if($errors->has('title'))
                            @foreach($errors->get('title') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif

                        <label for="description" class="col-md-4 control-label">Descripción</label>
                        <div class="form-group @if( $errors->has('description'))has-error @endif">
                            <input type="text" class="form-control" id="description" name="description"
                                   value="{{ old('description') }}">
                        </div>
                        @if($errors->has('description'))
                            @foreach($errors->get('description') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif


                        <label for="tags" class="col-md-4 control-label">Etiquetas</label>
                        <div class="form-group @if( $errors->has('tags'))has-error @endif">
                            <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags') }}">
                        </div>
                        @if($errors->has('tags'))
                            @foreach($errors->get('tags') as $message)
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @endforeach
                        @endif

                        <div class="form-group">
                            <label for="dificult" class="col-md-4 control-label">Dificultad</label>
                            <select class="form-control" id="dificult" name="dificult">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>


                        <div class="panel-body" style="margin: 20px; margin-top: 70px">
                            <h2>Preguntas</h2>
                            <hr style="margin-bottom: 80px">
                        </div>
                        <div class="panel-boy" id="questions">

                            <!-- Formulario de preguntas -->

                            <div class="form-body">
                                <label class="col-md-4 control-label">Pregunta</label>

                                <div class="form-group @if( $errors->has('question'))has-error @endif">

                                    <div class="form-group">

                                        <textarea class="form-control" id="question" name="question"
                                                  rows="3"></textarea>
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
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option2">
                                            <input class="form-control" id="answer1" name="answer1">
                                        </div>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option2">
                                            <input class="form-control" id="answer2" name="answer2">
                                        </div>
                                        <br>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option3">
                                            <input class="form-control" id="answer3" name="answer3">
                                        </div>
                                    </div>
                                </div>

                                <hr style="margin: 70px; background-color: #0f3144">

                                <!-- Fin del formulario de preguntas -->

                            </div>


                            <div class="form-footer" style="text-align: center">
                                <input type="button" id="btAdd" value="Añadir" class="btn btn-info"/>
                            </div>

                            <div class="form-footer" style="margin-top: 50px">
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