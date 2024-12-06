
<button id="dark-mode-toggle" class="dark-mode-toggle">
    🌙
</button>

<style>
    .dark-mode-toggle {
        position: fixed;
        top: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: linear-gradient(45deg, #ff5722, #795548);
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .dark-mode-toggle:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }

    body.dark-mode {
        background-color: #121212;
        color: #e0e0e0;
    }

    body.dark-mode a {
        color: #bb86fc;
    }

    body.dark-mode .card {
        background-color: #1e1e1e;
        border-color: #333;
    }

    body.dark-mode #navbar {
        background-color: #1a1a1a;
        color: #e0e0e0;
    }

    body.dark-mode #navbar a.nav-link {
        background: linear-gradient(to right, #ffffff, #b0b0b0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent; 
    }

    body.dark-mode #navbar a.nav-link:hover {
        background: linear-gradient(to right, #b0b0b0, #ffffff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent; 
    }

    body.dark-mode #navbar .navbar-toggler-icon {
        background-color: #e0e0e0;
    }

    body.dark-mode #navbar .dropdown-menu {
        background-color: #2a2a2a;
        border: none;
    }

    body.dark-mode #navbar .dropdown-item {
        color: #e0e0e0 !important;
    }

    body.dark-mode #navbar .dropdown-item:hover {
        background-color: #383838;
    }
</style>

<script>

    const toggleButton = document.getElementById('dark-mode-toggle');
    const body = document.body;

    const currentMode = localStorage.getItem('dark-mode');
    if (currentMode === 'enabled') {
        body.classList.add('dark-mode');
    }

    toggleButton.addEventListener('click', () => {
        if (body.classList.contains('dark-mode')) {
            body.classList.remove('dark-mode');
            localStorage.setItem('dark-mode', 'disabled');
        } else {
            body.classList.add('dark-mode');
            localStorage.setItem('dark-mode', 'enabled');
        }
    });
</script>
