<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class=""><i class="fa-solid fa-magnifying-glass"></i>Pesquisar por perfil</h5>
    </div>
    <div class="card-body">

        <form method="GET">
            <input value="{{ request('seachPerfil', '') }}" placeholder="..." class="form-control w-100" type="text"
                name="seachPerfil">{{-- ao clicar  no botão o conteudo escrito na input de nome seach sera enviado para a roate --}}
            <button class="btn btn-primary m-4"> Pesquisar</button>
        </form>

    </div>
</div>
