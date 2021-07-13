@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CRUD ADMIN</h1>
@stop

@section('content')
    <x-adminlte-card title="Data Editor Here :D">
        Masukkan data anda disini!
        <form method="post" action="{{route('store')}}">
            @csrf
            <x-adminlte-input name="name"/>
            <x-adminlte-button label="Tambahkan" type="submit"/>
        </form>
        <br>

        @php
        $heads = [
            'ID',
            'Name',
            ['label' => 'Actions', 'no-export' => true, 'width' => 20],
        ];
        @endphp

        <x-adminlte-datatable id="table1" :heads="$heads">
            @foreach($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>
                        <span style="white-space : nowrap">
                            <a href="{{route('edit', $row->id)}}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Update">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                            <form action="{{route('delete', $row->id)}}" style="display: inline">
                                @csrf
                               <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete" type="submit">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
        </x-adminlte-datatable>
    </x-adminlte-card>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop