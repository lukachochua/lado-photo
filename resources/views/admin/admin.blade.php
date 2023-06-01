<x-admin-layout>
    @guest
    <div class="sm:ml-48 ml-12 flex flex-col items-center mt-32">
        <div class="mb-8">
            <h1>
                Welcome, Admin!
            </h1>
        </div>
        <div class="flex-grow">
            <p>

                Log in to start uploading photos. If you got no account, please <a href="/register"
                    class="text-red-300 hover:text-red-700">Register!</a>
            </p>
        </div>
    </div>
    @endguest

    @auth
    <div class="top-0 left-0 ml-20 sm:ml-48 bg-orange-400 text-white p-3 rounded flex items-center justify-center w-1/2 h-16 font-bold">
        <span class="text-center">Welcome Back {{ auth()->user()->name }}!</span>
    </div>
    @endauth
</x-admin-layout>