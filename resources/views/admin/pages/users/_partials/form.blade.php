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
    <div class="col-sm-6">
      <div class="form-group">
        <label>Tipo de moradia *</label>
        <select name="type" id="type" class="form-control" required>
            <option selected>Selecione ... </option>
            <option value="propria">Propria</option>
            <option value="alugada">Alugada</option>
            <option value="temporada">Temporada</option>
        </select>
      </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
          <label>Nº de moradores *</label>
          <select name="occupants" id="occupants" class="form-control" required>
              <option selected>Selecione ... </option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
          </select>
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
