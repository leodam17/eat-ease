@extends('admin.base.base')

@section('title', 'Popular Menus')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Most Popular Menus</h1>

    <div class="overflow-x-auto shadow-lg rounded-lg">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-cyan-600 text-white uppercase text-sm">
                <tr>
                    <th class="py-4 px-6 text-left border-b">Menu Name</th>
                    <th class="py-4 px-6 text-left border-b">Total Orders</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse($popularMenus as $menu)
                <tr class="hover:bg-gray-100">
                    <td class="py-4 px-6 border-b">{{ $menu->nama_pesanan }}</td>
                    <td class="py-4 px-6 border-b">{{ $menu->total_orders }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="py-4 px-6 text-center text-gray-500">No popular menus found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <div class="mt-6">
        {{ $popularMenus->links('pagination::tailwind') }}
    </div>
</div>
@endsection
