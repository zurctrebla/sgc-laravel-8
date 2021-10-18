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
       <label>Senha *</label>
       <input type="password" name="password" class="form-control" placeholder="sua senha aqui ... ">
      </div>
    </div>
</div>

<div class="class-form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
