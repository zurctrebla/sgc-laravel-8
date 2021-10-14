@csrf
@include('admin.includes.alerts')
<div class="class-form-group">
    <label>* Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $guest->name ?? old('name') }}">
</div>
<div class="class-form-group">
    <label>* Documento:</label>
    <input type="text" name="document" class="form-control" placeholder="Documento oficial:" value="{{ $guest->document ?? old('document') }}">
</div>

<div class="class-form-group">
    <label>* Destino:</label>
    <input type="text" name="destiny" class="form-control" placeholder="Setor, Casa, Lote, Bloco, etc ..." value="{{ $guest->destiny ?? old('destiny') }}">
</div>

<div class="class-form-group">
    <label>* Destino:</label>
    <select name="categoria_id" id="categoria" class="form-control">
        <option value="">Escolha</option>
            <optgroup label="Selecione um destino">
                @foreach($destinies as $destiny)
                    <option value="{{ $destiny->id }}">{{ $destiny->name }}</option>
                @endforeach
            </optgroup>
    </select>
</div>

<div class="class-form-group">
    <label>* Falar com quem:</label>
    <input type="text" name="person" class="form-control" placeholder="falar com quem:" value="{{ $guest->person ?? old('person') }}">
</div>
<div class="class-form-group">
    <label>* Empresa:</label>
    <input type="text" name="company" class="form-control" placeholder="Preencha apenas se for prestador de serviço:" value="{{ $guest->company ?? old('company') }}">
</div>

<div class="row">
    <div class="col-sm-6">
      <div class="form-group">
       <label>Data Inicial *</label>
       <input type="date" name="start_at" id="start_at" class="form-control">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
       <label>Data Final *</label>
       <input type="date" name="expires_at" id="expires_at" class="form-control">
      </div>
    </div>
</div>

<div class="class-form-group">
    <label>* Foto:</label>
    <input type="file" name="photo" class="form-control" >
</div>

<div class="class-form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
