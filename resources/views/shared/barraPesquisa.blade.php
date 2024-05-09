<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class=""><i class="fa-solid fa-magnifying-glass"></i>Pesquisar</h5>
    </div>
    <div class="card-body">
        
        <form  method="GET">
            <input value="{{request('seach','')}}" placeholder="..." class="form-control w-100" type="text" name="seach">{{--ao clicar  no botão o conteudo escrito na input de nome seach sera enviado para a roate--}}
            <button class="btn btn-warning m-4"> Pesquisar</button>
        </form>
    
    </div>
</div>