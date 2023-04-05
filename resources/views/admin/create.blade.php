<x-admin-layout>
    <div class="bg-green-500 bg-opacity-40 shadow-lg py-8 px-4 rounded-lg w-1/2">
        <form class="max-w-sm mx-auto" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-white font-bold mb-2" for="photo">
                    Upload photo
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="photo" name="photo" value="{{ old('photo') }}" type="file" accept="image/*">

                @error('photo')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-white font-bold mb-2" for="description">
                    Photo description
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" name="description" value="{{ old('description') }}" rows="3"></textarea>
                @error('description')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Upload
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>