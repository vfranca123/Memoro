@extends('layout.layout')

@section('content')
    @include('layout.navBar')
    @include('shared.flash')
    <div class="d-flex">
        <div class="p-2 col-md-3">
            @include('perfil.barraPesquisaPerfil')
        </div>

        <div class="p-2 col-md-6">
            @include('post.fazerPost')
        </div>

        <div class="p-2 col-md-3">
            @include('post.barraPesquisa')
        </div>
    </div>
    
        <div class="d-flex align-items-center flex-column">

            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div>
                        {{ $post->links($post) }}
                    </div>
                @endforeach
            @else
                <h1 class="m-4 text-white">nenhum post encontrado</h1>
            @endif
        </div>

    @endsection
