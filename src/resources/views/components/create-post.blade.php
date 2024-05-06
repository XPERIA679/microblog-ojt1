<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsfeed</title>
</head>
<body>
    
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

<div class="post-form">
    <h2>Create a Post</h2>
    <form action="/create-post" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea id="content" name="content" placeholder="Write something..."></textarea><br>
        @error('content')
            <div class="error">{{ $message }}</div>
        @enderror
        <div id="file-input-container">
            <input type="file" name="image" accept=".jpg, .jpeg, .png">
            @error('postMedia')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <input type="text" name="user_id" value="{{ auth()->id() }}" hidden>
        <button type="submit">Post</button>
    </form>
    <h2>Display posts for Testing</h2>
    <table>
    <thead>
        <tr>
            <th>User ID</th>
            <th>Content</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($postsAndMedia as $postAndMedium)
        <tr>
            <td>{{ $postAndMedium['post']->user_id }}</td>
            <td>{{ $postAndMedium['post']->content }}</td>
            <td>
                @if ($postAndMedium['postMedium'] && $postAndMedium['postMedium']->image)
                    <img src='{{ "../../{$postAndMedium['postMedium']->image}" }}' alt="Post Image" style="width: 100px; height: 100px;">
                @endif
            </td>
            <td>
                @php
                    $likedByCurrentUser = false;
                    foreach ($allLikedPosts as $likedPost) {
                        if ($likedPost['user_id'] == auth()->id() && $likedPost['post_id'] == $postAndMedium['post']->id) {
                            $likedByCurrentUser = true;
                            break;
                        }
                    }
                @endphp
                @if ($likedByCurrentUser)
                    {{-- If the current user has liked the post, display a "Dislike" button --}}
                    <form action="/unlike-post/{{ $postAndMedium['post']->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Unlike</button>
                    </form>
                @else
                    {{-- If the user has not liked the post, display a "Like" button --}}
                    <form action="/like-post/{{ $postAndMedium['post']->id }}" method="POST">
                        @csrf
                        <button type="submit">Like</button>
                    </form>
                @endif
            </td>

            @if(auth()->id() == $postAndMedium['post']->user_id)
                <td>
                    <form action="/edit-post-page/{{ $postAndMedium['post']->id }}" method="GET">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="/delete-post/{{ $postAndMedium['post']->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="text" name="userPostToDeleteId" value="{{$postAndMedium['post']->id}}" hidden>
                        <button type="submit">Delete</button>
                    </form>
                </td>
            @endif
            <td>
                Likes: {{ $postAndMedium['post']->postLike()->count() }}
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

</body>
</html>
