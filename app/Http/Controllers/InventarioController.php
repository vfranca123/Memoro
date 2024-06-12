<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\cafe;
use App\Models\User;
use App\Models\FotoTabaco;
use App\Models\Tabaco;
use App\Models\queijo;
use App\Models\FotoCafes;
use App\Models\FotoProduto;
use App\Models\FotoQueijo;
use Illuminate\Support\Facades\Storage;

class InventarioController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $produtos = $user->produtos;
        $cafes = $user->cafes;
        $tabacos = $user->tabacos;
        $queijos = $user->queijos;
        return view('inventario.inventarioShow', compact('produtos', 'user', 'cafes', 'tabacos','queijos'));
    }

    public function storeIndex($id)
    {
        $user = User::find($id);
        return view('inventario.adicionarProduto', compact('user'));
    }


    public function store(Request $request)
    {
        $user = auth()->user(); // Capturando o usuário autenticado

        // Criando uma nova instância do modelo Produto
        $produto = new produto();

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

    public function destroy($id)
    {

        $produto = produto::where('id', $id)->first();
        $user_id = $produto->user_id;

        if ($produto->FotoProduto) {
            // Deletar a imagem anterior e o registro correspondente
            Storage::disk('public')->delete($produto->FotoProduto->img);
            $produto->FotoProduto->delete();
        }
        $produto->delete(); // é deletado este id 
        return redirect()->route('inventario.index', ['id' => $user_id])->with('flash', $produto->nome . '-deletado com sucesso'); //retorna a dashboard com um aviso da ideia deletada 
    }

    public function storeCafeIndex($id)
    {
        $user = User::find($id);
        return view('inventario.cafe.adicionaCafe', compact('user'));
    }

    public function storeCafe(Request $request)
    {
        $user = auth()->user(); // Capturando o usuário autenticado

        // Criando uma nova instância do modelo Produto
        $produto = new cafe();

        // Preenchendo os campos do produto com os dados do formulário
        $produto->user_id = $user->id; // Definindo o ID do usuário
        $produto->nome = $request->input('nome');
        $produto->tipo = 'cafe';
        $produto->safra = $request->input('Safra');
        $produto->quantidade = $request->input('Quantidade_Disponive');
        $produto->data = $request->input('data');
        $produto->aceitação_global = $request->input('aceitação_global');
        $produto->aparencia = $request->input('aparencia');
        $produto->aroma = $request->input('aroma');
        $produto->sabor = $request->input('sabor');
        $produto->textura = $request->input('textura');
        $produto->observacao = $request->input('Observacao');

        // Salvando o produto no banco de dados
        $produto->save();


        if ($request->hasFile('img')) {
            // Armazenar a nova imagem
            $imagePath = request()->file('img')->store('FotosCafes', 'public');
            // Criar um novo registro de perfil de imagem
            FotoCafes::create([
                'cafe_id' => $produto->id,
                'img' => $imagePath
            ]);
        }

        // Redirecionando de volta à página de inventário com uma mensagem flash
        return redirect()->route('inventario.index', ['id' => $user->id])->with('flash', 'Produto adicionado com sucesso!');
    }
    public function destroyCafe($id)
    {
        $produto = cafe::where('id', $id)->first();
        $user_id = $produto->user_id;

        if ($produto->FotoCafes) {
            // Deletar a imagem anterior e o registro correspondente
            Storage::disk('public')->delete($produto->FotoCafes->img);
            $produto->FotoCafes->delete();
        }
        $produto->delete(); // é deletado este id 
        return redirect()->route('inventario.index', ['id' => $user_id])->with('flash', $produto->nome . '-deletado com sucesso'); //retorna a dashboard com um aviso da ideia deletada 
    }

    public function storeTabacoIndex($id)
    {
        $user = User::find($id);
        return view('inventario.tabaco.adicionaTabaco', compact('user'));
    }

    public function storeTabaco(Request $request)
    {
        $user = auth()->user(); // Capturando o usuário autenticado

        // Criando uma nova instância do modelo Produto
        $produto = new Tabaco();

        // Preenchendo os campos do produto com os dados do formulário
        $produto->user_id = $user->id; // Definindo o ID do usuário
        $produto->nome = $request->input('nome');
        $produto->tipo = 'Tabaco';
        $produto->quantidade = $request->input('Quantidade_Disponive');
        $produto->cor = $request->input('cor');
        $produto->textura = $request->input('textura');
        $produto->corte = $request->input('corte');
        $produto->sabor_inicial = $request->input('sabor_inicial');
        $produto->complexidade = $request->input('complexidade');
        $produto->persistência = $request->input('persistência');
        $produto->equilibrio = $request->input('equilibrio');
        $produto->uniformidade_da_queima = $request->input('uniformidade_da_queima');
        $produto->velocidade_da_queima = $request->input('velocidade_da_queima');
        $produto->resíduos_de_queima = $request->input('resíduos_de_queima');
        $produto->sensação_na_boca = $request->input('sensação_na_boca');
        $produto->satisfação_geral = $request->input('satisfação_geral');
        $produto->data = $request->input('data');
        $produto->observacao = $request->input('Observacao');

        // Salvando o produto no banco de dados
        $produto->save();

        if ($request->hasFile('img')) {
            // Armazenar a nova imagem
            $imagePath = request()->file('img')->store('FotosTabacos', 'public');
            // Criar um novo registro de perfil de imagem
            FotoTabaco::create([
                'tabacos_id' => $produto->id,
                'img' => $imagePath
            ]);
        }

        // Redirecionando de volta à página de inventário com uma mensagem flash
        return redirect()->route('inventario.index', ['id' => $user->id])->with('flash', 'Produto "tabaco" adicionado com sucesso!');
    }

    public function destroyTabaco($id)
    {

        $produto = Tabaco::where('id', $id)->first();
        $user_id = $produto->user_id;

        if ($produto->FotoTabaco) {
            // Deletar a imagem anterior e o registro correspondente
            Storage::disk('public')->delete($produto->FotoTabaco->img);
            $produto->FotoTabaco->delete();
        }
        $produto->delete(); // é deletado este id 
        return redirect()->route('inventario.index', ['id' => $user_id])->with('flash', $produto->nome . '-deletado com sucesso');
    }

    public function storeQueijoIndex($id)
    {
        $user = User::find($id);
        return view('inventario.queijo.adicionaQueijo', compact('user'));
    }

    public function storeQueijo(Request $request)
    {
        $user = auth()->user(); // Capturando o usuário autenticado

        // Criando uma nova instância do modelo Produto
        $produto = new queijo ();
        $produto->nome = $request->input('nome');
        $produto->tipo = 'queijo';
        $produto->quantidade = $request->input('quantidade');
        $produto->avaliacao_geral = $request->input('avaliacao_geral');
        $produto->textura = $request->input('textura');
        $produto->aparencia = $request->input('aparencia');
        $produto->Aroma = $request->input('aroma');
        $produto->sabor = $request->input('sabor');
        $produto->sensação_na_boca = $request->input('sensação_na_boca');
        $produto->sonoridade = $request->input('sonoridade');
        $produto->observacao = $request->input('observacao');
        $produto->user_id = $user->id;

        $produto->save();

        if ($request->hasFile('img')) {
            // Armazenar a nova imagem
            $imagePath = request()->file('img')->store('FotosQueijos', 'public');
            // Criar um novo registro de perfil de imagem
            FotoQueijo::create([
                'queijos_id' => $produto->id,
                'img' => $imagePath
            ]);
        }

        return redirect()->route('inventario.index', ['id' => $user->id])->with('flash', 'Produto "queijo" adicionado com sucesso!');
    }

    public function destroyQueijo($id)
    {
        
        $produto = queijo::where('id', $id)->first();
        $user_id = $produto->user_id;

        if ($produto->FotoQueijo) {
            // Deletar a imagem anterior e o registro correspondente
            Storage::disk('public')->delete($produto->FotoQueijo->img);
            $produto->FotoQueijo->delete();
        }
        $produto->delete(); // é deletado este id 
        return redirect()->route('inventario.index', ['id' => $user_id])->with('flash', $produto->nome . '-deletado com sucesso');
    }
}
