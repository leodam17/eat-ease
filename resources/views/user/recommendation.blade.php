@extends('base.base')

@section('content')
<div class="bg-[#e7e3d8] dark:bg-[#1e1a14] py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold mb-8 text-center text-[#4a3b2f] dark:text-[#e7d7c4]">Recommendations for {{ $user }}</h2>

        <!-- Recommendations Based on Preferences and Allergies -->
        <h3 class="text-2xl font-semibold mb-4 text-center text-[#4a3b2f] dark:text-[#e7d7c4]">Recommendations Based on Preferences and Allergies</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($recommendations_by_preferences as $menuId)
                @php
                    $menu = $menus->firstWhere('id', $menuId);
                @endphp
                @if($menu)
                    <div class="bg-[#ECE8D8] dark:bg-[#2b241c] text-[#4a3b2f] dark:text-[#e7d7c4] rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-48 object-cover cursor-pointer">
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-2">{{ $menu->nama }}</h3>
                            <p class="text-sm mb-4">{{ $menu->deskripsi }}</p>
                            <div class="flex items-center justify-between text-sm text-[#4a3b2f] dark:text-[#d7d4cc] mb-4">
                                <span><i class="fas fa-clock"></i> {{ $menu->waktu_pengerjaan }} mins</span>
                                <span>{{ $menu->kalori }} kcal</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-[#d6a670] dark:text-[#bf8f5a]">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star{{ $menu->popularitas < $i ? '-half-alt' : '' }}"></i>
                                    @endfor
                                </span>
                                <a href="#" class="text-[#d6a670] dark:text-[#bf8f5a] font-bold">Order Now</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
