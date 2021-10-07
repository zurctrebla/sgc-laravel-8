@extends('adminlte::page')

@section('title', "Detalhes do visitante {$guest->name}")

@section('content_header')
    <h1><b>Detalhes do visitante</b>{{ $guest->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $guest->name }}
                </li>
            </ul>
            <form action="{{ route('guests.destroy', $guest->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">DELETAR O VISITANTE {{ $guest->name }}</button>
            </form>
        </div>
    <div>
@endsection
