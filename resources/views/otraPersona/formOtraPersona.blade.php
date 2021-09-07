@extends('layout')

@section('title',$otraPersona->id ? 'Editar otraPersona' : 'Nuevo otraPersona')
@section('h1' , $otraPersona->id ? 'Editar otraPersona' : 'Nuevo otraPersona')

@section('Contenido')

<form action="{{ route('otraPersona.saveOtraPersona') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $otraPersona->id }}">

    <div class="mb-3 row">
        <label for="tipoDocumento" class="col-sm-2 col-form-label">Tipo de documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tipoDocumento" name='tipoDocumento'
            value="{{ @old('tipoDocumento') ? @old('tipoDocumento') : $otraPersona->tipoDocumento }}">
        </div>
        @error('tipoDocumento')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="numeroDocumento" class="col-sm-2 col-form-label">Numero de documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="numeroDocumento" name='numeroDocumento'
            value="{{ @old('numeroDocumento') ? @old('numeroDocumento') : $otraPersona->numeroDocumento }}">
        </div>
        @error('numeroDocumento')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="cargo" class="col-sm-2 col-form-label">Cargo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cargo" name='cargo'
            value="{{ @old('cargo') ? @old('cargo') : $otraPersona->cargo }}">
        </div>
        @error('cargo')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="accidente_id" class="col-sm-2 col-form-label">Accidente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="accidente_id" name='accidente_id'
            value="{{ @old('accidente_id') ? @old('accidente_id') : $otraPersona->accidente_id }}">
        </div>
        @error('accidente_id')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>



    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/sitios" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
