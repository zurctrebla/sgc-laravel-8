@csrf
@include('admin.includes.alerts')

<div class="row">
    <div class="col-sm-12">
      <div class="form-group">
       <label>Nome *</label>
       <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $destiny->name ?? old('name') }}">
      </div>
    </div>
</div>

<div class="class-form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
