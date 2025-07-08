<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'پنل مدیریت')</title>

    <!-- Tailwind CSS CDN (یا استفاده از نسخه کامپایل شده خودت) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-gray-100 font-sans">

    {{-- Sidebar --}}
    <aside class="w-64 bg-white border-l border-gray-200 flex flex-col">
        <div class="p-6 text-xl font-bold border-b border-gray-200">
            پنل مدیریت
        </div>
        <nav class="flex-1 overflow-y-auto">
            <ul class="p-4 space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}"
                       class="block px-4 py-2 rounded hover:bg-blue-100 hover:text-blue-700
                       {{ request()->routeIs('dashboard') ? 'bg-blue-200 text-blue-700 font-semibold' : 'text-gray-700' }}">
                        داشبورد
                    </a>
                </li>
                <li>
                    <a href="{{ route('items.index') }}"
                       class="block px-4 py-2 rounded hover:bg-blue-100 hover:text-blue-700
                       {{ request()->routeIs('items.*') ? 'bg-blue-200 text-blue-700 font-semibold' : 'text-gray-700' }}">
                        اجناس
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}"
                       class="block px-4 py-2 rounded hover:bg-blue-100 hover:text-blue-700
                       {{ request()->routeIs('categories.*') ? 'bg-blue-200 text-blue-700 font-semibold' : 'text-gray-700' }}">
                        دسته‌بندی‌ها
                    </a>
                </li>
                <li>
                    <a href="{{ route('brands.index') }}"
                       class="block px-4 py-2 rounded hover:bg-blue-100 hover:text-blue-700
                       {{ request()->routeIs('brands.*') ? 'bg-blue-200 text-blue-700 font-semibold' : 'text-gray-700' }}">
                        برندها
                    </a>
                </li>
                <li>
                    <a href="{{ route('warehouses.index') }}"
                       class="block px-4 py-2 rounded hover:bg-blue-100 hover:text-blue-700
                       {{ request()->routeIs('warehouses.*') ? 'bg-blue-200 text-blue-700 font-semibold' : 'text-gray-700' }}">
                        گدام‌ها
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    {{-- Main content --}}
    <div class="flex-1 flex flex-col">
        {{-- Navbar --}}
        <header class="bg-white shadow flex items-center justify-between px-6 h-16 border-b border-gray-200">
            <div class="text-lg font-semibold">پنل مدیریت - @yield('title', '')</div>

            <div class="flex items-center space-x-4">
                <span class="text-gray-600">سلام، {{ auth()->user()->name ?? 'کاربر' }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800">خروج</button>
                </form>
            </div>
        </header>

        {{-- Content --}}
        <main class="flex-1 p-6 overflow-auto bg-gray-50">
            @yield('content')
        </main>
    </div>

</body>
</html>
