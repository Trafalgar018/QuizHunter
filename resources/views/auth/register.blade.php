@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 70px">

        <div class="signup-form-container">

            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}


                <div class="form-header">
                    <h3 class="form-title"><i class="fa fa-user"></i>Registro</h3>

                    <div class="pull-right">
                        <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                    </div>

                </div>

                <div class="form-body">

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="row">

                        <div class="form-group col-lg-6{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-grou col-lg-6">
                            <div class="input-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir Contraseña" required>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-info">
                        <span class="glyphicon glyphicon-log-in"></span> Enviar
                    </button>
                </div>


            </form>

        </div>

    </div>

@endsection
