
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad - Buenas Prácticas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Barra de navegación */
        .navbar {
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .navbar.scrolled {
            background-color: #212529 !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Hero Section */
        .hero {
            background: url('IMG/imagen3.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
            position: relative;
        }
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }
        .hero h1, .hero p {
            position: relative;
            z-index: 2;
        }

        /* Sección de Consejos */
        .list-group-item {
            font-size: 1.1rem;
        }

        /* Video Section */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Pie de página */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Ciberseguridad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/amenazas">Amenazas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/buenas_practicas">Buenas Prácticas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/herramientas">Herramientas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/noticias">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contacto">Contacto</a></li>
                    <!-- Botón de Cerrar Sesión -->
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-outline-light btn-sm ms-3">Log Out</button>
                    </form>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1 class="display-4">Buenas Prácticas en Ciberseguridad</h1>
        <p class="lead">Aprende cómo proteger tus datos y mantener tu privacidad en línea.</p>
    </div>

    <!-- Consejos Prácticos -->
    <section class="container py-5">
        <h2 class="section-title">Consejos para Protegerte</h2>
        <ul class="list-group">
            <li class="list-group-item">Usa contraseñas fuertes y únicas para cada cuenta.</li>
            <li class="list-group-item">Habilita la autenticación en dos pasos (2FA) siempre que sea posible.</li>
            <li class="list-group-item">Evita conectarte a redes Wi-Fi públicas sin una VPN.</li>
            <li class="list-group-item">Mantén tu software y sistema operativo actualizados.</li>
            <li class="list-group-item">Realiza copias de seguridad regulares de tus datos importantes.</li>
        </ul>
    </section>

    <!-- Video Educativo -->
    <section class="container py-5">
        <h2 class="section-title text-center">Aprende Más con Este Video</h2>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/GjkpBi2y7fg" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="text-center">
        <p>&copy; 2025 Ciberseguridad. Todos los derechos reservados.</p>
        <p>Tu fuente confiable para proteger tu mundo digital.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Cambiar el color de la barra de navegación al hacer scroll
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>