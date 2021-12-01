
@extends('layout')
@section('title' , 'Chat')
@section('h1' , 'Chat')

@section('CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('Contenido')

    @livewire('chat-form')
    @livewire('chat-list')

@endsection
