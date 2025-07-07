@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ثبت گدام جدید</h2>

    <form method="POST" action="{{ route('warehouses.store') }}">
        @csrf

        <div>
            <label>نام گدام:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>موقعیت:</label>
            <input type="text" name="location">
        </div>

        <button type="submit">ثبت</button>
    </form>
</div>
@endsection
