@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ثبت برند جدید</h2>

    <form method="POST" action="{{ route('brands.store') }}">
        @csrf

        <div>
            <label>نام برند:</label>
            <input type="text" name="name" required>
        </div>

        <button type="submit">ثبت</button>
    </form>
</div>
@endsection
