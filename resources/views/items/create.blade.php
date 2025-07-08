@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded shadow-md mt-6">
    <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">📝 ثبت جنس جدید</h2>

    <form method="POST" action="{{ route('items.store') }}" class="space-y-5">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">نام جنس:</label>
            <input type="text" name="name" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">تعداد:</label>
            <input type="number" name="quantity" min="0" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">واحد:</label>
            <input type="text" name="unit" value="pcs" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">دسته‌بندی:</label>
            <select name="category_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring focus:ring-blue-200">
                <option value="">انتخاب کنید</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">برند:</label>
            <select name="brand_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring focus:ring-blue-200">
                <option value="">انتخاب کنید</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">گدام:</label>
            <select name="warehouse_id" required
                    class="w-full border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring focus:ring-blue-200">
                <option value="">انتخاب کنید</option>
                @foreach($warehouses as $wh)
                    <option value="{{ $wh->id }}">{{ $wh->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="text-center">
            <button type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded shadow">
                ✔️ ثبت جنس
            </button>
        </div>
    </form>
</div>
@endsection
