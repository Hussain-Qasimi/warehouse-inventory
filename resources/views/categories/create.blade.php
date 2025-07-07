@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ثبت دسته‌بندی جدید</h2>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div>
            <label>نام دسته‌بندی:</label>
            <input type="text" name="name" required>
        </div>

        <button type="submit">ثبت</button>
    </form>
</div>
@endsection
