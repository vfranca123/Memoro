
<div class="modal fade" id="exampleModal{{ $produto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$produto->nome}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Marca: {{$produto->marca}}</h3>
                <h3>Safra: {{$produto->safra}}</h3>
                <h3>Quantidade: {{$produto->quantidade}}</h3>
                <h3>Data: {{$produto->data}}</h3>
                <h3>Avaliação Geral: {{$produto->avaliacao_geral}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Aroma: {{$produto->nota_aroma}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Sabor: {{$produto->nota_sabor}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Textura: {{$produto->nota_textura}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Aparência: {{$produto->nota_aparencia}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Observação: {{$produto->observacao}}</h3>

                @if($produto->FotoProduto())
                    <img src="{{$produto->getImageURL() }}" class="card align-self-center" style="width: 15rem;" alt="foto">
                @endif
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
