@extends('layout.app')
@section('content')
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Total Siswa</h3>
                <i data-feather="users" class="text-blue-500"></i>
            </div>
            <div class="text-3xl font-bold text-blue-600 mb-2">1,247</div>
            <p class="text-sm text-gray-600">+12 siswa baru bulan ini</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Total Guru</h3>
                <i data-feather="user-check" class="text-green-500"></i>
            </div>
            <div class="text-3xl font-bold text-green-600 mb-2">86</div>
            <p class="text-sm text-gray-600">+3 guru baru bulan ini</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Total Kelas</h3>
                <i data-feather="grid" class="text-orange-500"></i>
            </div>
            <div class="text-3xl font-bold text-orange-600 mb-2">42</div>
            <p class="text-sm text-gray-600">Dari X - XII semua jurusan</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Mata Pelajaran</h3>
                <i data-feather="book" class="text-purple-500"></i>
            </div>
            <div class="text-3xl font-bold text-purple-600 mb-2">24</div>
            <p class="text-sm text-gray-600">Semua tingkat kelas</p>
        </div>
    </div>

    <!-- Second Row Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Pengumuman Aktif</h3>
                <i data-feather="alert-triangle" class="text-red-500"></i>
            </div>
            <div class="text-3xl font-bold text-red-600 mb-2">8</div>
            <p class="text-sm text-gray-600">5 pengumuman penting</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Kehadiran Hari Ini</h3>
                <i data-feather="check-circle" class="text-teal-500"></i>
            </div>
            <div class="text-3xl font-bold text-teal-600 mb-2">94.2%</div>
            <p class="text-sm text-gray-600">1,175 dari 1,247 siswa</p>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Tugas Aktif</h3>
                <i data-feather="file-text" class="text-indigo-500"></i>
            </div>
            <div class="text-3xl font-bold text-indigo-600 mb-2">156</div>
            <p class="text-sm text-gray-600">Dari semua mata pelajaran</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Latest Announcements -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold text-gray-800">Pengumuman Terbaru</h3>
                    <a href="pengumuman.html" class="text-blue-600 text-sm hover:underline">Lihat Semua</a>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="p-4 bg-red-50 border-l-4 border-red-400 rounded-lg">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">Ujian Tengah Semester</p>
                                <p class="text-sm text-gray-600 mt-1">Ujian akan dimulai pada tanggal 1 Agustus 2025</p>
                                <p class="text-xs text-gray-500 mt-2">Dipublikasi: 21 Juli 2025</p>
                            </div>
                            <span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs">Penting</span>
                        </div>
                    </div>

                    <div class="p-4 bg-blue-50 border-l-4 border-blue-400 rounded-lg">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">Libur Hari Kemerdekaan</p>
                                <p class="text-sm text-gray-600 mt-1">Sekolah libur pada tanggal 17 Agustus 2025</p>
                                <p class="text-xs text-gray-500 mt-2">Dipublikasi: 15 Juli 2025</p>
                            </div>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">Info</span>
                        </div>
                    </div>

                    <div class="p-4 bg-green-50 border-l-4 border-green-400 rounded-lg">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">Pendaftaran Ekstrakurikuler</p>
                                <p class="text-sm text-gray-600 mt-1">Buka pendaftaran ekstrakurikuler tahun ajaran baru</p>
                                <p class="text-xs text-gray-500 mt-2">Dipublikasi: 10 Juli 2025</p>
                            </div>
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Aktif</span>
                        </div>
                    </div>

                    <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-lg">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">Pemeliharaan Sistem</p>
                                <p class="text-sm text-gray-600 mt-1">Sistem akan maintenance pada Sabtu malam</p>
                                <p class="text-xs text-gray-500 mt-2">Dipublikasi: 8 Juli 2025</p>
                            </div>
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Notice</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-6 border-b">
                <h3 class="text-lg font-semibold text-gray-800">Aktivitas Terbaru</h3>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                            <i data-feather="user-plus" class="h-4 w-4 text-green-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">User baru ditambahkan</p>
                            <p class="text-xs text-gray-500">Siswa: Rini Kartika (XII IPA 2)</p>
                            <p class="text-xs text-gray-400">2 jam yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                            <i data-feather="edit" class="h-4 w-4 text-blue-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Kelas diperbarui</p>
                            <p class="text-xs text-gray-500">XI IPA 1 - Wali kelas diganti</p>
                            <p class="text-xs text-gray-400">4 jam yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                            <i data-feather="book" class="h-4 w-4 text-purple-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Mata pelajaran baru</p>
                            <p class="text-xs text-gray-500">Bahasa Jepang ditambahkan</p>
                            <p class="text-xs text-gray-400">1 hari yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                            <i data-feather="alert-triangle" class="h-4 w-4 text-orange-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Pengumuman dipublikasi</p>
                            <p class="text-xs text-gray-500">Ujian Tengah Semester</p>
                            <p class="text-xs text-gray-400">2 hari yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                            <i data-feather="user-x" class="h-4 w-4 text-red-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">User dihapus</p>
                            <p class="text-xs text-gray-500">Guru: Pak Ridwan (Pensiun)</p>
                            <p class="text-xs text-gray-400">3 hari yang lalu</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-teal-100 rounded-full flex items-center justify-center mr-3 mt-0.5">
                            <i data-feather="settings" class="h-4 w-4 text-teal-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-800">Sistem diperbarui</p>
                            <p class="text-xs text-gray-500">Update keamanan v2.1.3</p>
                            <p class="text-xs text-gray-400">1 minggu yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="mt-8">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">Aksi Cepat</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="users.html"
                class="bg-blue-600 text-white p-4 rounded-lg hover:bg-blue-700 transition-colors flex flex-col items-center">
                <i data-feather="user-plus" class="mb-2"></i>
                <span class="text-sm">Tambah User</span>
            </a>
            <a href="kelas.html"
                class="bg-green-600 text-white p-4 rounded-lg hover:bg-green-700 transition-colors flex flex-col items-center">
                <i data-feather="plus" class="mb-2"></i>
                <span class="text-sm">Buat Kelas</span>
            </a>
            <a href="pengumuman.html"
                class="bg-orange-600 text-white p-4 rounded-lg hover:bg-orange-700 transition-colors flex flex-col items-center">
                <i data-feather="alert-triangle" class="mb-2"></i>
                <span class="text-sm">Buat Pengumuman</span>
            </a>
            <button
                class="bg-purple-600 text-white p-4 rounded-lg hover:bg-purple-700 transition-colors flex flex-col items-center">
                <i data-feather="download" class="mb-2"></i>
                <span class="text-sm">Export Data</span>
            </button>
        </div>
@endsection
