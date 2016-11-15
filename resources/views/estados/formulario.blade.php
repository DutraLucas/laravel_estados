@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-sm-8">
      @if(Request::is('*/editar/*'))
      {!! Form::model($estado, ['method' => 'PATCH', 'url' => 'estados/update/'.$estado->id]) !!}
      @else
      {!! Form::open(['url' => 'estados/insert']) !!}
      @endif
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="" @if(Request::is('*/editar/*')) value="{{$estado->nome}}" @endif required="">
        <p class="help-block">Digite o nome do estado.</p>
      </div>
      <div class="form-group">
        <label>Sigla</label>
        <input type="text" class="form-control" name="sigla" placeholder="" maxlength="2" @if(Request::is('*/editar/*')) value="{{$estado->sigla}}" @endif>
        <p class="help-block">Digite a sigla.</p>
      </div>
      <div class="form-group">
        <label>Histórico</label>
        <textarea name="historico" rows="4" class="form-control"  required="">@if(Request::is('*/editar/*')) {{$estado->historico}} @endif</textarea>
        <p class="help-block">Digite a histórico do estado.</p>
      </div>
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
      @if(Request::is('*/editar/*'))
      <button type="submit" class="btn btn-success">Alterar</button>
      @else
      <button type="submit" class="btn btn-success">Salvar</button>
      @endif
      {!! Form::close() !!}
    </div>
  </div>
@endsection
