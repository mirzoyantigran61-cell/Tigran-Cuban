


<!DOCTYPE html>
<html lang="en" class="h-full overflow-hidden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Chat - Cuban Mods</title>
    
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
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/dark-mode.css">
    
    <style>
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: .5;
            }
        }
        
        .message-appear {
            animation: slideInUp 0.3s ease-out;
        }
        
        .pulse-animation {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        .chat-pattern {
            background-color: #ffffff;
            background-image: 
                radial-gradient(at 40% 20%, hsla(219,97%,88%,0.15) 0px, transparent 50%),
                radial-gradient(at 80% 0%, hsla(189,97%,88%,0.15) 0px, transparent 50%),
                radial-gradient(at 0% 50%, hsla(355,100%,93%,0.1) 0px, transparent 50%);
        }
        
        .dark .chat-pattern {
            background-color: #111827;
            background-image: 
                radial-gradient(at 40% 20%, hsla(219,97%,30%,0.1) 0px, transparent 50%),
                radial-gradient(at 80% 0%, hsla(189,97%,30%,0.1) 0px, transparent 50%),
                radial-gradient(at 0% 50%, hsla(355,100%,30%,0.08) 0px, transparent 50%);
        }
        
        #messages-container::-webkit-scrollbar {
            width: 6px;
        }
        
        #messages-container::-webkit-scrollbar-track {
            background: transparent;
        }
        
        #messages-container::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        
        #messages-container::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        .dark #messages-container::-webkit-scrollbar-thumb {
            background: #374151;
        }
        
        .dark #messages-container::-webkit-scrollbar-thumb:hover {
            background: #4b5563;
        }
    </style>
</head>
<body class="h-full overflow-hidden bg-gradient-to-br from-slate-50 via-blue-50/30 to-slate-50 dark:from-black dark:via-gray-900 dark:to-black transition-colors duration-200">
    
    
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
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 bg-gradient-to-r from-blue-500 to-cyan-400 text-white shadow-lg shadow-blue-500/30">
                    <div class="w-8 h-8 rounded-lg bg-white/20 flex items-center justify-center text-lg transition-all duration-200">
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
                   class="group flex items-center gap-3 px-4 py-3 rounded-xl font-medium text-sm transition-all duration-200 bg-gradient-to-r from-blue-500 to-cyan-400 text-white shadow-lg shadow-blue-500/30">
                    <div class="w-8 h-8 rounded-lg bg-white/20 flex items-center justify-center text-lg transition-all duration-200">
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
    
    <!-- Main Content - Altura fija 100% -->
    <div class="md:ml-64 h-full flex flex-col overflow-hidden">
        
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
        
        <!-- Chat Container - Sin padding, altura fija -->
        <main class="flex-1 overflow-hidden flex flex-col">
            <div class="max-w-5xl mx-auto w-full h-full flex flex-col">
                
                <!-- Header Mínimo -->
                <div class="bg-gradient-to-r from-blue-600 via-cyan-500 to-blue-600 px-2 py-2 md:py-2.5 shadow-lg flex-shrink-0">
                    <div class="flex items-center justify-between gap-2 max-w-5xl mx-auto">
                        <div class="flex-1 min-w-0 flex items-center gap-1.5">
                            <div class="w-7 h-7 bg-white/20 backdrop-blur-sm rounded-md flex items-center justify-center flex-shrink-0">
                                <i data-lucide="messages-square" class="w-3.5 h-3.5 text-white"></i>
                            </div>
                            <div>
                                <h1 class="text-sm font-bold text-white">Chat</h1>
                                <div class="flex items-center gap-0.5">
                                    <div class="w-1 h-1 bg-green-400 rounded-full pulse-animation"></div>
                                    <p class="text-white/90 font-medium text-[9px]" id="online-users">Cargando...</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Username Badge -->
                        <div class="flex items-center gap-1 bg-white/10 backdrop-blur-md px-2 py-1 rounded-md border border-white/20 flex-shrink-0">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-yellow-400 via-orange-400 to-pink-500 flex items-center justify-center text-white text-xs font-bold shadow-lg ring-1 ring-white/30">
                                I                            </div>
                            <p class="font-bold text-white text-[10px] truncate max-w-[50px]">Invitado_Nathan574</p>
                        </div>
                    </div>
                </div>
                
                <!-- Messages Area - Flex grow para ocupar espacio disponible -->
                <div id="messages-container" class="flex-1 overflow-y-auto p-2 space-y-2 chat-pattern">
                    
                    <!-- Loading State -->
                    <div id="loading-state" class="flex items-center justify-center h-full">
                        <div class="text-center">
                            <div class="relative w-12 h-12 mx-auto mb-3">
                                <div class="absolute inset-0 border-4 border-blue-200 dark:border-blue-900 rounded-full"></div>
                                <div class="absolute inset-0 border-4 border-blue-600 dark:border-blue-500 rounded-full border-t-transparent animate-spin"></div>
                            </div>
                            <p class="text-slate-600 dark:text-gray-300 font-medium text-sm">Cargando mensajes...</p>
                        </div>
                    </div>
                    
                    <!-- Messages List -->
                    <div id="messages-list" class="space-y-2"></div>
                    
                </div>
                
                <!-- Input Area - Fijo abajo -->
                <div class="border-t-2 border-slate-200 dark:border-gray-700 p-2 bg-white dark:bg-gray-900 flex-shrink-0">
                    <!-- Image Preview -->
                    <div id="image-preview" class="mb-2 relative inline-block" style="display:none;">
                        <div class="relative group">
                            <img id="preview-img" class="h-16 rounded-lg border-2 border-blue-500" alt="Preview">
                            <button type="button" onclick="clearImage()"
                                    class="absolute -top-1 -right-1 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center shadow-lg">
                                <i data-lucide="x" class="w-3.5 h-3.5"></i>
                            </button>
                        </div>
                    </div>
                    
                    <form id="message-form" class="flex items-center gap-2">
                        <!-- Attach Button con icono visible -->
                        <input type="file" id="image-input" accept="image/*" class="hidden">
                        <button type="button" onclick="document.getElementById('image-input').click()"
                                class="w-10 h-10 rounded-lg bg-gradient-to-br from-blue-500 to-cyan-400 text-white shadow-lg flex items-center justify-center flex-shrink-0"
                                title="Adjuntar">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </button>
                        
                        <!-- Message Input MÁS GRANDE -->
                        <div class="flex-1 relative min-w-0">
                            <input type="text" id="message-input"
                                   placeholder="Mensaje..."
                                   class="w-full px-4 py-3 rounded-xl border-2 border-slate-300 dark:border-gray-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm font-medium bg-white dark:bg-gray-800 dark:text-white"
                                   maxlength="500">
                        </div>
                        
                        <!-- Send Button MÁS GRANDE -->
                        <button type="submit" id="send-btn"
                                class="w-10 h-10 bg-gradient-to-r from-blue-600 to-cyan-400 text-white rounded-lg font-bold shadow-lg flex items-center justify-center disabled:opacity-50 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </button>
                    </form>
                </div>
                
            </div>
        </main>
    </div>
    
    <script src="/assets/js/app.js"></script>
    
    <script>
        // ═══════════════════════════════════════════════════════════════
        // CHAT VANILLA JAVASCRIPT - Rediseñado y mejorado
        // ═══════════════════════════════════════════════════════════════
        
        const HWID = 'WEB_GUEST_6469F46FF6E99395F85ABD060BA35EAC';
        const USERNAME = 'Invitado_Nathan574';
        let messages = [];
        let lastMessageId = 0; // Para cargar solo mensajes nuevos
        let selectedImageBase64 = null;
        let refreshInterval = null;
        let isFirstLoad = true;
        
        // Debug inicial
        console.log('🚀 Chat inicializado');
        console.log('👤 Usuario:', USERNAME);
        console.log('🔑 HWID:', HWID);
        
        // Gradientes para avatares (basados en primera letra)
        const avatarGradients = [
            'from-purple-500 to-pink-500',
            'from-blue-500 to-cyan-400',
            'from-green-500 to-emerald-400',
            'from-orange-500 to-yellow-400',
            'from-red-500 to-pink-500',
            'from-indigo-500 to-purple-500',
            'from-teal-500 to-green-400',
            'from-rose-500 to-orange-400'
        ];
        
        function getAvatarGradient(username) {
            const charCode = username.charCodeAt(0);
            return avatarGradients[charCode % avatarGradients.length];
        }
        
        // Cargar mensajes NUEVOS (sin refresh)
        async function loadMessages() {
            try {
                // Si es primera carga, cargar todos. Si no, solo nuevos
                const url = isFirstLoad 
                    ? '/PANEL_ADMIN/api_chat.php'
                    : `/PANEL_ADMIN/api_chat.php?last_id=${lastMessageId}`;
                
                const response = await fetch(url);
                const data = await response.json();
                
                if (data.success) {
                    const newMessages = data.messages || [];
                    const onlineCount = data.online_count || 0;
                    
                    // Ocultar loading solo en primera carga
                    if (isFirstLoad) {
                        document.getElementById('loading-state').style.display = 'none';
                        messages = newMessages;
                        renderAllMessages();
                        // Scroll instantáneo al final en primera carga (sin animación)
                        const messagesContainer = document.getElementById('messages-container');
                        messagesContainer.scrollTop = messagesContainer.scrollHeight;
                        isFirstLoad = false;
                    } else if (newMessages.length > 0) {
                        // Solo agregar mensajes NUEVOS (sin re-renderizar todo)
                        newMessages.forEach(msg => {
                            if (msg.id > lastMessageId) {
                                messages.push(msg);
                                appendMessage(msg); // Agregar solo el nuevo mensaje
                            }
                        });
                    }
                    
                    // Actualizar último ID
                    if (messages.length > 0) {
                        lastMessageId = Math.max(...messages.map(m => m.id || 0));
                    }
                    
                    // Actualizar contador de usuarios
                    const onlineUsersElem = document.getElementById('online-users');
                    if (onlineCount === 0) {
                        onlineUsersElem.textContent = 'Nadie en línea';
                    } else if (onlineCount === 1) {
                        onlineUsersElem.textContent = '1 usuario';
                    } else {
                        onlineUsersElem.textContent = `${onlineCount} usuarios`;
                    }
                    
                    // Actualizar presencia
                    updatePresence();
                }
            } catch (error) {
                console.error('❌ Error cargando mensajes:', error);
            }
        }
        
        // Renderizar TODOS los mensajes (solo primera carga)
        function renderAllMessages() {
            const container = document.getElementById('messages-list');
            container.innerHTML = '';
            
            messages.forEach(msg => {
                const isOwn = msg.username === USERNAME;
                const msgDiv = document.createElement('div');
                msgDiv.className = `flex ${isOwn ? 'justify-end' : 'justify-start'}`;
                msgDiv.dataset.messageId = msg.id;
                
                const gradient = getAvatarGradient(msg.username);
                
                let avatar = '';
                if (!isOwn) {
                    const initial = msg.username.charAt(0).toUpperCase();
                    avatar = `<div class="flex items-center gap-1.5 mb-1.5">
                        <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-gradient-to-br ${gradient} flex items-center justify-center text-white text-xs md:text-sm font-bold shadow-lg ring-1 md:ring-2 ring-white dark:ring-gray-700">
                            ${initial}
                        </div>
                        <span class="font-bold text-xs md:text-sm text-slate-700 dark:text-gray-200">${escapeHtml(msg.username)}</span>
                    </div>`;
                }
                
                let msgText = '';
                if (msg.message && msg.message.trim()) {
                    msgText = escapeHtml(msg.message);
                }
                
                let msgImage = '';
                if (msg.image_url) {
                    msgImage = `<img src="${msg.image_url}" alt="Imagen" 
                        class="mt-3 rounded-2xl max-w-xs h-auto cursor-pointer hover:scale-105 transition-transform shadow-lg border-2 ${isOwn ? 'border-white/20' : 'border-slate-200'}"
                        onclick="window.open('${msg.image_url}', '_blank')">`;
                }
                
                const time = formatTime(msg.created_at);
                
                if (isOwn) {
                    msgDiv.innerHTML = `
                        <div class="max-w-[85%] sm:max-w-[70%]">
                            <div class="bg-gradient-to-br from-blue-500 via-blue-600 to-cyan-500 text-white rounded-2xl rounded-tr-md px-3 md:px-4 py-2 md:py-2.5 shadow-lg hover:shadow-xl transition-shadow">
                                ${msgText ? `<p class="text-xs md:text-sm leading-relaxed break-words">${msgText}</p>` : ''}
                                ${msgImage}
                                <div class="text-white/80 text-[10px] md:text-xs mt-1.5 text-right font-medium">${time}</div>
                            </div>
                        </div>
                    `;
                } else {
                    msgDiv.innerHTML = `
                        <div class="max-w-[85%] sm:max-w-[70%]">
                            <div class="bg-white dark:bg-gray-800 border-2 border-slate-200 dark:border-gray-700 rounded-2xl rounded-tl-md px-3 md:px-4 py-2 md:py-2.5 shadow-lg hover:shadow-xl transition-shadow">
                                ${avatar}
                                ${msgText ? `<p class="text-xs md:text-sm leading-relaxed break-words text-slate-700 dark:text-gray-200">${msgText}</p>` : ''}
                                ${msgImage}
                                <div class="text-slate-500 dark:text-gray-400 text-[10px] md:text-xs mt-1.5 font-medium">${time}</div>
                            </div>
                        </div>
                    `;
                }
                
                container.appendChild(msgDiv);
            });
        }
        
        // Agregar UN SOLO mensaje (sin re-renderizar todo)
        function appendMessage(msg) {
            const container = document.getElementById('messages-list');
            const isOwn = msg.username === USERNAME;
            const msgDiv = document.createElement('div');
            msgDiv.className = `flex ${isOwn ? 'justify-end' : 'justify-start'} message-appear`;
            msgDiv.dataset.messageId = msg.id;
            
            const gradient = getAvatarGradient(msg.username);
            
            let avatar = '';
            if (!isOwn) {
                const initial = msg.username.charAt(0).toUpperCase();
                avatar = `<div class="flex items-center gap-1.5 mb-1.5">
                    <div class="w-6 h-6 md:w-7 md:h-7 rounded-full bg-gradient-to-br ${gradient} flex items-center justify-center text-white text-xs md:text-sm font-bold shadow-lg ring-1 md:ring-2 ring-white dark:ring-gray-700">
                        ${initial}
                    </div>
                    <span class="font-bold text-xs md:text-sm text-slate-700 dark:text-gray-200">${escapeHtml(msg.username)}</span>
                </div>`;
            }
            
            let msgText = '';
            if (msg.message && msg.message.trim()) {
                msgText = escapeHtml(msg.message);
            }
            
            let msgImage = '';
            if (msg.image_url) {
                msgImage = `<img src="${msg.image_url}" alt="Imagen" 
                    class="mt-3 rounded-2xl max-w-xs h-auto cursor-pointer hover:scale-105 transition-transform shadow-lg border-2 ${isOwn ? 'border-white/20' : 'border-slate-200'}"
                    onclick="window.open('${msg.image_url}', '_blank')">`;
            }
            
            const time = formatTime(msg.created_at);
            
            if (isOwn) {
                msgDiv.innerHTML = `
                    <div class="max-w-[85%] sm:max-w-[70%]">
                        <div class="bg-gradient-to-br from-blue-500 via-blue-600 to-cyan-500 text-white rounded-2xl rounded-tr-md px-3 md:px-4 py-2 md:py-2.5 shadow-lg hover:shadow-xl transition-shadow">
                            ${msgText ? `<p class="text-xs md:text-sm leading-relaxed break-words">${msgText}</p>` : ''}
                            ${msgImage}
                            <div class="text-white/80 text-[10px] md:text-xs mt-1.5 text-right font-medium">${time}</div>
                        </div>
                    </div>
                `;
            } else {
                msgDiv.innerHTML = `
                    <div class="max-w-[85%] sm:max-w-[70%]">
                        <div class="bg-white dark:bg-gray-800 border-2 border-slate-200 dark:border-gray-700 rounded-2xl rounded-tl-md px-3 md:px-4 py-2 md:py-2.5 shadow-lg hover:shadow-xl transition-shadow">
                            ${avatar}
                            ${msgText ? `<p class="text-xs md:text-sm leading-relaxed break-words text-slate-700 dark:text-gray-200">${msgText}</p>` : ''}
                            ${msgImage}
                            <div class="text-slate-500 dark:text-gray-400 text-[10px] md:text-xs mt-1.5 font-medium">${time}</div>
                        </div>
                    </div>
                `;
            }
            
            container.appendChild(msgDiv);
            
            // Auto scroll solo si estás cerca del final
            const messagesContainer = document.getElementById('messages-container');
            const isNearBottom = messagesContainer.scrollHeight - messagesContainer.scrollTop - messagesContainer.clientHeight < 100;
            if (isNearBottom) {
                scrollToBottom();
            }
        }
        
        function scrollToBottom() {
            const messagesContainer = document.getElementById('messages-container');
            setTimeout(() => {
                messagesContainer.scrollTo({
                    top: messagesContainer.scrollHeight,
                    behavior: 'smooth'
                });
            }, 100);
        }
        
        // Enviar mensaje
        async function sendMessage(e) {
            e.preventDefault();
            console.log('📤 Intentando enviar mensaje...');
            
            const input = document.getElementById('message-input');
            const text = input.value.trim();
            
            console.log('📝 Texto:', text);
            console.log('🖼️ Imagen:', selectedImageBase64 ? 'Sí' : 'No');
            
            if (!text && !selectedImageBase64) {
                console.warn('⚠️ No hay texto ni imagen');
                return;
            }
            
            const sendBtn = document.getElementById('send-btn');
            sendBtn.disabled = true;
            sendBtn.innerHTML = '<svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
            
            try {
                const payload = {
                    hwid: HWID,
                    username: USERNAME,
                    message: text
                };
                
                if (selectedImageBase64) {
                    payload.image_base64 = selectedImageBase64;
                }
                
                console.log('📨 Enviando payload:', { ...payload, image_base64: payload.image_base64 ? '[IMAGE]' : null });
                
                const response = await fetch('/PANEL_ADMIN/api_chat.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                
                console.log('📡 Response status:', response.status);
                const data = await response.json();
                console.log('📥 Response data:', data);
                
                if (data.success) {
                    console.log('✅ Mensaje enviado correctamente');
                    input.value = '';
                    clearImage();
                    // Cargar inmediatamente para ver tu mensaje
                    await loadMessages();
                } else {
                    console.error('❌ Error en respuesta:', data.message || 'Desconocido');
                    alert('Error: ' + (data.message || 'No se pudo enviar el mensaje'));
                }
            } catch (error) {
                console.error('❌ Error al enviar:', error);
                alert('Error al enviar mensaje: ' + error.message);
            } finally {
                sendBtn.disabled = false;
                sendBtn.innerHTML = '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>';
            }
        }
        
        // Actualizar presencia
        async function updatePresence() {
            try {
                await fetch('/PANEL_ADMIN/api_chat.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        hwid: HWID,
                        username: USERNAME,
                        update_presence: true
                    })
                });
            } catch (e) {}
        }
        
        // Manejar selección de imagen
        document.getElementById('image-input').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;
            
            if (!file.type.startsWith('image/')) {
                alert('Por favor selecciona una imagen válida');
                return;
            }
            
            if (file.size > 5 * 1024 * 1024) {
                alert('La imagen es demasiado grande. Máximo 5MB');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = new Image();
                img.onload = function() {
                    const canvas = document.createElement('canvas');
                    let width = img.width;
                    let height = img.height;
                    const maxSize = 800;
                    
                    if (width > height && width > maxSize) {
                        height = (height * maxSize) / width;
                        width = maxSize;
                    } else if (height > maxSize) {
                        width = (width * maxSize) / height;
                        height = maxSize;
                    }
                    
                    canvas.width = width;
                    canvas.height = height;
                    const ctx = canvas.getContext('2d');
                    ctx.drawImage(img, 0, 0, width, height);
                    
                    const dataUrl = canvas.toDataURL('image/jpeg', 0.8);
                    selectedImageBase64 = dataUrl.split(',')[1];
                    
                    document.getElementById('preview-img').src = dataUrl;
                    document.getElementById('image-preview').style.display = 'block';
                };
                img.src = e.target.result;
            };
            reader.readAsDataURL(file);
            e.target.value = '';
        });
        
        // Limpiar imagen
        function clearImage() {
            selectedImageBase64 = null;
            document.getElementById('image-preview').style.display = 'none';
        }
        
        // Formatear tiempo
        function formatTime(timestamp) {
            const date = new Date(timestamp);
            const now = new Date();
            const diff = now - date;
            
            if (diff < 60000) return 'Ahora';
            if (diff < 3600000) return `hace ${Math.floor(diff / 60000)}m`;
            if (diff < 86400000) return `hace ${Math.floor(diff / 3600000)}h`;
            return date.toLocaleDateString('es-ES', { day: 'numeric', month: 'short' });
        }
        
        // Escapar HTML
        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
        
        // Iniciar
        document.getElementById('message-form').addEventListener('submit', sendMessage);
        loadMessages();
        
        // Actualizar cada 3 segundos (solo mensajes nuevos, sin refresh)
        refreshInterval = setInterval(() => loadMessages(), 3000);
        
        // Inicializar Lucide
        setTimeout(() => {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        }, 100);
    </script>
</body>
</html>
