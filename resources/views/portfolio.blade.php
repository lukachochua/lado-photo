<x-layout>
    <div class="flex justify-center items-center">
        <div class="flex flex-wrap justify-center w-200">
            @foreach ($posts as $post)
                @if ($post->aspectRatio < 1) 
                    <div class="flex mb-6 items-center justify-center sm:w-2/5 mx-2" id="vertical">
                        <img src="{{ asset("storage/images/{$post->photo}") }}" class="object-contain">
                    </div>
                @else
                    <div class="flex mb-6 justify-center sm:w-200 mx-2" id="horizontal">
                    <img src="{{ asset("storage/images/{$post->photo}") }}" class="sm:w-100 object-contain
                        mx-auto">
                    </div>
                @endif

                @endforeach
        </div>
    </div>
</x-layout>