<x-layout>
    @guest
    <div class="flex flex-col items-center mt-32">
        <div class="mb-8">
            <h1 class="text-4xl text-center text-purple-500 hover:text-green-500 transform hover:scale-110 transition duration-300 ease-in-out font-bold">
                Welcome, Admin!
            </h1>
        </div>
        <div class="flex-grow">
            <p class="text-2xl text-center text-purple-500 hover:text-green-500 transform hover:scale-110 transition duration-300 ease-in-out font-bold">
                Log in to start uploading photos. If you got no account, please <a href="/register" class="text-red-300 hover:text-red-700">Register!</a>
            </p>
        </div>
    </div>
    @endguest

    @auth
    <div class="top-0 left-0 bg-green-600 text-white p-3 rounded flex items-center justify-center w-1/2 h-16 font-bold">
        <span class="text-center">Welcome Back {{ auth()->user()->name }}!</span>
    </div>
    @endauth
</x-layout>