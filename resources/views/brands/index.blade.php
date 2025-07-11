@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow rounded-xl mt-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold text-gray-700">🏷️ لیست برندها</h2>
        <a href="{{ route('brands.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            ➕ برند جدید
        </a>
    </div>

    <table class="w-full table-auto border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">نام</th>
                <th class="border px-4 py-2">عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
                <tr class="hover:bg-gray-50">
                    <td class="border px-4 py-2">{{ $brand->id }}</td>
                    <td class="border px-4 py-2">{{ $brand->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('brands.edit', $brand->id) }}" class="text-blue-600 hover:underline">✏️</a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('حذف شود؟')" class="text-red-600 hover:underline">🗑️</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
