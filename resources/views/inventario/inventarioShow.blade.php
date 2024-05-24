@extends('layout.layout2')

@section('content')
    <div class="m-4 d-flex flex-column">
        <h1 class="m-4">Inventário</h1>

        <div class="d-flex justify-content-between bg-secondary-subtle rounded-top-3">


            <div class="col-md-2">
                <h3>Nome:</h3>
            </div>
            <div class="col-md-2">
                <h3>Tipo:</h3>
            </div>
            <div class="col-md-2">
                <h3>Quantidade:</h3>
            </div>
            <div class="col-md-2">
                <h3>Avaliação Geral:</h3>
            </div>
            <div class="col-md-2">
                <h3>Controles:</h3>
            </div>
        </div>

        @foreach ($produtos as $produto)
            <div class="d-flex justify-content-between bg-secondary ">
                <div class="col-md-2">
                    <h3 class="text-white">{{ $produto->nome }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $produto->tipo }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $produto->quantidade }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $produto->avaliacao_geral }}<i class="fa-solid fa-star text-warning"></i></h3>
                </div>
                <div class="col-md-2 d-flex justify-content-around mt-2">

                    <button type="button" class="border-0 bg-secondary text-white fs-3 fa-regular fa-clipboard"
                        data-bs-toggle="modal" data-bs-target="#exampleModal{{ $produto->id }}">
                    </button>
                    @include('inventario.popOver', ['produto' => $produto])

                    @if (Auth::id() === $produto->user_id)
                        <button type="button" class="border-0 bg-secondary text-danger fs-3 fa-solid fa-trash "
                            data-bs-toggle="modal"data-bs-target="#DeleteModal{{ $produto->id }}">
                        </button>
                        @include('inventario.PopOverDelete', ['produto' => $produto])
                    @endif
                </div>
            </div>
        @endforeach

        @foreach ($cafes as $cafe)
            <div class="d-flex justify-content-between bg-success">
                <div class="col-md-2">
                    <h3 class="text-white">{{ $cafe->nome }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $cafe->tipo }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $cafe->quantidade }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $cafe->aceitação_global }}<i class="fa-solid fa-star text-warning"></i></h3>
                </div>
                <div class="col-md-2 d-flex justify-content-around mt-2">

                    <button type="button" class="border-0 bg-success text-white fs-3 fa-regular fa-clipboard"
                        data-bs-toggle="modal" data-bs-target="#exampleModal{{ $cafe->id }}">
                    </button>
                    @include('inventario.cafe.popOver', ['cafe' => $cafe])

                    @if (Auth::id() === $cafe->user_id)
                        <button type="button" class="border-0 bg-success text-danger fs-3 fa-solid fa-trash "
                            data-bs-toggle="modal"data-bs-target="#DeleteModal{{ $cafe->id }}">
                        </button>
                        @include('inventario.cafe.PopOverDelete', ['cafe' => $cafe])
                    @endif
                </div>
            </div>
        @endforeach

        @foreach ($tabacos as $tabaco)
            <div class="d-flex justify-content-between bg-dark ">
                <div class="col-md-2">
                    <h3 class="text-white">{{ $tabaco->nome }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $tabaco->tipo }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $tabaco->quantidade }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $tabaco->satisfação_geral }}<i class="fa-solid fa-star text-warning"></i>
                    </h3>
                </div>
                <div class="col-md-2 d-flex justify-content-around mt-2">

                    <button type="button" class="border-0 bg-dark text-white fs-3 fa-regular fa-clipboard"
                        data-bs-toggle="modal" data-bs-target="#exampleModal{{ $tabaco->id }}">
                    </button>
                    @include('inventario.tabaco.popOver', ['tabaco' => $tabaco])

                    @if (Auth::id() === $tabaco->user_id)
                        <button type="button" class="border-0 bg-dark text-danger fs-3 fa-solid fa-trash "
                            data-bs-toggle="modal"data-bs-target="#DeleteModal{{ $tabaco->id }}">
                        </button>
                        @include('inventario.tabaco.PopOverDelete', ['tabaco' => $tabaco])
                    @endif
                </div>
            </div>
        @endforeach

        
        @foreach ($queijos as $queijo)
            <div class="d-flex justify-content-between bg-warning ">
                <div class="col-md-2">
                    <h3 class="text-white">{{ $queijo->nome }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $queijo->tipo }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $queijo->quantidade }}</h3>
                </div>
                <div class="col-md-2">
                    <h3 class="text-white">{{ $queijo->avaliacao_geral }}<i class="fa-solid fa-star text-warning"></i>
                    </h3>
                </div>
                <div class="col-md-2 d-flex justify-content-around mt-2">

                    <button type="button" class="border-0 bg-warning text-white fs-3 fa-regular fa-clipboard"
                        data-bs-toggle="modal" data-bs-target="#exampleModal{{ $queijo->id }}">
                    </button>
                    @include('inventario.queijo.popOver', ['queijo' => $queijo])

                    @if (Auth::id() === $queijo->user_id)
                        <button type="button" class="border-0 bg-warning text-danger fs-3 fa-solid fa-trash "
                            data-bs-toggle="modal"data-bs-target="#DeleteModal{{ $queijo->id }}">
                        </button>
                        @include('inventario.queijo.PopOverDelete', ['queijo' => $queijo])
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
