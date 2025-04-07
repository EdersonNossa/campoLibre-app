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
    @vite(['resources/css/cerraSesion.css'])

    <!-- Enlace a Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Header -->
    <header class="encabezado">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Campo Libre -->
                <a class="navbar-brand" href="inicio_mundo.html">
                    <span class="material-symbols-outlined" style="font-size: 40px; color: #fff;">eco</span>
                </a>

                <!-- Información del usuario *no existe porque no está logeado*-->
                <div class="header-info">
                    <h3 class="mb-0">Campo Libre</h3>
                </div>

                <!-- Botón de menú responsive -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Elementos de navegación -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="inicio_mundo.html"><i class="bi bi-house-door"></i> Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eventos_mundo.html"><i class="bi bi-calendar-event"></i>
                                Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Registrarse.html"><i class="bi bi-person-circle"></i>
                                Regístrate</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contenedor Principal -->
    <main class="main-content container">
        <!-- Buscador -->
        <div class="buscador">
            <form class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control" id="barra-buscador"
                        placeholder="Buscar Producto o tienda" required>
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </form>
        </div>


        <!-- Slider de Eventos -->
        <section class="slider-section text-center mb-4">
            <h2>Próximos eventos</h2>
            <div id="eventSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <a href="error404_mundo.html"> <!-- Link alrededor de la imagen -->
                            <img src="{{ Vite::asset('resources/img/evento1.png')}}" class="d-block w-100" alt="Festival del maíz"
                                style="height: 250px; object-fit: cover;">
                        </a>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <a href="error404_mundo.html">
                            <img src="{{ Vite::asset('resources/img/evento2.png') }}" class="d-block w-100" alt="Feria de sabores campesinas"
                                style="height: 250px; object-fit: cover;">
                        </a>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <a href="error404_mundo.html">
                            <img src="{{ Vite::asset('resources/img/evento3.png') }}" class="d-block w-100"
                                alt="Jornadas de agriculturas sostenibles" style="height: 250px; object-fit: cover;">
                        </a>
                    </div>
                </div>
                <!-- Controles de Navegación -->
                <button class="carousel-control-prev" type="button" data-bs-target="#eventSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#eventSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </section>

        <!-- Secciones de Productos -->
        <section class="product-sections d-flex justify-content-between">
            <!-- Los más valorados -->
            <div class="most-valued">
                <h3>Los más valorados</h3>
                <div id="mostValuedCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Producto 1 -->
                        <div class="carousel-item active">
                            <div class="product-card">
                                <img src="{{ Vite::asset('resources/img/Queso7.png') }}" alt="Queso 7 cueros 250 gr">
                                <p>Queso 7 cueros 250 gr</p>
                            </div>
                        </div>
                        <!-- Producto 2 -->
                        <div class="carousel-item">
                            <div class="product-card">
                                <img src="{{ Vite::asset('resources/img/Lechuga.png') }}" alt="Lechuga Crespa orgánica 200 gr">
                                <p>Lechuga Crespa orgánica 200 gr</p>
                            </div>
                        </div>
                        <!-- Producto 3 -->
                        <div class="carousel-item">
                            <div class="product-card">
                                <img src="{{ Vite::asset('resources/img/PapaC.png') }}" alt="Papa Criolla">
                                <p>Papa Criolla orgánica 1 kilo </p>
                            </div>
                        </div>
                    </div>
                    <!-- Controles de navegación para el slider de "Los más valorados" -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#mostValuedCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mostValuedCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>

            <!-- Los más económicos -->
            <div class="most-economical">
                <h3>Los más económicos</h3>
                <div id="mostEconomicalCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Producto 1 -->
                        <div class="carousel-item active">
                            <div class="product-card">
                                <img src="{{ Vite::asset('resources/img/YogurtF.png') }}" alt="Yogur de Fresa 1 litro ">
                                <p>Yogur de Fresa 1 litro </p>
                            </div>
                        </div>
                        <!-- Producto 2 -->
                        <div class="carousel-item">
                            <div class="product-card">
                                <img src="{{ Vite::asset('resources/img/Semilla.png') }}" alt="Semillas Tomate Chonto 250 gramos">
                                <p>Semillas Tomate Chonto 250 gramos</p>
                            </div>
                        </div>
                        <!-- Producto 3 -->
                        <div class="carousel-item">
                            <div class="product-card">
                                <img src="{{ Vite::asset('resources/img/Pepino.png') }}" alt="Pepino Cohombro 1 unidad">
                                <p>Pepino Cohombro 1 unidad</p>
                            </div>
                        </div>
                    </div>
                    <!-- Controles de navegación para el slider de "Los más económicos" -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#mostEconomicalCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mostEconomicalCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
</body>
<!-- Footer -->
<footer class="pie-de-pagina">
    <p>Proyecto de aprendizaje SENA GAES 4: Anyelina Albarracín, Santiago Castro, Andrés Mena, Ederson Nossa y José
        Gregorio Patiño</p>
</footer>

</html>
