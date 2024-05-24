<div class="modal fade" id="exampleModal{{ $queijo->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $queijo->nome }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <h3>Nome: {{ $queijo->nome }}</h3>
                <h3>Tipo: {{ $queijo->tipo }}</h3>
                <h3>Quantidade: {{ $queijo->quantidade }}</h3>
                <h3>Avaliação Geral: {{ $queijo->avaliacao_geral }}</h3>
                <h3>Textura: {{ $queijo->textura }}</h3>
                <h3>Aparência: {{ $queijo->aparencia }}</h3>
                <h3>Aroma: {{ $queijo->aroma }}</h3>
                <h3>Sabor: {{ $queijo->sabor }}</h3>
                <h3>Sensação na Boca: {{ $queijo->sensação_na_boca }}</h3>
                <h3>Sonoridade: {{ $queijo->sonoridade }}</h3>
                <h3>Observação: {{ $queijo->observacao }}</h3>


                @if ($queijo->FotoQueijo)
                    <img src="{{ $queijo->getImageURL() }}" class="card align-self-center" style="width: 15rem;"
                        alt="foto">
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
