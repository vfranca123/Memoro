<div class="d-flex">
    <div class="card m-2 d-flex flex-column bg-white rounded" style="width: 30rem;">

        <p class="m-2 fs-3">{{ $post->content }}</p>
        @if ($post->getImageURL())
            <hr>
            <img src="{{ $post->getImageURL() }}" class="card align-self-center" style="width: 15rem;" alt="foto">
            <hr>
        @endif
        <div class="d-flex m-2">
            @if (Auth::user()->likesPost($post))
                <form action="{{ route('Post.unlike', $post) }}" class="d-flex flex-column m-2">
                    @csrf
                    <button type="submit" class="border-0 bg-white fs-3"><i class="fa-solid fa-heart"></i></button>
                    <span class="fs-5 align-self-center">{{ $post->likes()->count() }}</span>
                </form>
            @else
                <form action="{{ route('Post.like', $post) }}" class="d-flex flex-column m-2">
                    @csrf
                    <button type="submit" class="border-0 bg-white fs-3"><i class="fa-regular fa-heart"></i></button>
                    <span class="fs-5 align-self-center">{{ $post->likes()->count() }}</span>
                </form>
            @endif

            @if (Auth::id() === $post->user_id)
                <button type="button" class="border-0 bg-white text-danger fs-3 mb-4 fa-solid fa-trash "
                    data-bs-toggle="modal"data-bs-target="#DeleteModal{{ $post->id }}">
                </button>
                @include('post.PopOverDelete', ['post' => $post])
            @endif
        </div>

    </div>
</div>
