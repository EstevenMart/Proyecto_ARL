@extends('layout')

@section('Contenido')

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Admin</h4>
              </div>
              <div class="card-body">
                10
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>News</h4>
              </div>
              <div class="card-body">
                42
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Reports</h4>
              </div>
              <div class="card-body">
                1,201
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Online Users</h4>
              </div>
              <div class="card-body">
                47
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Usuarios</h4>
            <div class="card-header-action">
              <a href="#" class="btn btn-primary">ver todos</a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table id="search" class="table table-striped table-md"  >
                <thead>
                  <tr>
                    <th></th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Numero de documento</th>
                    <th>Estado</th>
                    <th>Ver más</th>
                    <th>Acciones</th>
        
                </tr>
                </thead>
                <tbody>
                  @foreach ( $listUsuario as $usuario )
                  <tr>
                    <td> <div class="card profile-widget">
                      <div class="profile-widget-header">
                          <img src="{{asset($usuario->imagen) }}" alt="perfil" class="rounded-circle profile-widget-picture"  > </td>
                      </div>
              </div>
                          <td>
                      {{$usuario->name}}</div>
                      </td>
                      <td> {{$usuario->apellido}}</td>
                    <td>{{$usuario->numeroDocumento}}</td>
                    <td> @if($usuario->estado === "Inactivo")
                      <div class="badge badge-danger ">Inactivo</div>
                          @else
                          <div class="badge badge-success ">Activo</div>
                      @endif
                    </td>
                    <td>  <a href="{{route('usuario.findUsuario', ['id'=> $usuario->id])}}">  <i class="fas fa-search"></a></i></td>
                    <td>
                         <a href=" {{ route('usuario.editUsuario', ['id'=> $usuario->id]) }}" class="btn btn-outline-primary" ><i class="far fa-edit"></i></a>
                         
                    </td>
                  
            @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Accidentes</h4>
            <div class="card-header-action">
              <a href="#" class="btn btn-primary">ver todos</a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table id="search" class="table table-striped table-md"  >
                <thead>
                    <tr>
                    <th>
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                          <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                        </div>
                      </th>
                      <th>Usuario</th>
                    <th>Tipo Accidente</th>
                    <th>Fecha Hora</th>
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
                          <td>@foreach ($accidente->usuarios as $users)
              {{ $users->name }} {{ $users->apellido }}
           @endforeach </td>
                        <td>{{$accidente->tipoaccidente}}</td>
                        <td>{{$accidente->fechaHora}}</td>
        
        
            <td>{{$accidente->descripcion}}</td>
        
        
                        <td>  <a href="{{route('accidente.findAccidente', ['id'=> $accidente->id])}}">  <i class="fas fa-search"></a></i></td>
                        <td>
                             <a href="{{ route('accidente.editAccidente', ['id'=> $accidente->id]) }}" class="btn btn-outline-primary" ><i class="far fa-edit"></i></a>
                           {{--  <a href="{{ route('product.delete' , ['id'=> $product->id]) }}" class="btn btn-danger">Borrar</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row" id="analisis_de_accidentes">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Analisis de accidentes</h4>
              <div class="card-header-action">
                <div class="btn-group">
                  <a href="#" class="btn btn-primary">Week</a>
                  <a href="#" class="btn">Month</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lugares donde se evidencia Accidentes</h4>
                    <canvas id="pieChart"></canvas>
                
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Accidentes leve/Grave</h4>
                    <canvas id="doughnutChart"></canvas>
                  </div>
              </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Accidentes registrados</h4>
                    <canvas id="areaChart"></canvas>
                  </div>
                </div>
              </div>
            
              
              {{-- <div class="col-lg-12 grid-margin grid-margin-lg-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Indice de alto riesgo</h4>
                    <canvas id="doughnutChart"></canvas>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">

              <h4>Recent Activities</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-unstyled-border">
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right text-primary">Now</div>
                    <div class="media-title">Farhan A Mujib</div>
                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">12m</div>
                    <div class="media-title">Ujang Maman</div>
                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">17m</div>
                    <div class="media-title">Rizal Fakhri</div>
                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                  </div>
                </li>
                <li class="media">
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                  <div class="media-body">
                    <div class="float-right">21m</div>
                    <div class="media-title">Alfa Zulkarnain</div>
                    <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                  </div>
                </li>
              </ul>
              <div class="text-center pt-1 pb-1">
                <a href="#" class="btn btn-primary btn-lg btn-round">
                  View All
                </a>
              </div>

            </div>
          </div>
        </div> --}}
      </div>
      
      
    

@endsection
@section('JS')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src=" {{ asset('/js/chart.js') }}"></script>
    <script>
      var _ydata=JSON.parse('{!! json_encode($months) !!}');
      var _xdata=JSON.parse('{!! json_encode($mounthCount) !!}');
      var Sitio=JSON.parse('{!! json_encode($sitio) !!}');
      var sitioContar=JSON.parse('{!! json_encode($sitioContar) !!}');
      
    </script>
    
@endsection
