<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-sm border-r border-gray-200">
            <div class="p-4">
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 bg-blue-600 rounded flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-2xl text-white"></i>
                    </div>
                    <div>
                        <h1 class="font-bold text-base text-gray-900">IPASS</h1>
                        <p class="text-xs text-gray-500">Admin Dashboard</p>
                    </div>
                </div>
            </div>
            
            <nav class="mt-2">
                <a href="#" class="flex items-center px-4 py-2.5 text-blue-600 bg-blue-50 border-r-3 border-blue-600 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                    </svg>
                    Dashboard
                </a>
                
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h7c-.63-.84-1-1.87-1-3 0-2.76 2.24-5 5-5 .34 0 .68.03 1 .09V8l-6-6zm-1 7V3.5L18.5 9H13z"/>
                    </svg>
                    Kebijakan & IK
                </a>
                
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Penetapan
                </a>
                
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                    Pelaksanaan
                </a>
                
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                    Evaluasi Diri
                </a>
                
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                    </svg>
                    Survei
                </a>
                
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M16 4c0-1.11.89-2 2-2s2 .89 2 2-.89 2-2 2-2-.89-2-2zm4 18v-6h2.5l-2.54-7.63A1.5 1.5 0 0 0 18.5 7h-5c-.83 0-1.5.67-1.5 1.5 0 .83.67 1.5 1.5 1.5H16l-1.8 5.4L11 8h2V6H7v2h2l4.54 13H20z"/>
                    </svg>
                    Responden
                </a>
                
                <a href="#" class="flex items-center px-4 py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h7c-.63-.84-1-1.87-1-3 0-2.76 2.24-5 5-5 .34 0 .68.03 1 .09V8l-6-6zm-1 7V3.5L18.5 9H13z"/>
                        <path d="M19 14c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zm0 4.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                    </svg>
                    Laporan
                </a>
                
                <div class="mt-6 px-4">
                    <a href="#" class="flex items-center py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                        <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                        Pengaturan
                    </a>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center w-full py-2.5 text-gray-600 hover:bg-gray-50 text-sm">
                            <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex items-center justify-between px-6 py-3">
                    <div>
                        <h1 class="text-xl font-semibold text-gray-900">Dashboard</h1>
                        <p class="text-sm text-gray-500">Integrated Quality Assurance and Survey Systems</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="p-1 text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                </svg>
                            </button>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <img class="w-7 h-7 rounded-full" src="https://ui-avatars.com/api/?name=Bahlil&background=3b82f6&color=fff" alt="Avatar">
                            <div>
                                <p class="text-sm font-medium text-gray-900">{{Auth::user()->name}}</p>
                                <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-4 bg-gray-100">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>