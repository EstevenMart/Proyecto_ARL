@extends('layout')

@section('title',$departamento->id ? 'Editar departamento' : 'Nuevo departamento')
@section('h1' , $departamento->id ? 'Editar departamento' : 'Nuevo departamento')

@section('Contenido')

<form action="{{ route('departamento.saveDepartamento') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $departamento->id }}">

    <div class="mb-3 row">
        <label for="denominacionDepartamento" class="col-sm-2 col-form-label">Denominacion departamento</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="denominacionDepartamento" name='denominacionDepartamento'
            value="{{ @old('denominacionDepartamento') ? @old('denominacionDepartamento') : $departamento->denominacionDepartamento }}">
        </div>
        @error('denominacionDepartamento')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/departamentos" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
    @endsection