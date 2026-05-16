/**
 * ═══════════════════════════════════════════════════════════════
 * CUBAN MODS - JavaScript Application
 * ═══════════════════════════════════════════════════════════════
 */

// Alpine.js Store
document.addEventListener('alpine:init', () => {
    Alpine.store('mobile', {
        menuOpen: false,
        toggle() {
            this.menuOpen = !this.menuOpen;
        }
    });
    
    Alpine.store('search', {
        query: '',
        results: [],
        searching: false,
        
        async search() {
            if (this.query.length < 2) {
                this.results = [];
                return;
            }
            
            this.searching = true;
            try {
                const response = await fetch(`/api/search.php?q=${encodeURIComponent(this.query)}`);
                const data = await response.json();
                this.results = data.results || [];
            } catch (error) {
                console.error('Search error:', error);
            } finally {
                this.searching = false;
            }
        }
    });
});

// Initialize Lucide icons
function initIcons() {
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
}

// ✅ MENÚ MÓVIL - Funciona en todas las páginas
function initMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuSidebar = document.getElementById('mobile-menu-sidebar');
    
    // Asegurar que esté cerrado al cargar
    if (mobileMenuSidebar) {
        mobileMenuSidebar.classList.add('-translate-x-full');
        mobileMenuSidebar.classList.remove('translate-x-0');
    }
    if (mobileMenuOverlay) {
        mobileMenuOverlay.classList.add('hidden');
    }
    
    function toggleMobileMenu() {
        if (!mobileMenuSidebar) return;
        const isOpen = mobileMenuSidebar.classList.contains('translate-x-0');
        
        if (isOpen) {
            // Cerrar
            mobileMenuSidebar.classList.remove('translate-x-0');
            mobileMenuSidebar.classList.add('-translate-x-full');
            mobileMenuOverlay.classList.add('hidden');
        } else {
            // Abrir
            mobileMenuSidebar.classList.remove('-translate-x-full');
            mobileMenuSidebar.classList.add('translate-x-0');
            mobileMenuOverlay.classList.remove('hidden');
        }
    }
    
    // Click en el botón hamburguesa
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMobileMenu();
        });
    }
    
    // Click en el overlay para cerrar
    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', toggleMobileMenu);
    }
    
    // Cerrar al hacer clic en enlaces del menú
    if (mobileMenuSidebar) {
        mobileMenuSidebar.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', toggleMobileMenu);
        });
    }
    
    console.log('✅ Menú móvil inicializado');
}

// Call on page load
document.addEventListener('DOMContentLoaded', function() {
    initIcons();
    initMobileMenu();
});

// Reinitialize on dynamic content
const observer = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
        if (mutation.addedNodes.length) {
            initIcons();
        }
    });
});

observer.observe(document.body, {
    childList: true,
    subtree: true
});

// Smooth scroll
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

// Image lazy loading
if ('loading' in HTMLImageElement.prototype) {
    const images = document.querySelectorAll('img[loading="lazy"]');
    images.forEach(img => {
        img.src = img.dataset.src;
    });
} else {
    // Fallback for browsers that don't support lazy loading
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
    document.body.appendChild(script);
}

// Toast notifications
function showToast(message, type = 'info') {
    const toast = document.createElement('div');
    toast.className = `fixed bottom-4 right-4 z-50 px-6 py-3 rounded-xl shadow-lg text-white transform transition-all duration-300 ${
        type === 'success' ? 'bg-green-500' :
        type === 'error' ? 'bg-red-500' :
        type === 'warning' ? 'bg-yellow-500' :
        'bg-blue-500'
    }`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.style.transform = 'translateY(0)';
    }, 10);
    
    // Remove after 3 seconds
    setTimeout(() => {
        toast.style.transform = 'translateY(100px)';
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, 3000);
}

// Download handler
async function handleDownload(gameId, gameName) {
    try {
        showToast('Iniciando descarga...', 'info');
        
        // Increment download counter
        await fetch('/api/increment-download.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ game_id: gameId })
        });
        
        showToast(`Descargando ${gameName}...`, 'success');
        
        // Redirect to download (will be handled by Cuban Mods App)
        window.location.href = `/download.php?id=${gameId}`;
        
    } catch (error) {
        showToast('Error al iniciar la descarga', 'error');
        console.error('Download error:', error);
    }
}

// Copy to clipboard
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        showToast('Copiado al portapapeles', 'success');
    }).catch(err => {
        showToast('Error al copiar', 'error');
    });
}

// Format number
function formatNumber(num) {
    if (num >= 1000000) {
        return (num / 1000000).toFixed(1) + 'M';
    } else if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'K';
    }
    return num.toString();
}

// Time ago
function timeAgo(date) {
    const seconds = Math.floor((new Date() - new Date(date)) / 1000);
    
    let interval = seconds / 31536000;
    if (interval > 1) return Math.floor(interval) + ' años';
    
    interval = seconds / 2592000;
    if (interval > 1) return Math.floor(interval) + ' meses';
    
    interval = seconds / 86400;
    if (interval > 1) return Math.floor(interval) + ' días';
    
    interval = seconds / 3600;
    if (interval > 1) return Math.floor(interval) + ' horas';
    
    interval = seconds / 60;
    if (interval > 1) return Math.floor(interval) + ' minutos';
    
    return Math.floor(seconds) + ' segundos';
}

// Export to window
window.cubanMods = {
    showToast,
    handleDownload,
    copyToClipboard,
    formatNumber,
    timeAgo
};
