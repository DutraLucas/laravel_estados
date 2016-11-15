@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-sm-8">
      {!! Form::open(['url' => 'acl/role_insert']) !!}
      <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" id="name" name="name"  required>
        <p class="help-block">Digite o nome.</p>
      </div>
      <div class="form-group">
        <label>Label</label>
        <input type="text" class="form-control" id="label" name="label" required>
        <p class="help-block">Digite a label.</p>
      </div>
      <button type="submit" class="btn btn-success">Salvar</button>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
