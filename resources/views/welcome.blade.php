<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campo Libre</title>

    <!-- Enlace a la fuente de Material Symbols -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap">

    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- Enlace a los iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Enlace al CSS personalizado -->
    @vite(['resources/css/welcome.css'])


    <!-- Enlace a Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Header -->
    <header class="encabezado">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Campo Libre -->
                <a class="navbar-brand" href="#">
                    <span class="material-symbols-outlined" style="font-size: 40px; color: #fff;">eco</span>
                </a>

                <!-- Información del usuario -->
                <div class="header-info">
                    <h3 class="mb-0">Campo Libre</h3>
                    <p class="lead mb-0">
                        <span class="nombre">Mónica Pedraza</span>
                        <!-- 2 | Maria|Gomez|maria.gomez@example.com|pass34b|1985-03-22|proveedor|Bogotá-->
                        <span class="rol">Administrador</span>
                    </p>
                </div>

                <!-- Botón de menú responsive -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Elementos de navegación -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inicio_logeado_a.html"><i class="bi bi-house-door"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_administrador_notificaciones.html"><i class="bi bi-bell"></i>
                            Notificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eventos_logeado_a.html"><i class="bi bi-calendar-event"></i>
                            Eventos</a>
                    <li class="nav-item">
                        <a class="nav-link" href="dash_administrador_mp.html"><i class="bi bi-person-circle"></i>
                            Perfil</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <!-- contenedor del dash -->
    <div class="contenedor-dash">
        <!-- barra lateral -->
        <aside class="barra">
            <div class="Foto_perfil">
                <span class="material-symbols-outlined" style="font-size: 150px;">account_circle</span>
                <span class="material-symbols-outlined camara-icon">camera_alt</span>
            </div>
            <ul class="barra-menu">
                <li><button class="boton" onclick="window.location.href='dash_administrador_mp.html';">Miperfil</button></li>
                <li><button class="boton"><a class="ancla" href="{{url('eventos')}}">Eventos</a></button></li>
                <li><button class="boton"onclick="window.location.href='dash_administrador_notificaciones.html';">Notificaciones</button></li>
                <li><button class="boton" onclick="window.location.href='dash_administrador_estadisticas.html';">Ver Estadísticas</button></li>
                <li><button class="boton" onclick="window.location.href='inicio_mundo.html';">Cerrar Sesión</button>
                </li>
            </ul>
        </aside>
        <!------------------------------------------------------------- dash eventos------------------------------------->
        @yield('content')
        

    </div>



    <!-- Footer -->
    <footer class="pie-de-pagina">
        <p>Proyecto de aprendizaje SENA GAES 4: Ederson Nossa, Anyelina Albararcin y juan Sebastian Aguillar</p>
    </footer>

</html>
