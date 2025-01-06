<!-- Sidebar -->
<aside id="sidebar"
    class="flex min-h-screen md:w-64 bg-gray-800 text-white p-4 md:h-screen md:block absolute md:relative transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50">
    <!-- User Info -->
    <div class="flex items-center space-x-3 p-4 mb-8 border-b border-gray-700">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" class="mr-1"><path fill="currentColor" d="M12 12q-1.65 0-2.825-1.175T8 8t1.175-2.825T12 4t2.825 1.175T16 8t-1.175 2.825T12 12m4 8v-6.4q.625.2 1.225.425t1.175.525q.75.375 1.175 1.088T20 17.2V20zm-6-3.5v-3.35q.5-.075 1-.112T12 13t1 .038t1 .112v3.35zM4 20v-2.8q0-.85.425-1.562T5.6 14.55q.575-.3 1.175-.525T8 13.6V20z"/></svg>
        <div>
            <h3 class="text-lg font-semibold text-gray-100">{{ $admin }}</h3>
            <p class="text-sm text-gray-400">{{ $email }}</p>
        </div>
    </div>
    
    <ul class="space-y-2">
        <li>
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center px-4 py-2 rounded hover:bg-gray-700 
                {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7 18h3.5q.425 0 .713-.288T11.5 17v-2q0-.425-.288-.712T10.5 14H7q-.425 0-.712.288T6 15v2q0 .425.288.713T7 18m0-5h3.5q.425 0 .713-.288T11.5 12V7q0-.425-.288-.712T10.5 6H7q-.425 0-.712.288T6 7v5q0 .425.288.713T7 13m6.5 5H17q.425 0 .713-.288T18 17v-5q0-.425-.288-.712T17 11h-3.5q-.425 0-.712.288T12.5 12v5q0 .425.288.713T13.5 18m0-8H17q.425 0 .713-.288T18 9V7q0-.425-.288-.712T17 6h-3.5q-.425 0-.712.288T12.5 7v2q0 .425.288.713T13.5 10M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v2h1q.425 0 .713.288T23 8t-.288.713T22 9h-1v2h1q.425 0 .713.288T23 12t-.288.713T22 13h-1v2h1q.425 0 .713.288T23 16t-.288.713T22 17h-1v2q0 .825-.587 1.413T19 21zm0-2h14V5H5zM5 5v14z"/>
                </svg>
                <div class="ml-3">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.lowDemandMenus') }}"
                class="flex items-center px-4 py-2 rounded hover:bg-gray-700 
                {{ request()->routeIs('admin.lowDemandMenus') ? 'bg-gray-700 text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="m18.6 16l-5.2-5.15l-2.575 2.575Q10.25 14 9.4 14t-1.425-.575L2.7 8.1q-.275-.275-.288-.687T2.7 6.7q.275-.275.7-.275t.7.275L9.4 12l2.575-2.575q.575-.575 1.425-.575t1.425.575L20 14.6V13q0-.425.288-.712T21 12t.713.288T22 13v4q0 .425-.288.713T21 18h-4q-.425 0-.712-.288T16 17t.288-.712T17 16z"/>
                </svg>
                <div class="ml-3">Low-Demand Menu</div>
            </a>
        </li>  
        {{-- list menu --}}
        <li>
            <a href="{{ route('admin.menus') }}"
                class="flex items-center px-4 py-2 rounded hover:bg-gray-700 
                {{ request()->routeIs('admin.menus') ? 'bg-gray-700 text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M7 18h10v-2H7v2m0-4h10v-2H7v2m0-4h10V8H7v2M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21H5Z"/>
                </svg>
                <div class="ml-3">List Menu</div>
            </a>
        </li>
              
        <li>
            {{-- <a href="{{ route('admin.event_categories') }}"
                class="block px-4 py-2 rounded hover:bg-gray-700
            @if ($menu == 'event_categories') bg-gray-700 @endif
            ">Event Categories</a> --}}
        </li>
        <li>
            {{-- <a href="{{ route('admin.manage_organizer') }}"
                class="block px-4 py-2 rounded hover:bg-gray-700
            @if ($menu == 'manage_organizer') bg-gray-700 @endif
            ">Manage
                Organizer</a> --}}
        </li>
        <li>
            {{-- <a href="{{ route('admin.manage_admin') }}"
                class="block px-4 py-2 rounded hover:bg-gray-700
            @if ($menu == 'manage_admin') bg-gray-700 @endif
            ">Manage
                Admin</a> --}}
        </li>
        <li>
            <a href="{{ route('admin.popularMenus') }}"
                class="flex items-center px-4 py-2 rounded hover:bg-gray-700 
                {{ request()->routeIs('admin.popularMenus') ? 'bg-gray-700 text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                </svg>
                <div class="ml-3">Popular Menu</div> 
            </a>
        </li>  
        <li>
            <a href="{{ route('admin.orders') }}"
                class="flex items-center px-4 py-2 rounded hover:bg-gray-700 
                {{ request()->routeIs('admin.pendingOrders') ? 'bg-gray-700 text-white' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8zm1-11h-2v6h2zm0 8h-2v2h2z"/>
                </svg>
                <div class="ml-3">Pending Orders</div>
            </a>
        </li>        
    </ul>
    <ul class="space-y-2 mt-auto">
        <li>
            <form method="POST" action="{{ route('logout') }}" class="flex items-center px-4 py-2 rounded hover:bg-gray-700">
                @csrf
                <button type="submit" class="flex items-center w-full text-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M10.65 21q-.825 0-1.412-.588T8.65 19v-4q0-.425.288-.713T9.65 14t.713.288t.287.713v4h8v-14h-8v4q0 .425-.288.713T9.65 10t-.713-.288t-.287-.713V5q0-.825.588-1.413T10.65 3h8q.825 0 1.413.588T20.65 5v14q0 .825-.588 1.413T18.65 21h-8ZM12.3 16.3q-.275-.275-.275-.7t.275-.7L13.9 13H3.65q-.425 0-.713-.288T2.65 12t.288-.713T3.65 11H13.9l-1.6-1.6q-.275-.275-.275-.688t.275-.712q.3-.3.713-.3t.712.3l3.3 3.3q.15.15.212.325T17.25 12q0 .2-.063.375t-.212.325l-3.3 3.3q-.3.3-.7.3t-.7-.3Z"/>
                    </svg>
                    <div class="ml-3">Logout</div>
                </button>
            </form>
        </li>
    </ul>
</aside>
