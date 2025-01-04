@extends('admin.base.base')

@section('title', 'Least Ordered Menu')

@section('content')

<h1 class="text-5xl font-extrabold text-center text-gray-800 dark:text-black mt-10 mb-6">
    LEAST ORDERED MENU!
</h1>

@if($leastOrderedMenu)
    <div style="border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 16px; max-width: 400px; margin: 16px auto;">
        <img src="{{ asset('img/' . $leastOrderedMenu->gambar) }}" alt="{{ $leastOrderedMenu->nama }}" style="width: 100%; border-radius: 8px 8px 0 0;">
        <div style="padding: 16px;">
            <h3 style="margin: 0 0 8px;">{{ $leastOrderedMenu->nama }}</h3>
            <p style="margin: 0 0 8px; color: #555;">{{ $leastOrderedMenu->deskripsi }}</p>
            <p style="margin: 0; font-weight: bold;">Harga : Rp {{ number_format($leastOrderedMenu->harga, 0, ',', '.') }}</p>
            <p style="margin: 8px 0 0;">Kategori : {{ $leastOrderedMenu->kategori }}</p>
            <p style="margin: 0;">Popularitas : {{ $leastOrderedMenu->popularitas }}</p>
            <p style="margin: 0;">Kalori : {{ $leastOrderedMenu->kalori }} kcal</p>
            <p style="margin: 8px 0 0;">Total Pemesanan : {{ $leastOrderedMenu->total_pemesanan }}</p>
        </div>
    </div>
@else
    <p>Menu dengan pemesanan paling rendah tidak ditemukan.</p>
@endif

@endsection
