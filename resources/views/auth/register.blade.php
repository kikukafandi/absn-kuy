<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - SMS Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12">

    <div class="max-w-md w-full space-y-8 p-8">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center mb-4">
                    <i data-feather="book-open" class="h-12 w-12 text-blue-600 mr-3"></i>
                    <h1 class="text-2xl font-bold text-gray-800">SMS Pro</h1>
                </div>
                <h2 class="text-xl font-semibold text-gray-700">Buat Akun Baru</h2>
                <p class="text-gray-500 mt-2">Bergabunglah dengan sistem manajemen sekolah modern</p>
            </div>

            <!-- Register Form -->
            <form class="space-y-6" action="#" method="POST">
                <!-- Full Name Input -->
                <div>
                    <label for="fullname" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-feather="user" class="h-5 w-5 text-gray-400"></i>
                        </div>
                        <input 
                            id="fullname" 
                            name="fullname" 
                            type="text" 
                            autocomplete="name" 
                            required 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Masukkan nama lengkap Anda"
                        >
                    </div>
                </div>

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-feather="mail" class="h-5 w-5 text-gray-400"></i>
                        </div>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            autocomplete="email" 
                            required 
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Masukkan email Anda"
                        >
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-feather="lock" class="h-5 w-5 text-gray-400"></i>
                        </div>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="new-password" 
                            required 
                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Buat password yang kuat"
                        >
                        <button 
                            type="button" 
                            id="toggle-password"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center"
                        >
                            <i data-feather="eye" class="h-5 w-5 text-gray-400 hover:text-gray-600"></i>
                        </button>
                    </div>
                    <div class="mt-1">
                        <div class="flex items-center">
                            <div id="password-strength" class="flex-1 bg-gray-200 rounded-full h-2 mr-3">
                                <div id="password-strength-bar" class="bg-red-500 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                            </div>
                            <span id="password-strength-text" class="text-xs text-gray-500">Lemah</span>
                        </div>
                    </div>
                </div>

                <!-- Confirm Password Input -->
                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-feather="check-circle" class="h-5 w-5 text-gray-400"></i>
                        </div>
                        <input 
                            id="confirm-password" 
                            name="confirm-password" 
                            type="password" 
                            autocomplete="new-password" 
                            required 
                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Ulangi password Anda"
                        >
                        <button 
                            type="button" 
                            id="toggle-confirm-password"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center"
                        >
                            <i data-feather="eye" class="h-5 w-5 text-gray-400 hover:text-gray-600"></i>
                        </button>
                    </div>
                    <div id="password-match-message" class="mt-1 text-sm hidden"></div>
                </div>

                <!-- Terms & Conditions -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input 
                            id="terms" 
                            name="terms" 
                            type="checkbox" 
                            required
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                        >
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="text-gray-700">
                            Saya menyetujui 
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Syarat & Ketentuan</a> 
                            dan 
                            <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Kebijakan Privasi</a>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div>
                    <button 
                        type="submit" 
                        class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                        id="submit-btn"
                        disabled
                    >
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i data-feather="user-plus" class="h-5 w-5 text-blue-300 group-hover:text-blue-200"></i>
                        </span>
                        Daftar
                    </button>
                </div>

                <!-- Login Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                            Masuk sekarang
                        </a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Back to Landing -->
        <div class="text-center">
            <a href="landing.html" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-800 transition-colors">
                <i data-feather="arrow-left" class="h-4 w-4 mr-2"></i>
                Kembali ke beranda
            </a>
        </div>
    </div>

    <script>
        // Initialize Feather Icons
        feather.replace();

        // DOM Elements
        const roleSelect = document.getElementById('role');
        const studentFields = document.getElementById('student-fields');
        const teacherFields = document.getElementById('teacher-fields');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirm-password');
        const passwordStrengthBar = document.getElementById('password-strength-bar');
        const passwordStrengthText = document.getElementById('password-strength-text');
        const passwordMatchMessage = document.getElementById('password-match-message');
        const submitBtn = document.getElementById('submit-btn');
        const termsCheckbox = document.getElementById('terms');

        // Show/Hide role-specific fields
        roleSelect.addEventListener('change', function() {
            const selectedRole = this.value;
            
            // Hide all conditional fields
            studentFields.classList.add('hidden');
            teacherFields.classList.add('hidden');
            
            // Show relevant fields
            if (selectedRole === 'siswa') {
                studentFields.classList.remove('hidden');
                document.getElementById('student-id').required = true;
                document.getElementById('teacher-id').required = false;
            } else if (selectedRole === 'guru') {
                teacherFields.classList.remove('hidden');
                document.getElementById('teacher-id').required = true;
                document.getElementById('student-id').required = false;
            } else {
                document.getElementById('student-id').required = false;
                document.getElementById('teacher-id').required = false;
            }
            
            checkFormValidity();
        });

        // Password strength checker
        function checkPasswordStrength(password) {
            let strength = 0;
            let checks = {
                length: password.length >= 8,
                lowercase: /[a-z]/.test(password),
                uppercase: /[A-Z]/.test(password),
                numbers: /\d/.test(password),
                special: /[!@#$%^&*(),.?":{}|<>]/.test(password)
            };
            
            strength = Object.values(checks).filter(Boolean).length;
            
            let width = (strength / 5) * 100;
            let color = 'bg-red-500';
            let text = 'Sangat Lemah';
            
            if (strength >= 2) {
                color = 'bg-orange-500';
                text = 'Lemah';
            }
            if (strength >= 3) {
                color = 'bg-yellow-500';
                text = 'Sedang';
            }
            if (strength >= 4) {
                color = 'bg-green-500';
                text = 'Kuat';
            }
            if (strength === 5) {
                color = 'bg-green-600';
                text = 'Sangat Kuat';
            }
            
            passwordStrengthBar.style.width = width + '%';
            passwordStrengthBar.className = `h-2 rounded-full transition-all duration-300 ${color}`;
            passwordStrengthText.textContent = text;
            passwordStrengthText.className = `text-xs ${color.replace('bg-', 'text-')}`;
            
            return strength >= 3;
        }

        // Password validation
        passwordInput.addEventListener('input', function() {
            checkPasswordStrength(this.value);
            checkPasswordMatch();
            checkFormValidity();
        });

        confirmPasswordInput.addEventListener('input', function() {
            checkPasswordMatch();
            checkFormValidity();
        });

        function checkPasswordMatch() {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            if (confirmPassword.length > 0) {
                if (password === confirmPassword) {
                    passwordMatchMessage.textContent = 'Password cocok';
                    passwordMatchMessage.className = 'mt-1 text-sm text-green-600';
                    passwordMatchMessage.classList.remove('hidden');
                    return true;
                } else {
                    passwordMatchMessage.textContent = 'Password tidak cocok';
                    passwordMatchMessage.className = 'mt-1 text-sm text-red-600';
                    passwordMatchMessage.classList.remove('hidden');
                    return false;
                }
            } else {
                passwordMatchMessage.classList.add('hidden');
                return false;
            }
        }

        // Form validation
        function checkFormValidity() {
            const form = document.querySelector('form');
            const formData = new FormData(form);
            const isPasswordStrong = checkPasswordStrength(passwordInput.value);
            const isPasswordMatch = checkPasswordMatch();
            const isTermsAccepted = termsCheckbox.checked;
            
            let isValid = true;
            
            // Check required fields
            for (let [name, value] of formData.entries()) {
                const field = document.querySelector(`[name="${name}"]`);
                if (field && field.hasAttribute('required') && !value.trim()) {
                    isValid = false;
                    break;
                }
            }
            
            // Check password strength and match
            if (!isPasswordStrong || !isPasswordMatch || !isTermsAccepted) {
                isValid = false;
            }
            
            submitBtn.disabled = !isValid;
        }

        // Terms checkbox
        termsCheckbox.addEventListener('change', checkFormValidity);

        // Toggle password visibility
        document.getElementById('toggle-password').addEventListener('click', function() {
            const eyeIcon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.setAttribute('data-feather', 'eye-off');
            } else {
                passwordInput.type = 'password';
                eyeIcon.setAttribute('data-feather', 'eye');
            }
            feather.replace();
        });

        document.getElementById('toggle-confirm-password').addEventListener('click', function() {
            const eyeIcon = this.querySelector('i');
            
            if (confirmPasswordInput.type === 'password') {
                confirmPasswordInput.type = 'text';
                eyeIcon.setAttribute('data-feather', 'eye-off');
            } else {
                confirmPasswordInput.type = 'password';
                eyeIcon.setAttribute('data-feather', 'eye');
            }
            feather.replace();
        });

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const role = formData.get('role');
            const fullname = formData.get('fullname');
            const email = formData.get('email');
            
            // Show loading state
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i data-feather="loader" class="h-5 w-5 animate-spin"></i> Mendaftar...';
            submitBtn.disabled = true;
            feather.replace();
            
            // Simulate API call delay
            setTimeout(() => {
                alert(`Pendaftaran berhasil!\nNama: ${fullname}\nEmail: ${email}\nPeran: ${role}\n\nSilakan cek email untuk verifikasi akun.`);
                // In real app, redirect to login or verification page
                window.location.href = 'login.html';
            }, 2000);
        });

        // Initial form validation check
        document.querySelectorAll('input, select').forEach(element => {
            element.addEventListener('input', checkFormValidity);
            element.addEventListener('change', checkFormValidity);
        });
    </script>
</body>
</html>
