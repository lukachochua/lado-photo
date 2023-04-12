<nav class="flex justify-between items-center py-4 px-6 font-sans">
    <div>
        <a href="/"
            class="hidden sm:inline py-2 px-4 text-white font-bold hover:text-gray-500 hover:border-t-2 border-gray-500 relative transition duration-400 ease-in-out text-lg">HOME</a>
    </div>

    <div class="absolute sm:relative inset-0">
        <x-button href="/" onmouseover="showCategories()" onmouseout="hideCategories()">
            PHOTOS
        </x-button>

        <div id="categories" class="hidden absolute bg-gray-800 text-white w-auto py-2 mt-1 z-10"
            onmouseover="showCategories()" onmouseout="hideCategories()">
            @foreach ($categories as $category)
            <x-button href="{{ route('categories.show', ['category' => $category->id]) }}"
                class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                {{ strtoupper($category->name) }}
            </x-button>
            @endforeach
        </div>

        <x-button href="videos">VIDEOS</x-button>
        <x-button href="#">ABOUT</x-button>
        <x-button href="#">CONTACT</x-button>
    </div>

</nav>