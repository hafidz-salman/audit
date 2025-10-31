<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPASS - Lupa Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-2xl overflow-hidden max-w-4xl w-full mx-4">
        <div class="flex flex-col md:flex-row">
            <!-- Left Panel -->
            <div class="bg-gradient-to-br from-blue-600 to-purple-700 p-8 md:w-1/2 text-white">
                <div class="text-center mb-8">
                    <div class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-graduation-cap text-2xl"></i>
                    </div>
                    <h1 class="text-3xl font-bold">IPASS</h1>
                    <p class="text-blue-100">Sistem Informasi Akademik</p>
                </div>
                
                <div class="mb-8">
                    <h2 class="text-xl font-semibold mb-4">Reset Password</h2>
                    <p class="text-blue-100 text-sm leading-relaxed">
                        Masukkan email Anda dan kami akan mengirimkan link untuk mereset password ke email tersebut.
                    </p>
                </div>
            </div>
            
            <!-- Right Panel -->
            <div class="p-8 md:w-1/2">
                <div class="max-w-sm mx-auto">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Lupa Password</h2>
                    <p class="text-gray-600 text-sm mb-6">Masukkan email Anda untuk mendapatkan link reset password</p>
                    
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        
                        <!-- Email -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                            <div class="relative">
                                <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                                <input type="email" name="email" value="{{ old('email') }}" 
                                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                       placeholder="Masukkan email Anda" required autofocus>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Link Reset
                        </button>
                    </form>
                    
                    <!-- Back to Login -->
                    <div class="mt-6 text-center">
                        <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center justify-center">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali ke Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2">
        <p class="text-gray-400 text-xs text-center">
            © 2024 IPASS - Sistem Informasi Akademik. All rights reserved.
        </p>
    </div>
</body>
</html>