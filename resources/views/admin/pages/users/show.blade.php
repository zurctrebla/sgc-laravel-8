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
                                <th><?= __('Nacionalidade') ?></th>
                                <td>{{ ($user->complement->nacionality ?? '') }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Estado') ?></th>
                                <td>{{ ($user->complement->state ?? '') }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Nascimento') ?></th>
                                <td>{{ /* ( date('d/m/Y', strtotime($user->complement->birth)) */ ($user->complement->birth ??  '') }}</td>
                            </tr>
                            <tr>
                                <th><?= __('CPF') ?></th>
                                <td>{{ ($user->complement->cpf ?? '') }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Quadra') ?></th>
                                <td>{{ ($user->complement->block ?? '') }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Lote') ?></th>
                                <td>{{ ($user->complement->lot ?? '') }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Casa') ?></th>
                                <td>{{ ($user->complement->house ?? '') }}</td>
                            </tr>
                            <tr>
                                <th><?= __('Residentes') ?></th>
                                <td>
                                    @foreach ($user->relatives as $key => $relative)
                                    {{ "Residente " . ($key +1) . ' ' . ($relative->name) . ' ' . ($relative->relationship) }} <br>
                                @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th><?= __('Veiculos') ?></th>
                                <td>
                                    @foreach ($user->vehicles as $key => $vehicle)
                                    {{ "Veículo " . ($key +1) . ' ' .($vehicle->type) . ' ' . ($vehicle->plate) . ' ' . ($vehicle->color) }} <br>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

