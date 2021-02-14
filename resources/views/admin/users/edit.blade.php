@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR USUARIO</h1>
@stop

@section('content')
    
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'nombre') !!}
                {!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'ingresa ']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group"> 

                {!! Form::label('email', 'email') !!}
                {!! Form::email('email',$user->email, ['class' => 'form-control', 'placeholder' => 'ingresa email']) !!}

                
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
            <div class="form-group">
                {!! Form::label('escuela', 'escuela profesional ') !!} 
                <br>

                <input type="radio" id="ingenieria-mecanica" name="escuela" value="{{ __('ingenieria-mecanica') }}">
                <label for="ingenieria-mecanica">INGENIERIA MECANICA</label>

                <input type="radio" id="ingenieria-electronica" name="escuela" value="{{ __('ingenieria-electronica') }}">
                <label for="ingenieria-electronica">INGENIERIA ELECTRONICA</label>

                <input type="radio" id="ingenieria-sistemas" name="escuela" value="{{ __('ingenieria-sistemas') }}">
                <label for="ingenieria-sistemas">INGENIERIA SISTEMAS</label>
            </div>

            @foreach ($roles as $role)
                <div class="form-control">
                    <label for="">
                        {!! Form::checkbox('roles[]',$role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>
            @endforeach

            <div class="form-group">
                {!! Form::label('password', 'password') !!}
                {!! Form::password('password',null, ['class' => 'form-control', 'placeholder' => 'ingresa password']) !!}

                
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            {!! Form::submit('Actualizar', ['class' => 'btn btn-info'])  !!}


        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 