<x-layout :categories="$categories">
    @foreach ($posts as $post)
    <div class="bg-gray-600 shadow overflow-hidden block cursor-pointer">
        <div class="w-full h-full">
            <img src="{{ asset("storage/images/{$post->photo}") }}" alt="Your Image" class="w-full h-full object-cover hover:scale-105 transition duration-300 ease-in"
            onclick="showPopup('{{ asset("storage/images/{$post->photo}") }}')">
        </div>
    </div>
    @endforeach
    <x-popup />
</x-layout>