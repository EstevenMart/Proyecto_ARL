@extends('layout')

@section('title',$mecanismo->id ? 'Editar Mecanismo' : 'Nuevo Mecanismo')
@section('h1' , $mecanismo->id ? 'Editar Mecanismo' : 'Nuevo Mecanismo')

@section('Contenido')

<form action="{{ route('mecanismo.saveMecanismo') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $mecanismo->id }}">

    <div class="mb-3 row">
        <label for="denominacionMecanismo" class="col-sm-2 col-form-label">Denominacion Mecanismo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="denominacionMecanismo" name='denominacionMecanismo'
            value="{{ @old('denominacionMecanismo') ? @old('denominacionMecanismo') : $mecanismo->denominacionMecanismo }}">
        </div>
        @error('denominacionMecanismo')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/mecanismos" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
