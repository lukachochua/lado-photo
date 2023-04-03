<x-layout>
    @auth
    <div class="top-0 left-0 bg-green-600 text-white p-3 rounded flex items-center justify-center w-1/2 h-16 font-bold">
        <span class="text-center">Welcome Back {{ auth()->user()->name }}!</span>
    </div>

    @else
    <div
        class="bg-blue-600 rounded-xl w-32 text-center py-2 text-white font-semibold hover:font-bold hover:bg-blue-500 border hover:border-black">
        <a href="/login">
            Sign in
        </a>
    </div>
    <div
        class="bg-blue-600 rounded-xl w-32 text-center py-2 text-white font-semibold hover:font-bold hover:bg-blue-500 border hover:border-black">
        <a href="/register">
            Register
        </a>
    </div>
    @endauth
</x-layout>