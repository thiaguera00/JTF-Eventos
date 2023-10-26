<?php

namespace App\Http\Controllers;

use App\Models\AcessoAoSistema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcessoAoSistemaController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

       $acesso = AcessoAoSistema::where('login', $request->email)->first();
        
       if ($acesso && $acesso->senha === $request->senha ) {
        return redirect()->route('eventos');
       }

        return redirect()->route('login')->withErrors(['login' => 'Crendencias invalidas']);
     }
}
