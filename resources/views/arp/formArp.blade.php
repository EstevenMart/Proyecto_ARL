@extends('layout')

@section('title',$arp->id ? 'Editar arp' : 'Nuevo arp')
@section('h1' , $arp->id ? 'Editar arp' : 'Nuevo arp')

@section('Contenido')

<form action="{{ route('arp.saveArp') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $arp->id }}">

    <div class="mb-3 row">
        <label for="denominacionArp" class="col-sm-2 col-form-label">Denominacion Arp</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="denominacionArp" name='denominacionArp'
            value="{{ @old('denominacionArp') ? @old('denominacionArp') : $arp->denominacionArp }}">
        </div>
        @error('denominacionArp')
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
