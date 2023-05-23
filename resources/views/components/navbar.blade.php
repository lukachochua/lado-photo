<nav class="fixed top-0 left-0 right-0 z-50 mt-14 flex justify-between items-center py-4 px-6 font-custom transition-all duration-700 ease-in-out">
    <div>
        <a href="{{ route('home') }}"
            class="sm:inline relative transition duration-400 ease-in-out text-lg font-custom">
            <img src="{{ asset('logo.png') }}" />
        </a>
    </div>

    <div class="sm:relative inset-0 sm:inline">
        <x-button href="{{ route('portfolio') }}">
            Portfolio
        </x-button>
        <x-button href="/">About</x-button>
    </div>
</nav>