<form action="{{ route('Post.store') }}" method="POST" enctype="multipart/form-data" class="mt-4 col-md-12">
    @csrf
    <div class="input-group input-group-xl">
        <span class="input-group-text rou border-primary"><i class="fa-solid fa-pencil"></i></span>
        <input type="text" class="form-control rounded-end border-primary" name="comentario">
    </div>
    <input type="file" class="form-control rounded-2 border-primary" name='img'>
    <button type="submit" class="btn btn-primary">enviar</button>
</form>
