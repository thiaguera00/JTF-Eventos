<?php

namespace App\Http\Controllers;

use App\Models\AcessoAoSistema;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() 
    {
       
        return Usuarios::all();
    }

    public function cadastroUsuario(Request $request)
    {
        $request->validate([
            'cpf' => 'required',
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'required',
            'senha' => 'required',
        ],
        [
            'cpf.required' => 'O campo CPF tem que ser preenchido',
            'nome.required' => 'O campo Nome tem que ser preenchido',
            'telefone.required' => 'O campo Telefone tem que ser preenchido',
            'email.required' => 'O campo Email tem que ser preenchido',
            'senha.required' => 'O campo Senha tem que ser preenchido'
        ]);

       $usuarios = Usuarios::create([
        'cpf' => $request->cpf,
        'nome' => $request->nome,
        'email' => $request->email,
        'telefone' => $request->telefone,
       ]);

       $acessos = AcessoAoSistema::create([
        'login' => $request->email,
        'senha' => bcrypt($request->senha),
       ]);

      if ($usuarios && $acessos) {
        return redirect()->route('login')->with('success', 202);
      }
       return back()->with(['' => 'As crendencias fornecidas estão invalidas']);
    }
}
