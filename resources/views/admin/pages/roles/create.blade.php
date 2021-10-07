@extends('adminlte::page')

@section('title', 'Cadastrar Nova Função')

@section('content_header')
    <h1>Cadastrar Nova Função</h1>
@stop

@section('content')
    <div class="card">
        <div class="class card-board">
            <form action="{{ route('roles.store') }}" class="form" method="POST">
                @include('admin.pages.roles._partials.form')
            </form>
        </div>
    </div>
@endsection
