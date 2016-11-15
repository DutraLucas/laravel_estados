@extends('layouts.painel_app')

@section('content')
  @if(Session::has('insert_ok'))
    <div class="alert alert-success">{{Session::get('insert_ok')}}</div>
  @endif
  @if(Session::has('update_ok'))
    <div class="alert alert-success">{{Session::get('update_ok')}}</div>
  @endif
  @if(Session::has('delete_ok'))
    <div class="alert alert-success">{{Session::get('delete_ok')}}</div>
  @endif
  <script type="text/javascript">
    function deletardados(e) {
      if (!(window.confirm("Tem certeza que deseja excluir esse estado?")))
      e.returnValue = false;
    }
  </script>
  <table class="table">
    <thead>
      <tr>
        <th>
          Estado
        </th>
        <th>
          Sigla
        </th>
        <th>
          Histórico
        </th>
        <th>
          Visualizar
        </th>
        <th>
          Editar
        </th>
        <th>
          Excluir
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($estados as $estado)
        <tr>
          <td>
            {{$estado->nome}}
          </td>
          <td>
            {{$estado->sigla}}
          </td>
          <td>
            {{$estado->historico}}
          </td>
          <td>
            <a href="{{url('estados/visualizar/'.$estado->id)}}" class="btn btn-default">Visualizar</a>
          </td>
          <td>
            <a href="{{url('estados/editar/'.$estado->id)}}" class="btn btn-default">Editar</a>
          </td>
          <td>
            <a href="{{url('estados/excluir/'.$estado->id)}}" class="btn btn-default" onclick="return deletardados(event)">Excluir</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
