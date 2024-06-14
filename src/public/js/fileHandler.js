document.getElementById('fileInput').addEventListener('change', function() {
    const file = this.files[0];
    const previewContainer = document.getElementById('imagePreview');

    previewContainer.innerHTML = '';
    previewContainer.classList.add('hidden');

    if (file) {
        const reader = new FileReader();
        reader.onload = function() {
            previewContainer.innerHTML = `<img src="${reader.result}" class="w-full h-full object-cover">`;
            previewContainer.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('fileInput2').addEventListener('change', function() {
    const file = this.files[0];
    const previewContainer2 = document.getElementById('imagePreview2');

    previewContainer2.innerHTML = '';
    previewContainer2.classList.add('hidden');

    if (file) {
        const reader = new FileReader();
        reader.onload = function() {
            previewContainer2.innerHTML = `<img src="${reader.result}" class="w-full h-full object-cover">`;
            previewContainer2.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
});

document.getElementById('removeImageButton').addEventListener('click', function() {

    var image = document.getElementById('postImage');
    var shouldRemoveImageInput = document.getElementById('shouldRemoveImage');

    if (image.style.display === 'none') {
        image.style.display = 'block';
        shouldRemoveImageInput.value = 'false';
    } else {
        image.style.display = 'none';
        shouldRemoveImageInput.value = 'true';
    }
});
