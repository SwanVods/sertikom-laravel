@extends('adminlte::page')

@section('title', 'Dashboard - Edit')

@section('content_header')
    <h1>Update</h1>
@stop

@section('content')
    <x-adminlte-card title="Before : {{$name}}">
        <form method="post" action="{{route('update', $id)}}">
            @csrf
            <x-adminlte-input name="name"/>
            <x-adminlte-button label="Tambahkan" type="submit">
            </x-adminlte-button>
        </form>

    </x-adminlte-card>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop