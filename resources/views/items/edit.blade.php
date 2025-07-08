@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md mt-6">
    <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">✏️ ویرایش جنس</h2>

    <form method="POST" action="{{ route('items.update', $item->id) }}" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">نام جنس:</label>
            <input type="text" name="name" value="{{ $item->name }}" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">تعداد:</label>
            <input type="number" name="quantity" value="{{ $item->quantity }}" min="0" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">واحد:</label>
            <input type="text" name="unit" value="{{ $item->unit }}" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">دسته‌بندی:</label>
            <select name="category_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring focus:ring-blue-200">
                <option value="">انتخاب کنید</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $item->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">برند:</label>
            <select name="brand_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring focus:ring-blue-200">
                <option value="">انتخاب کنید</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ $brand->id == $item->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">گدام:</label>
            <select name="warehouse_id" required
                    class="w-full border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring focus:ring-blue-200">
                @foreach($warehouses as $wh)
                    <option value="{{ $wh->id }}" {{ $wh->id == $item->warehouse_id ? 'selected' : '' }}>{{ $wh->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="text-center">
            <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded shadow">
                💾 ذخیره تغییرات
            </button>
        </div>
    </form>
</div>
@endsection
