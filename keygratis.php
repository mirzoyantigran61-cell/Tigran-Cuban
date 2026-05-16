


<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key gratis — Cuban Mods</title>
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' };
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/dark-mode.css">
</head>
<body class="min-h-screen bg-slate-50 dark:bg-black transition-colors duration-200 flex flex-col" x-data>
    
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
                    <span>Inicio</span>
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
                    <span>Descargas</span>
                </a>
            </li>
                        <li>
                <a href="/settings.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        ⚙️                    </div>
                    <span>Ajustes</span>
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
                    <span>Iniciar Sesión</span>
                </a>
            </li>
                        <li>
                <a href="/register.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        📝                    </div>
                    <span>Registrarse</span>
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
                    <span class="text-sm font-semibold">Hazte VIP</span>
                </div>
                <p class="text-xs text-white/80">
                    Acceso ilimitado a todos los mods                </p>
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
                    <span>Inicio</span>
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
                    <span>Descargas</span>
                </a>
            </li>
                        <li>
                <a href="/settings.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        ⚙️                    </div>
                    <span>Ajustes</span>
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
                    <span>Iniciar Sesión</span>
                </a>
            </li>
                        <li>
                <a href="/register.php" 
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 text-slate-600 dark:text-gray-300 hover:bg-gradient-to-r hover:from-slate-50 hover:to-slate-100 dark:hover:from-gray-800 dark:hover:to-gray-900 hover:text-slate-900 dark:hover:text-white">
                    <div class="w-8 h-8 rounded-lg bg-slate-100 dark:bg-gray-800 group-hover:bg-white dark:group-hover:bg-gray-700 flex items-center justify-center text-lg transition-all duration-200">
                        📝                    </div>
                    <span>Registrarse</span>
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
    <div class="md:ml-64 flex flex-col min-h-screen">
        
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
                    🇪🇸                </button>
                
                <!-- Language Dropdown -->
                <div id="lang-menu" class="absolute right-0 mt-3 w-40 bg-white dark:bg-gray-900 rounded-xl shadow-2xl border border-slate-100 dark:border-gray-800 py-2 overflow-hidden z-50 hidden">
                    <a href="?lang=es" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 dark:text-gray-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors bg-blue-50 dark:bg-blue-900/20 text-blue-600 dark:text-blue-400">
                        <span class="text-lg">🇪🇸</span>
                        Español
                    </a>
                    <a href="?lang=en" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 dark:text-gray-300 hover:bg-slate-50 dark:hover:bg-gray-800 transition-colors ">
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
        <main class="flex-1 p-4 md:p-8 flex items-center justify-center">
            <div class="max-w-md w-full rounded-2xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 shadow-xl p-8 text-center">
                <div class="text-5xl mb-4" aria-hidden="true">📱</div>
                <h1 class="text-xl font-black text-slate-900 dark:text-white mb-3">Solo móvil</h1>
                <p class="text-slate-600 dark:text-gray-300 text-sm leading-relaxed mb-2">
                    La zona de <strong class="text-slate-900 dark:text-white">KEY gratis</strong> solo está disponible desde <strong class="text-slate-900 dark:text-white">teléfono o tablet</strong>. Abre este enlace en tu móvil para continuar.                </p>
                <p class="text-xs text-slate-500 dark:text-gray-500 mt-4">Cuban Mods · Free Fire</p>
            </div>
        </main>
            </div>
    <script src="/assets/js/app.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function () { if (typeof lucide !== 'undefined') lucide.createIcons(); });</script>
</body>
</html>
    