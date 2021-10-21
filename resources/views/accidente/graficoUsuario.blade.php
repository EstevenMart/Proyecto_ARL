<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    ...
    {{-- ChartScript --}}
    @if($usersChart)
    {!! $usersChart->script() !!}
    @endif
    <title>Document</title>
</head>
<body>
    <h1>Users Graphs</h1>

<div style="width: 50%">
    {!! $usersChart->container() !!}
</div>

<script>
    <h1>Users Graphs</h1>

<div style="width: 50%">
    {!! $usersChart->container() !!}
</div>
</script>
</body>
</html>

{{-- <a href=" {{route('usuario.formUsuario')}} " class="btn btn-primary">Nuevo Usuario</a> --}}


