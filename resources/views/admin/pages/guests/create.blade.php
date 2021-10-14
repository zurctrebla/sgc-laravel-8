@extends('adminlte::page')

@section('title', 'Cadastrar Novo Visitante')

@section('content_header')
    <h1>Cadastrar Novo Visitante</h1>
@stop

@section('content')
    <div class="card">
        <div class="class card-board">
            <form action="{{ route('guests.store') }}" class="form" method="POST" enctype="multipart/form-data">
                @include('admin.pages.guests._partials.form')
            </form>
        </div>
    </div>

@endsection
