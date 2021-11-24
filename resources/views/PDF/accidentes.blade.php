 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tabla de Accidentes</title>
</head>
<body>
  
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <center> 
         <img src="https://lh3.googleusercontent.com/zqz2-__h9cFr-Ex7D2RhpSPUucVeWB6fKx57xPt4WS7UM9ObcJJbMcPOcT2YwqgqwYlBkA=s160"  class="d-inline-block align-top" alt="">
    </center> 
    </a>
  </nav>
    <h1 class="h1">Tabla de Accidentes</h1>

    <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Tipo Accidente</th>
                    <th scope="col">Fecha Hora</th>
                    <th scope="col">Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $accidentes as $accidente )
                    <tr>
                            <td scope="row">@foreach ($accidente->usuarios as $users)
                                {{ $users->name }} {{ $users->apellido }}
                             @endforeach </td>
                            <td>{{$accidente->tipoaccidente}}</td>
                            <td>{{$accidente->fechaHora}}</td>

                        <td>{{$accidente->descripcion}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


</body>
</html>
          

