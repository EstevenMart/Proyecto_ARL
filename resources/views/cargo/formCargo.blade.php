@extends('layout')

@section('title',$cargo->id ? 'Editar Cargo' : 'Nuevo Cargo')
@section('h1' , $cargo->id ? 'Editar Cargo' : 'Nuevo Cargo')

@section('Contenido')

<form action="{{ route('cargo.saveCargo') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $cargo->id }}">

    <div class="mb-3 row">
        <label for="nivelRiesgo" class="col-sm-2 col-form-label">Nivel de Riesgo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nivelRiesgo" name='nivelRiesgo'
            value="{{ @old('nivelRiesgo') ? @old('nivelRiesgo') : $cargo->nivelRiesgo }}">
        </div>
        @error('nivelRiesgo')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="mb-3 row">
        <label for="nombreCargo" class="col-sm-2 col-form-label">Nombre del Cargo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombreCargo" name='nombreCargo'
            value="{{ @old('nombreCargo') ? @old('nombreCargo') : $cargo->nombreCargo }}">
        </div>
        @error('nombreCargo')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="mb-3 row">
        <select name="estado" value="{{ @old('estado') ? @old('estado') : $cargo->estado}}">
            <option value="{{ @old('estado') ? @old('estado') : $cargo->estado}}">{{ @old('estado') ? @old('estado') : $cargo->estado}}</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
        <label class="label">Estado</label>
      </div>
      @error('estado')
      <p class="text-danger">
          {{ $message }}
      </p>
  @enderror
    </div>
    <div class="mb-3 row">
        <label for="salario" class="col-sm-2 col-form-label">Salario</label>
        <div class="col-sm-10">
            <input type="numeric" class="form-control" id="salario" name='salario'
            value="{{ @old('salario') ? @old('salario') : $cargo->salario }}">
        </div>
        @error('salario')
        <p class="text-danger">
            {{ $message }}
        </p>
        @enderror
    </div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/cargos" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
    @endsection
