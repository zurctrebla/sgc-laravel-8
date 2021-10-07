@csrf
@include('admin.includes.alerts')
<div class="class-form-group">
    <label>* Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $guest->name ?? old('name') }}">
</div>
<div class="class-form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
