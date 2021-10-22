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
<h3>Declaração de Residentes</h3>
<hr>

<div class="row">
    <div class="col-sm-8">
      <div class="form-group">
       <label>Nome Completo *</label>
       <input type="text" name="name_relative" class="form-control" placeholder="Nome Completo" value="{{ $user->relative->name_relative ?? old('name_relative') }}" required>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>Grau de parentesco *</label>
            <select name="relationship" id="relationship" class="form-control" required>
                <option value="{{ $user->relative->relationship ?? old('relationship') }}" selected>{{ $user->relative->relationship ?? old('relationship') }}</option>
                <option value="Cônjuge">Cônjuge</option>
                <option value="Filho/Filha">Filho/Filha</option>
                <option value="Irmão/Irmã">Irmão/Irmã</option>
                <option value="Pai/Mãe">Pai/Mãe</option>
                <option value="Tio/Tia">Tio/Tia</option>
                <option value="Sobrinho/Sobrinha">Sobrinho/Sobrinha</option>
                <option value="Outros">Outros</option>
            </select>
        </div>
    </div>
</div>

<hr>
<h3>Declaração de Veículos</h3>
<hr>

<div class="row">
    <div class="col-sm-4">
      <div class="form-group">
       <label>Veículo *</label>
       <input type="text" name="type" class="form-control" placeholder="Marca e Modelo" value="{{ $user->vehicle->type ?? old('type') }}" required>
      </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>Placa *</label>
         <input type="text" name="plate" class="form-control" placeholder="Placa do veículo" value="{{ $user->vehicle->plate ?? old('plate') }}" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
         <label>Cor *</label>
         <input type="text" name="color" class="form-control" placeholder="Cor do veículo" value="{{ $user->vehicle->color ?? old('color') }}" required>
        </div>
    </div>
</div>

<div class="class-form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
