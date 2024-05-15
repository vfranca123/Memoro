<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produto;
use App\Models\User;
use App\Models\Foto;

class InventarioController extends Controller
{
    public function index($id)
    {    
        $user = User::find($id);  
        $produtos = $user->produtos;
        return view('inventario.inventarioShow',compact('produtos','user'));
    }

    public function storeIndex($id)
    {
        $user = User::find($id); 
        return view('inventario.adicionarProduto',compact('user'));
    }


    public function store(Request $request)
    {
        $user = auth()->user(); // Capturando o usuário autenticado

        // Criando uma nova instância do modelo Produto
        $produto = new Produto();

        // Preenchendo os campos do produto com os dados do formulário
        $produto->user_id = $user->id; // Definindo o ID do usuário
        $produto->nome = $request->input('nome');
        $produto->tipo = $request->input('tipo');
        $produto->marca = $request->input('Marca');
        $produto->safra = $request->input('Safra');
        $produto->quantidade = $request->input('Quantidade_Disponive');
        $produto->data = $request->input('data');
        $produto->avaliacao_geral = $request->input('avaliacaoGeral');
        $produto->nota_aroma = $request->input('avaliacaoAroma');
        $produto->nota_sabor = $request->input('avaliacaoSabor');
        $produto->nota_textura = $request->input('avaliacaoTextura');
        $produto->nota_aparencia = $request->input('avaliacaoaparencia');
        $produto->observacao = $request->input('Observacao');

        // Salvando o produto no banco de dados
        $produto->save();

        // Verificando se há uma imagem enviada no formulário
        if ($request->hasFile('img')) {
            // Armazenar a nova imagem
            $imagePath = $request->file('img')->store('Fotos', 'public');
            // Criar um novo registro de foto associado ao produto
            Foto::create([
                'post_id' => $produto->id, // Associando a foto ao produto recém-criado
                'img' => $imagePath
            ]);
        }

        // Redirecionando de volta à página de inventário com uma mensagem flash
        return redirect()->route('inventario.index', ['id' => $user->id])->with('flash', 'Produto adicionado com sucesso!');
    }
}
