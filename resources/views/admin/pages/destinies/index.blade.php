@extends('adminlte::page')

@section('title', 'Setores')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h3>Listar</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{ route('destinies.create') }}" class="btn btn-outline-success btn-sm">Cadastrar</a>
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
              <h3 class="card-title">Setores</h3>
            </div>
            <div class="card-body">
              <table id="destinies" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($destinies as $destiny)
                    <tr>
                        <td>{{ $destiny->name }}</td>
                        <td class="text-center">
                            <span class="d-none d-md-block">
                                <a href="{{ route('destinies.show', $destiny->id) }}" class="btn btn-outline-primary btn-sm">Visualizar</a>
                                <a href="{{ route('destinies.edit', $destiny->id) }}" class="btn btn-outline-warning btn-sm">Editar</a>
                            </span>
                            <div class="dropdown d-block d-md-none">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                    <a href="{{ route('destinies.show', $destiny->id) }}" class="dropdown-item">Visualizar</a>
                                    <a href="{{ route('destinies.edit', $destiny->id) }}" class="dropdown-item">Editar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                {{-- <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Morador</th>
                        <th>Visitante</th>
                        <th>Documento</th>
                        <th>Imagem</th>
                        <th>Data</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </tfoot> --}}
              </table>
            </div>
          </div>
    </div>
@stop
