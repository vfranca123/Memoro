@extends('layout.layout')

@section('content')
    @include('layout.navBar')
    @include('shared.flash ')
    <div class="d-flex">
        <div class="p-2 w-100 d-flex justify-content-center">
            @include('post.fazerPost')
        </div>

        <div class="p-2 flex-md-shrink-1">
            @include('post.barraPesquisa')
        </div>
    </div>

    <div>

        <div class="p-2 w-100 d-flex align-items-center flex-column">

            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    {{-- Percorre as ideas e printa elas --}}
                    <div>
                        {{ $post->links($post) }}
                    </div>
                @endforeach
            @else
                <h1 class="m-4 text-white">nem um post encontrado</h1>
            @endif
        </div>

    @endsection
