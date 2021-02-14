@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>LISTA USUARIO</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif


    <div class="card">
        {{-- cabecera tabla --}}
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.users.create')}}">Agregar Usuario</a>
        </div>

        {{-- cuerpo tabla --}}
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>ESCUELA Profesional</th> 
                        <th colspan="2">acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->escuela}}</td>
                            <td><a class="btn btn-info" href="{{route('admin.users.edit', $user)}}">Editar</a></td>
                            <td>
                                <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                    @csrf
                                    @method('delete')                                    

                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop