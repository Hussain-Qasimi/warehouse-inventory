<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'پنل مدیریت')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="flex bg-gray-100 min-h-screen">

    {{-- Sidebar (ثابت برای همه صفحات) --}}
    <aside class="w-64 bg-white shadow-md p-4 space-y-4">
        <h2 class="text-xl font-bold text-gray-800">📦 انبارداری</h2>
        <ul class="space-y-2 text-sm text-gray-700">
            <li>
                <a href="{{ route('items.index') }}"
                class="flex items-center px-3 py-2 rounded-lg transition-all duration-200
                        hover:bg-blue-100 hover:text-blue-800
                        {{ request()->routeIs('items.*') ? 'bg-blue-200 text-blue-800 font-semibold' : '' }}">
                    <svg class="w-5 h-5 ml-2 text-blue-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M3 7h18M3 12h18M3 17h18"/>
                    </svg>
                    اجناس
                </a>
            </li>
            <li>
                <a href="{{ route('categories.index') }}"
                class="flex items-center px-3 py-2 rounded-lg transition-all duration-200
                        hover:bg-blue-100 hover:text-blue-800
                        {{ request()->routeIs('categories.*') ? 'bg-blue-200 text-blue-800 font-semibold' : '' }}">
                    <svg class="w-5 h-5 ml-2 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h8m-8 6h16"/>
                    </svg>
                    دسته‌بندی‌ها
                </a>
            </li>
            <li>
                <a href="{{ route('brands.index') }}"
                class="flex items-center px-3 py-2 rounded-lg transition-all duration-200
                        hover:bg-blue-100 hover:text-blue-800
                        {{ request()->routeIs('brands.*') ? 'bg-blue-200 text-blue-800 font-semibold' : '' }}">
                    <svg class="w-5 h-5 ml-2 text-purple-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7"/>
                    </svg>
                    برندها
                </a>
            </li>
            <li>
                <a href="{{ route('warehouses.index') }}"
                class="flex items-center px-3 py-2 rounded-lg transition-all duration-200
                        hover:bg-blue-100 hover:text-blue-800
                        {{ request()->routeIs('warehouses.*') ? 'bg-blue-200 text-blue-800 font-semibold' : '' }}">
                    <svg class="w-5 h-5 ml-2 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M3 10l9-6 9 6v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z"/>
                        <path d="M9 22V12h6v10"/>
                    </svg>
                    گدام‌ها
                </a>
            </li>
        </ul>
        <div class="mt-6 border-t pt-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">🚪 خروج</button>
            </form>
        </div>
    </aside>

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col">
        {{-- Navbar --}}
        <header class="bg-white p-4 shadow text-right">
            <span class="text-gray-600">خوش آمدید، {{ auth()->user()->name ?? 'مهمان' }}</span>
        </header>

        {{-- صفحه خاص --}}
        <main class="p-6 overflow-auto">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>

