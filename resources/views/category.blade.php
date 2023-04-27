<x-layout :categories="$categories">
    <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 sm:grid-cols-3 ">
        @foreach ($posts as $post)
            <x-photos>
                <img src="{{ asset("storage/images/{$post->photo}") }}" alt="Your Image" class="w-full h-full object-cover
                hover:scale-105 transition duration-300 ease-in"
                onclick="showPopup('{{ asset("storage/images/{$post->photo}") }}')">
            </x-photos>
        @endforeach

        <x-popup />
    </div>
</x-layout>