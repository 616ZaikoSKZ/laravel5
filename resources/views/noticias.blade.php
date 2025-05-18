
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad - Noticias</title>
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
            background: url('IMG/imagen5.jpg') no-repeat center center/cover;
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

        /* Tarjetas de Noticias */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
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
        <h1 class="display-4">Noticias de Ciberseguridad</h1>
        <p class="lead">Mantente informado con las últimas tendencias y novedades en el mundo de la ciberseguridad.</p>
    </div>

    <!-- Noticias Recientes -->
    <section class="container py-5">
        <h2 class="section-title text-center">Últimas Noticias</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="/images/noticia1.jpg" class="card-img-top" alt="Noticia 1">
                    <div class="card-body">
                        <h5 class="card-title">Nueva amenaza de ransomware</h5>
                        <p class="card-text">Un nuevo ataque de ransomware está afectando a empresas globales. Aprende cómo protegerte.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="/images/noticia2.jpg" class="card-img-top" alt="Noticia 2">
                    <div class="card-body">
                        <h5 class="card-title">Actualización crítica de seguridad</h5>
                        <p class="card-text">Microsoft lanza un parche para corregir vulnerabilidades críticas. Descubre más detalles.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="/images/noticia3.jpg" class="card-img-top" alt="Noticia 3">
                    <div class="card-body">
                        <h5 class="card-title">Consejos para evitar phishing</h5>
                        <p class="card-text">Aprende a identificar correos electrónicos sospechosos y proteger tu información personal.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Noticias Destacadas -->
    <section class="container py-5">
        <h2 class="section-title text-center">Noticias Destacadas</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <img src="/images/noticia4.jpg" class="card-img-top" alt="Noticia 4">
                    <div class="card-body">
                        <h5 class="card-title">Ciberseguridad en la nube</h5>
                        <p class="card-text">Descubre cómo proteger tus datos en servicios de almacenamiento en la nube.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <img src="/images/noticia5.jpg" class="card-img-top" alt="Noticia 5">
                    <div class="card-body">
                        <h5 class="card-title">Tendencias en ciberseguridad 2025</h5>
                        <p class="card-text">Conoce las tendencias más importantes en ciberseguridad para este año.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
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