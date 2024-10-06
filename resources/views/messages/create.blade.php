@extends('layout')
<h1>Contactos </h1>
@section('contenido')
<h2>Escribime </h2>
@if(session()->has('info'))
    <h3>{{ session('info')}}</h3>
        @else
        @include('messages.form')
    @endif
<hr>
@stop