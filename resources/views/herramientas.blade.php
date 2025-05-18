
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad - Herramientas</title>
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
            background: url('IMG/imagen4.webp') no-repeat center center/cover;
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

        /* Tarjetas de Herramientas */
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
        <h1 class="display-4">Herramientas de Ciberseguridad</h1>
        <p class="lead">Descubre las mejores herramientas para proteger tu mundo digital.</p>
    </div>

    <!-- Herramientas Recomendadas -->
    <section class="container py-5">
        <h2 class="section-title text-center">Herramientas Esenciales</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen6.jpg" class="card-img-top" alt="Antivirus">
                    <div class="card-body">
                        <h5 class="card-title">Antivirus</h5>
                        <p class="card-text">Protege tus dispositivos contra malware y virus con herramientas como Avast o Bitdefender.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen7.jpeg" class="card-img-top" alt="VPN">
                    <div class="card-body">
                        <h5 class="card-title">VPN</h5>
                        <p class="card-text">Asegura tu conexión a Internet y protege tu privacidad con servicios como NordVPN o ExpressVPN.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen8.png" class="card-img-top" alt="Gestores de Contraseñas">
                    <div class="card-body">
                        <h5 class="card-title">Gestores de Contraseñas</h5>
                        <p class="card-text">Organiza y protege tus contraseñas con herramientas como LastPass o 1Password.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Herramientas Avanzadas -->
    <section class="container py-5">
        <h2 class="section-title text-center">Herramientas Avanzadas</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen9.jpg" class="card-img-top" alt="Firewalls">
                    <div class="card-body">
                        <h5 class="card-title">Firewalls</h5>
                        <p class="card-text">Protege tu red contra accesos no autorizados con firewalls avanzados como pfSense.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen10.jpg" class="card-img-top" alt="Herramientas de Monitoreo">
                    <div class="card-body">
                        <h5 class="card-title">Monitoreo de Seguridad</h5>
                        <p class="card-text">Supervisa tu red y detecta amenazas con herramientas como Splunk o Wireshark.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen11.jpg" class="card-img-top" alt="Cifrado de Datos">
                    <div class="card-body">
                        <h5 class="card-title">Cifrado de Datos</h5>
                        <p class="card-text">Protege tu información sensible con herramientas de cifrado como VeraCrypt.</p>
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