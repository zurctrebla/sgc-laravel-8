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
                <a href="{{ route('roles.index', $role->id) }}" class="btn btn-outline-info btn-sm">Listar</a>
                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                <a href="{{-- {{ route('roles.edit', $role->id) }} --}}" class="btn btn-outline-danger btn-sm">Apagar</a>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    <a href="{{ route('roles.index', $role->id) }}" class="dropdown-item">Listar</a>
                    <a href="{{ route('roles.edit', $role->id) }}" class="dropdown-item">Editar</a>
                    <a href="{{-- {{ route('roles.edit', $role->id) }} --}}" class="dropdown-item">Apagar</a>
                </div>
            </div>
        </ol>
      </div>
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
                        <h3>{{ $role->name }}</h3>
                        <table>
                            <tr>
                                <th><?= __('ID') ?></th>
                                <td>{{ $role->id }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Nome') ?></th>
                                <td>{{ $role->name }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Data') ?></th>
                                <td>{{ date('d/m/Y', strtotime($role->created_at) )}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
@endsection

