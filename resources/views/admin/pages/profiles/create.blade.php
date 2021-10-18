@extends('adminlte::page')

@section('title', 'Cadastrar Perfil do Usuário')

@section('content_header')
    <h1>Cadastrar Perfil do usuário</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Perfil do usuário</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('profiles.store') }}" class="form" method="POST">
                    @csrf
                    @include('admin.pages.profiles._partials.form')
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection
