<div>

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
        
        <div class="container">
            <input wire:model = "search" class="form-control" placeholder="buscar por nombre" type="text">

        </div>

        @if ($users->count())
            {{-- cuerpo tabla --}}
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre responsable</th>
                            <th>Email</th>
                            <th>Escuela Profesional</th> 
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

            <div class="card-footer">
                {{$users->links()}}
            </div> 
            
        @else
            <div class="card-body">
                <h4>No se tiene registro en la BASE DATOS...</h4>

            </div>
        @endif


    </div>













</div>
