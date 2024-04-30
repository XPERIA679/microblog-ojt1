<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsfeed</title>
</head>
<body>
    <!--
    <header>
        <div class="inner_header">
            <div class="logo_container">
                <a href="/"><img src="assets/images/logo.png" alt="homepage"></a>
            </div>
            <ul class="navigation">
                <a href=""><li>My Profile</li></a>
                <a href=""><li><span>⌂</span></li></a>
                <a href=""><li><span>☰</span></li></a>
            </ul>
        </div>
    </header>
    -->
    
<div class="post-form">
    <h2>Create a Post</h2>
    <form action="/create-post" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea id="content" name="content" placeholder="Write something..."></textarea><br>
        @error('content')
            <div class="error">{{ $message }}</div>
        @enderror
        <div id="file-input-container">
            <input type="file" name="postMedia" accept=".jpg, .jpeg, .png">
            @error('postMedia')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <input type="text" name="user_id" value="{{ auth()->id() }}" hidden>
        <button type="submit">Post</button>
    </form>
</div>

</body>
</html>
