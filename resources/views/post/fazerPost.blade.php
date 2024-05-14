<form action="{{ route('Post.store') }}" method="POST" enctype="multipart/form-data" class="mt-4 col-md-10">
    @csrf
    <div class="input-group input-group-lg">
        <span class="input-group-text rounded-0"><i class="fa-solid fa-pencil"></i></span>
        <input type="text" class="form-control border-0 rounded-0" name="comentario">
    </div>
    <input type="file" class="form-control rounded-0" name='img'>
    <button type="submit" class="btn btn-primary">enviar</button>
</form>
