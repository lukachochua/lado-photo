<x-layout>
    <h1 class="text-black text-2xl font-extrabold flex justify-center mt-20 mb-8 hover:text-orange-400 select-none">Categories</h1>
    <div class="flex justify-center items-center">
        <div class="flex justify-center w-full">
            @foreach ($filteredPosts as $index => $post)
                <div class="flex mb-6 items-center justify-center mx-2" id="vertical">
                    <a href="{{ route('categories', ['category' => $post->category_id]) }}" class="flex flex-col items-center">
                        <img src="{{ asset("storage/images/{$post->photo}") }}" class="object-contain rounded-xl hover:shadow-2xl" style="max-width: 200px;">
                        <h1 class="text-black text-center hover:text-orange-400 text-xl font-bold">{{ $post->category->name }}</h1>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>