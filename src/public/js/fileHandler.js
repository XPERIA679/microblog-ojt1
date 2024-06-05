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
