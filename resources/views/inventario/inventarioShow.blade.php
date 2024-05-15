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
                    <a href="#" class="fa-solid fa-pencil  text-decoration-none text-white fs-3"></a>
                    <a href="#" class="fa-solid fa-trash text-decoration-none text-danger fs-3"></a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
