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
                <a href="{{ route('guests.index') }}" class="btn btn-outline-info btn-sm">Listar</a>
                <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-outline-warning btn-sm">Editar</a>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    <a href="{{ route('guests.show', $guest->id) }}" class="btn btn-outline-info btn-sm">Listar</a>
                    <a href="{{ route('guests.edit', $guest->id) }}" class="btn btn-outline-warning btn-sm">Editar</a>
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
                            <th><?= __('Visitante') ?></th>
                            <td>{{ $guest->name }}</td>
                        </tr>
                        <tr>
                            <th><?= __('Documento') ?></th>
                            <td>{{ $guest->document }}</td>
                        </tr>
                        <tr>
                            <th><?= __('Falar com quem:') ?></th>
                            <td>{{ $guest->person }}</td>
                        </tr>
                        <tr>
                            <th><?= __('Setor:') ?></th>
                            <td>{{ $guest->destiny }}</td>
                        </tr>
                        <?php if($guest->company) : ?>
                        <tr>
                            <th><?= __('Empresa:') ?></th>
                            <td>{{ $guest->company }}</td>
                        </tr>
                            <?php endif ?>

                            <?php if($guest->obs) : ?>
                            <tr>
                                <th><?= __('Observação:') ?></th>
                                <td>{{ $guest->obs }}</td>
                            </tr>
                                <?php endif ?>
                        <tr>
                            <th><?= __('Data de Entrada:') ?></th>
                            <td>{{ $guest->start_at }}</td>
                        </tr>
                        <tr>
                            <th><?= __('Data de Saída:') ?></th>
                            <td>{{ $guest->expires_at }}</td>
                        </tr>
                        <tr>
                            <th><?= __('Foto:') ?></th>
                            <td><img src="{{url("storage/{$guest->photo}")}}" alt="{{$guest->name}}" style="max-width: 150px;"></td>
                        </tr>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
