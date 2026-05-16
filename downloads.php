


<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Downloads - Cuban Mods</title>
    
    <!-- PWA Meta Tags -->
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#3b82f6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="CubanMods">
    <link rel="apple-touch-icon" href="/assets/img/icon-192.png">
    
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/dark-mode.css">
</head>
<body class="min-h-screen bg-slate-50 dark:bg-black transition-colors duration-200" x-data="{ mobileMenuOpen: false }">
    
    
<!-- Desktop Sidebar -->
<aside class="fixed left-0 top-0 bottom-0 w-64 bg-white dark:bg-black border-r border-slate-100 dark:border-gray-800 flex flex-col z-40 hidden md:flex transition-colors duration-200" x-data="{ open: false }">
    <!-- Logo -->
    <div class="p-6 border-b border-slate-100 dark:border-gray-800">
        <a href="/home.php" class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/30">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <span class="font-bold text-xl text-slate-900 dark:text-white">Cuban Mods</span>
        </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 p-4 overflow-y-auto">
        <ul class="space-y-2">
            <!-- ✅ Menú principal con emojis elegantes -->
                        <li>
                <a href="/home.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        🎮                    </div>
                    <span>Overview</span>
                </a>
            </li>
                        <li>
                <a href="/charts.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        💬                    </div>
                    <span>Chat</span>
                </a>
            </li>
                        <li>
                <a href="/downloads.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 bg-gradient-to-r from-blue-500 to-cyan-400 text-white shadow-lg shadow-blue-500/30">
                    <div class="w-8 h-8 rounded-lg bg-white/20 flex items-center justify-center text-lg transition-all duration-200">
                        ⬇️                    </div>
                    <span>Downloads</span>
                </a>
            </li>
                        <li>
                <a href="/settings.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        ⚙️                    </div>
                    <span>Settings</span>
                </a>
            </li>
                        
            <!-- ✅ Divider si no está logueado -->
                        <li class="pt-4">
                <div class="border-t border-slate-200 dark:border-gray-800"></div>
            </li>
            
            <!-- ✅ Login y Register con emojis -->
                        <li>
                <a href="/login.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        🔑                    </div>
                    <span>Login</span>
                </a>
            </li>
                        <li>
                <a href="/register.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        📝                    </div>
                    <span>Register</span>
                </a>
            </li>
                                </ul>
    </nav>

    <!-- ✅ VIP Card (Al final del sidebar, antes del logout) -->
    <div class="p-4">
        <a href="/subscription.php" class="block">
                        <div class="bg-gradient-to-br from-violet-600 via-purple-600 to-fuchsia-600 rounded-2xl p-4 text-white cursor-pointer hover:shadow-lg hover:shadow-purple-500/30 transition-all duration-300">
                <div class="flex items-center gap-2 mb-2">
                    <i data-lucide="crown" class="w-4 h-4 text-yellow-300"></i>
                    <span class="text-sm font-semibold">Become VIP</span>
                </div>
                <p class="text-xs text-white/80">
                    Unlimited access to all mods                </p>
            </div>
                    </a>
    </div>

    <!-- Logout (solo si está logueado) -->
    </aside>

<!-- Mobile Sidebar Overlay -->
<div id="mobile-menu-overlay"
     class="hidden fixed inset-0 bg-black/50 z-30 md:hidden transition-opacity duration-300">
</div>

<!-- Mobile Sidebar -->
<aside id="mobile-menu-sidebar"
       class="fixed left-0 top-0 bottom-0 w-64 bg-white dark:bg-black border-r border-slate-100 dark:border-gray-800 flex flex-col z-40 md:hidden transform -translate-x-full transition-transform duration-300">
    <!-- Same content as desktop sidebar -->
    <div class="p-6 border-b border-slate-100 dark:border-gray-800">
        <a href="/home.php" class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/30">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <span class="font-bold text-xl text-slate-900 dark:text-white">Cuban Mods</span>
        </a>
    </div>

    <nav class="flex-1 p-4 overflow-y-auto">
        <ul class="space-y-2">
            <!-- ✅ Menú principal con emojis elegantes (mobile) -->
                        <li>
                <a href="/home.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        🎮                    </div>
                    <span>Overview</span>
                </a>
            </li>
                        <li>
                <a href="/charts.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        💬                    </div>
                    <span>Chat</span>
                </a>
            </li>
                        <li>
                <a href="/downloads.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 bg-gradient-to-r from-blue-500 to-cyan-400 text-white shadow-lg shadow-blue-500/30">
                    <div class="w-8 h-8 rounded-lg bg-white/20 flex items-center justify-center text-lg transition-all duration-200">
                        ⬇️                    </div>
                    <span>Downloads</span>
                </a>
            </li>
                        <li>
                <a href="/settings.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        ⚙️                    </div>
                    <span>Settings</span>
                </a>
            </li>
                        
            <!-- ✅ Divider si no está logueado -->
                        <li class="pt-4">
                <div class="border-t border-slate-200 dark:border-gray-800"></div>
            </li>
            
            <!-- ✅ Login y Register con emojis (mobile) -->
                        <li>
                <a href="/login.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        🔑                    </div>
                    <span>Login</span>
                </a>
            </li>
                        <li>
                <a href="/register.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        📝                    </div>
                    <span>Register</span>
                </a>
            </li>
                                </ul>
    </nav>

    <div class="p-4">
        <a href="/subscription.php" class="block">
                        <div class="bg-gradient-to-br from-violet-600 via-purple-600 to-fuchsia-600 rounded-2xl p-4 text-white cursor-pointer">
                <div class="flex items-center gap-2 mb-2">
                    <i data-lucide="crown" class="w-4 h-4 text-yellow-300"></i>
                    <span class="text-sm font-semibold">Hazte VIP</span>
                </div>
                <p class="text-xs text-white/80">
                    Acceso ilimitado a todos los mods
                </p>
            </div>
                    </a>
    </div>

    </aside>
    
    <!-- Main Content -->
    <div class="md:ml-64">
        
<style>
    #search-results::-webkit-scrollbar {
        width: 6px;
    }
    
    #search-results::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 10px;
    }
    
    #search-results::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 10px;
    }
    
    #search-results::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
    
    /* ═══════════════════════════════════════════════════════
       Botón flotante de redes sociales
       ═══════════════════════════════════════════════════════ */
    .social-float-container {
        position: fixed;
        bottom: 24px;
        right: 24px;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }
    
    .social-links {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 8px;
        opacity: 0;
        transform: translateY(20px);
        pointer-events: none;
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    
    .social-links.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: all;
    }
    
    .social-link {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        text-decoration: none;
        animation: slideInUp 0.4s ease forwards;
    }
    
    .social-link:hover {
        transform: scale(1.1) translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
    }
    
    .social-link.youtube {
        background: linear-gradient(135deg, #FF0000 0%, #CC0000 100%);
    }
    
    .social-link.whatsapp {
        background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    }
    
    .social-link.facebook {
        background: linear-gradient(135deg, #1877F2 0%, #0C63D4 100%);
    }
    
    .social-link.telegram {
        background: linear-gradient(135deg, #229ED9 0%, #0088CC 100%);
    }
    
    .social-main-button {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 6px 24px rgba(102, 126, 234, 0.4);
        transition: all 0.3s ease;
        border: none;
    }
    
    .social-main-button:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 32px rgba(102, 126, 234, 0.5);
    }
    
    .social-main-button.active {
        transform: rotate(45deg);
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        animation: pulse 2s infinite;
    }
    
    .social-main-button .icon-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 4px;
        padding: 8px;
    }
    
    .social-main-button .mini-icon {
        width: 18px;
        height: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }
    
    .social-main-button.active .mini-icon {
        transform: scale(0.8);
    }
    
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Animación de pulso para el botón principal */
    @keyframes pulse {
        0%, 100% {
            box-shadow: 0 6px 24px rgba(102, 126, 234, 0.4);
        }
        50% {
            box-shadow: 0 6px 32px rgba(102, 126, 234, 0.6);
        }
    }
    
    /* Animación de flotación suave */
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    
    /* Animación de balanceo */
    @keyframes sway {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-8px) rotate(-3deg);
        }
        75% {
            transform: translateY(-8px) rotate(3deg);
        }
    }
    
    .social-main-button {
        animation: pulse 2s infinite, float 3s ease-in-out infinite;
    }
    
    .social-main-button:hover {
        animation: pulse 2s infinite;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .social-float-container {
            bottom: 20px;
            right: 20px;
        }
        
        .social-main-button {
            width: 58px;
            height: 58px;
        }
        
        .social-link {
            width: 46px;
            height: 46px;
        }
    }
    
    @media (max-width: 640px) {
        .social-float-container {
            bottom: 20px;
            right: 16px;
        }
        
        .social-main-button {
            width: 56px;
            height: 56px;
        }
        
        .social-link {
            width: 44px;
            height: 44px;
        }
    }
    
    /* Para móviles muy pequeños */
    @media (max-width: 380px) {
        .social-float-container {
            bottom: 16px;
            right: 12px;
        }
        
        .social-main-button {
            width: 52px;
            height: 52px;
        }
        
        .social-link {
            width: 42px;
            height: 42px;
        }
    }
</style>

<header class="sticky top-0 bg-white/80 dark:bg-black/90 backdrop-blur-xl border-b border-slate-100 dark:border-gray-800 z-30">
    <div class="flex items-center justify-between h-16 px-3 md:px-8">
        <!-- Left: Mobile menu button + Logo -->
        <div class="flex items-center gap-2 md:gap-3">
            <!-- Mobile menu button -->
            <button id="mobile-menu-btn"
                    class="md:hidden p-2 rounded-lg hover:bg-slate-100 dark:hover:bg-gray-800 transition-colors"
                    aria-label="Toggle menu">
                <svg class="w-6 h-6 text-slate-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            
            <!-- Logo CubanMods (visible en móvil, más alto) -->
            <div class="flex items-center gap-1.5 md:hidden h-10">
                <div class="w-7 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center shadow-lg">
                    <svg class="w-4 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="flex flex-col justify-center leading-tight">
                    <span class="font-black text-[10px] bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">CUBAN</span>
                    <span class="font-black text-[10px] text-slate-800 dark:text-white">MODS</span>
                </div>
            </div>
        </div>
        
        <!-- Divisor vertical (solo móvil) -->
        <div class="h-8 w-px bg-slate-200 dark:bg-gray-700 md:hidden"></div>

        <!-- Right section -->
        <div class="flex items-center gap-2 md:gap-3">
            <!-- Search con dropdown de resultados -->
            <div class="relative hidden sm:block" id="search-container">
                <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-slate-400 z-10"></i>
                <input type="text" 
                       id="search-input"
                       placeholder="Buscar mods..." 
                       autocomplete="off"
                       class="pl-9 pr-4 w-32 md:w-64 h-10 rounded-xl border border-slate-200 dark:border-gray-700 bg-slate-50 dark:bg-gray-900 dark:text-white focus:bg-white dark:focus:bg-gray-800 focus:border-blue-500 focus:outline-none transition-colors text-sm">
                
                <!-- Dropdown de resultados -->
                <div id="search-results" 
                     class="absolute top-full mt-2 w-full md:w-96 bg-white dark:bg-gray-900 rounded-2xl shadow-2xl border border-slate-200 dark:border-gray-800 overflow-hidden hidden z-50 max-h-96 overflow-y-auto">
                    <!-- Loading -->
                    <div id="search-loading" class="p-4 text-center text-slate-500 text-sm hidden">
                        <div class="w-5 h-5 border-2 border-blue-500 border-t-transparent rounded-full animate-spin mx-auto mb-2"></div>
                        Buscando...
                    </div>
                    
                    <!-- Results -->
                    <div id="search-items"></div>
                    
                    <!-- No results -->
                    <div id="search-empty" class="p-6 text-center text-slate-500 hidden">
                        <i data-lucide="search-x" class="w-8 h-8 mx-auto mb-2 text-slate-400"></i>
                        <p class="text-sm">No se encontraron resultados</p>
                    </div>
                </div>
            </div>

            <!-- Language Toggle (Solo bandera) -->
            <div class="relative" id="lang-dropdown">
                <button id="lang-toggle" class="p-2 hover:bg-slate-100 dark:hover:bg-gray-800 rounded-xl transition-colors text-xl">
                    🇺🇸                </button>
                
                <!-- Language Dropdown -->
                <div id="lang-menu" class="absolute right-0 mt-3 w-40 bg-white dark:bg-gray-900 rounded-xl shadow-2xl border border-slate-100 dark:border-gray-800 py-2 overflow-hidden z-50 hidden">
                    <a href="?lang=es" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 dark:text-gray-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors ">
                        <span class="text-lg">🇪🇸</span>
                        Español
                    </a>
                    <a href="?lang=en" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 dark:text-gray-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400">
                        <span class="text-lg">🇺🇸</span>
                        English
                    </a>
                </div>
            </div>

            <!-- Dark Mode Toggle -->
            <button id="theme-toggle" class="p-2 rounded-xl hover:bg-slate-100 dark:hover:bg-gray-800 transition-colors" title="Cambiar tema">
                <svg id="theme-icon-sun" class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
                </svg>
                <svg id="theme-icon-moon" class="w-5 h-5 text-blue-400 hidden" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
            </button>

            <!-- User menu con dropdown funcional -->
                        <a href="/login.php" class="bg-gradient-to-r from-blue-500 to-cyan-400 hover:from-blue-600 hover:to-cyan-500 text-white px-4 md:px-5 py-2 rounded-xl font-medium text-xs md:text-sm transition-all duration-200 shadow-lg shadow-blue-500/30">
                Iniciar Sesión
            </a>
                    </div>
    </div>
</header>

<!-- Script de búsqueda en tiempo real -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-results');
    const searchLoading = document.getElementById('search-loading');
    const searchItems = document.getElementById('search-items');
    const searchEmpty = document.getElementById('search-empty');
    const searchContainer = document.getElementById('search-container');

    if (searchInput && searchResults && searchLoading && searchItems && searchEmpty) {
        let searchTimeout;
        let currentSearch = '';

        function hideResults() {
            searchResults.classList.add('hidden');
            searchItems.innerHTML = '';
            searchLoading.classList.add('hidden');
            searchEmpty.classList.add('hidden');
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        searchInput.addEventListener('input', function(e) {
            clearTimeout(searchTimeout);
            const query = e.target.value.trim();
            currentSearch = query;

            if (query.length < 2) {
                hideResults();
                return;
            }

            searchResults.classList.remove('hidden');
            searchLoading.classList.remove('hidden');
            searchItems.innerHTML = '';
            searchEmpty.classList.add('hidden');

            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });

        document.addEventListener('click', function(e) {
            if (searchContainer && !searchContainer.contains(e.target)) {
                hideResults();
            }
        });

        async function performSearch(query) {
            try {
                const response = await fetch(`/PANEL_ADMIN/api_search_games.php?q=${encodeURIComponent(query)}`);
                const data = await response.json();

                searchLoading.classList.add('hidden');

                if (query !== currentSearch) return;

                if (data.success && data.games && data.games.length > 0) {
                    displayResults(data.games);
                } else {
                    searchItems.innerHTML = '';
                    searchEmpty.classList.remove('hidden');
                }

                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            } catch (error) {
                searchLoading.classList.add('hidden');
                searchEmpty.classList.remove('hidden');
            }
        }

        function displayResults(games) {
            searchItems.innerHTML = '';
            searchEmpty.classList.add('hidden');

            games.forEach(game => {
                const item = document.createElement('a');
                item.href = `/mod-details.php?id=${game.id}`;
                item.className = 'flex gap-3 p-3 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors border-b border-slate-100 dark:border-gray-700 last:border-0';

                const imageUrl = game.cover_image ?
                    (game.cover_image.startsWith('http') ? game.cover_image : `/uploads/covers/${game.cover_image}`) :
                    '/uploads/covers/default.png';

                item.innerHTML = `
                    <img src="${imageUrl}"
                         alt="${escapeHtml(game.name)}"
                         class="w-12 h-12 rounded-xl object-cover shadow-md flex-shrink-0">
                    <div class="flex-1 min-w-0">
                        <p class="font-semibold text-sm text-slate-900 dark:text-white truncate">${escapeHtml(game.name)}</p>
                        <p class="text-xs text-slate-500 dark:text-gray-400 truncate">${escapeHtml(game.category || 'Juego')}</p>
                    </div>
                    <div class="flex items-center gap-2 flex-shrink-0">
                        ${game.size_mb ? `<span class="text-xs px-2 py-1 bg-blue-100 dark:bg-blue-900/40 text-blue-600 dark:text-blue-300 rounded-lg font-semibold">
                            ${game.size_mb} MB
                        </span>` : ''}
                        <i data-lucide="arrow-right" class="w-4 h-4 text-slate-400"></i>
                    </div>
                `;

                item.addEventListener('click', function() {
                    hideResults();
                    searchInput.value = '';
                });

                searchItems.appendChild(item);
            });
        }
    }

    // ═══════════════════════════════════════════════════════
    // Dark Mode Toggle
    // ═══════════════════════════════════════════════════════
    const themeToggle = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    const sunIcon = document.getElementById('theme-icon-sun');
    const moonIcon = document.getElementById('theme-icon-moon');

    if (themeToggle && sunIcon && moonIcon) {
        const savedTheme = localStorage.getItem('theme') || 'light';
        if (savedTheme === 'dark') {
            htmlElement.classList.add('dark');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        }

        themeToggle.addEventListener('click', () => {
            htmlElement.classList.toggle('dark');

            if (htmlElement.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            } else {
                localStorage.setItem('theme', 'light');
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            }
        });
    }

    // ═══════════════════════════════════════════════════════
    // Language Toggle
    // ═══════════════════════════════════════════════════════
    const langToggle = document.getElementById('lang-toggle');
    const langMenu = document.getElementById('lang-menu');
    const langDropdown = document.getElementById('lang-dropdown');

    if (langToggle && langMenu && langDropdown) {
        langToggle.addEventListener('click', (e) => {
            e.stopPropagation();
            langMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!langDropdown.contains(e.target)) {
                langMenu.classList.add('hidden');
            }
        });
    }

    // ═══════════════════════════════════════════════════════
    // User Menu Dropdown
    // ═══════════════════════════════════════════════════════
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenuDropdown = document.getElementById('user-menu-dropdown');
    const userMenuContainer = document.getElementById('user-menu-container');

    if (userMenuButton && userMenuDropdown) {
        userMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            const isHidden = userMenuDropdown.classList.contains('hidden');

            if (isHidden) {
                userMenuDropdown.classList.remove('hidden');
                setTimeout(() => {
                    userMenuDropdown.classList.remove('opacity-0', 'scale-95');
                    userMenuDropdown.classList.add('opacity-100', 'scale-100');
                    if (typeof lucide !== 'undefined') {
                        lucide.createIcons();
                    }
                }, 10);
            } else {
                userMenuDropdown.classList.remove('opacity-100', 'scale-100');
                userMenuDropdown.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    userMenuDropdown.classList.add('hidden');
                }, 200);
            }
        });

        document.addEventListener('click', (e) => {
            if (userMenuContainer && !userMenuContainer.contains(e.target)) {
                userMenuDropdown.classList.remove('opacity-100', 'scale-100');
                userMenuDropdown.classList.add('opacity-0', 'scale-95');
                setTimeout(() => {
                    userMenuDropdown.classList.add('hidden');
                }, 200);
            }
        });
    }

    // ═══════════════════════════════════════════════════════
    // Social Media Floating Button
    // ═══════════════════════════════════════════════════════
    const socialButton = document.getElementById('social-main-btn');
    const socialLinks = document.getElementById('social-links');

    if (socialButton && socialLinks) {
        socialButton.addEventListener('click', (e) => {
            e.stopPropagation();
            socialButton.classList.toggle('active');
            socialLinks.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.social-float-container')) {
                socialButton.classList.remove('active');
                socialLinks.classList.remove('active');
            }
        });
    }
});
</script>

<!-- ═══════════════════════════════════════════════════════
     Botón flotante de redes sociales (oculto en página de chat)
     ═══════════════════════════════════════════════════════ -->
<div class="social-float-container">
    <!-- Links de redes sociales (aparecen al hacer click) -->
    <div id="social-links" class="social-links">
        <!-- YouTube -->
        <a href="https://www.youtube.com/@cubanmodsstore" 
           target="_blank" 
           rel="noopener noreferrer"
           class="social-link youtube"
           title="YouTube - Cuban Mods"
           style="animation-delay: 0.1s">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
            </svg>
        </a>
        
        <!-- WhatsApp -->
        <a href="https://chat.whatsapp.com/KV5uQT5I0UVLJtIL2u1LYR" 
           target="_blank" 
           rel="noopener noreferrer"
           class="social-link whatsapp"
           title="WhatsApp - Cuban Mods"
           style="animation-delay: 0.15s">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
            </svg>
        </a>
        
        <!-- Facebook -->
        <a href="https://www.facebook.com/profile.php?id=61587097164173" 
           target="_blank" 
           rel="noopener noreferrer"
           class="social-link facebook"
           title="Facebook - Cuban Mods"
           style="animation-delay: 0.2s">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
        </a>
        
        <!-- Telegram -->
        <a href="https://t.me/cubanmods" 
           target="_blank" 
           rel="noopener noreferrer"
           class="social-link telegram"
           title="Telegram - Cuban Mods"
           style="animation-delay: 0.25s">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
            </svg>
        </a>
    </div>
    
    <!-- Botón principal -->
    <button id="social-main-btn" class="social-main-button" aria-label="Redes Sociales">
        <div class="icon-grid">
            <!-- YouTube mini -->
            <div class="mini-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white">
                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
            </div>
            <!-- WhatsApp mini -->
            <div class="mini-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
            </div>
            <!-- Facebook mini -->
            <div class="mini-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </div>
            <!-- Telegram mini -->
            <div class="mini-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="white">
                    <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                </svg>
            </div>
        </div>
    </button>
</div>
        
        <main class="p-2 sm:p-3 md:p-6 overflow-hidden">
            <div class="max-w-7xl mx-auto">
                
                <!-- Hero Header Ultra Compacto -->
                <div class="text-center mb-2 md:mb-4">
                    <div class="inline-flex items-center gap-1.5 px-2 py-1 bg-gradient-to-r from-blue-100 to-purple-100 dark:from-blue-900/30 dark:to-purple-900/30 rounded-full mb-1">
                        <div class="w-1.5 h-1.5 rounded-full bg-gradient-to-r from-blue-500 to-purple-500 animate-pulse"></div>
                        <span class="text-[10px] font-semibold bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                            Official Download                        </span>
                    </div>
                    <h1 class="text-xl sm:text-2xl md:text-4xl font-black mb-1 leading-tight">
                        <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 dark:from-blue-400 dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                            Cuban Mod Store                        </span>
                    </h1>
                    <p class="text-xs md:text-sm text-slate-600 dark:text-gray-400">
                        All In One Client                    </p>
                </div>
                
                <!-- 🔑 Apartado de Licencia Compacto -->
                                
                                <!-- Main Download Card Ultra Compacto -->
                <div class="relative mb-4 md:mb-6">
                    <div class="relative bg-white/90 dark:bg-gray-900/90 backdrop-blur-xl rounded-xl md:rounded-2xl border border-slate-200 dark:border-gray-800 shadow-xl p-3 md:p-6">
                        
                        <!-- Version Badge -->
                        <div class="flex items-center justify-center gap-1.5 mb-2">
                            <i data-lucide="zap" class="w-3 h-3 text-yellow-500"></i>
                            <span class="text-slate-900 dark:text-white font-bold text-xs">
                                Versión 22                            </span>
                        </div>
                        
                        <!-- Stats Mini Grid -->
                        <div class="grid grid-cols-3 gap-1.5 md:gap-3 mb-3">
                            <!-- Tamaño -->
                            <div class="flex flex-col items-center gap-1 bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-blue-900/20 dark:to-cyan-900/20 p-2 rounded-lg border border-blue-100 dark:border-blue-800">
                                <div class="w-7 h-7 rounded-md bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center">
                                    <i data-lucide="hard-drive" class="w-4 h-4 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <p class="text-[8px] font-semibold text-slate-500 dark:text-gray-400 uppercase">Size</p>
                                    <p class="text-xs font-black text-slate-900 dark:text-white">12.00 MB</p>
                                </div>
                            </div>
                                
                            <!-- Estado -->
                            <div class="flex flex-col items-center gap-1 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 p-2 rounded-lg border border-green-100 dark:border-green-800">
                                <div class="w-7 h-7 rounded-md bg-gradient-to-br from-green-500 to-emerald-400 flex items-center justify-center">
                                    <i data-lucide="shield-check" class="w-4 h-4 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <p class="text-[8px] font-semibold text-slate-500 dark:text-gray-400 uppercase">Status</p>
                                    <p class="text-xs font-black text-green-600 dark:text-green-400">Verified</p>
                                </div>
                            </div>
                                
                            <!-- Juegos -->
                            <div class="flex flex-col items-center gap-1 bg-gradient-to-br from-purple-50 to-pink-50 dark:from-purple-900/20 dark:to-pink-900/20 p-2 rounded-lg border border-purple-100 dark:border-purple-800">
                                <div class="w-7 h-7 rounded-md bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center">
                                    <i data-lucide="gamepad-2" class="w-4 h-4 text-white"></i>
                                </div>
                                <div class="text-center">
                                    <p class="text-[8px] font-semibold text-slate-500 dark:text-gray-400 uppercase">Games</p>
                                    <p class="text-xs font-black bg-gradient-to-r from-purple-600 to-pink-600 dark:from-purple-400 dark:to-pink-400 bg-clip-text text-transparent">67+ MODs</p>
                                </div>
                            </div>
                        </div>
                            
                        <!-- Download Button Compacto -->
                        <a href="https://pixeldrain.com/api/file/Jah9Tbcr" 
                           target="_blank"
                           class="group flex items-center justify-center gap-2 px-4 py-3 md:px-8 md:py-4 bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 hover:from-blue-600 hover:via-purple-700 hover:to-pink-600 text-white rounded-xl font-black text-sm md:text-lg shadow-xl transition-all duration-300 hover:shadow-2xl hover:-translate-y-1 mb-2">
                            <i data-lucide="download" class="w-4 h-4 md:w-6 md:h-6 group-hover:animate-bounce"></i>
                            <span>DOWNLOAD NOW</span>
                            <i data-lucide="arrow-right" class="w-3 h-3 md:w-5 md:h-5 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                            
                        <p class="text-[10px] md:text-xs text-slate-500 dark:text-gray-400 text-center">
                            Android 5.0+ • Safe and malware-free                        </p>
                    </div>
                </div>
                
                <!-- Games Grid -->
                <div class="mb-6 md:mb-12">
                    <h3 class="text-base md:text-xl font-bold text-center text-slate-900 dark:text-white mb-3 md:mb-4">
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400 bg-clip-text text-transparent">
                            All these games and more...                        </span>
                    </h3>
                    
                    <!-- Grid de Juegos - Más compacto en móvil -->
                    <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-6 lg:grid-cols-8 gap-2 md:gap-3">
                                            </div>
                </div>
                
                <!-- Features Grid -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4 mb-6 md:mb-8">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20 rounded-xl p-3 md:p-4 text-center border border-blue-200 dark:border-blue-800">
                        <div class="w-10 h-10 md:w-12 md:h-12 mx-auto mb-2 rounded-lg md:rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center">
                            <i data-lucide="gamepad-2" class="w-5 h-5 md:w-6 md:h-6 text-white"></i>
                        </div>
                        <h4 class="font-bold text-sm md:text-base text-slate-900 dark:text-white mb-1">67+ Games</h4>
                        <p class="text-[10px] md:text-xs text-slate-600 dark:text-gray-400">Full library</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20 rounded-xl p-3 md:p-4 text-center border border-purple-200 dark:border-purple-800">
                        <div class="w-10 h-10 md:w-12 md:h-12 mx-auto mb-2 rounded-lg md:rounded-xl bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
                            <i data-lucide="video" class="w-5 h-5 md:w-6 md:h-6 text-white"></i>
                        </div>
                        <h4 class="font-bold text-sm md:text-base text-slate-900 dark:text-white mb-1">HD Tutorials</h4>
                        <p class="text-[10px] md:text-xs text-slate-600 dark:text-gray-400">Learn easy</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 rounded-xl p-3 md:p-4 text-center border border-green-200 dark:border-green-800">
                        <div class="w-10 h-10 md:w-12 md:h-12 mx-auto mb-2 rounded-lg md:rounded-xl bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center">
                            <i data-lucide="message-circle" class="w-5 h-5 md:w-6 md:h-6 text-white"></i>
                        </div>
                        <h4 class="font-bold text-sm md:text-base text-slate-900 dark:text-white mb-1">Live Chat</h4>
                        <p class="text-[10px] md:text-xs text-slate-600 dark:text-gray-400">Active community</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20 rounded-xl p-3 md:p-4 text-center border border-orange-200 dark:border-orange-800">
                        <div class="w-10 h-10 md:w-12 md:h-12 mx-auto mb-2 rounded-lg md:rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-5 h-5 md:w-6 md:h-6 text-white"></i>
                        </div>
                        <h4 class="font-bold text-sm md:text-base text-slate-900 dark:text-white mb-1">100% Safe</h4>
                        <p class="text-[10px] md:text-xs text-slate-600 dark:text-gray-400">No malware</p>
                    </div>
                </div>
                
                                
            </div>
        </main>
    </div>
    
    <!-- Modal de Descarga -->
    <div id="downloadModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden items-center justify-center p-4" onclick="if(event.target === this) closeDownloadModal()">
        <div class="bg-white dark:bg-gray-900 rounded-3xl max-w-md w-full shadow-2xl transform transition-all" onclick="event.stopPropagation()">
            <div id="modalContent" class="p-6">
                <!-- Contenido dinámico -->
            </div>
        </div>
    </div>
    
    <style>
        .download-progress {
            animation: progress 2s ease-in-out;
        }
        
        @keyframes progress {
            from { width: 0%; }
            to { width: 100%; }
        }
    </style>
    
    <script>
        // ═══════════════════════════════════════════════════════════════
        // MODAL DE DESCARGA
        // ═══════════════════════════════════════════════════════════════
        function openDownloadModal(game) {
            const modal = document.getElementById('downloadModal');
            const content = document.getElementById('modalContent');
            
            content.innerHTML = `
                <div class="text-center">
                    <div class="w-24 h-24 mx-auto mb-4 rounded-2xl overflow-hidden shadow-lg">
                        <img src="${game.cover_image ? 'https://images.unsplash.com/photo-1614294148960-9aa740632a87?w=400' + game.cover_image : 'https://via.placeholder.com/150'}" 
                             alt="${escapeHtml(game.name)}"
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">${escapeHtml(game.name)}</h3>
                    <p class="text-sm text-slate-600 dark:text-gray-400 mb-4">
                        ${game.version ? 'v' + escapeHtml(game.version) : ''} 
                        ${game.file_size ? '• ' + escapeHtml(game.file_size) : ''}
                    </p>
                    
                    <div class="space-y-3">
                        <button onclick="startDownload('${game.download_url}', '${escapeHtml(game.name)}')" 
                                class="w-full flex items-center justify-center gap-2 py-3 px-6 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-semibold rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl">
                            <i data-lucide="download" class="w-5 h-5"></i>
                            <span>Descargar Ahora</span>
                        </button>
                        
                        <button onclick="closeDownloadModal()" 
                                class="w-full py-3 px-6 bg-slate-100 dark:bg-gray-800 hover:bg-slate-200 dark:hover:bg-gray-700 text-slate-700 dark:text-gray-300 font-semibold rounded-xl transition-colors">
                            Cancelar
                        </button>
                    </div>
                </div>
            `;
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            lucide.createIcons();
        }
        
        function closeDownloadModal() {
            const modal = document.getElementById('downloadModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
        
        function startDownload(downloadUrl, gameName) {
            const content = document.getElementById('modalContent');
            
            if (!downloadUrl) {
                showDownloadError();
                return;
            }
            
            // Mostrar progreso inicial
            content.innerHTML = `
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                        <i data-lucide="download" class="w-8 h-8 text-white animate-bounce"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Iniciando descarga...</h3>
                    <p class="text-sm text-slate-600 dark:text-gray-400 mb-4">${escapeHtml(gameName)}</p>
                    
                    <div class="w-full bg-slate-200 dark:bg-gray-700 rounded-full h-2 mb-4 overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-blue-500 to-purple-600 download-progress rounded-full"></div>
                    </div>
                    
                    <p class="text-xs text-slate-500 dark:text-gray-500">
                        Preparando archivo...
                    </p>
                </div>
            `;
            lucide.createIcons();
            
            // Usar proxy PHP para descargar
            const proxyUrl = `/api/download_proxy.php?url=${encodeURIComponent(downloadUrl)}&name=${encodeURIComponent(gameName)}`;
            
            // Crear iframe oculto para iniciar descarga
            const iframe = document.createElement('iframe');
            iframe.style.display = 'none';
            iframe.src = proxyUrl;
            document.body.appendChild(iframe);
            
            // Mostrar indicador de descarga con flecha después de 2 segundos
            setTimeout(() => {
                content.innerHTML = `
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                            <i data-lucide="check-circle" class="w-8 h-8 text-green-600 dark:text-green-400"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">¡Descarga iniciada!</h3>
                        <p class="text-sm text-slate-600 dark:text-gray-400 mb-4">
                            El archivo <strong>${escapeHtml(gameName)}.apk</strong> se está descargando.
                        </p>
                        
                        <!-- Indicador con flecha -->
                        <div class="bg-blue-50 dark:bg-blue-900/20 border-2 border-blue-500 rounded-xl p-4 mb-4">
                            <div class="flex items-center justify-center gap-2 mb-2">
                                <i data-lucide="arrow-down" class="w-5 h-5 text-blue-600 dark:text-blue-400 animate-bounce"></i>
                                <p class="text-sm font-bold text-blue-600 dark:text-blue-400">
                                    Revisa tus notificaciones
                                </p>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-gray-400">
                                Desliza hacia abajo desde la parte superior de tu pantalla para ver el progreso de descarga en Chrome
                            </p>
                        </div>
                        
                        <button onclick="closeDownloadModal()" 
                                class="w-full py-3 px-6 bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white font-semibold rounded-xl transition-all duration-300">
                            Entendido
                        </button>
                    </div>
                `;
                lucide.createIcons();
                
                // Limpiar iframe después de 5 segundos
                setTimeout(() => {
                    if (iframe.parentNode) {
                        document.body.removeChild(iframe);
                    }
                }, 5000);
            }, 2000);
        }
        
        function showDownloadError() {
            const content = document.getElementById('modalContent');
            content.innerHTML = `
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                        <i data-lucide="alert-circle" class="w-8 h-8 text-red-600 dark:text-red-400"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Error de descarga</h3>
                    <p class="text-sm text-slate-600 dark:text-gray-400 mb-6">
                        No se pudo iniciar la descarga. Inténtalo de nuevo.
                    </p>
                    <button onclick="closeDownloadModal()" 
                            class="w-full py-3 px-6 bg-slate-100 dark:bg-gray-800 hover:bg-slate-200 dark:hover:bg-gray-700 text-slate-700 dark:text-gray-300 font-semibold rounded-xl transition-colors">
                        Cerrar
                    </button>
                </div>
            `;
            lucide.createIcons();
        }
        
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
        
        // Cerrar modal con tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeDownloadModal();
            }
        });
    </script>
    
    <script src="/assets/js/app.js"></script>
</body>
</html>
