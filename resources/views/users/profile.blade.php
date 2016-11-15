@extends('layouts.painel_app')

@section('content')
  @if(Session::has('update_ok'))
    <div class="alert alert-success">{{Session::get('update_ok')}}</div>
  @endif
  <div class="row">
    <div class="col-md-6">
      <ul class="list-view">
        <li class="item-view">Nome de usuario: {{$user->name}}</li>
        <li class="item-view">E-mail: {{$user->email}}</li>
        <li class="item-view">Criado em: {{$user->created_at}}</li>
      </ul>
    </div>
    <div class="col-md-6 divisa-esquerda">
      <div class="page-header">
        <h3>Imagem de perfil</h3>
      </div>
      <img src="{{url('public/uploads/avatars/'.$user->avatar_img)}}" alt="" width="200" class="img-circle"/>
      <br><br>
      {!! Form::open(['url' => 'users/update_avatar', 'method'=>'POST', 'files' => true]) !!}
        <div class="form-group">
          <input type="file" name="avatar">
          <p class="help-block">Deseja alterar a foto de usuário?.</p>
        </div>
        <button type="submit" class="btn btn-success">Alterar</button>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
