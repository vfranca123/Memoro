<form action="{{ route('Post.store') }}" method="POST" enctype="multipart/form-data" class="d-flex flex-column mt-4 col-md-12">
    @csrf
    <div class="input-group input-group-xl">
        <span class="input-group-text rou border-primary"><i class="fa-solid fa-pencil"></i></span>
        <input type="text" class="form-control rounded-end border-primary" name="comentario">
    </div>
    
    <label for="photoInput" class="btn">
        <i class="fa-solid fa-camera-retro"></i> Tirar Foto
    </label>
    <input type="file" accept="image/*" capture="environment" class="form-control-file d-none" name="img" id="photoInput" >
    
    <label for="uploadphoto" class="btn">
        <i class="fa-solid fa-folder-open"></i>fazer upload da foto 
    </label>
    <input type="file" class="form-control rounded-2 border-primary  d-none" id="uploadphoto" name='img'>

    <button type="submit" class="btn btn-primary col-md-3 align-self-center">enviar</button>
</form>


<video id="video" width="100%" height="auto" style="display: none;"></video>

<script>
    document.getElementById('photoInput').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                const video = document.getElementById('video');
                video.src = reader.result;
                video.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('postForm').addEventListener('submit', function (e) {
        const video = document.getElementById('video');
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        const imgDataUrl = canvas.toDataURL('image/jpeg');
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'photo';
        hiddenInput.value = imgDataUrl;
        this.appendChild(hiddenInput);
    });
</script>