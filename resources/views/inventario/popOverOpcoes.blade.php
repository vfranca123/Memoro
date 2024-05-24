
<div class="modal fade" id="OpcoesModal{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Qual tipo de produto você dejeda adicionar ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column">
                <a href="{{route('inventario.adicionaCafe.index',['id' => $id])}}">Café</a>
                <a href="{{route('inventario.adicionaTabaco.index',['id' => $id])}}">Tabaco</a>
                <a href="{{route('inventario.adicionaQueijo.index',['id' => $id])}}">Queijo</a>
                <a href="{{ route('inventario.adicionarProduto.index', ['id' => $id]) }}">Generico</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>