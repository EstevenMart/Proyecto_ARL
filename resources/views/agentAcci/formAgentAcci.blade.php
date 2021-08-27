@extends('layout')

@section('title',$agentAcci->id ? 'Editar Agente Accidente' : 'Nuevo Agente Accidente')
@section('h1' , $agentAcci->id ? 'Editar Agente Accidente' : 'Nuevo Agente Accidente')

@section('content')

<form action="{{ route('agentAcci.saveAgentAcci') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $agentAcci->id }}">

    <div class="mb-3 row">
        <label for="denominacionAgenteAccidente" class="col-sm-2 col-form-label">Denominacion Agente Accidente</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="denominacionAgenteAccidente" name='denominacionAgenteAccidente'
            value="{{ @old('denominacionAgenteAccidente') ? @old('denominacionAgenteAccidente') : $agentAcci->denominacionAgenteAccidente }}">
        </div>
        @error('denominacionAgenteAccidente')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/agentAccis" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
