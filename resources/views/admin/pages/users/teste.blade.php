@extends('adminlte::page')

@section('title', 'Testes')

@section('content_header')
    <h1>Testes</h1>
@stop

@section('content')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Editar Usuário</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('users.savage') }}" class="form" method="POST">
                    @csrf
                    {{-- @method('PUT') --}}
                    {{-- @include('admin.pages.users._partials.form') --}}
                    <div id="app">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12">
                              <p>Adicione um ou mais Veículos</p>
                              <div class="form-group row" v-for="(input, index) in inputs">
                                <div class="col-lg-3">
                                  <input type="text" :name="'vehicle[' + index + '][type]'" class="form-control" placeholder="Veículo">
                                </div>
                                <div class="col-lg-3">
                                  <input type="text" :name="'vehicle[' + index + '][plate]'" class="form-control" placeholder="Placa">
                                </div>
                                <div class="col-lg-3">
                                  <input type="text" :name="'vehicle[' + index + '][color]'" class="form-control" placeholder="Cor">
                                </div>
                                <div class="col-lg-3">
                                  <button type="button" @click="deleteRow(index)" class="btn btn-outline-danger rounded-circle">
                                    <i class="fa fa-times"></i>
                                  </button>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-lg-12">
                                  <button type="button" @click="addRow" class="btn btn-outline-secondary">Adiciona</button>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="col-lg-12">
                                  <button class="btn btn-primary">Enviar</button>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    <script>
        const app = new Vue({
        el: "#app",
        created() {
          this.addRow();
        },
        data: {
          inputs: []
        },
        methods: {
          addRow() {
            this.inputs.push({
              type: "",
              plate: "",
              color: ""
            });
          },
          deleteRow(index) {
            this.inputs.splice(index, 1);
          }
        }
      });
    </script>
@endsection







