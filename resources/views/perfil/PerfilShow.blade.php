@extends('layout.layout')

@section('content')
@include('layout.navBar')
<div class="d-flex">
    <div class="container bg-white rounded-4 mt-4 h-50">
        <div class="m-4 d-flex flex-column">
            <h1 class="m-4">Perfil</h1>

            <h1>{{ $user->nome }}</h1>

            <div class="mb-3 col-md-3">
                <label for="exampleInputEmail1" class="form-label">Email address:</label>
                <label class="form-control bg-body-secondary " id="exampleInputEmail1"
                    aria-describedby="emailHelp">{{ $user->email }}</label>
            </div>

            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <label class="form-control bg-body-secondary " id="exampleInputEmail1"
                    aria-describedby="emailHelp">*********</label>
            </div>

            @if (Auth::id() != $user->id)
                <div class="mt-3">
                    @if (Auth::user()->follows($user))
                        <form method="POST" action="{{ route('users.unfollow', $user) }}">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm m-1"> Unfollow </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('users.follow', $user) }}">
                            @csrf
                            <button class="btn btn-primary btn-sm"> Follow </button>
                        </form>
                    @endif
                </div>
            @endif
            @if (Auth::id() === $user->id)
                <a href="{{ route('perfil.updateIndex', $user) }}">Editar</a>
            @endif
            <a href="{{ route('inventario.index',$user->id) }}">Ver Inventario <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="container d-flex flex-column align-items-center">
        <h1 class="text-white">Posts do perfil</h1>
        @if (count($posts) > 0)
                @foreach ($posts as $post)
                   
                    <div>
                        {{ $post->links2($post) }}
                    </div>
                @endforeach
            @else
                <h1 class="m-4 text-white">nenhum post encontrado</h1>
            @endif
    </div>
</div>
@endsection
