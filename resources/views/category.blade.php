<x-layout :categories="$categories">
    @foreach ($posts as $post)
        <x-photos>
                <img src="{{ asset("storage/images/{$post->photo}") }}" alt="Your Image" class="w-full h-full object-cover hover:scale-105 transition duration-300 ease-in"
                onclick="showPopup('{{ asset("storage/images/{$post->photo}") }}')">
        </x-photos>
    @endforeach
    
    <x-popup />
</x-layout>