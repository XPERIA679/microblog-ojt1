<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    
    <header>
        <div class="inner_header">
            <div class="logo_container">
                <a href="/"><img src="assets/images/logo.png" alt="homepage"></a>
            </div>
            <ul class="navigation">
                <li><a href="/">My Profile</a></li>
                <li><a href="/">⌂</a></li>
                <li><a href="/">☰</a></li>
            </ul>
        </div>
    </header>
    <div class="post-form">
        <h2>Edit Post</h2>
        <form action="/edit-post" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <textarea id="content" name="editedContent" placeholder="Write something...">
                {{ $postAndMediaToEdit['userPostToEdit']->content }}
            </textarea><br>
            @error('content')
                <div class="error">{{ $message }}</div>
            @enderror

            <input type="file" name="editedImage" accept=".jpg, .jpeg, .png">
            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror

            <input type="text" name="userPostToEditId" 
            value="{{$postAndMediaToEdit['userPostToEdit']->id}}" hidden>

            @if ($postAndMediaToEdit['postMediaToEdit'] != null)
                <div id="imageContainer">
                    <img id="postImage" src='{{ "../../{$postAndMediaToEdit['postMediaToEdit']->image}" }}' alt="No Post Image">
                    <input type="text" name="postMediaToEditId" value="{{$postAndMediaToEdit['postMediaToEdit']->id}}" hidden>
                    <input type="hidden" name="shouldRemoveImage" id="shouldRemoveImage" value="false">
                    <button type="button" id="removeImageButton">Remove Image</button>
                </div>
            @endif

            <input type="submit" value="Update">
        </form>
    </div>

</body>
</html>

<script>
    document.getElementById('removeImageButton').addEventListener('click', function() {
        // Toggle the visibility of the image
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
</script>





