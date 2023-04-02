<x-layout>
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white rounded-lg shadow-md p-8 w-96">
            <h1 class="text-2xl font-semibold mb-4">Register</h1>
            <form method="POST" action="/register">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="email">
                        Name
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" type="text" id="name" name="name"
                        required />
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="email">
                        Username
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" type="text" id="username" name="username"
                        required />
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" type="email" id="email" name="email"
                        required />
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" type="password" id="password"
                        name="password" required />
                </div>
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                    Register
                </button>
            </form>
        </div>
    </div>
</x-layout>