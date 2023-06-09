<x-admin-layout>
    <div class="flex justify-center">
    <div class="bg-white ml-20 sm:ml-48 shadow-lg rounded-lg overflow-hidden max-w-md ">
        <div class="bg-orange-400 py-4 px-6">
            <h2 class="text-2xl font-bold text-white">Upload Slider Image</h2>
        </div>
        <form class="px-6 py-8" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="photo">
                    Upload image
                </label>
                <div class="relative">
                    <input
                        class="block appearance-none bg-gray-200 border border-gray-200 hover:border-gray-300 focus:border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                        id="photo" name="photo" value="{{ old('photo') }}" type="file" accept="image/*" multiple>
                    <div class="absolute inset-y-0 right-0 flex items-center">
                        <span class="bg-gray-300 text-gray-600 px-2 py-1 rounded-l-none rounded-r-md">JPEG, PNG,
                            JPG</span>
                    </div>
                </div>
                @error('photo')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="category">
                    Select Category
                </label>
                <div class="relative">
                    <select name="category_id" id="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="description">
                    Photo description
                </label>
                <textarea
                    class="block appearance-none bg-gray-200 border border-gray-200 hover:border-gray-300 focus:border-gray-300 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none resize-none"
                    id="description" name="description" value="{{ old('description') }}" rows="3"></textarea>
                @error('description')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-6 rounded-full shadow-lg focus:outline-none focus:shadow-outline">
                    Upload
                </button>
            </div>
        </form>
    </div>
    </div>
</x-admin-layout>