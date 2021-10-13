@extends('adminlte::page')

@section('title', "Editar o Visitante {$guest->name}")

@section('content_header')
    <h1>Editar o Visitante {{ $guest->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="class card-board">
            <form action="{{ route('guests.update', $guest->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('admin.pages.guests._partials.form')
            </form>
        </div>
    </div>
@endsection
