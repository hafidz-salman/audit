<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPASS - Sistem Informasi Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-4xl w-full mx-4">
        <div class="flex flex-col md:flex-row">
            <!-- Left Panel -->
            <div class="bg-gradient-to-br from-blue-700 to-purple-800 p-8 md:w-1/2 text-white">
                <div class="text-center mb-8">
                    <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-2xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold">IPASS</h1>
                    <p class="text-blue-100">Sistem Informasi Akademik</p>
                </div>
                
                <div class="mb-8 text-center">
                    <h2 class="text-xl font-semibold mb-4">Selamat Datang</h2>
                    <p class="text-blue-100 text-sm leading-relaxed">
                        Akses portal akademik Anda untuk mengelola data mahasiswa, jadwal kuliah, nilai, dan informasi akademik lainnya dengan mudah dan aman.
                    </p>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle text-green-300 mr-3"></i>
                        <span>Manajemen Data Mahasiswa</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle text-green-300 mr-3"></i>
                        <span>Jadwal Kuliah Real-time</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle text-green-300 mr-3"></i>
                        <span>Monitoring Nilai & KHS</span>
                    </div>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-check-circle text-green-300 mr-3"></i>
                        <span>Notifikasi Akademik</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Panel -->
            <div class="p-8 md:w-1/2">
                <div class="max-w-sm mx-auto">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2 text-center">Masuk ke Akun</h2>
                    <p class="text-gray-600 text-sm mb-6 text-center">Silakan masukkan kredensial Anda untuk mengakses sistem</p>
                    
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <!-- Username -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                            <div class="relative">
                                <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input type="email" name="email" value="{{ old('email') }}" 
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan Email" required autofocus>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                            <div class="relative">
                                <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input type="password" name="password" 
                                       class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan password" required>
                                <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        
                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between mb-6">
                            <label class="flex items-center">
                                <input type="checkbox" name="remember" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500">
                                <span class="ml-2 text-sm text-gray-600">Ingat saya</span>
                            </label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-800">
                                    Lupa password?
                                </a>
                            @endif
                        </div>
                        
                        <!-- Login Button -->
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Masuk ke Sistem
                        </button>
                    </form>
                    
                    <!-- Alternative Login -->
                    <div class="mt-6">
                        <div class="text-center text-gray-500 text-sm mb-4">Atau</div>
                        <div class="grid grid-cols-2 gap-3">
                            <button class="flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200">
                                <i class="fas fa-user-graduate text-blue-600 mr-2"></i>
                                <span class="text-sm">Portal Mahasiswa</span>
                            </button>
                            <button class="flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-200">
                                <i class="fas fa-chalkboard-teacher text-green-600 mr-2"></i>
                                <span class="text-sm">Portal Dosen</span>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Support -->
                    <div class="mt-6 text-center">
                        <p class="text-gray-500 text-sm">
                            Butuh bantuan? 
                            <a href="#" class="text-blue-600 hover:text-blue-800">Hubungi IT Support</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
        <p class="text-gray-400 text-xs text-center">
            © 2025 IPASS - Teknologi Informasi23. All rights reserved.
        </p>
    </div>
</body>
</html>