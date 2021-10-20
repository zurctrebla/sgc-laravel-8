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
       <label>Endereço *</label>
       <input type="text" name="complement" class="form-control" placeholder="..." value="{{ $user->complement->complement ?? old('complement') }}" required>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
      <div class="form-group">
       <label>Celular *</label>
       <input type="text" name="number" class="form-control" placeholder="..." value="{{ $user->phone->number ?? old('number') }}" required>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
      <div class="form-group">
       <label>Veículo *</label>
       <input type="text" name="vehicle" class="form-control" placeholder="Placa do veículo" value="{{ $user->vehicle->vehicle ?? old('vehicle') }}" required>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
      <div class="form-group">
       <label>Senha *</label>
       <input type="password" name="password" class="form-control" placeholder="sua senha aqui ... ">
      </div>
    </div>
</div>

<div class="class-form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
