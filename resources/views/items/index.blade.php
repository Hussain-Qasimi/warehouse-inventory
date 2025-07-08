@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">📦 لیست اجناس در گدام</h2>
        <a href="{{ route('items.create') }}"
           class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
            ➕ ثبت جنس جدید
        </a>
    </div>

    <div class="overflow-x-auto bg-white rounded shadow">
        <table class="w-full text-sm text-left text-gray-700">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">نام جنس</th>
                    <th class="px-4 py-2">تعداد</th>
                    <th class="px-4 py-2">واحد</th>
                    <th class="px-4 py-2">دسته‌بندی</th>
                    <th class="px-4 py-2">برند</th>
                    <th class="px-4 py-2">گدام</th>
                    <th class="px-4 py-2">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $item->id }}</td>
                        <td class="px-4 py-2">{{ $item->name }}</td>
                        <td class="px-4 py-2">{{ $item->quantity }}</td>
                        <td class="px-4 py-2">{{ $item->unit }}</td>
                        <td class="px-4 py-2">{{ $item->category->name ?? '-' }}</td>
                        <td class="px-4 py-2">{{ $item->brand->name ?? '-' }}</td>
                        <td class="px-4 py-2">{{ $item->warehouse->name }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('items.edit', $item->id) }}"
                               class="text-blue-600 hover:text-blue-800">✏️</a>
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST"
                                  onsubmit="return confirm('آیا مطمئن هستید؟')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center px-4 py-6 text-gray-500">هیچ جنسی ثبت نشده است.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
