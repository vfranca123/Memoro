<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function authenticate()
    {
        
        $validet = request()->validate([

            'email' => 'required|email',
            'password' => 'required'

        ]);

        if (auth()->attempt($validet)) {

            request()->session()->regenerate();
            
            return redirect()->route('Homepage.index')->with('flash','login feito com sucesso');
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        request()->session()->invalidate();
        auth()->logout(); // pega os dados do cara logado e e faz um logOut
        request()->session()->invalidate(); // invalida os dados anteriores pra segurança
        request()->session()->regenerate(); // limpa a cache

        return redirect()->route('login')->with('flash','logout feito com sucesso');
    }
}
