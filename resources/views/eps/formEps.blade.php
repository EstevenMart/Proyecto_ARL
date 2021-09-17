@extends('layout')

@section('title',$eps->id ? 'Editar eps' : 'Nuevo eps')
@section('h1' , $eps->id ? 'Editar eps' : 'Nuevo eps')

@section('Contenido')

<form action="{{ route('eps.saveEps') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $eps->id }}">

    <div class="mb-3 row">
        <label for="denominacionEps" class="col-sm-2 col-form-label">Denominacion Eps</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="denominacionEps" name='denominacionEps'
            value="{{ @old('denominacionEps') ? @old('denominacionEps') : $eps->denominacionEps }}">
        </div>
        @error('denominacionEps')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/usuario/formUsuario" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
    @endsection
