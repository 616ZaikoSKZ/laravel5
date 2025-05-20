<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
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
            background: url('IMG/imagen1.jpg') no-repeat center center/cover;
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
        .hero h1, .hero p, .hero a {
            position: relative;
            z-index: 2;
        }

        /* Sección de Servicios */
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Sección de Video */
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

        /* Testimonios */
        .testimonial {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
        <h1 class="display-4">Protege tu Mundo Digital</h1>
        <p class="lead">Descubre cómo mantenerte seguro en línea con las mejores prácticas, herramientas y noticias.</p>
        <a href="/buenas-practicas" class="btn btn-primary btn-lg">Comienza Ahora</a>
    </div>

    <!-- Sección de Servicios -->
    <main class="container py-5">
        <h2 class="section-title">¿Qué ofrecemos?</h2>
        <div class="row text-center">
            <!-- Tarjeta 1: Amenazas -->
            <div class="col-md-4">
                <div class="card service-card shadow-sm">
                    <img src="IMG/imagen2.jpg" class="card-img-top" alt="Amenazas">
                    <div class="card-body">
                        <h5 class="card-title">Amenazas</h5>
                        <p class="card-text">Identifica y protege tu sistema contra malware, phishing y ransomware.</p>
                        <a href="/amenazas" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Buenas Prácticas -->
            <div class="col-md-4">
                <div class="card service-card shadow-sm">
                    <img src="IMG/imagen3.jpg" class="card-img-top" alt="Buenas Prácticas">
                    <div class="card-body">
                        <h5 class="card-title">Buenas Prácticas</h5>
                        <p class="card-text">Aprende cómo proteger tus datos y mantener tu privacidad en línea.</p>
                        <a href="/buenas_practicas" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Herramientas -->
            <div class="col-md-4">
                <div class="card service-card shadow-sm">
                    <img src="IMG/imagen4.webp" class="card-img-top" alt="Herramientas">
                    <div class="card-body">
                        <h5 class="card-title">Herramientas</h5>
                        <p class="card-text">Descubre herramientas esenciales como antivirus y gestores de contraseñas.</p>
                        <a href="/herramientas" class="btn btn-outline-primary">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Sección de Video -->
    <section class="container py-5">
        <h2 class="section-title">Aprende más sobre Ciberseguridad</h2>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/VdGzPZ31ts8" frameborder="0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section class="container py-5">
        <h2 class="section-title">Lo que dicen nuestros usuarios</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"Gracias a este sitio, pude proteger mi empresa contra ataques de phishing."</p>
                    <footer class="blockquote-footer">Juan Pérez, CEO de TechSecure</footer>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"Las herramientas recomendadas aquí son esenciales para cualquier negocio."</p>
                    <footer class="blockquote-footer">María López, Especialista en TI</footer>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"La guía de buenas prácticas me ayudó a mejorar la seguridad de mis datos personales."</p>
                    <footer class="blockquote-footer">Carlos García, Usuario</footer>
                </div>
            </div>
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