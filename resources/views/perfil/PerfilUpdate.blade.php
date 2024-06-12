@extends('layout.layout2')

@section('content')
    <div class="m-4 d-flex flex-column">
        <h1 class="m-4">Editando perfil:</h1>
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="{{ route('perfil.update', $user) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3 col-md-3">
                <label for="exampleInputEmail1" class="form-label">Nome:</label>
                <input type="text" class="form-control bg-body-secondary " id="nome" aria-describedby="emailHelp"
                    name='nome' placeholder="{{ $user->nome }}">
            </div>


            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword1" class="form-label">Senha:</label>
                <input type="password" class="form-control bg-body-secondary" id="exampleInputPassword1" name="senha"
                    placeholder="**********">
            </div>



            <button type="submit" class="btn btn-primary">enviar</button>

        </form>
    </div>
@endsection
