@extends('adminlte::page')

@section('title', "Editar a Função {$role->name}")

@section('content_header')
    <h1>Editar a Função {{ $role->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="class card-board">
            <form action="{{ route('roles.update', $role->id) }}" class="form" method="POST">
                @method('PUT')
                @include('admin.pages.roles._partials.form')
            </form>
        </div>
    </div>
@endsection
