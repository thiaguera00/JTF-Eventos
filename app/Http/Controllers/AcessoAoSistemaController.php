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

       
        $acesso = AcessoAoSistema::where('login', $request->login)->first();
        
        if ($acesso && password_verify($request->senha, $acesso->senha)) {
           
            Auth::login($acesso);

            
            return redirect()->intended(route('eventos'));
        }

        return redirect()->route('login')->withErrors(['login' => 'Credenciais inválidas']);
    }
}
