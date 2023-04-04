<x-layout>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            @foreach ($posts as $post)
            @dd($post->photo);
            <div class="w-full md:w-1/4 px-4 mb-8">
                <img src="{{ $post->photo }}" alt="" class="w-full">
            </div>
            @endforeach
        </div>
    </div>
</x-layout>