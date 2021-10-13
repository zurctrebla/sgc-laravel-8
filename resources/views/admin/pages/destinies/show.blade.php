@extends('adminlte::page')

@section('title', "Detalhes da função {$role->name}")

@section('content_header')
    <h1><b>Detalhes do visitante</b>{{ $role->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $role->name }}
                </li>
            </ul>
            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETAR A FUNÇÃO {{ $role->name }}</button>
            </form>
        </div>
    <div>
@endsection
