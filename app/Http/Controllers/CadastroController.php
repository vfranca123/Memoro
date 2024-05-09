<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastro');
    }

    public function store()
    {
        
        $validated = request()->all();
    
        User::create([
            'nome' => $validated['nome'],
            'idade' => $validated['idade'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['senha']),
        ]);
    
        return redirect()->route('login');
    }
}
