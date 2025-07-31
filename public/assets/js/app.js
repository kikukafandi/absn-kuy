// Toggle sidebar for mobile
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menu-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    if (menuBtn && sidebar) {
        menuBtn.addEventListener('click', function() {
            sidebar.classList.toggle('-translate-x-full');
            if (overlay) {
                overlay.classList.toggle('hidden');
            }
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    }

    // Initialize Feather icons
    if (typeof feather !== 'undefined') {
        feather.replace();
    }

    // Modal handlers
    initializeModals();
    
    // Dropdown handlers
    initializeDropdowns();

    // Form handlers
    initializeForms();
});

// Modal functionality
function initializeModals() {
    // Open modal
    document.addEventListener('click', function(e) {
        if (e.target.matches('[data-modal-open]')) {
            const modalId = e.target.getAttribute('data-modal-open');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }
    });

    // Close modal
    document.addEventListener('click', function(e) {
        if (e.target.matches('[data-modal-close]') || e.target.matches('.modal-overlay')) {
            const modal = e.target.closest('.modal') || document.querySelector('.modal:not(.hidden)');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.querySelector('.modal:not(.hidden)');
            if (modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }
    });
}

// Dropdown functionality
function initializeDropdowns() {
    document.addEventListener('click', function(e) {
        // Toggle dropdown
        if (e.target.matches('[data-dropdown-toggle]')) {
            const dropdownId = e.target.getAttribute('data-dropdown-toggle');
            const dropdown = document.getElementById(dropdownId);
            if (dropdown) {
                dropdown.classList.toggle('hidden');
            }
        }
        
        // Close dropdowns when clicking outside
        if (!e.target.closest('[data-dropdown-toggle]') && !e.target.closest('.dropdown-menu')) {
            const dropdowns = document.querySelectorAll('.dropdown-menu');
            dropdowns.forEach(dropdown => {
                dropdown.classList.add('hidden');
            });
        }
    });
}

// Form functionality
function initializeForms() {
    // File upload preview
    document.addEventListener('change', function(e) {
        if (e.target.type === 'file') {
            const fileInput = e.target;
            const preview = document.querySelector('[data-file-preview="' + fileInput.id + '"]');
            if (preview && fileInput.files[0]) {
                const fileName = fileInput.files[0].name;
                preview.textContent = fileName;
                preview.classList.remove('hidden');
            }
        }
    });

    // Auto-save functionality for forms
    document.addEventListener('input', function(e) {
        if (e.target.matches('[data-auto-save]')) {
            // Implement auto-save logic here
            console.log('Auto-saving...', e.target.name, e.target.value);
        }
    });
}

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
        type === 'success' ? 'bg-green-500 text-white' :
        type === 'error' ? 'bg-red-500 text-white' :
        type === 'warning' ? 'bg-yellow-500 text-white' :
        'bg-blue-500 text-white'
    }`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Helper functions
function formatDate(date) {
    return new Intl.DateTimeFormat('id-ID', {
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    }).format(new Date(date));
}

function formatTime(time) {
    return new Intl.DateTimeFormat('id-ID', {
        hour: '2-digit',
        minute: '2-digit'
    }).format(new Date(time));
}
