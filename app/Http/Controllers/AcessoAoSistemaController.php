<?php
namespace App\Http\Controllers;

use App\Models\AcessoAoSistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcessoAoSistemaController extends Controller
{
    public function auth(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'senha' => 'required'
        ]);

        // Busca o registro de acesso pelo login fornecido
        $acesso = AcessoAoSistema::where('login', $request->login)->first();
        // dd(AcessoAoSistema::where('login', $request->login)->first());
        // Verifica se o usuário existe e se a senha está correta
        if ($acesso && password_verify($request->senha, $acesso->senha)) {
            // Autentica o usuário
            Auth::login($acesso);

            // Redireciona o usuário para a rota desejada após o login
            return redirect()->intended(route('eventos'));
        }

        // Redireciona de volta para a página de login com uma mensagem de erro
        return redirect()->route('login')->withErrors(['login' => 'Credenciais inválidas']);
    }
}
