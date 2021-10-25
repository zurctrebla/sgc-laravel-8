@include('admin.includes.alerts')

<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
       <label>Nome *</label>
       <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $user->name ?? old('name') }}" >
      </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>Email *</label>
         <input type="email" name="email" class="form-control" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}" >
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>Contato Telefônico *</label>
         <input type="text" name="number" class="form-control" placeholder="..." value="{{ $user->phone->number ?? old('number') }}" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
      <div class="form-group">
       <label>Nacionalidade *</label>
       <input type="text" name="nacionality" class="form-control" placeholder="..." value="{{ $user->complement->nacionality ?? old('nacionality') }}" required>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
         <label>Estado *</label>
         <input type="text" name="state" class="form-control" placeholder="..." value="{{ $user->complement->state ?? old('state') }}" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
       <label>Data de nascimento *</label>
       <input type="date" name="birth" class="form-control" placeholder="..." value="{{ $user->complement->birth ?? old('birth') }}" required>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>CPF *</label>
         <input type="text" name="cpf" class="form-control" placeholder="..." value="{{ $user->complement->cpf ?? old('cpf') }}" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>RG *</label>
         <input type="text" name="rg" class="form-control" placeholder="..." value="{{ $user->complement->rg ?? old('rg') }}" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
       <label>Quadra *</label>
       <input type="text" name="block" class="form-control" placeholder="..." value="{{ $user->complement->block ?? old('block') }}" required>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>Lote *</label>
         <input type="text" name="lot" class="form-control" placeholder="..." value="{{ $user->complement->lot ?? old('lot') }}" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>Casa *</label>
         <input type="text" name="house" class="form-control" placeholder="..." value="{{ $user->complement->house ?? old('house') }}" required>
        </div>
    </div>
</div>

<hr>
<h3>Declaração de Veículos</h3>
<hr>
<div id="app">
    <div class="row" v-for="(input, index) in inputs">
        <div class="col-sm-3">
        <div class="form-group">
        <label>Veículo *</label>
        <input type="text" :name="'contact[' + index + '][name]'" class="form-control" placeholder="Marca e modelo" >
        </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
            <label>Placa *</label>
            <input type="text" :name="'contact[' + index + '][phone]'" class="form-control" placeholder="Placa">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
            <label>Cor *</label>
            <input type="text" :name="'contact[' + index + '][email]'" class="form-control" placeholder="Cor">
            </div>
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

    <div class="class-form-group">
        <button type="submit" class="btn btn-dark">Enviar</button>
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
          name: "",
          phone: "",
          email: ""
        });
      },
      deleteRow(index) {
        this.inputs.splice(index, 1);
      }
    }
  });
</script>
