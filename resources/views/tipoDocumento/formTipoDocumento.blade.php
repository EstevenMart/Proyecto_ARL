@extends('layout')

@section('title',$tipoDocumentos->id ? 'Editar Tipo Documento' : 'Nuevo Tipo Documento')
@section('h1' , $tipoDocumentos->id ? 'Editar Tipo Documento' : 'Nuevo Tipo Documento')

@section('Contenido')

<form action="{{ route('tipoDocumento.saveTipoDocumento') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $tipoDocumentos->id }}">

    <div class="mb-3 row">
        <label for="nombreTipoDocumento" class="col-sm-2 col-form-label">Tipo de Documento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombreTipoDocumento" name='nombreTipoDocumento'
            value="{{ @old('nombreTipoDocumento') ? @old('nombreTipoDocumento') : $tipoDocumentos->nombreTipoDocumento }}">
        </div>
        @error('nombreTipoDocumento')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/tipoDocumentos" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
    @endsection
