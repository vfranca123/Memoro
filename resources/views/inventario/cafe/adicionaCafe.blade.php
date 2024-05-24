@extends('layout.layout2')

@section('content')
    <div class="m-4 d-flex flex-column">
        <h1 class="m-4">Novo Café:</h1>

        <form action="{{ route('produto.cafe.store') }}" method="POST" enctype="multipart/form-data"
            class="d-flex align-items-center justify-content-center flex-column">
            @csrf
            <h2 class="text-dark align-self-start mt-5">Nome Do Produto:</h2>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="Sizing example input" name="nome"
                    aria-describedby="inputGroup-sizing-lg">
            </div>

            </div>

            <h2 class="text-dark align-self-start mt-5">Safra:</h2>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="Sizing example input" name="Safra"
                    aria-describedby="inputGroup-sizing-lg">
            </div>

            <h2 class="text-dark align-self-start mt-5">Quantidade Disponivel:</h2>
            <div class="input-group input-group-lg">
                <input type="number" class="form-control" aria-label="Sizing example input" name="Quantidade_Disponive"
                    aria-describedby="inputGroup-sizing-lg">
            </div>

            <h2 class="text-dark align-self-start mt-5">Imagem:</h2>
            <div class="input-group input-group-lg">
                <input type="file" class="form-control" aria-label="Sizing example input" name="img"
                    aria-describedby="inputGroup-sizing-lg">
            </div>

            <h2 class="mt-2 align-self-start">Detalhe Da Experiência</h2>
            <h2 class="text-dark align-self-start mt-5">Data:</h2>
            <div class="input-group input-group-lg">
                <input type="data" class="form-control" aria-label="Sizing example input" name="data"
                    aria-describedby="inputGroup-sizing-lg">
            </div>

            <h2 class="align-self-start m-3">Aceitação Global:</h2>
            <div class="col-md-6 d-flex align-self-start m-3 bg-secondary rounded-3">
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">1-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aceitação_global" value="1">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">2-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aceitação_global" value="2">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">3-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aceitação_global" value="3">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">4-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aceitação_global" value="4">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">5-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aceitação_global" value="5">
                </div>
            </div>

            <h2 class="align-self-start m-3">Aparencia:</h2>
            <div class="col-md-6 d-flex align-self-start m-3 bg-secondary rounded-3">
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">1-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aparencia" value="1">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">2-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aparencia" value="2">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">3-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aparencia" value="3">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">4-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aparencia" value="4">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">5-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aparencia" value="5">
                </div>
            </div>

            <h2 class="align-self-start m-3">Aroma:</h2>
            <div class="col-md-6 d-flex align-self-start m-3 bg-secondary rounded-3">
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">1-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aroma" value="1">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">2-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aroma" value="2">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">3-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aroma" value="3">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">4-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aroma" value="4">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">5-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="aroma" value="5">
                </div>
            </div>

            <h2 class="align-self-start m-3">Sabor:</h2>
            <div class="col-md-6 d-flex align-self-start m-3 bg-secondary rounded-3">
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">1-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="sabor" value="1">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">2-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="sabor" value="2">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">3-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="sabor" value="3">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">4-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="sabor" value="4">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">5-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="sabor" value="5">
                </div>
            </div>

            <h2 class="align-self-start m-3">textura:</h2>
            <div class="col-md-6 d-flex align-self-start m-3 bg-secondary rounded-3">
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">1-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="textura"
                        value="1">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">2-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="textura"
                        value="2">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">3-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="textura"
                        value="3">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">4-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="textura"
                        value="4">
                </div>
                <div class="form-check d-flex">
                    <p class="fs-2 text-light">5-</p>
                    <input class="form-check-input fs-2 m-1 mt-2" type="radio" name="textura"
                        value="5">
                </div>
            </div>



            <h2 class="text-dark align-self-start mt-5">Observação:</h2>
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="Sizing example input" name="Observacao"
                    aria-describedby="inputGroup-sizing-lg">
            </div>
            <input type="submit" class="btn btn-success btn-lg m-4" value="Enviar">

        </form>


    </div>
@endsection
