<header class="bg-white shadow-md p-4 flex justify-between items-center">
    <button id="menu-btn" class="sm:hidden text-gray-600">
        <i data-feather="menu"></i>
    </button>
    <h2 class="text-lg font-semibold text-gray-700 hidden sm:block">Dashboard Admin</h2>
    <div class="flex items-center">
        <button class="mr-4 p-2 text-gray-600 hover:bg-gray-100 rounded-lg" data-dropdown-toggle="notification-dropdown">
            <i data-feather="bell"></i>
        </button>
        <!-- Notification Dropdown -->
        <div id="notification-dropdown"
            class="dropdown-menu hidden absolute right-4 top-16 w-80 bg-white rounded-lg shadow-lg border z-50">
            <div class="p-4 border-b">
                <h3 class="font-semibold text-gray-800">Notifikasi</h3>
            </div>
            <div class="max-h-64 overflow-y-auto">
                <div class="p-4 border-b hover:bg-gray-50">
                    <p class="text-sm font-medium text-gray-800">User Baru Terdaftar</p>
                    <p class="text-xs text-gray-500">Siswa baru mendaftar ke sistem</p>
                </div>
                <div class="p-4 border-b hover:bg-gray-50">
                    <p class="text-sm font-medium text-gray-800">Laporan Harian</p>
                    <p class="text-xs text-gray-500">Laporan aktivitas hari ini siap</p>
                </div>
            </div>
        </div>
        <span class="text-gray-600 mr-4">Halo, Admin (Administrator)</span>
        <img src="https://placehold.co/40x40/E2E8F0/4A5568?text=AD" alt="Avatar Pengguna"
            class="w-10 h-10 rounded-full">
    </div>
</header>
