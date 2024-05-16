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
                    @include('inventario.popOver',['produto' => $produto])

                    <form method="POST" action="{{ route('produto.destroy',$produto->id) }}">
                        @csrf
                        @method('delete')
                        <button
                            class="border-0 bg-secondary fa-solid fa-trash text-decoration-none text-danger fs-3"></button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
