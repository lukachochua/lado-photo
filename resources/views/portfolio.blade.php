<x-layout>
    <div class="flex flex-col items-center justify-center">
        @foreach ($chunkIndexes as $index)
            @if ($index < count($chunkedVerticalPosts))
                <div class="flex mb-4 items-center justify-center">
                    @foreach ($chunkedVerticalPosts[$index] as $post)
                        <img src="{{ asset("storage/images/{$post->photo}") }}" class="sm:w-100 w-60 shadow-xl object-contain rounded-lg mr-1">
                    @endforeach
                </div>
            @else
                @if (!$hasDisplayedHorizontalPosts) 
                    @foreach ($horizontalPosts as $post)
                        <div class="flex mb-4">
                            <img src="{{ asset("storage/images/{$post->photo}") }}" class="sm:w-200 shadow-xl object-cover rounded-lg mx-auto">
                        </div>
                    @endforeach
                    @php $hasDisplayedHorizontalPosts = true; @endphp
                @endif
            @endif
        @endforeach
    </div>
</x-layout>