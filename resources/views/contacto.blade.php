
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad - Contacto</title>
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
            background: url('IMG/imagen15.jpg') no-repeat center center/cover;
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

        /* Formulario de Contacto */
        .form-control, .btn {
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
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
                    <li class="nav-item"><a class="nav-link" href="inicio/">Inicio</a></li>
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
        <h1 class="display-4">Contáctanos</h1>
        <p class="lead">¿Tienes preguntas o necesitas ayuda? Estamos aquí para ayudarte.</p>
    </div>

    <!-- Formulario de Contacto -->
    <section class="container py-5">
        <h2 class="section-title text-center">Envíanos un Mensaje</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/enviar-contacto" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre completo" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Tu correo electrónico" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Información de Contacto -->
    <section class="container py-5">
        <h2 class="section-title text-center">Información de Contacto</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <h5>Correo Electrónico</h5>
                <p>soporte@ciberseguridad.com</p>
            </div>
            <div class="col-md-4">
                <h5>Teléfono</h5>
                <p>+1 (555) 123-4567</p>
            </div>
            <div class="col-md-4">
                <h5>Dirección</h5>
                <p>123 Calle Seguridad, Ciudad Digital</p>
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