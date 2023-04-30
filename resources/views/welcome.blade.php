<x-layout :categories="$categories">
    <div class="flex justify-center">
        <div class="inline-block bg-gray-800 rounded-tl-xl rounded-br-xl hover:bg-gray-400 hover:underline transition ease-in duration-500
      ">
            <h1 class="text-4xl font-bold text-gray-400 text-center leading-tight p-4 select-none">
                Welcome to the <span class="text-white"> Nevermore Agency </span>
            </h1>
        </div>
    </div>

    <div class="flex justify-center items-center mt-20">
        <div class="inline-block w-auto">
            <img src="{{ asset("storage/images/{$posts->photo}") }}" alt="" class="mx-auto w-full h-full
            hover:scale-110 rounded-xl border-black object-cover transition duration-700 ease-in cursor-pointer"
            onclick="showPopup('{{ asset("storage/images/{$posts->photo}") }}')">>
        </div>
        <x-popup />
    </div>

    <div class="flex justify-center mt-10 text-center">
        <div class="inline-block rounded-tl-xl rounded-br-xl hover:bg-gray-400 transition ease-in duration-700
      ">
            <h1
                class="text-2xl bold font-bold text-black leading-relaxed p-4 hover:text-gray-800 select-none h-30 overflow-hidden">
                Marketing Agency creating <span class="hover:text-white overline">visual language </span> <br>
                through photography and videography
            </h1>
        </div>
    </div>

</x-layout>