@extends('layout')
@section('title' , 'Accidentes')
@section('h1' , 'Accidentes')
@section('Contenido')

{{-- <a href=" {{route('accidente.createAccidente')}} " class="btn btn-primary">Nuevo Accidente</a>
 --}}

@if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif
@if(Session::has('messa'))
    <p class="text-primary">{{ Session::get('messa') }}</p>
@endif
</table>
<div class="row">

<div class="col-12 col-md-12 col-lg-12">

        <div class="card card-danger">
        <div class="card-header">
            <h4>Tabla de Accidentes</h4>
            <div class="card-header-form">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Buscar">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
        <tr>
            <th>
                <div class="custom-checkbox custom-control">
                  <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                  <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                </div>
              </th>
            <th>Tipo Accidente</th>
            <th>Fecha Hora</th>
            <th>Sitio</th>
            <th>Descripcion</th>
            <th>Ver más</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ( $listAccidente as $accidente )
            <tr>
                <td class="p-0 text-center">
                    <div class="custom-checkbox custom-control">
                      <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                      <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                    </div>
                  </td>
                <td>{{$accidente->tipoaccidente}}</td>
                <td>{{$accidente->fechaHora}}</td>
                <td>{{$accidente->sitio_id}}</td>
                <td>{{$accidente->descripcion}}</td>

                <td>  <a href="{{route('accidente.findAccidente', ['id'=> $accidente->id])}}">  <i class="fas fa-search"></a></i></td>
                <td>
                     <a href="{{ route('accidente.editAccidente', ['id'=> $accidente->id]) }}" class="btn btn-warning">Editar</a>
                   {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
            <ul class="pagination mb-0">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
</div>
</div>

@endsection


@section('JS')
<script src="{{ asset('/js/components-table.js') }}"></script>
@endsection
