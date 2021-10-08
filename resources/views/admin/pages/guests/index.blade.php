@extends('adminlte::page')

@section('title', 'Visitantes')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('guests.index') }}" class="active">Visitantes</a></li>
    </ol>
    <h1>Visitantes<a href="{{ route('guests.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('guests.search') }}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="300">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guests as $guest)
                        <tr>
                            <td>
                                {{ $guest->name }}
                            </td>
                            <td style="width=10px;">
                                <a href="{{ route('guests.qrcode', $guest->id) }}" class="btn btn-default"><i class="fas fa-qrcode"></i></a>
                                <a href="{{-- {{ route('details.guests.index', $guest->id) }} --}}" class="btn btn-primary">Detalhes</a>
                                <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('guests.show', $guest->id) }}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <div class="card-footer">
                    @if (isset($filters))
                    {!! $guests->appends($filters)->links() !!}
                    @else
                        {!! $guests->links() !!}
                    @endif
                </div>
        </div>
    <div>
@stop
