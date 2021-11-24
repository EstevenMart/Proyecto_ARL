@extends('layout')
@section('title' , 'Sitio')
@section('h1' , 'Sitio')
@section('Contenido')

<a href=" {{route('permisos.create')}} " class="btn btn-primary">Nuevo perimisos</a>


@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif


<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>guard_name</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($permisos as $permiso)
            
       
        
           <tr>
                <td>{{$permiso->id}}</td>
                <td>{{$permiso->name}}</td>
                <td>{{$permiso->guard_name}}</td>
                <td>
                    <a href="{{ route('permisos.show', $permiso->id) }}" class="btn btn-info"><i
                        class="material-icons">person</i></a>
                        <a href="{{ route('permisos.edit', $permiso->id) }}" class="btn btn-warning"><i
                            class="material-icons">edit</i></a>
                            <form action="{{ route('permisos.destroy', $permiso->id) }}" method="post"
                                onsubmit="return confirm('areYouSure')" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" rel="tooltip" class="btn btn-danger">
                                  <i class="material-icons">close</i>
                                </button>
                              </form>
                   </td>
                 
            </tr>
        @endforeach 
    </tbody>
</table>
@endsection

