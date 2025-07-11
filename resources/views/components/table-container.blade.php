@props(['title'])

<div class="max-w-6xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">{{ $title }}</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-right border border-gray-200">
            <thead class="bg-gray-100 text-gray-700 font-semibold">
                {{ $thead }}
            </thead>
            <tbody class="text-gray-800 divide-y divide-gray-200">
                {{ $slot }}
            </tbody>
        </table>
    </div>
</div>
