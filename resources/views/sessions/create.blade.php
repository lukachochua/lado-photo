<x-admin-layout>
    <div class="flex justify-center items-center">
        <div class="bg-white rounded-lg shadow-md p-8 w-96">
            <h2 class="text-2xl font-semibold mb-4">Sign In</h2>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2" for="email">
                        Email
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" type="email" id="email" name="email"
                        value="{{old('email')}}" required />
                    @error('email')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2" for="password">
                        Password
                    </label>
                    <input class="border border-gray-400 p-2 w-full rounded-lg" type="password" id="password"
                        name="password" required />
                    @error('password')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                    Sign In
                </button>
                <p class="text-gray-600 text-sm mt-4">
                    Don't have an account? <a href="/register" class="underline">Sign up here.</a>
                </p>
            </form>
        </div>
    </div>
</x-admin-layout>