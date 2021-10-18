@extends('adminlte::page')

@section('title', 'Cadastrar Membro')

@section('content_header')
    <h1>Cadastrar Membro</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Novo Membro</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" class="form" method="POST">
                    @csrf
                    {{-- @include('admin.pages.users._partials.form') --}}
                    @include('admin.includes.alerts')

                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                        <label>Nome *</label>
                        <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}">
                        </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <div class="class-form-group">
                                <label>Parentesco *</label>
                                <select name="destiny" id="destiny" class="form-control" required>
                                    <option value="">Escolha</option>
                                        <optgroup label="Selecione parentesco">
                                            {{-- @foreach($destinies as $destiny) --}}
                                                <option value="{{-- {{ $destiny->name }} --}}conjugue">{{-- {{ $destiny->name }} --}}Conjugue</option>
                                                <option value="{{-- {{ $destiny->name }} --}}irmao">{{-- {{ $destiny->name }} --}}Irmão</option>
                                                <option value="{{-- {{ $destiny->name }} --}}filho">{{-- {{ $destiny->name }} --}}Filho</option>
                                                <option value="{{-- {{ $destiny->name }} --}}pai">{{-- {{ $destiny->name }} --}}Pai</option>
                                                <option value="{{-- {{ $destiny->name }} --}}mae">{{-- {{ $destiny->name }} --}}Mãe</option>
                                            {{-- @endforeach --}}
                                        </optgroup>
                                </select>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                        <label>Senha *</label>
                        <input type="password" name="password" class="form-control" placeholder="a senha deve conter pelo menos 6 caracteres">
                        </div>
                        </div>
                    </div>

                    <div class="class-form-group">
                        <button type="submit" class="btn btn-dark">Enviar</button>
                    </div>

                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection
