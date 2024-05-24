
<div class="modal fade" id="DeleteModal{{ $cafe->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja mesmo deletar este produto "{{$cafe->nome}} ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('cafe.destroy', $cafe->id) }}">
                    @csrf
                    @method('delete')
                    <button
                        class="btn btn-danger fa-solid fs-3">Deletar</button>
                </form>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>