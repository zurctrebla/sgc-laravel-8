@extends('adminlte::page')

@section('title', "Detalhes do visitante {$guest->name}")

@section('content_header')
    <h1><b>Detalhes do visitante </b>{{ $guest->name }}</h1>
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
                        <?php if($guest->company) : ?>
                        <tr>
                            <th><?= __('Empresa') ?></th>
                            <td>{{ $guest->company }}</td>
                        </tr>
                            <?php endif ?>
                        <tr>
                            <th><?= __('Data de Entrada') ?></th>
                            <td>{{ $guest->start_at }}</td>
                        </tr>
                        <tr>
                            <th><?= __('Data de Saída') ?></th>
                            <td>{{ $guest->expires_at }}</td>
                        </tr>
                        <tr>
                            <th><?= __('Foto') ?></th>
                            <td><img src="{{url("storage/{$guest->photo}")}}" alt="{{$guest->name}}" style="max-width: 150px;"></td>
                        </tr>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
@endsection
