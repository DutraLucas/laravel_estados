@extends('layouts.painel_app')

@section('content')
  <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    		<p>Permissão adicionada</p>
		</div>
  <div class="row">
    <div class="col-md-6">
      <table class="table">
        <thead>
          <tr>
            <th>Permission</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody class="detail">
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <div class="divisa-esquerda">
        <h3>Cadastrar</h3>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
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
        <button type="submit" class="btn btn-success input" value="ajax_insert">Salvar</button>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{url('js/ajax.js')}}"></script>
@endsection
