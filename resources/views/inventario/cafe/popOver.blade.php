<div class="modal fade" id="exampleModal{{ $cafe->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$cafe->nome}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Tipo: {{$cafe->tipo}}</h3>
                <h3>Safra: {{$cafe->safra}}</h3>
                <h3>Quantidade: {{$cafe->quantidade}}</h3>
                <h3>Data: {{$cafe->data}}</h3>
                <h3>Aceitação Global: {{$cafe->aceitação_global}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Aroma: {{$cafe->aroma}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Sabor: {{$cafe->sabor}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Textura: {{$cafe->textura}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Nota Aparência: {{$cafe->aparencia}}<div class="fa-solid fa-star text-warning"></div></h3>
                <h3>Observação: {{$cafe->observacao}}</h3>

                @if($cafe->FotoCafes)
                    <img src="{{ $cafe->getImageURL() }}" class="card align-self-center" style="width: 15rem;" alt="foto">
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

