@extends('adminlte::page')

@section('title', 'Destinos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{route('destinies.index') }}" class="active">Destinos</a></li>
    </ol>
    <h1>Destinos<a href="{{ route('destinies.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('destinies.search') }}" method="POST" class="form form-inline">
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
                        <th width="250">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($destinies as $destiny)
                        <tr>
                            <td>
                                {{ $destiny->name }}
                            </td>
                            <td style="width=10px;">
                                <a href="{{-- {{ route('details.guests.index', $guest->id) }} --}}" class="btn btn-primary">Detalhes</a>
                                <a href="{{ route('destinies.edit', $destiny->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ route('destinies.show', $destiny->id) }}" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <div class="card-footer">
                    @if (isset($filters))
                    {!! $destinies->appends($filters)->links() !!}
                    @else
                        {!! $destinies->links() !!}
                    @endif
                </div>
        </div>
    <div>
@stop
