@extends('adminlte::page')

@section('title', 'Cadastrar Novo Destino')

@section('content_header')
    <h1>Cadastrar Novo Destino</h1>
@stop

@section('content')
    <div class="card">
        <div class="class card-board">
            <form action="{{ route('destinies.store') }}" class="form" method="POST">
                @include('admin.pages.destinies._partials.form')
            </form>
        </div>
    </div>
@endsection
