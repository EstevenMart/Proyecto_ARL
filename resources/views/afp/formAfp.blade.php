@extends('layout')

@section('title',$afp->id ? 'Editar afp' : 'Nuevo afp')
@section('h1' , $afp->id ? 'Editar afp' : 'Nuevo afp')

@section('Contenido')

<form action="{{ route('afp.saveAfp') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $afp->id }}">

    <div class="mb-3 row">
        <label for="denominacionAfp" class="col-sm-2 col-form-label">Denominacion Afp</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="denominacionAfp" name='denominacionAfp'
            value="{{ @old('denominacionAfp') ? @old('denominacionAfp') : $afp->denominacionAfp }}">
        </div>
        @error('denominacionAfp')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/afps" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
    @endsection