@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>EDITAR PUBLICACION</h1>
@stop
 

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'files' => true, 'method' => 'put']) !!}
            {{-- {!! Form::model($post, ['route' => ['admin.posts.update', $post], 'enctype' => 'multipart/form-data', 'method' => 'put']) !!} --}}
            {{-- {{$post->file->url}} --}}
            <br>
            {{-- {{Storage::url($post->file->url) }} --}}
                {{-- @include('admin.posts.partials.form') --}}
                @include('admin.posts.partials.form')
                

                {!! Form::submit('actualizar', ['class' => 'btn btn-primary'])  !!} 


            {!! Form::close() !!}
        </div>
    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56%;

        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .file-wrapper{
            position: relative;
            padding-bottom: 56%; 
        }
        .file-wrapper iframe{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        //Cambiar imagen
        document.getElementById("golosa").addEventListener('change', cambiarImagen);
        document.getElementById("documento").addEventListener('change', cambiarDocumento);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }

        function cambiarDocumento(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("pdf").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }

    </script>
@stop