@extends('adminlte::page')

@section('title', "Detalhes do Usuário {$user->name}")

@section('content_header')
    <h1><b>Detalhes do Usuário </b>{{ $user->name }}</h1>
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
                                <th><?= __('Nome') ?></th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th><?= __('E-mail') ?></th>
                                <td>{{ $user->name }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

