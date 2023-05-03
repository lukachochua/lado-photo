<x-layout>
    <div class="flex justify-center items-center">
        <div class="flex flex-wrap justify-center w-200">
            @foreach ($posts as $post)
                @if ($post->aspectRatio < 1) 
                    <div class="flex mb-4 items-center justify-center w-1/2" id="vertical">
                        <img src="{{ asset("storage/images/{$post->photo}") }}" class="sm:w-100 w-60 shadow-xl object-contain
                        rounded-lg mr-1">
                    </div>
                @else
                    <div class="flex mb-4 justify-center w-full" id="horizontal">
                        <img src="{{ asset("storage/images/{$post->photo}") }}" class="sm:w-200 shadow-xl object-cover rounded-lg
                        mx-auto">
                    </div>
                @endif

                @endforeach
        </div>
    </div>
</x-layout>