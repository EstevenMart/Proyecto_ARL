@extends('layout')
@section('title','permisos' )
@section('h1' , 'permisos')
@section('Contenido')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Permisos</h4>
              <div class="card-header-form">
                <a href=" {{route('permisos.create')}} " class="btn btn-primary">Nuevo perimisos</a>
              </div>
              </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">



 </div>
            </div>
            <div class="card-body p-0">
            <div class="table-responsive">

<table class="table table-striped table-md"  id="search">
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
                      @endforeach
                      
            </tr>
    
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section('JS')
<script src="{{ asset('/js/components-table.js') }}"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready( function () {
  var table = $('#search').DataTable({
    language: {
      url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json'
    },
  });
} );
</script>
@endsection

