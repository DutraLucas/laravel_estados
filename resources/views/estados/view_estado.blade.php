@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-md-6">
      <ul class="list-view">
        <li class="item-view">Nome do estado: {{$estado->nome}}</li>
        <li class="item-view">Sigla do estado: {{$estado->sigla}}</li>
        <li class="item-view">Histórcio do estado: {{$estado->historico}}</li>
        <li class="item-view">Estado adicionado em: {{$estado->created_at}}</li>
        <li class="item-view">Estado alterado em: {{$estado->updated_at}}</li>
        <li class="item-view">Autor: {{$estado->user->name}}</li>
      </ul>
    </div>
  </div>

@endsection
