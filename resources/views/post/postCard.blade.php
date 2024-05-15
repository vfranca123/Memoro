<div class="d-flex">
    <div class="m-2"><a
            href="{{ route('inventario.index', $post->getDono()) }}"class="fs-1 text-light fa-regular fa-user"></a></div>

    <div class="m-2 d-flex flex-column bg-white rounded" style="width: 40em;">

        <h2>{{ $post->getDono()->nome }}</h2>
        <p class="m-2 fs-3">{{ $post->content }}</p>
        <hr>
        <img src="{{ $post->getImageURL() }}" class="card align-self-center" style="width: 15rem;" alt="foto">
        <hr>
        <form action="">
            <button type="submit" class="border-0 bg-white fs-3 m-2"><i class="fa-regular fa-heart"></i></button>
        </form>
    </div>
</div>
