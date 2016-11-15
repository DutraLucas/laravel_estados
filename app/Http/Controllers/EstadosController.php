<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;
use App\User;
use Redirect;
use Gate;
use App\Http\Requests;

class EstadosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $dados = array(
      'titulo' => 'Estados',
      'estados' => Estado::all()
    );
    return view('estados.index', $dados);
  }
  public function cadastrar()
  {
    if (Gate::allows('Insert_estado')) {
      $dados = array('titulo' => 'Adicionar estado');
      return view('estados.formulario', $dados);
    }else {
      return Redirect::to('estados');
    }
  }
  public function insert(Request $request)
  {
    $estado= new Estado();
    $estado= $estado->create($request->all());
    \Session::flash('insert_ok', 'Estado cadastrado com sucesso!');
    return Redirect::to('estados');
  }
  public function editar($id)
  {
    if (Gate::allows('Edit_estado')) {
      $estado= Estado::find($id);
      $dados = array(
        'estado' => Estado::findOrFail($id),
        'titulo' => 'Editar estado',
      );
      return view('estados.formulario', $dados);
    }else {
      return Redirect::to('estados');
    }
  }
  public function update($id, Request $request)
  {
    $estado= Estado::findOrFail($id);

    $estado->update($request->all());
    \Session::flash('update_ok', 'Estado de '.$estado->nome.' atualizado com sucesso!');
    return Redirect::to('estados');
  }
  public function visualizar($id)
  {
    if (Gate::allows('Delete_estado')) {
      $estado= Estado::findOrFail($id);
      $dados = array(
        'titulo' => 'Estados',
        'estado' => $estado
      );
      return view('estados.view_estado', $dados);
    }else {
      return Redirect::to('estados');
    }
  }

  public function excluir($id)
  {
    if (Gate::allows('Delete_estado')) {
      $estado= Estado::findOrFail($id);
      $estado->delete();
      \Session::flash('delete_ok', 'Estado de '.$estado->nome.' excluido com sucesso!');
    }
    return Redirect::to('estados');
  }
}
