

<div class="max-w-6xl mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-bold text-gray-800 mb-6 text-center">🏬 لیست گدام‌ها</h2>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="search" placeholder="جستجو بر اساس نام یا موقعیت..."
               class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-right border border-gray-200">
            <thead class="bg-gray-100 text-gray-700 font-semibold">
                <tr>
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">نام گدام</th>
                    <th class="px-4 py-2 border">موقعیت</th>
                    <th class="px-4 py-2 border">عملیات</th>
                </tr>
            </thead>
            <tbody class="text-gray-800 divide-y divide-gray-200">
                @foreach($warehouses as $warehouse)
                    <tr>
                        <td class="px-4 py-2 border">{{ $warehouse->id }}</td>
                        <td class="px-4 py-2 border">{{ $warehouse->name }}</td>
                        <td class="px-4 py-2 border">{{ $warehouse->location }}</td>
                        <td class="px-4 py-2 border">
                            <a href="{{ route('warehouses.edit', $warehouse->id) }}" class="text-blue-600 hover:underline">✏️</a>
                            <form action="{{ route('warehouses.destroy', $warehouse->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('آیا حذف شود؟')" class="text-red-600 hover:underline">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $warehouses->links() }}
    </div>
</div>
