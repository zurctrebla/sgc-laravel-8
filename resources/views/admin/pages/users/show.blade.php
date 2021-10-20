@extends('adminlte::page')

@section('title', 'Visualizar')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3>Visualizar</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <span class="d-none d-md-block">
                <a href="{{ route('users.index') }}" class="btn btn-outline-info btn-sm">Listar</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning btn-sm">Editar</a>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-info btn-sm">Listar</a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                </div>
            </div>
        </ol>
      </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Visualizar</h3>
            </div>
            <div class="card-body">
                <div class="column-responsive column-80">
                    <div class="inputs view content">
                        <table>
                            <tr>
                                <th><?= __('Nome: ') ?></th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th><?= __('E-mail: ') ?></th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Celular') ?></th>
                                <td>{{ ($user->phone->number ?? '') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

