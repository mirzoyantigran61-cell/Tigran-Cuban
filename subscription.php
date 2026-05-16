


<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription - Cuban Mods</title>
    
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
<body class="min-h-screen bg-slate-50 dark:bg-black transition-colors duration-200" x-data="{}">
    
    
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
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
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
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
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
        
        <main class="p-3 sm:p-4 md:p-6">
            <div class="max-w-5xl mx-auto">
                
                <!-- Header compacto -->
                <div class="text-center mb-6 md:mb-8">
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-400 text-amber-900 px-4 py-2 rounded-full text-xs md:text-sm font-bold mb-3 md:mb-4 shadow-lg">
                        <i data-lucide="sparkles" class="w-4 h-4"></i>
                        Cuban Mods Premium                    </div>
                                        <h1 class="text-2xl sm:text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-2 leading-tight">
                        Unlock your full potential                    </h1>
                    <p class="text-slate-600 dark:text-gray-400 text-sm md:text-base max-w-2xl mx-auto">
                        Unlimited access to all mods                    </p>
                                    </div>
                
                <!-- VIP vs Deluxe (misma lógica que generate_key: CUBAN- vs CUBAN-DELUXE- + juego FF) -->
                <div class="mb-6 md:mb-8">
                    <p class="text-center text-sm font-bold text-slate-700 dark:text-gray-300 mb-3">Choose license type</p>
                    <div class="grid sm:grid-cols-2 gap-3 md:gap-4 max-w-3xl mx-auto">
                        <button type="button" id="tier-card-vip" class="tier-card text-left rounded-2xl border-2 p-4 md:p-5 transition-all duration-300 border-purple-500 dark:border-purple-600 bg-gradient-to-br from-purple-50 to-white dark:from-purple-900/25 dark:to-gray-900 shadow-md ring-2 ring-purple-400/40">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl" aria-hidden="true">👑</span>
                                <span class="font-black text-slate-900 dark:text-white text-base md:text-lg">VIP</span>
                            </div>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-gray-400 leading-snug">All store mods and downloads (CUBAN-... key)</p>
                        </button>
                        <button type="button" id="tier-card-deluxe" class="tier-card text-left rounded-2xl border-2 p-4 md:p-5 transition-all duration-300 border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-900 hover:border-amber-500/60">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="text-2xl" aria-hidden="true">🔥</span>
                                <span class="font-black text-amber-900 dark:text-amber-200 text-base md:text-lg">Deluxe</span>
                            </div>
                            <p class="text-xs md:text-sm text-slate-600 dark:text-gray-400 leading-snug">Full Cuban Mod Free Fire menu (CUBAN-DELUXE-... key)</p>
                            <p class="mt-2 text-[10px] md:text-xs text-amber-800/90 dark:text-amber-300/90 font-semibold">Deluxe is for Free Fire only; it does not cover other store games.</p>
                        </button>
                    </div>
                </div>
                
                <!-- Licencia VIP Activa -->
                                
                <!-- Plans -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-6 md:mb-10">
                                        <div class="relative h-full">
                                                
                                                
                        <div class="bg-white dark:bg-gray-900 rounded-xl md:rounded-2xl p-4 md:p-6 border-2 border-slate-200 dark:border-gray-800 shadow-md hover:shadow-xl transition-all duration-300 h-full flex flex-col ">
                            <!-- Header -->
                            <div class="mb-4 md:mb-6">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-1">3 Días</h3>
                                <p class="text-xs md:text-sm text-slate-600 dark:text-gray-400">Acceso 3 días</p>
                                
                                <div class="mt-3 md:mt-4">
                                    <span class="js-subscription-price text-2xl md:text-3xl font-bold text-slate-900 dark:text-white" data-base-price="2.5">$2.50</span>
                                    <span class="text-slate-500 dark:text-gray-400 text-xs md:text-sm ml-1">/3 días</span>
                                </div>
                                
                                                            </div>
                            
                            <!-- Features compactas -->
                            <div class="flex-1 mb-4 md:mb-6">
                                <ul class="space-y-2 md:space-y-2.5">
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Acceso a todos los mods</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Descargas ilimitadas</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Sin anuncios</span>
                                    </li>
                                                                    </ul>
                            </div>
                            
                            <!-- CTA Button compacto -->
                            <button onclick="handleSubscribe('1day')"
                                    class="w-full py-3 md:py-4 rounded-xl md:rounded-2xl font-black text-sm md:text-base transition-all duration-300 flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-cyan-400 hover:from-blue-600 hover:to-cyan-500 text-white shadow-lg shadow-blue-500/30 hover:shadow-xl hover:-translate-y-0.5">
                                <i data-lucide="shopping-cart" class="w-4 h-4 md:w-5 md:h-5"></i>
                                <span class="hidden sm:inline">Buy License</span>
                                <span class="sm:hidden">Buy</span>
                            </button>
                        </div>
                    </div>
                                        <div class="relative h-full">
                                                <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 z-10">
                            <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-purple-500 text-white text-[10px] md:text-xs font-black shadow-lg pulse-animation">
                                <i data-lucide="star" class="w-3 h-3"></i>
                                Most Popular                            </span>
                        </div>
                                                
                                                
                        <div class="bg-white dark:bg-gray-900 rounded-xl md:rounded-2xl p-4 md:p-6 border-2 border-slate-200 dark:border-gray-800 shadow-md hover:shadow-xl transition-all duration-300 h-full flex flex-col border-purple-500 dark:border-purple-600 shadow-purple-500/20">
                            <!-- Header -->
                            <div class="mb-4 md:mb-6">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-1">1 Semana</h3>
                                <p class="text-xs md:text-sm text-slate-600 dark:text-gray-400">Ideal para probar</p>
                                
                                <div class="mt-3 md:mt-4">
                                    <span class="js-subscription-price text-2xl md:text-3xl font-bold text-slate-900 dark:text-white" data-base-price="5">$5.00</span>
                                    <span class="text-slate-500 dark:text-gray-400 text-xs md:text-sm ml-1">/semana</span>
                                </div>
                                
                                                            </div>
                            
                            <!-- Features compactas -->
                            <div class="flex-1 mb-4 md:mb-6">
                                <ul class="space-y-2 md:space-y-2.5">
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Acceso a todos los mods</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Descargas ilimitadas</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Sin anuncios</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Soporte prioritario</span>
                                    </li>
                                                                    </ul>
                            </div>
                            
                            <!-- CTA Button compacto -->
                            <button onclick="handleSubscribe('1week')"
                                    class="w-full py-3 md:py-4 rounded-xl md:rounded-2xl font-black text-sm md:text-base transition-all duration-300 flex items-center justify-center gap-2 bg-gradient-to-r from-purple-500 via-pink-500 to-purple-500 hover:from-purple-600 hover:via-pink-600 hover:to-purple-600 text-white shadow-lg shadow-purple-500/30 hover:shadow-xl hover:-translate-y-0.5">
                                <i data-lucide="shopping-cart" class="w-4 h-4 md:w-5 md:h-5"></i>
                                <span class="hidden sm:inline">Buy License</span>
                                <span class="sm:hidden">Buy</span>
                            </button>
                        </div>
                    </div>
                                        <div class="relative h-full">
                                                
                                                
                        <div class="bg-white dark:bg-gray-900 rounded-xl md:rounded-2xl p-4 md:p-6 border-2 border-slate-200 dark:border-gray-800 shadow-md hover:shadow-xl transition-all duration-300 h-full flex flex-col ">
                            <!-- Header -->
                            <div class="mb-4 md:mb-6">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-1">Mensual</h3>
                                <p class="text-xs md:text-sm text-slate-600 dark:text-gray-400">Perfecto para probar</p>
                                
                                <div class="mt-3 md:mt-4">
                                    <span class="js-subscription-price text-2xl md:text-3xl font-bold text-slate-900 dark:text-white" data-base-price="15">$15.00</span>
                                    <span class="text-slate-500 dark:text-gray-400 text-xs md:text-sm ml-1">/mes</span>
                                </div>
                                
                                                            </div>
                            
                            <!-- Features compactas -->
                            <div class="flex-1 mb-4 md:mb-6">
                                <ul class="space-y-2 md:space-y-2.5">
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Acceso a todos los mods</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Descargas ilimitadas</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Sin anuncios</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Soporte prioritario</span>
                                    </li>
                                                                    </ul>
                            </div>
                            
                            <!-- CTA Button compacto -->
                            <button onclick="handleSubscribe('monthly')"
                                    class="w-full py-3 md:py-4 rounded-xl md:rounded-2xl font-black text-sm md:text-base transition-all duration-300 flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-cyan-400 hover:from-blue-600 hover:to-cyan-500 text-white shadow-lg shadow-blue-500/30 hover:shadow-xl hover:-translate-y-0.5">
                                <i data-lucide="shopping-cart" class="w-4 h-4 md:w-5 md:h-5"></i>
                                <span class="hidden sm:inline">Buy License</span>
                                <span class="sm:hidden">Buy</span>
                            </button>
                        </div>
                    </div>
                                        <div class="relative h-full">
                                                
                                                <div class="absolute -top-2 right-2 md:right-4 z-10">
                            <span class="inline-flex items-center gap-1 px-2 md:px-3 py-1 rounded-full bg-gradient-to-r from-yellow-400 via-amber-500 to-yellow-400 text-amber-900 text-[10px] md:text-xs font-black shadow-lg">
                                <i data-lucide="crown" class="w-3 h-3"></i>
                                VIP                            </span>
                        </div>
                                                
                        <div class="bg-white dark:bg-gray-900 rounded-xl md:rounded-2xl p-4 md:p-6 border-2 border-slate-200 dark:border-gray-800 shadow-md hover:shadow-xl transition-all duration-300 h-full flex flex-col ">
                            <!-- Header -->
                            <div class="mb-4 md:mb-6">
                                <h3 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white mb-1">De por vida</h3>
                                <p class="text-xs md:text-sm text-slate-600 dark:text-gray-400">Mejor valor</p>
                                
                                <div class="mt-3 md:mt-4">
                                    <span class="js-subscription-price text-2xl md:text-3xl font-bold text-slate-900 dark:text-white" data-base-price="99">$99.00</span>
                                    <span class="text-slate-500 dark:text-gray-400 text-xs md:text-sm ml-1">pago único</span>
                                </div>
                                
                                                            </div>
                            
                            <!-- Features compactas -->
                            <div class="flex-1 mb-4 md:mb-6">
                                <ul class="space-y-2 md:space-y-2.5">
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Todo lo de Mensual</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Acceso de por vida</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Mods exclusivos VIP</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Solicitar mods personalizados</span>
                                    </li>
                                                                        <li class="flex items-start gap-2 text-xs md:text-sm text-slate-700 dark:text-gray-300">
                                        <div class="w-4 h-4 md:w-5 md:h-5 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <i data-lucide="check" class="w-2.5 h-2.5 md:w-3 md:h-3 text-white"></i>
                                        </div>
                                        <span class="font-medium">Beta tester priority</span>
                                    </li>
                                                                    </ul>
                            </div>
                            
                            <!-- CTA Button compacto -->
                            <button onclick="handleSubscribe('lifetime')"
                                    class="w-full py-3 md:py-4 rounded-xl md:rounded-2xl font-black text-sm md:text-base transition-all duration-300 flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-cyan-400 hover:from-blue-600 hover:to-cyan-500 text-white shadow-lg shadow-blue-500/30 hover:shadow-xl hover:-translate-y-0.5">
                                <i data-lucide="shopping-cart" class="w-4 h-4 md:w-5 md:h-5"></i>
                                <span class="hidden sm:inline">Buy License</span>
                                <span class="sm:hidden">Buy</span>
                            </button>
                        </div>
                    </div>
                                    </div>
                
                <!-- Activar Licencia (solo si NO es VIP) -->
                                
                <!-- Features Grid compacto -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 md:gap-4">
                    <!-- Descargas ilimitadas -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-blue-900/20 dark:to-cyan-900/20 rounded-xl md:rounded-2xl p-4 md:p-5 border border-blue-100 dark:border-blue-800 shadow-md hover:shadow-lg transition-all duration-300">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center mb-2 md:mb-3">
                            <i data-lucide="download" class="w-5 h-5 md:w-6 md:h-6 text-white"></i>
                        </div>
                        <h3 class="font-black text-slate-900 dark:text-white mb-1 text-sm md:text-base">Unlimited downloads</h3>
                        <p class="text-slate-600 dark:text-gray-400 text-xs leading-relaxed">
                            No restrictions                        </p>
                    </div>
                    
                    <!-- Sin anuncios -->
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 dark:from-purple-900/20 dark:to-pink-900/20 rounded-xl md:rounded-2xl p-4 md:p-5 border border-purple-100 dark:border-purple-800 shadow-md hover:shadow-lg transition-all duration-300">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center mb-2 md:mb-3">
                            <i data-lucide="shield-off" class="w-5 h-5 md:w-6 md:h-6 text-white"></i>
                        </div>
                        <h3 class="font-black text-slate-900 dark:text-white mb-1 text-sm md:text-base">Ad-free</h3>
                        <p class="text-slate-600 dark:text-gray-400 text-xs leading-relaxed">
                            Clean experience                        </p>
                    </div>
                    
                    <!-- Soporte prioritario -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 rounded-xl md:rounded-2xl p-4 md:p-5 border border-green-100 dark:border-green-800 shadow-md hover:shadow-lg transition-all duration-300">
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl bg-gradient-to-br from-green-500 to-emerald-400 flex items-center justify-center mb-2 md:mb-3">
                            <i data-lucide="headphones" class="w-5 h-5 md:w-6 md:h-6 text-white"></i>
                        </div>
                        <h3 class="font-black text-slate-900 dark:text-white mb-1 text-sm md:text-base">Premium support</h3>
                        <p class="text-slate-600 dark:text-gray-400 text-xs leading-relaxed">
                            Quick help                        </p>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
    
    <script src="/assets/js/app.js"></script>
    <script>
        if (typeof lucide !== 'undefined') { lucide.createIcons(); }
        
        const SUB_TIER_KEY = 'cm_subscription_license_tier';
        const DELUXE_PRICE_MULT = 1.5;
        let selectedSubscriptionTier = localStorage.getItem(SUB_TIER_KEY) || 'vip';
        if (selectedSubscriptionTier !== 'vip' && selectedSubscriptionTier !== 'deluxe') {
            selectedSubscriptionTier = 'vip';
        }
        
        function updateSubscriptionPriceLabels() {
            const mult = (selectedSubscriptionTier === 'deluxe') ? DELUXE_PRICE_MULT : 1;
            document.querySelectorAll('.js-subscription-price').forEach(function (el) {
                const b = parseFloat(el.getAttribute('data-base-price') || '0');
                if (isNaN(b)) return;
                el.textContent = '$' + (b * mult).toFixed(2);
            });
        }
        
        function applyTierCardStyles() {
            const vip = document.getElementById('tier-card-vip');
            const dlx = document.getElementById('tier-card-deluxe');
            if (!vip || !dlx) return;
            const on = 'border-purple-500 dark:border-purple-600 bg-gradient-to-br from-purple-50 to-white dark:from-purple-900/25 dark:to-gray-900 shadow-md ring-2 ring-purple-400/40';
            const off = 'border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-900 hover:border-purple-400/50';
            const onD = 'border-amber-500 dark:border-amber-600 bg-gradient-to-br from-amber-50 to-orange-50/80 dark:from-amber-900/30 dark:to-gray-900 shadow-md ring-2 ring-amber-400/40';
            const offD = 'border-slate-200 dark:border-gray-700 bg-white dark:bg-gray-900 hover:border-amber-500/60';
            if (selectedSubscriptionTier === 'deluxe') {
                vip.className = 'tier-card text-left rounded-2xl border-2 p-4 md:p-5 transition-all duration-300 ' + off;
                dlx.className = 'tier-card text-left rounded-2xl border-2 p-4 md:p-5 transition-all duration-300 ' + onD;
            } else {
                vip.className = 'tier-card text-left rounded-2xl border-2 p-4 md:p-5 transition-all duration-300 ' + on;
                dlx.className = 'tier-card text-left rounded-2xl border-2 p-4 md:p-5 transition-all duration-300 ' + offD;
            }
            updateSubscriptionPriceLabels();
        }
        
        function setSubscriptionTier(tier) {
            if (tier !== 'vip' && tier !== 'deluxe') return;
            selectedSubscriptionTier = tier;
            try {
                localStorage.setItem(SUB_TIER_KEY, tier);
            } catch (e) {}
            applyTierCardStyles();
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            const vipB = document.getElementById('tier-card-vip');
            const dlxB = document.getElementById('tier-card-deluxe');
            if (vipB) {
                vipB.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    setSubscriptionTier('vip');
                });
            }
            if (dlxB) {
                dlxB.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    setSubscriptionTier('deluxe');
                });
            }
            applyTierCardStyles();
        });
        
        function handleSubscribe(planId) {
                            window.location.href = '/login.php?redirect=' + encodeURIComponent(window.location.href);
                return;
                        
            const tier = (selectedSubscriptionTier === 'deluxe') ? 'deluxe' : 'vip';
            window.location.href = '/checkout.php?plan=' + encodeURIComponent(planId) + '&tier=' + encodeURIComponent(tier);
        }
        
        function copyLicense() {
            const licenseCode = document.getElementById('license-code').textContent.trim();
            const button = event.target.closest('button');
            const buttonText = button.querySelector('span');
            const originalText = buttonText.textContent;
            
            // Intentar copiar al portapapeles
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(licenseCode).then(() => {
                    showCopySuccess(button, buttonText, originalText);
                }).catch(() => {
                    fallbackCopy(licenseCode, button, buttonText, originalText);
                });
            } else {
                fallbackCopy(licenseCode, button, buttonText, originalText);
            }
        }
        
        function fallbackCopy(text, button, buttonText, originalText) {
            const textArea = document.createElement('textarea');
            textArea.value = text;
            textArea.style.position = 'fixed';
            textArea.style.left = '-999999px';
            document.body.appendChild(textArea);
            textArea.select();
            
            try {
                document.execCommand('copy');
                showCopySuccess(button, buttonText, originalText);
            } catch (err) {
                alert('No se pudo copiar. Por favor, copia manualmente: ' + text);
            }
            
            document.body.removeChild(textArea);
        }
        
        function showCopySuccess(button, buttonText, originalText) {
            // Cambiar texto y color del botón
            buttonText.textContent = 'Copied!';
            button.classList.add('bg-green-500', 'dark:bg-green-600');
            button.classList.remove('bg-amber-200', 'dark:bg-amber-800');
            
            // Restaurar después de 2 segundos
            setTimeout(() => {
                buttonText.textContent = originalText;
                button.classList.remove('bg-green-500', 'dark:bg-green-600');
                button.classList.add('bg-amber-200', 'dark:bg-amber-800');
            }, 2000);
        }
        
        // ═══════════════════════════════════════════════════════════════
        // Activar Licencia
        // ═══════════════════════════════════════════════════════════════
        function activateLicense() {
            const input = document.getElementById('license-input');
            const button = document.getElementById('activate-btn');
            const messageDiv = document.getElementById('activation-message');
            const licenseCode = input.value.trim().toUpperCase();
            
            // Validar que no esté vacío
            if (!licenseCode) {
                showActivationMessage('Por favor, ingresa un código de licencia', 'error');
                return;
            }
            
            // Validar formato básico
            if (licenseCode.length < 10) {
                showActivationMessage('El código de licencia es demasiado corto', 'error');
                return;
            }
            
            // Deshabilitar botón y mostrar loading
            button.disabled = true;
            button.innerHTML = '<div class="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></div><span>Activating...</span>';
            
            // Hacer petición a la API
            fetch('/PANEL_ADMIN/api_activate_license.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    license_code: licenseCode,
                    user_email: ''
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showActivationMessage(data.message, 'success');
                    
                    // Limpiar input
                    input.value = '';
                    
                    // Recargar página después de 2 segundos para mostrar el nuevo estado VIP
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                } else {
                    showActivationMessage(data.message || 'Error al activar la licencia', 'error');
                    
                    // Restaurar botón
                    button.disabled = false;
                    button.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><span>Activar Licencia</span>';
                    lucide.createIcons();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showActivationMessage('Error de conexión. Por favor, intenta de nuevo.', 'error');
                
                // Restaurar botón
                button.disabled = false;
                button.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><span>Activar Licencia</span>';
                lucide.createIcons();
            });
        }
        
        function showActivationMessage(message, type) {
            const messageDiv = document.getElementById('activation-message');
            
            const colors = {
                success: 'bg-green-100 dark:bg-green-900/30 border-green-500 dark:border-green-700 text-green-800 dark:text-green-300',
                error: 'bg-red-100 dark:bg-red-900/30 border-red-500 dark:border-red-700 text-red-800 dark:text-red-300',
                info: 'bg-blue-100 dark:bg-blue-900/30 border-blue-500 dark:border-blue-700 text-blue-800 dark:text-blue-300'
            };
            
            const icons = {
                success: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                error: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                info: '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
            };
            
            messageDiv.className = `p-4 rounded-xl border-2 ${colors[type]} flex items-start gap-3`;
            messageDiv.innerHTML = `
                ${icons[type]}
                <p class="flex-1 text-sm font-semibold">${message}</p>
            `;
            messageDiv.classList.remove('hidden');
            
            // Auto-ocultar después de 5 segundos si no es éxito
            if (type !== 'success') {
                setTimeout(() => {
                    messageDiv.classList.add('hidden');
                }, 5000);
            }
        }
        
        // Permitir activar con Enter
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById('license-input');
            if (input) {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        activateLicense();
                    }
                });
            }
        });
    </script>
</body>
</html>
