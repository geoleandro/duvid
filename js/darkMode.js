document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = themeToggle.querySelector('.theme-icon');
    
    // Verificar tema salvo no localStorage
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-bs-theme', savedTheme);
    updateBtnText(savedTheme);

    themeToggle.addEventListener('click', function() {
        const currentTheme = document.documentElement.getAttribute('data-bs-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        document.documentElement.setAttribute('data-bs-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateBtnText(newTheme);
    });

    function updateBtnText(theme) {
        if (theme === 'dark') {
            themeIcon.textContent = '☀️';
            themeToggle.innerHTML = '<span class="theme-icon">☀️</span> Modo Claro';
        } else {
            themeIcon.textContent = '🌙';
            themeToggle.innerHTML = '<span class="theme-icon">🌙</span> Modo Escuro';
        }
    }
});