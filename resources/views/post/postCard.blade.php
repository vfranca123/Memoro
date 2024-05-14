<div class="m-2 d-flex flex-column bg-white rounded" style="width: 40em;">

    <h2>{{ $post->getNome() }}</h2>
    <p class="m-2 fs-3">{{ $post->content }}</p>
    <hr>
    <img src="{{ $post->getImageURL() }}" class="card align-self-center" style="width: 15rem;" alt="ft de perfil">
    <hr>
    <form action="">

        <button type="submit" class="border-0 bg-white fs-3 m-2"><i class="fa-regular fa-heart"></i></button>
    </form>
</div>
