@extends('layout')

@section('title',$accidente->id ? 'Editar Accidente' : 'Nuevo Accidente')
@section('h1' , $accidente->id ? 'Editar Accidente' : 'Nuevo Accidente')

@section('content')

<form action="{{ route('accidente.saveAccidente') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $accidente->id }}">

    <div class="mb-3 row">
        <label for="tipoaccidente" class="col-sm-2 col-form-label">Tipo Accidente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tipoaccidente" name='tipoaccidente'
            value="{{ @old('tipoaccidente') ? @old('tipoaccidente') : $accidente->tipoaccidente}}">
        </div>
        @error('tipoaccidente')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="fechaHora" class="col-sm-2 col-form-label">Fecha Hora</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fechaHora" name='fechaHora'
            value="{{ @old('fechaHora') ? @old('fechaHora') : $accidente->fechaHora}}">
        </div>
        @error('fechaHora')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="dia" class="col-sm-2 col-form-label">Dia</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="dia" name='dia'
            value="{{ @old('dia') ? @old('dia') : $accidente->dia}}">
        </div>
        @error('dia')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="jornada" class="col-sm-2 col-form-label">Jornada</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jornada" name='jornada'
            value="{{ @old('jornada') ? @old('jornada') : $accidente->jornada}}">
        </div>
        @error('jornada')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="laborHabitual" class="col-sm-2 col-form-label">Labor Habitual</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="laborHabitual" name='laborHabitual'
            value="{{ @old('laborHabitual') ? @old('laborHabitual') : $accidente->laborHabitual}}">
        </div>
        @error('laborHabitual')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="tiempoPA" class="col-sm-2 col-form-label">Tiempo PA</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tiempoPA" name='tiempoPA'
            value="{{ @old('tiempoPA') ? @old('tiempoPA') : $accidente->tiempoPA}}">
        </div>
        @error('tiempoPA')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="cantHoras" class="col-sm-2 col-form-label">Cantidad de Horas</label>
        <div class="col-sm-10">
            <input type="numeric" class="form-control" id="cantHoras" name='cantHoras'
            value="{{ @old('cantHoras') ? @old('cantHoras') : $accidente->cantHoras}}">
        </div>
        @error('cantHoras')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="cantMinutos" class="col-sm-2 col-form-label">Cantidad de Minuto</label>
        <div class="col-sm-10">
            <input type="numeric" class="form-control" id="cantMinutos" name='cantMinutos'
            value="{{ @old('cantMinutos') ? @old('cantMinutos') : $accidente->cantMinutos}}">
        </div>
        @error('cantMinutos')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="empresa" class="col-sm-2 col-form-label">Empresa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="empresa" name='empresa'
            value="{{ @old('empresa') ? @old('empresa') : $accidente->empresa}}">
        </div>
        @error('empresa')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="causaMuerte" class="col-sm-2 col-form-label">Causa de Muerte</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="causaMuerte" name='causaMuerte'
            value="{{ @old('causaMuerte') ? @old('causaMuerte') : $accidente->causaMuerte}}">
        </div>
        @error('causaMuerte')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="descripcion" name='descripcion'
            value="{{ @old('descripcion') ? @old('descripcion') : $accidente->descripcion}}">
        </div>
        @error('descripcion')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="mecanismo_id" class="col-sm-2 col-form-label">Mecanismo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="mecanismo_id" name='mecanismo_id'
            value="{{ @old('mecanismo_id') ? @old('mecanismo_id') : $accidente->mecanismo_id}}">
        </div>
        @error('mecanismo_id')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="agenteAcci_id" class="col-sm-2 col-form-label">Agente Accidente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="agenteAcci_id" name='agenteAcci_id'
            value="{{ @old('agenteAcci_id') ? @old('agenteAcci_id') : $accidente->agenteAcci_id}}">
        </div>
        @error('agenteAcci_id')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>

    <div class="mb-3 row">
        <label for="sitio_id" class="col-sm-2 col-form-label">Sitio</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="sitio_id" name='sitio_id'
            value="{{ @old('sitio_id') ? @old('sitio_id') : $accidente->sitio_id}}">
        </div>
        @error('sitio_id')
            <p class="text-danger">
                {{ $message }}
            </p>
        @enderror
    </div>




    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/accidentes" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
