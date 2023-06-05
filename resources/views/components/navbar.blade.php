<nav class="fixed top-0 left-0 right-0 z-50 mt-14 flex justify-between items-center py-4 px-6 font-custom transition-all duration-700 ease-in-out" x-cloak>
    <div>
        <a href="{{ route('home') }}" class="sm:inline relative transition duration-400 ease-in-out text-lg font-custom">
            <img src="{{ asset('logo.png') }}" />
        </a>
    </div>
    <div class="flex">
        <div class="sm:relative inline-block" x-data="{ open: false }">
            <x-button href="#" @click.prevent="open = !open">
                Portfolio
            </x-button>
            <div class="absolute top-full sm:right-0 right-8 mt-2 ml-4 rounded-md shadow-lg bg-cyan-200"
                 x-show="open"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform scale-90"
                 x-transition:enter-end="opacity-100 transform scale-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 transform scale-100"
                 x-transition:leave-end="opacity-0 transform scale-90"
                 @click.outside="open = false"
                 x-cloak>
                @foreach ($categories as $category)
                    <a href="{{ route('categories', ['category' => $category->id]) }}" class="block px-4 py-2">
                        <h1 class="text-black text-center hover:text-orange-400 text-sm font-bold">{{ $category->name }}</h1>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="ml-4">
            <x-button href="/">Me</x-button>
        </div>
    </div>
</nav>