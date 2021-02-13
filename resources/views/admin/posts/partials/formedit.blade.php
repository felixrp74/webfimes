<div class="form-group">
    {!! Form::label('name', 'nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingresa publicacion / evento', 'autocomplete' => 'off']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug',null, ['class' => 'form-control', 'placeholder' => 'ingresa slug', 'readonly']) !!}

    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
     
    @error('category_id')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">etiquetas</p>

    @foreach ($tags as $tag)

        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, true) !!}
            {{-- {!! Form::hidden('tags[]', $tag->id, true) !!} --}}
            {{$tag->name}}
        </label>

    @endforeach

    
    @error('tags')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror
    
</div>

<div class="form-group">
    <p class="font-weight-bold">estado</p>

    {{-- <label for="">
        {!! Form::radio('status', 1) !!}
        borrador
    </label> --}}

    <label for="">
        {!! Form::radio('status', 2, true) !!}
        publicado
    </label>

    @error('status')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

{{-- image --}}
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper"> 
            {{-- @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
            @endisset --}}
            <img id="picture" src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" alt="">
        </div> 
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('golosa', 'Imagen para publicacion') !!}
            {!! Form::file('golosa', ['class' => 'form-control-file']) !!}
        </div>
        <p>Sube imagenes .png; .jpeg; .jpg</p>
    </div>
</div>

 
{{-- file --}}
<div class="row mb-3">
    <div class="col">
        <div class="file-wrapper"> 

            @isset ($post->file)
                <iframe id="pdf" src="{{Storage::url($post->file->url)}}" frameborder="0"></iframe>
            @else
            @endisset
            <iframe id="pdf" src="/storage/files/archivo.pdf" frameborder="0"></iframe>                
        </div> 
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('documento', 'Documento para publicacion') !!}
            {!! Form::file('documento', ['class' => 'form-control-file']) !!}
        </div>
        <p>Sube imagen .pdf; .docx; .xlss</p>
    </div>
</div>



{{-- Lugar Ciudad  --}}
<div class="form-group">
    {!! Form::label('extract', 'Responsable del evento: NOMBRE - CELULAR - EMAIL') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Ing. Gerardo - 98723467 - gerar@est.unap.edu.pe']) !!}
    
    @error('extract')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body', 'Resumen del evento y fecha') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Concurso de tesis desde el 15 mayo 2021 hasta 20 mayo 2021.']) !!}
    @error('extract')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>


