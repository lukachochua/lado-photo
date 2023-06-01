<x-admin-layout :slider="$slider">
    <div class="flex justify-center sm:ml-36 ml-12">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-4/5 mx-auto my-8 md:max-w-md">
            <div class="bg-orange-400 py-4 px-6">
                <h2 class="text-2xl font-bold text-white">Upload Photo</h2>
            </div>
            <form class="px-6 py-8" method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2" for="photo">
                        Upload Slider Photo
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

                <div class="flex justify-center">
                    <button
                        class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-6 rounded-full shadow-lg focus:outline-none focus:shadow-outline">
                        Upload
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>