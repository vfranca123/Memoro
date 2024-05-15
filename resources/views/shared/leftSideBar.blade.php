<div class="bg-white w-25 min-vh-100 d-flex flex-column align-items-center">
    <a href="#"><i class="fs-1 mt-5 fa-regular fa-user text-decoration-none text-dark"></i></a>
    <p>ususário<p>
    
    <div class="container d-flex flex-column align-items-center">
        <a href="{{route('inventario.index',Auth::id())}}" class="fs-5 mt-3 text-decoration-none text-dark">Inventario</a>
        <a href="{{ route('inventario.adicionarProduto.index', ['id' => Auth::id()]) }}" class="mt-5 fs-5 text-decoration-none text-dark">Novas Entradas</a>
        <a href="{{route('Homepage.index')}}"class="mt-5 fs-5 text-decoration-none text-dark">Sair</a>  
    </div>
</div>