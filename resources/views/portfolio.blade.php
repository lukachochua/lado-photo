<x-layout>
    <div class="flex justify-center items-center">
        <div class="flex flex-wrap justify-center w-200">
            @foreach ($posts as $post)
                @if ($post->aspectRatio < 1) 
                    <div class="flex mb-4 items-center justify-center sm:w-2/5 mx-1" id="vertical">
                        <img src="{{ asset("storage/images/{$post->photo}") }}" class="shadow-xl object-contain
                        rounded-lg">
                    </div>
                @else
                    <div class="flex mb-4 justify-center w-full" id="horizontal">
                    <img src="{{ asset("storage/images/{$post->photo}") }}" class="sm:w-100 w-96 shadow-xl object-contain rounded-lg
                        mx-auto">
                    </div>
                @endif

                @endforeach
        </div>
    </div>
</x-layout>