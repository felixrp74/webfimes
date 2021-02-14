<div class="card">
    {{-- buscador --}}
    <div class="card-header">
        <input wire:model = "search" class="form-control" placeholder="ingrese el post / evento" type="text">
    </div>

    @if ($posts->count())
        <div class="card-body">
            <table class="table table-stripped">
                
                <thead>
                    <tr>
                        <th>reciente</th>
                        <th>name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr> 
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->name}}</td>
                            <td with='10px'><a class="btn btn-primary" href="{{route('admin.posts.edit', compact('post'))}}">Editar</a></td>
                            {{-- <td with='10px'><a class="btn btn-primary" href="/">Ver</a></td> --}}
                            <td with='10px'>
                                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
     
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
        
        <div class="card-footer">
            {{$posts->links()}}
        </div>
        
    @else
        <div class="card-body">
            <strong class="">No hay registro ...</strong>
        </div>
    @endif
    
</div>
