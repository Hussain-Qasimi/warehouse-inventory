@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ثبت جنس جدید</h2>

    <form method="POST" action="{{ route('items.store') }}">
        @csrf

        <div>
            <label>نام جنس:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>تعداد:</label>
            <input type="number" name="quantity" min="0" required>
        </div>

        <div>
            <label>واحد:</label>
            <input type="text" name="unit" value="pcs" required>
        </div>

        <div>
            <label>دسته‌بندی:</label>
            <select name="category_id">
                <option value="">انتخاب کنید</option>
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>برند:</label>
            <select name="brand_id">
                <option value="">انتخاب کنید</option>
                @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>گدام:</label>
            <select name="warehouse_id" required>
                @foreach($warehouses as $wh)
                    <option value="{{ $wh->id }}">{{ $wh->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">ثبت جنس</button>
    </form>
</div>
@endsection
