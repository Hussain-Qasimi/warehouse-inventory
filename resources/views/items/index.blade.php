@extends('layouts.app')

@section('content')
<div class="container">
    <h2>📦 لیست اجناس در گدام</h2>

    <a href="{{ route('items.create') }}">➕ ثبت جنس جدید</a>

    <table border="1" cellpadding="8" cellspacing="0" style="margin-top: 15px;">
        <thead>
            <tr>
                <th>#</th>
                <th>نام جنس</th>
                <th>تعداد</th>
                <th>واحد</th>
                <th>دسته‌بندی</th>
                <th>برند</th>
                <th>گدام</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->unit }}</td>
                    <td>{{ $item->category->name ?? '-' }}</td>
                    <td>{{ $item->brand->name ?? '-' }}</td>
                    <td>{{ $item->warehouse->name }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}">✏️</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('حذف شود؟')">🗑️</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
