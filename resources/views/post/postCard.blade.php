<div class="d-flex">
    <div class="p-2 d-flex flex-column align-items-center"><a
            href="{{ route('inventario.index', $post->getDono()) }}"class=" fs-1 text-light fa-regular fa-user"></a>
            <h2 class="m-2 text-light">{{ $post->getDono()->nome }}</h2>
    </div>

    <div class="m-2 d-flex flex-column bg-white rounded" style="width: 40em;">

        <p class="m-2 fs-3">{{ $post->content }}</p>
        <hr>


        <img src="{{ $post->getImageURL() }}" class="card align-self-center" style="width: 15rem;" alt="foto">
        <hr>
        <div class="d-flex">
            <form action="">
                <button type="submit" class="border-0 bg-white fs-3 m-2"><i class="fa-regular fa-heart"></i></button>
            </form>
           
            @if (Auth::id() === $post->user_id) 
                <button type="button" class="border-0 bg-white text-danger fs-3 fa-solid fa-trash "
                data-bs-toggle="modal"data-bs-target="#DeleteModal{{ $post->id }}">
                </button>
                @include('post.PopOverDelete', ['post' => $post])
                
            @endif
        </div>

    </div>
</div>
