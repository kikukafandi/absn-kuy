<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Digital Sekolah Modern - Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i data-feather="book-open" class="h-8 w-8 text-blue-600 mr-3"></i>
                        <span class="text-xl font-bold text-gray-800">Absenkuy</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="text-gray-700 hover:text-blue-600 px-3 py-2 font-medium transition-colors">Beranda</a>
                    <a href="#fitur" class="text-gray-700 hover:text-blue-600 px-3 py-2 font-medium transition-colors">Fitur</a>
                    <a href="#tentang" class="text-gray-700 hover:text-blue-600 px-3 py-2 font-medium transition-colors">Tentang</a>
                    <a href="login.html" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium">Login</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-600">
                        <i data-feather="menu" class="h-6 w-6"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#beranda" class="block px-3 py-2 text-gray-700 hover:text-blue-600 font-medium">Beranda</a>
                <a href="#fitur" class="block px-3 py-2 text-gray-700 hover:text-blue-600 font-medium">Fitur</a>
                <a href="#tentang" class="block px-3 py-2 text-gray-700 hover:text-blue-600 font-medium">Tentang</a>
                <a href="login.html" class="block px-3 py-2 text-blue-600 font-medium">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="pt-16 bg-gradient-to-br from-blue-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-6">
                    Absensi Digital<br>
                    <span class="text-blue-600">Sekolah Modern</span>
                </h1>
                <p class="text-xl text-gray-600 mb-10 max-w-3xl mx-auto">
                    Sistem manajemen sekolah terintegrasi dengan teknologi terdepan untuk kemudahan absensi, 
                    pengelolaan tugas, dan komunikasi sekolah yang efisien.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="login.html" class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-colors inline-flex items-center justify-center">
                        <i data-feather="user" class="mr-2"></i>
                        Login Sebagai Siswa
                    </a>
                    <a href="login.html" class="bg-gray-800 text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-gray-900 transition-colors inline-flex items-center justify-center">
                        <i data-feather="shield" class="mr-2"></i>
                        Login Sebagai Admin
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section id="fitur" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Fitur Unggulan</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Teknologi terdepan untuk sistem manajemen sekolah yang modern dan efisien
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Fitur 1 -->
                <div class="text-center p-8 rounded-xl bg-gray-50 hover:bg-gray-100 transition-colors">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-feather="fingerprint" class="h-8 w-8 text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Absensi Sidik Jari & RFID</h3>
                    <p class="text-gray-600">
                        Sistem absensi modern menggunakan teknologi sidik jari dan RFID untuk akurasi 
                        tinggi dan mencegah manipulasi data kehadiran.
                    </p>
                </div>

                <!-- Fitur 2 -->
                <div class="text-center p-8 rounded-xl bg-gray-50 hover:bg-gray-100 transition-colors">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-feather="upload" class="h-8 w-8 text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Upload Tugas</h3>
                    <p class="text-gray-600">
                        Platform digital untuk pengumpulan tugas dengan berbagai format file, 
                        sistem penilaian otomatis, dan tracking progress siswa.
                    </p>
                </div>

                <!-- Fitur 3 -->
                <div class="text-center p-8 rounded-xl bg-gray-50 hover:bg-gray-100 transition-colors">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i data-feather="info" class="h-8 w-8 text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Info Sekolah</h3>
                    <p class="text-gray-600">
                        Pusat informasi sekolah terintegrasi dengan pengumuman, jadwal kegiatan, 
                        dan komunikasi real-time antara siswa, guru, dan orang tua.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Tentang Absenkuy</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Absenkuy adalah solusi sistem manajemen sekolah yang dirancang khusus untuk 
                        memenuhi kebutuhan pendidikan modern. Dengan teknologi terdepan dan antarmuka 
                        yang user-friendly, kami membantu sekolah dalam digitalisasi proses 
                        administrasi dan pembelajaran.
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        Dipercaya oleh ratusan sekolah di seluruh Indonesia, Absenkuy telah terbukti 
                        meningkatkan efisiensi operasional sekolah hingga 75% dan kepuasan pengguna 
                        mencapai 95%.
                    </p>
                    {{-- <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                            <div class="text-gray-600">Sekolah Terdaftar</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2">50K+</div>
                            <div class="text-gray-600">Siswa Aktif</div>
                        </div>
                    </div> --}}
                </div>
                <div class="lg:order-first">
                    <div class="bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl h-80 flex items-center justify-center">
                        <div class="text-center text-white">
                            <i data-feather="monitor" class="h-24 w-24 mx-auto mb-4 opacity-80"></i>
                            <p class="text-xl font-medium">Dashboard Ilustrasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i data-feather="book-open" class="h-8 w-8 text-blue-400 mr-3"></i>
                        <span class="text-xl font-bold">Absenkuy</span>
                    </div>
                    <p class="text-gray-400">
                        Sistem Manajemen Sekolah terdepan untuk pendidikan modern dan terintegrasi.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#beranda" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#fitur" class="hover:text-white transition-colors">Fitur</a></li>
                        <li><a href="#tentang" class="hover:text-white transition-colors">Tentang</a></li>
                        <li><a href="login.html" class="hover:text-white transition-colors">Login</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-feather="facebook" class="h-6 w-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-feather="twitter" class="h-6 w-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-feather="instagram" class="h-6 w-6"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i data-feather="youtube" class="h-6 w-6"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Absenkuy. Semua hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Feather Icons
        feather.replace();

        // Mobile Menu Toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
