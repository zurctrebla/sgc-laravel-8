@extends('adminlte::page')

@section('title', 'Editar Destino')

@section('content_header')
    <h1>Editar Destino</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Editar Destino</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('destinies.update', $destiny->id) }}" class="form" method="POST">
                    @csrf
                    @method('PUT')
                    @include('admin.pages.destinies._partials.form')
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
