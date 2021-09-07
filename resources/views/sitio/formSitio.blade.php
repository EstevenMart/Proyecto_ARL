@extends('layout')

@section('title',$sitio->id ? 'Editar sitio' : 'Nuevo sitio')
@section('h1' , $sitio->id ? 'Editar sitio' : 'Nuevo sitio')

@section('Contenido')

<form action="{{ route('sitio.saveSitio') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $sitio->id }}">

    <div class="mb-3 row">
        <label for="denominacionSitio" class="col-sm-2 col-form-label">Denominacion Agente Accidente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="denominacionSitio" name='denominacionSitio'
            value="{{ @old('denominacionSitio') ? @old('denominacionSitio') : $sitio->denominacionSitio }}">
        </div>
        @error('denominacionSitio')
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
