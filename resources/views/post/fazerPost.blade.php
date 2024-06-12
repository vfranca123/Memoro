<form action="{{ route('Post.store') }}" method="POST" enctype="multipart/form-data" class="card d-flex flex-column">
    @csrf
    <div class="input-group input-group-xl">
        <input type="text" class="form-control w-100" name="comentario" placeholder="conteudo do post...">
    </div>
    
    <label for="photoInput" class="btn">
        <i class="fa-solid fa-camera-retro"></i> Tirar Foto
    </label>
    <input type="file" accept="image/*" capture="environment" class="form-control-file d-none" name="img" id="photoInput" onchange="previewImage(event)">
    
    <label for="uploadphoto" class="btn">
        <i class="fa-solid fa-folder-open"></i> Fazer upload da foto
    </label>
    <input type="file" class="form-control rounded-2 border-primary d-none" id="uploadphoto" name="img" onchange="previewImage(event)">
    
    <div id="imagePreviewContainer" style="display: none" class="col-md-3 border align-self-center">
        <img id="imagePreview" src="" alt="Image preview" class="card" style="width: 15rem;">
    </div>
    
    <button type="submit" class="btn btn-primary col-md-3 align-self-center">Enviar</button>
</form>

<script>
    function previewImage(event) {
        const input = event.target;
        const previewContainer = document.getElementById('imagePreviewContainer');
        const previewImage = document.getElementById('imagePreview');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block';
            }
            
            reader.readAsDataURL(input.files[0]);
        } else {
            previewContainer.style.display = 'none';
            previewImage.src = '';
        }
    }
</script>


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