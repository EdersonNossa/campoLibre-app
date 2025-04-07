<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campo Libre - Registro</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  
  <!-- Google Fonts Material Symbols -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- CSS personalizado -->
  @vite(['resources/css/login.css'])
</head>
<body>
  <!-- Header -->
  <header class="encabezado">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span class="material-symbols-outlined" style="font-size: 40px; color: #fff;">eco</span>
        </a>
        <div class="header-info">
          <h3 class="mb-0"><a href="#" style="color: inherit; text-decoration: none;">Campo Libre</a></h3>
          <p class="lead mb-0"><span class="rol">Iniciando Sesión</span></p>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="inicio_mundo.html"><i class="bi bi-house-door"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-calendar-event"></i> Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Registrate</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="container" style="margin-top: 120px;">
    <div class="row justify-content-center">
      <div class="col-md-5 d-flex flex-column justify-content-center align-items-center bg-light p-4">
        <h3 class="texto-campolibre-bienvenida">Bienvenido a Campo Libre</h3>
        <p class="texto-bienvenida">Donde conectarás con vendedores, encontrarás cientos de productos e incluso podrás emprender tu propia tienda virtual.</p>
      </div>
      <div class="col-md-7">
        <div class="contenedor-formulario p-4">
          <h3 class="text-center">Inicia sesión</h3>

          <!-- ALERTA DE ERROR -->
          @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
          @endif

          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label for="corusuario" class="contenedor-label">Correo electrónico</label>
              <input type="email" class="contenedor-control" name="corusuario" id="corusuario" value="{{ old('corusuario') }}" placeholder="correo@ejemplo.com" required>
              @error('corusuario') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label for="passusuario" class="contenedor-label">Contraseña</label>
              <input type="password" class="contenedor-control" name="passusuario" id="password" placeholder="Contraseña" required>
              @error('passusuario') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="boton_inicio text-center">
              <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
          </form>
          <div class="text-center enlaces-secundarios mt-3">
            <p>¿Quieres crear una cuenta? <a href="Registrarse.html">Crear cuenta</a></p>
            <p>¿Quieres recuperar contraseña? <a href="#" data-bs-toggle="modal" data-bs-target="#recuperarContrasenaModal">Recuperar contraseña</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="pie-de-pagina text-center p-3 mt-5 bg-light">
    <p>Proyecto de aprendizaje SENA GAES 4: Anyelina Albarracín, Santiago Castro, Andrés Mena y José Gregorio Patiño</p>
  </footer>

  <!-- Modal Recuperar Contraseña -->
  <div class="modal fade" id="recuperarContrasenaModal" tabindex="-1" aria-labelledby="recuperarContrasenaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="correocambiocontrasena">
          <div class="modal-header">
            <h5 class="modal-title" id="recuperarContrasenaModalLabel">Recuperar Contraseña</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="recoveryEmail" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="recoveryEmail" placeholder="correo@ejemplo.com" required>
            </div>
            <p class="text-muted">Se te enviará una contraseña temporal a este correo.</p>
            <div id="correo-cambio-contrasena-enviado" class="text-success" style="display: none;">Correo enviado</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script para mostrar mensaje -->
  <script>
    document.getElementById('correocambiocontrasena').addEventListener('submit', function (e) {
      e.preventDefault();
      const mensaje = document.getElementById('correo-cambio-contrasena-enviado');
      mensaje.style.display = 'block';
      setTimeout(() => mensaje.style.display = 'none', 3000);
      this.reset();
    });
  </script>
</body>
</html>
