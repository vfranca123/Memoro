@extends('layout.layout')

@section('content')
    <div class=" container-xl bg-black rounded-5 vh-100 mt-5 mb-5 d-flex align-items-center justify-content-center flex-column">
        <img src="{{url('storage/img/logo.png')}}" alt=" logo">
        <div class="container-sm w-50">

            <form action="" class="d-flex align-items-center justify-content-center flex-column ">
                <h2 class="text-light align-self-start mt-5">Email:</h2>
                <div class="input-group input-group-lg">
                    <input type="email" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>

                <h2 class="text-light align-self-start mt-5">Senha:</h2>
                <div class="input-group input-group-lg">
                    <input type="password" class="form-control" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-lg">
                </div>
                <a href="#" class=" btn btn-warning m-4 ">Entrar</a>
            </form>
        </div>
    </div>
@endsection
