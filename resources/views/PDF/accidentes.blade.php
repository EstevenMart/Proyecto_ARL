{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Accidente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-striped">
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
                            <td>@foreach ($accidente->usuarios as $users)
                                {{ $users->name }} {{ $users->apellido }}
                             @endforeach </td>
                            <td>{{$accidente->tipoaccidente}}</td>
                            <td>{{$accidente->fechaHora}}</td>


                        <td>{{$accidente->descripcion}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
 --}}
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Tabla de Accidente</title>
 </head>
 <body>
     <h1>Tabla de Accidente</h1>
    <div class="container">
        <table class="table table-striped">
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
                            <td>@foreach ($accidente->usuarios as $users)
                                {{ $users->name }} {{ $users->apellido }}
                             @endforeach </td>
                            <td>{{$accidente->tipoaccidente}}</td>
                            <td>{{$accidente->fechaHora}}</td>


                        <td>{{$accidente->descripcion}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 </body>
 </html>
