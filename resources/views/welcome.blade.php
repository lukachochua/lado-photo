<x-layout :categories="$categories">
    <div class="flex justify-center items-center h-screen">
        <x-photos>
            <div id="slideshow">
                <img src="{{ asset("storage/images/{$posts->photo}") }}" alt="" class="w-full h-full object-cover
                hover:scale-105 transition duration-300 ease-in"
                onclick="showPopup('{{ asset("storage/images/{$posts->photo}") }}')">
            </div>
        </x-photos>
        <x-popup />
    </div>
</x-layout>