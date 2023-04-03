@if (session()->has('success'))
    <div class="fixed bg-green-600 text-white py-2 px-4 rounded-2xl bottom-3 right-3 text-sm font-bold">
        <p>{{ session('success') }}</p>
    </div>
@endif