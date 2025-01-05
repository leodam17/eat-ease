<!-- Sidebar -->
<aside id="sidebar"
    class="flex min-h-screen md:w-64 bg-gray-800 text-white p-4 md:h-screen md:block absolute md:relative transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50">
    <!-- User Info -->
    <div class="flex items-center space-x-3 p-4 mb-8 border-b border-gray-700">
    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" class="mr-1"><path fill="currentColor" d="M12 12q-1.65 0-2.825-1.175T8 8t1.175-2.825T12 4t2.825 1.175T16 8t-1.175 2.825T12 12m4 8v-6.4q.625.2 1.225.425t1.175.525q.75.375 1.175 1.088T20 17.2V20zm-6-3.5v-3.35q.5-.075 1-.112T12 13t1 .038t1 .112v3.35zM4 20v-2.8q0-.85.425-1.562T5.6 14.55q.575-.3 1.175-.525T8 13.6V20z"/></svg>
        <div>
            {{-- <h3 class="text-lg font-semibold text-gray-100">{{ $admin }}</h3>
            <p class="text-sm text-gray-400">{{ $email }}</p> --}}
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
    </ul>
</aside>
