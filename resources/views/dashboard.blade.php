@extends('layouts.painel_app')

@section('content')
  <div class="row">
    <div class="col-md-8">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-tree-deciduous gi-4x pull-left"></span><h2 class="text-center">Estados <span class="label label-info">{{$total_estados}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('/estados')}}" class="link_chamada">Ver estados <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-user gi-4x pull-left"></span><h2 class="text-center">Usuários <span class="label label-info">{{$total_user}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('/users')}}" class="link_chamada">Ver usuários <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-check gi-4x pull-left"></span><h2 class="text-center">Permissões <span class="label label-info">{{$total_permissions}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('acl/permissions')}}" class="link_chamada">Ver permissões <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <span class="glyphicon glyphicon-file gi-4x pull-left"></span><h2 class="text-center">Papéis <span class="label label-info">{{$total_roles}}</span></h2>
              </div>
              <div class="panel-footer text-center">
                <a href="{{url('acl/roles')}}" class="link_chamada">Ver papéis <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

@endsection
