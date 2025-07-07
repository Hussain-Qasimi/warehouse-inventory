@extends('layouts.app')

@section('content')
<div class="container">
    <h2>لیست گدام‌ها</h2>

    <a href="{{ route('warehouses.create') }}">➕ گدام جدید</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>موقعیت</th>
            </tr>
        </thead>
        <tbody>
            @foreach($warehouses as $wh)
                <tr>
                    <td>{{ $wh->id }}</td>
                    <td>{{ $wh->name }}</td>
                    <td>{{ $wh->location }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
