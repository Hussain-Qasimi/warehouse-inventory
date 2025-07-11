@props(['title', 'action', 'method' => 'POST'])

<div class="max-w-xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">{{ $title }}</h2>

    <form method="POST" action="{{ $action }}" {{ $attributes->merge(['class' => 'space-y-5']) }}>
        @csrf
        @if ($method !== 'POST')
            @method($method)
        @endif

        {{ $slot }}

        <div class="text-center pt-2">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md transition duration-200">
                ✔️ ثبت
            </button>
        </div>
    </form>
</div>
