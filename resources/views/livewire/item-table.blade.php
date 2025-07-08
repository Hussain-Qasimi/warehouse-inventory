<div class="p-4">
    <h2 class="text-xl font-bold mb-4">📦 لیست اجناس (Livewire)</h2>

    <input type="text" wire:model="search" placeholder="جستجو..." class="p-2 border rounded mb-3">

    <table class="w-full border border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">#</th>
                <th class="border p-2">نام</th>
                <th class="border p-2">تعداد</th>
                <th class="border p-2">واحد</th>
                <th class="border p-2">دسته‌بندی</th>
                <th class="border p-2">برند</th>
                <th class="border p-2">گدام</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td class="border p-2">{{ $item->id }}</td>
                    <td class="border p-2">{{ $item->name }}</td>
                    <td class="border p-2">{{ $item->quantity }}</td>
                    <td class="border p-2">{{ $item->unit }}</td>
                    <td class="border p-2">{{ $item->category->name ?? '-' }}</td>
                    <td class="border p-2">{{ $item->brand->name ?? '-' }}</td>
                    <td class="border p-2">{{ $item->warehouse->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
