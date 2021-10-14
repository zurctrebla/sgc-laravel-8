@extends('adminlte::page')

@section('title', 'Cadastrar Nova Função')

@section('content_header')
    <h1>Cadastrar Função</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Nova Função</h3>
          </div>
          <div class="card-body">
            <form action="{{ route('roles.store') }}" class="form" method="POST">
                @csrf
                @include('admin.pages.roles._partials.form')
            </form>
          </div>
        </div>
    </div>

@endsection
