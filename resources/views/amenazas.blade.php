<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad - Amenazas</title>
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
            background: url('IMG/imagen2.jpg') no-repeat center center/cover;
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

        /* Sección de Tipos de Amenazas */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Consejos */
        .list-group-item {
            font-size: 1.1rem;
        }

        /* Estadísticas */
        .stat {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
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
        <h1 class="display-4">Amenazas en Ciberseguridad</h1>
        <p class="lead">Conoce los riesgos más comunes y cómo protegerte de ellos.</p>
    </div>

    <!-- Tipos de Amenazas -->
    <section class="container py-5">
        <h2 class="section-title">Tipos de Amenazas</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen12.jpg" class="card-img-top" alt="Malware">
                    <div class="card-body">
                        <h5 class="card-title">Malware</h5>
                        <p class="card-text">Software malicioso diseñado para dañar o infiltrarse en sistemas informáticos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen13.jpg" class="card-img-top" alt="Phishing">
                    <div class="card-body">
                        <h5 class="card-title">Phishing</h5>
                        <p class="card-text">Ataques que buscan engañar a los usuarios para robar información confidencial.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="IMG/imagen14.jpg" class="card-img-top" alt="Ransomware">
                    <div class="card-body">
                        <h5 class="card-title">Ransomware</h5>
                        <p class="card-text">Secuestro de datos mediante cifrado, exigiendo un rescate para su liberación.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consejos para Protegerse -->
    <section class="container py-5">
        <h2 class="section-title">Cómo Protegerte</h2>
        <ul class="list-group">
            <li class="list-group-item">Mantén tu software y sistema operativo actualizados.</li>
            <li class="list-group-item">Usa contraseñas fuertes y únicas para cada cuenta.</li>
            <li class="list-group-item">Evita hacer clic en enlaces sospechosos o abrir correos electrónicos de remitentes desconocidos.</li>
            <li class="list-group-item">Instala un software antivirus confiable y mantenlo actualizado.</li>
            <li class="list-group-item">Realiza copias de seguridad regulares de tus datos importantes.</li>
        </ul>
    </section>

    <!-- Estadísticas -->
    <section class="container py-5">
        <h2 class="section-title">Estadísticas de Ciberseguridad</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <p class="stat">300%</p>
                <p>Aumento en ataques de ransomware en los últimos 3 años.</p>
            </div>
            <div class="col-md-4">
                <p class="stat">95%</p>
                <p>De las brechas de seguridad son causadas por errores humanos.</p>
            </div>
            <div class="col-md-4">
                <p class="stat">$6 Trillones</p>
                <p>Costos globales estimados por cibercrimen en 2025.</p>
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