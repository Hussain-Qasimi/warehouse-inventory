@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-6 bg-white rounded shadow-md mt-8">
    <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">✏️ ویرایش گدام</h2>

    <form method="POST" action="{{ route('warehouses.update', $warehouses->id) }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">نام گدام:</label>
            <input type="text" name="name" value="{{ $warehouses->name }}" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">موقعیت:</label>
            <input type="text" name="location"value="{{ $warehouses->location }}"
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="text-center pt-2">
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-md transition duration-200">
                ✔️ ثبت تغیرات
            </button>
        </div>
    </form>
</div>
@endsection
