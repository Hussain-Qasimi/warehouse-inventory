@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto p-6 bg-white rounded shadow-md mt-8">
    <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">🏷️ ثبت برند جدید</h2>

    <form method="POST" action="{{ route('brands.store') }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">نام برند:</label>
            <input type="text" name="name" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-200">
        </div>

        <div class="text-center">
            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded shadow">
                ✔️ ثبت
            </button>
        </div>
    </form>
</div>
@endsection
