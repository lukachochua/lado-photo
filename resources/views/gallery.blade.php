<x-layout>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            @foreach ($posts as $post)
            <div class="w-full md:w-1/4 px-4 mb-8">
                <img src="{{ asset("{$post->photo}") }}" alt="" class="w-full">
                <p class="font-bold text-center text-green-600">{{ $post->description }}</p>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>