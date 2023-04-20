<div id="navbar-sm" class="absolute hidden z-50">
    <div class="rounded w-28 bg-gray-800">
        <div onmouseover="showCategories()" onmouseout="hideCategories()" class="relative">
            <x-button href="/" class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                PHOTOS
            </x-button>

            <div id="categories-sm" class="hidden bg-gray-800 w-28 rounded-md text-white py-2 z-10 absolute top-0 left-24">
                @foreach ($categories as $category)
                <x-button href="{{ route('categories.show', ['category' => $category->slug]) }}"
                    class="block hover:border-l-4 text-sm" :withoutClasses="['hover:border-t-2', 'text-lg']">
                    {{ strtoupper($category->name) }}
                </x-button>
                @endforeach
            </div>
        </div>
        <div>
            <x-button href="videos" class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                VIDEOS
            </x-button>
        </div>
        <div>
            <x-button href="" class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                ABOUT
            </x-button>
        </div>
        <div>
            <x-button href="" class="block hover:border-l-4" :withoutClasses="['hover:border-t-2', 'text-lg']">
                CONTACT
            </x-button>
        </div>
    </div>
</div>