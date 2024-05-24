<div class="modal fade" id="exampleModal{{ $tabaco->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $tabaco->nome }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>Detalhes do Tabaco</h1>
                <h3>Nome: {{ $tabaco->nome }}</h3>
                <h3>Tipo: {{ $tabaco->tipo }}</h3>
                <h3>Quantidade: {{ $tabaco->quantidade }}</h3>
                <h3>Cor: {{ $tabaco->cor }}</h3>
                <h3>Textura: {{ $tabaco->textura }}</h3>
                <h3>Corte: {{ $tabaco->corte }}</h3>
                <h3>Sabor Inicial: {{ $tabaco->sabor_inicial }}</h3>
                <h3>Complexidade: {{ $tabaco->complexidade }}</h3>
                <h3>Persistência: {{ $tabaco->persistência }}</h3>
                <h3>Equilíbrio: {{ $tabaco->equilibrio }}</h3>
                <h3>Uniformidade da Queima: {{ $tabaco->uniformidade_da_queima }}</h3>
                <h3>Velocidade da Queima: {{ $tabaco->velocidade_da_queima }}</h3>
                <h3>Resíduos de Queima: {{ $tabaco->resíduos_de_queima }}</h3>
                <h3>Sensação na Boca: {{ $tabaco->sensação_na_boca }}</h3>
                <h3>Satisfação Geral: {{ $tabaco->satisfação_geral }}</h3>
                <h3>Data: {{ $tabaco->data }}</h3>
                <h3>Observação: {{ $tabaco->observacao }}</h3>

                @if ($tabaco->FotoTabaco)
                    <img src="{{ $tabaco->getImageURL() }}" class="card align-self-center" style="width: 15rem;"
                        alt="foto">
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
