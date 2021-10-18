@include('admin.includes.alerts')

<div class="row">
    <div class="col-sm-6">
      <div class="form-group">
       <label>Casa *</label>
       <input type="text" name="house" class="form-control" placeholder="Dados da casa, nº, lote ..." value="{{ $user->house ?? old('house') }}">
      </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
         <label>Placa do veículo *</label>
         <input type="text" name="vehicle_main" class="form-control" placeholder="Placa" value="{{ $profile->vehicle_main ?? old('vehicle_main') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
      <div class="form-group">
       <label>Telefone *</label>
       <input type="text" name="phone_main" class="form-control" placeholder="Telefone" value="{{ $user->phone_main ?? old('phone_main') }}">
      </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
         <label>Tipo de moradia *</label>
         <select name="status" id="status" class="form-control">
            <option value="">Escolha</option>
                <optgroup label="Selecione">
                        <option value="own">Propria</option>
                        <option value="rent">Alugada</option>
                </optgroup>
        </select>
        </div>
    </div>
</div>

<div class="class-form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
