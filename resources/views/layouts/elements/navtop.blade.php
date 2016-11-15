<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Lucas Dutra</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{url('/dashboard')}}"><span class="glyphicon glyphicon-th"></span> Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tree-deciduous"></span> Estados <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/estados')}}"><span class="glyphicon glyphicon-th-list"></span> Listar estados</a></li>
                <li><a href="{{url('/estados/cadastrar')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar estado</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuários <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/users')}}"><span class="glyphicon glyphicon-th-list"></span> Listar usuários</a></li>
                <li><a href="{{url('/users/cadastrar')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar usuário</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file"></span> Papeis <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('/acl/roles')}}"><span class="glyphicon glyphicon-th-list"></span> Listar papeis</a></li>
                <li><a href="{{url('/acl/role_cadastrar')}}"><span class="glyphicon glyphicon-plus"></span> Adicionar papeis</a></li>
              </ul>
            </li>
            <li><a href="{{url('acl/permissions')}}"><span class="glyphicon glyphicon-check"></span> Permissões</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle user-nav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span> </a><img src="{{url('public/uploads/avatars/'.Auth::user()->avatar_img)}}" alt="" width="50px" class="img-circle"/>
              <ul class="dropdown-menu">
                <li><a href="{{url('/users/profile')}}"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                <li><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
