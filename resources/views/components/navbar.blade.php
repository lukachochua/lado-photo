<nav class="flex justify-between items-center py-4 px-6 font-sans">
    <div>
        <a href="{{ route('home') }}"
            class="hidden sm:inline py-2 px-4 text-white font-bold hover:text-gray-500 hover:border-t-2 border-gray-500 relative transition duration-400 ease-in-out text-lg font-custom">
            Home
        </a>
    </div>

    <div class="sm:hidden absolute top-1 left-1" onclick="clicked()" id="dropdown">
        <div>
            <button class="nav-toggle rounded-lg z-10">
                <x-dropdown-svg />
            </button>
        </div>

        <x-dropdown :categories="$categories" />

    </div>

    <div class="sm:relative inset-0 hidden sm:inline">
        <x-button href="{{ route('photos') }}" onmouseover="showCategories()" onmouseout="hideCategories()">
            Photos
        </x-button>

        <div id="categories" class="hidden absolute bg-gray-800 text-white w-auto py-2 mt-1 z-10"
            onmouseover="showCategories()" onmouseout="hideCategories()">
            @foreach ($categories as $category)
            <x-button href="{{ route('categories.show', ['category' => $category->slug]) }}"
                class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                {{ ($category->name) }}
            </x-button>
            @endforeach
        </div>

        <x-button href="{{ route('videos') }}">Videos</x-button>
        <x-button href="#">About</x-button>
        <x-button href="#">Contact</x-button>
    </div>
</nav>