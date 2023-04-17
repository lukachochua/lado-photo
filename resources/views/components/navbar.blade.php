<nav class="flex justify-between items-center py-4 px-6 font-sans">
    <div>
        <a href="/"
            class="hidden sm:inline py-2 px-4 text-white font-bold hover:text-gray-500 hover:border-t-2 border-gray-500 relative transition duration-400 ease-in-out text-lg">HOME</a>
    </div>

    <div class="sm:hidden absolute top-0 left-0 w-9">
        <div>
            <button class="nav-toggle p-2 rounded-lg pb-8" id="small-nav">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="w-6 h-6">
                    <path d="M3 12h18M3 6h18M3 18h18" />
                </svg>
            </button>
        </div>

        <div id="navbar-sm" class="relative hidden bg-blend-color-burn">
            <div id="categories-sm" class="bg-gray-800 pt-4 rounded z-100">
                <div>
                    <x-button href="/"
                        class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                        PHOTOS
                    </x-button>
                </div>
                <div>
                    <x-button href="videos"
                        class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                        VIDEOS
                    </x-button>
                </div>
                <div>
                    <x-button href=""
                        class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                        ABOUT
                    </x-button>
                </div>
                <div>
                    <x-button href=""
                        class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                        CONTACT
                    </x-button>
                </div>
            </div>
        </div>


    </div>

    <div class="sm:relative inset-0 hidden sm:inline">
        <x-button href="/" onmouseover="showCategories()" onmouseout="hideCategories()">
            PHOTOS
        </x-button>

        <div id="categories" class="hidden absolute bg-gray-800 text-white w-auto py-2 mt-1 z-10"
            onmouseover="showCategories()" onmouseout="hideCategories()">
            @foreach ($categories as $category)
            <x-button href="{{ route('categories.show', ['category' => $category->slug]) }}"
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