<x-layout :categories="$categories">
    <div class="flex flex-col items-center justify-center">
        @foreach ($chunkIndexes as $index)
            @if ($index < count($chunkedVerticalPosts))
                <div class="flex mb-4 items-center justify-center">
                    @foreach ($chunkedVerticalPosts[$index] as $post)
                        <img src="{{ asset("storage/images/{$post->photo}") }}" class="w-100 object-cover rounded-lg mr-1">
                    @endforeach
                </div>
            @else
                <div class="flex mb-4">
                    <img src="{{ asset("storage/images/{$horizontalPosts[$index - count($chunkedVerticalPosts)]->photo}") }}" class="w-200 object-cover rounded-lg mx-auto mt-4">
                </div>
            @endif
        @endforeach
    </div>
</x-layout>