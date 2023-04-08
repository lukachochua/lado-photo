<x-admin-layout>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            @foreach ($posts as $post)
            <div class="w-full md:w-1/4 px-4 mb-8 flex-grow">
                <img src="{{ asset("storage/images/{$post->photo}") }}" alt="" class="w-full h-[300px] object-cover">
                <p class="font-bold text-center text-green-600">{{ $post->description }}</p>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </form>

                <a href="{{ route('posts.edit', $post) }}" class="inline-block">
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        UPDATE
                    </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-admin-layout>