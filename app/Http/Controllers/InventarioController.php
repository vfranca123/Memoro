<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produto;
use App\Models\User;
use App\Models\FotoProduto;
use Illuminate\Support\Facades\Storage;

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

            
        if ($request->hasFile('img')) {
            // Armazenar a nova imagem
            $imagePath = request()->file('img')->store('FotosProdutos', 'public');
            // Criar um novo registro de perfil de imagem
            FotoProduto::create([
                'produto_id' => $produto->id,
                'img' => $imagePath
            ]);
        }

        // Redirecionando de volta à página de inventário com uma mensagem flash
        return redirect()->route('inventario.index', ['id' => $user->id])->with('flash', 'Produto adicionado com sucesso!');
    }
    public function destroy($id){
        
        $produto= produto::where('id',$id)->first();
        $user_id=$produto->user_id;
        
        if ($produto->FotoProduto) {
            // Deletar a imagem anterior e o registro correspondente
            Storage::disk('public')->delete($produto->FotoProduto->img);
            $produto->FotoProduto->delete();
        } 
        $produto->delete(); // é deletado este id 
        return redirect()->route('inventario.index', ['id' => $user_id])->with('flash','produto deletado com sucesso'); //retorna a dashboard com um aviso da ideia deletada 
    }
    
}
