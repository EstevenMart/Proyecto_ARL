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
                    <a href="{{ route('descargarPDF') }}" class="btn btn-primary" >Imprimir</a>
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
      <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-body pt-2 pb-2">
              <div id="myWeather">Please wait</div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Authors</h4>
            </div>
            <div class="card-body">
              <div class="row pb-2">
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item mb-0">
                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="img-fluid" data-toggle="tooltip" title="Alfa Zulkarnain">
                    <div class="avatar-badge" title="Editor" data-toggle="tooltip"><i class="fas fa-wrench"></i></div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item mb-0">
                    <img alt="image" src="../assets/img/avatar/avatar-4.png" class="img-fluid" data-toggle="tooltip" title="Egi Ferdian">
                    <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item mb-0">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="img-fluid" data-toggle="tooltip" title="Jaka Ramadhan">
                    <div class="avatar-badge" title="Author" data-toggle="tooltip"><i class="fas fa-pencil-alt"></i></div>
                  </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 mb-4 mb-md-0">
                  <div class="avatar-item mb-0">
                    <img alt="image" src="../assets/img/avatar/avatar-2.png" class="img-fluid" data-toggle="tooltip" title="Ryan">
                    <div class="avatar-badge" title="Admin" data-toggle="tooltip"><i class="fas fa-cog"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4>Referral URL</h4>
            </div>
            <div class="card-body">
              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">2,100</div>
                <div class="font-weight-bold mb-1">Google</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                <div class="font-weight-bold mb-1">Facebook</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                <div class="font-weight-bold mb-1">Bing</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">884</div>
                <div class="font-weight-bold mb-1">Yahoo</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">473</div>
                <div class="font-weight-bold mb-1">Kodinger</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="mb-4">
                <div class="text-small float-right font-weight-bold text-muted">418</div>
                <div class="font-weight-bold mb-1">Multinity</div>
                <div class="progress" data-height="3">
                  <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4>Popular Browser</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col text-center">
                  <div class="browser browser-chrome"></div>
                  <div class="mt-2 font-weight-bold">Chrome</div>
                  <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 48%</div>
                </div>
                <div class="col text-center">
                  <div class="browser browser-firefox"></div>
                  <div class="mt-2 font-weight-bold">Firefox</div>
                  <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 26%</div>
                </div>
                <div class="col text-center">
                  <div class="browser browser-safari"></div>
                  <div class="mt-2 font-weight-bold">Safari</div>
                  <div class="text-muted text-small"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 14%</div>
                </div>
                <div class="col text-center">
                  <div class="browser browser-opera"></div>
                  <div class="mt-2 font-weight-bold">Opera</div>
                  <div class="text-muted text-small">7%</div>
                </div>
                <div class="col text-center">
                  <div class="browser browser-internet-explorer"></div>
                  <div class="mt-2 font-weight-bold">IE</div>
                  <div class="text-muted text-small"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 5%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card mt-sm-5 mt-md-0">
            <div class="card-header">
              <h4>Visitors</h4>
            </div>
            <div class="card-body">
              <div id="visitorMap"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="card">
            <div class="card-header">
              <h4>This Week Stats</h4>
              <div class="card-header-action">
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Filter</a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Electronic</a>
                    <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> T-shirt</a>
                    <a href="#" class="dropdown-item has-icon"><i class="far fa-circle"></i> Hat</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View All</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="summary">
                <div class="summary-info">
                  <h4>$1,053</h4>

                  <div class="text-muted">Sold 3 items on 2 customers</div>
                  <div class="d-block mt-2">
                    <a href="#">View All</a>
                  </div>
                </div>
                <div class="summary-item">
                  <h6>Item List <span class="text-muted">(3 Items)</span></h6>
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <a href="#">
                        <img class="mr-3 rounded" width="50" src="../assets/img/products/product-1-50.png" alt="product">
                      </a>
                      <div class="media-body">
                        <div class="media-right">$405</div>
                        <div class="media-title"><a href="#">PlayStation 9</a></div>
                        <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday</div>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#">
                        <img class="mr-3 rounded" width="50" src="../assets/img/products/product-2-50.png" alt="product">
                      </a>
                      <div class="media-body">
                        <div class="media-right">$499</div>
                        <div class="media-title"><a href="#">RocketZ</a></div>
                        <div class="text-muted text-small">by <a href="#">Hasan Basri</a> <div class="bullet"></div> Sunday
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <a href="#">
                        <img class="mr-3 rounded" width="50" src="../assets/img/products/product-3-50.png" alt="product">
                      </a>
                      <div class="media-body">
                        <div class="media-right">$149</div>
                        <div class="media-title"><a href="#">Xiaomay Readme 4.0</a></div>
                        <div class="text-muted text-small">by <a href="#">Kusnaedi</a> <div class="bullet"></div> Tuesday
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4 class="d-inline">Tasks</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-primary">View All</a>
              </div>
            </div>
            <div class="card-body">
              <ul class="list-unstyled list-unstyled-border">
                <li class="media">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cbx-1">
                    <label class="custom-control-label" for="cbx-1"></label>
                  </div>
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                  <div class="media-body">
                    <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                    <h6 class="media-title"><a href="#">Redesign header</a></h6>
                    <div class="text-small text-muted">Alfa Zulkarnain <div class="bullet"></div> <span class="text-primary">Now</span></div>
                  </div>
                </li>
                <li class="media">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cbx-2" checked="">
                    <label class="custom-control-label" for="cbx-2"></label>
                  </div>
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-5.png" alt="avatar">
                  <div class="media-body">
                    <div class="badge badge-pill badge-primary mb-1 float-right">Completed</div>
                    <h6 class="media-title"><a href="#">Add a new component</a></h6>
                    <div class="text-small text-muted">Serj Tankian <div class="bullet"></div> 4 Min</div>
                  </div>
                </li>
                <li class="media">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cbx-3" >
                    <label class="custom-control-label" for="cbx-3"></label>
                  </div>
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                  <div class="media-body">
                    <div class="badge badge-pill badge-warning mb-1 float-right">Progress</div>
                    <h6 class="media-title"><a href="#">Fix modal window</a></h6>
                    <div class="text-small text-muted">Ujang Maman <div class="bullet"></div> 8 Min</div>
                  </div>
                </li>
                <li class="media">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cbx-4">
                    <label class="custom-control-label" for="cbx-4"></label>
                  </div>
                  <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                  <div class="media-body">
                    <div class="badge badge-pill badge-danger mb-1 float-right">Not Finished</div>
                    <h6 class="media-title"><a href="#">Remove unwanted classes</a></h6>
                    <div class="text-small text-muted">Farhan A Mujib <div class="bullet"></div> 21 Min</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-12 col-12 col-sm-12">
          <form method="post" class="needs-validation" novalidate="">
            <div class="card">
              <div class="card-header">
                <h4>Quick Draft</h4>
              </div>
              <div class="card-body pb-0">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" required>
                  <div class="invalid-feedback">
                    Please fill in the title
                  </div>
                </div>
                <div class="form-group">
                  <label>Content</label>
                  <textarea class="summernote-simple"></textarea>
                </div>
              </div>
              <div class="card-footer pt-0">
                <button class="btn btn-primary">Save Draft</button>
              </div>
            </div>
          </form>
        </div>
        
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
