<div class="bg-white w-25 min-vh-100 d-flex flex-column align-items-center">
    <a href="#"><i class="fs-1 mt-5 fa-regular fa-user text-decoration-none text-dark"></i></a>
    <p>usuário<p>
    
    <div class="container d-flex flex-column align-items-center">
        <a href="{{route('inventario.index',Auth::id())}}" class="fs-5 mt-3 text-decoration-none text-dark">Inventario</a>
        <button type="button" class="border-0 fs-5 mt-5 bg-white"
            data-bs-toggle="modal"data-bs-target="#OpcoesModal{{ Auth::id() }}" >
        Novas Entradas</button>
        @include('inventario.popOverOpcoes', ['id' => Auth::id()])
        <a href="{{route('Homepage.index')}}"class="mt-5 fs-5 text-decoration-none text-dark">Sair</a>  
    </div>
</div>