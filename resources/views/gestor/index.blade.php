@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop

@section('content')
    {{ $slot ?? '' }}
@stop

@section('css')
    @livewireStyles
@stop

@section('js')
    @livewireScripts
@stop