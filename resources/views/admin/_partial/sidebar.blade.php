<!-- Sidebar -->
<aside id="sidebar"
    class="w-full md:w-64 bg-gray-800 text-white p-4 md:h-screen md:block absolute md:relative transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50">
    <ul class="space-y-2">
        <li>
            <a href="{{ route('admin.dashboard') }}"
                class="block px-4 py-2 rounded hover:bg-gray-700
            ">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('admin.lowDemandMenus') }}"
                class="block px-4 py-2 rounded hover:bg-gray-700
            ">Low-Demand Menu</a>
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
