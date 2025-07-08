@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ویرایش جنس</h2>

    <form method="POST" action="{{ route('items.update', $item->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label>نام جنس:</label>
            <input type="text" name="name" value="{{ $item->name }}" required>
        </div>

        <div>
            <label>تعداد:</label>
            <input type="number" name="quantity" value="{{ $item->quantity }}" min="0" required>
        </div>

        <div>
            <label>واحد:</label>
            <input type="text" name="unit" value="{{ $item->unit }}" required>
        </div>

        <div>
            <label>دسته‌بندی:</label>
            <select name="category_id">
                <option value="">انتخاب کنید</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $cat->id == $item->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>برند:</label>
            <select name="brand_id">
                <option value="">انتخاب کنید</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ $brand->id == $item->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>گدام:</label>
            <select name="warehouse_id" required>
                @foreach($warehouses as $wh)
                    <option value="{{ $wh->id }}" {{ $wh->id == $item->warehouse_id ? 'selected' : '' }}>{{ $wh->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">ذخیره تغییرات</button>
    </form>
</div>
@endsection
