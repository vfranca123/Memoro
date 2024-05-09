@extends('layout.layout')

@section('content')
    <div class=" container-xl bg-black rounded-5  mt-4 mb-4 d-flex align-items-center justify-content-center flex-column">
        <img src="{{ url('storage/img/logo.png') }}" alt=" logo" class="card bg-black mt-2">
        <div class="container-sm w-50 ">

            <form action="{{ route('Cadastro.store') }}" class="d-flex align-items-center justify-content-center flex-column "
                method="POST" enctype="multipart/form-data">
                @csrf

                <h2 class="text-light align-self-start mt-5">Nome:</h2>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" aria-label="Sizing example input" name="nome"
                        aria-describedby="inputGroup-sizing-lg">
                </div>

                <h2 class="text-light align-self-start mt-5">Idade:</h2>
                <div class="input-group input-group-lg">
                    <input type="number" class="form-control" aria-label="Sizing example input" name="idade"
                        aria-describedby="inputGroup-sizing-lg">
                </div>

                <h2 class="text-light align-self-start mt-5">Email:</h2>
                <div class="input-group input-group-lg">
                    <input type="email" class="form-control" aria-label="Sizing example input" name="email"
                        aria-describedby="inputGroup-sizing-lg">
                </div>

                <h2 class="text-light align-self-start mt-5">Senha:</h2>
                <div class="input-group input-group-lg">
                    <input type="password" class="form-control" aria-label="Sizing example input" name="senha"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <input type="submit" class=" btn btn-warning m-4 " value="Cadastrar ">
            </form>

        </div>
        <a href="{{ route('login') }}" class=" text-center">Entrar</a>
    </div>
@endsection
