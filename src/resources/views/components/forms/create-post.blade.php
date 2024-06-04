<div class="bg-mycream rounded-lg">
    <form action="/create-post" method="POST" enctype="multipart/form-data" class="bg-mycream shadow-lg rounded-lg mb-6 p-4 items-center">
        @csrf
        <textarea name="content" id="textarea" maxlength="140" rows="3" placeholder="Share your thoughts.."
            class="w-full rounded-lg p-2 text-sm bg-mywhite border-transparent hover:drop-shadow-md rounded-tg placeholder-mygray resize-none overflow-x-hidden"
            autofocus></textarea>
        @error('content')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="text-sm" id="theCount">
            <span id="current">0</span>
            <span id="maximum">/ 140</span>
        </div>
        <div class="flex justify-between mt-2">
            <div class="flex items-center">
                <div class="relative inline-block cursor-pointer mr-4">
                    <x-svgs.media-icon />
                    <input type="file" name="image" accept=".jpg, .jpeg, .png" id="fileInput" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                </div>
                <div id="imagePreview" class="w-20 h-20 rounded-lg overflow-hidden shadow-md hidden"></div>
            </div>
            @error('postMedia')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <input type="text" name="user_id" value="{{ auth()->id() }}" hidden>
            <button href="submit"
                class="flex items-center py-2 px-4 rounded-lg text-sm hover:bg-mydark hover:text-mycream bg-mywhite text-mydark shadow-lg transition-all">
                Post
                <x-svgs.post-icon />
            </button>
        </div>
    </form>
</div>
