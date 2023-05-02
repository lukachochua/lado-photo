<nav class="flex justify-between items-center py-4 px-6 font-sans">
    <div>
        <a href="{{ route('home') }}"
            class="hidden sm:inline py-2 px-4 text-white font-bold hover:text-white hover:border-t-2 border-white relative transition duration-400 ease-in-out text-lg font-custom">
            Home
        </a>
    </div>

    <div class="sm:relative inset-0 hidden sm:inline">
        <x-button href="{{ route('portfolio') }}">
            Portfolio
        </x-button>
        <x-button href="/">About</x-button>
    </div>
</nav>