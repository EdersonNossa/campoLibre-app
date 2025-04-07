<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Campo Libre</title>
  
  <!-- Enlace a la fuente de Material Symbols -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap">
  
  <!-- Enlace a Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  
  <!-- Enlace a los iconos de Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Enlace al CSS personalizado -->
  @vite(['resources/css/login_admin.css'])

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
            <span class="nombre">Mónica Pedraza</span>  <!-- 2 | Maria|Gomez|maria.gomez@example.com|pass34b|1985-03-22|proveedor|Bogotá-->
              <span class="rol">Administrador</span>
          </p>
        </div>
  
        <!-- Botón de menú responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Elementos de navegación -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="inicio_logeado_a.html"><i class="bi bi-house-door"></i> Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dash_administrador_notificaciones.html"><i class="bi bi-bell"></i> Notificaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="eventos_logeado_a.html"><i class="bi bi-calendar-event"></i> Eventos</a>
            <li class="nav-item">
              <a class="nav-link" href="dash_administrador_mp.html"><i class="bi bi-person-circle"></i> Perfil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Contenedor Principal -->
<div class="buscador-crear">
  <div class="container my-4 d-flex justify-content-between align-items-center">
    <!-- Buscador de eventos -->
    <div class="buscador">
      <form>
        <div class="input-group">
          <input type="text" class="form-control" id="barra-buscador" placeholder="Buscar Evento" required>
          <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
      </form>
    </div>
    <!-- Botón Crear evento -->
    <button class="btn btn-success ms-3" id="Crear-evento2" data-bs-toggle="modal" data-bs-target="#modalCrearEvento">Crear evento</button>
  </div>
</div>
    <!-- Tarjetero de eventos -->
    <div class="container my-5 mt-12">
      <h1 class="text-center mb-4 TituloSeccionEvento">Eventos</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        <!-- Tarjeta 1 -->
        <div class="col">
          <div class="card">
            <img src="Recursos/MercadoRural.jpg" class="card-img-top" alt="Frutas">
            <div class="card-body">
              <h5 class="nomeventot text-center">Mercado Rural</h5>
              <div class="fec-hor-evento">
                <i class="bi bi-calendar-event"></i><h6 class="fecevento text-center">18-09-2024</h6>
                <i class="bi bi-alarm"></i><h6 class="horevento text-center">10:00:00</h6>
              </div>
              <i class="bi bi-geo-alt"></i><h7 class="lugevento text-center">Campo Deportivo Local</h6>
            </div>
            <button class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalModificarEvento">
              <i class="bi bi-pencil"> Editar evento</i>
            </button>
            <a class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalEvento">
              <i class="bi bi-eye"> Ver evento</i>
            </a>
          </div>
        </div>
        <!-- Tarjeta 2 -->
        <div class="col">
          <div class="card">
            <img src="Recursos/evento1.png" class="card-img-top" alt="Herramientas">
            <div class="card-body">
              <h5 class="card-title text-center">Festival del Maíz</h5>
              <div class="fec-hor-evento">
                <i class="bi bi-calendar-event"></i><h6 class="fecevento text-center">05-09-2024</h6>
                <i class="bi bi-alarm"></i><h6 class="horevento text-center">12:00:00</h6>
              </div>
              <i class="bi bi-geo-alt"></i><h7 class="lugevento text-center">Centro Comunitario</h6>
            </div>
            <button class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalModificarEvento">
              <i class="bi bi-pencil"> Editar evento</i>
            </button>
            <a class="btn btn-success" id="editar-ver" href="#">
              <i class="bi bi-eye"> Ver evento</i>
            </a>
          </div>
        </div>
        <!-- Tarjeta 3 -->
        <div class="col">
          <div class="card">
            <img src="Recursos/evento2.png" class="card-img-top" alt="Protección">
            <div class="card-body">
              <h5 class="card-title text-center">Feria de Sabores Campesinos</h5>
              <div class="fec-hor-evento">
                <i class="bi bi-calendar-event"></i><h6 class="fecevento text-center">02-09-2024</h6>
                <i class="bi bi-alarm"></i><h6 class="horevento text-center">12:00:00</h6>
              </div>
              <i class="bi bi-geo-alt"></i><h7 class="lugevento text-center">Parque Natural</h6>
            </div>
            <button class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalModificarEvento">
              <i class="bi bi-pencil"> Editar evento</i>
            </button>
            <a class="btn btn-success" id="editar-ver" href="#">
              <i class="bi bi-eye"> Ver evento</i>
            </a>
          </div>
        </div>
        <!-- Tarjeta 4 -->
        <div class="col">
          <div class="card">
            <img src="Recursos/evento3.png" class="card-img-top" alt="Vegetales">
            <div class="card-body">
              <h5 class="card-title text-center">Jornadas de Agricultura Sostenible</h5>
              <div class="fec-hor-evento">
                <i class="bi bi-calendar-event"></i><h6 class="fecevento text-center">11-09-2024</h6>
                <i class="bi bi-alarm"></i><h6 class="horevento text-center">14:00:00</h6>
              </div>
              <i class="bi bi-geo-alt"></i><h7 class="lugevento text-center">Granja Educativa</h6>
            </div>
            <button class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalModificarEvento">
              <i class="bi bi-pencil"> Editar evento</i>
            </button>
            <a class="btn btn-success" id="editar-ver" href="#">
              <i class="bi bi-eye"> Ver evento</i>
            </a>
          </div>
        </div>
        <!-- Tarjeta 5 -->
        <div class="col">
          <div class="card">
            <img src="Recursos/ExpoAgropecuaria.webp" class="card-img-top" alt="Semillas">
            <div class="card-body">
              <h5 class="card-title text-center">Expo Agropecuaria</h5>
              <div class="fec-hor-evento">
                <i class="bi bi-calendar-event"></i><h6 class="fecevento text-center">21-09-2024</h6>
                <i class="bi bi-alarm"></i><h6 class="horevento text-center">17:00:00</h6>
              </div>
              <i class="bi bi-geo-alt"></i><h7 class="lugevento text-center">Auditorio Rel</h6>
            </div>
            <button class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalModificarEvento">
              <i class="bi bi-pencil"> Editar evento</i>
            </button>
            <a class="btn btn-success" id="editar-ver" href="#">
              <i class="bi bi-eye"> Ver evento</i>
            </a>
          </div>
        </div>
        <!-- Tarjeta 6 -->
        <div class="col">
          <div class="card">
            <img src="Recursos/FFT.jpeg" class="card-img-top" alt="Lácteos">
            <div class="card-body">
              <h5 class="card-title text-center">Festival de Frutos de la Temporada</h5>
              <div class="fec-hor-evento">
                <i class="bi bi-calendar-event"></i><h6 class="fecevento text-center">07-09-2024</h6>
                <i class="bi bi-alarm"></i><h6 class="horevento text-center">18:00:00</h6>
              </div>
              <i class="bi bi-geo-alt"></i><h7 class="lugevento text-center">Caserío Tradicional</h6>
            </div>
            <button class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalModificarEvento">
              <i class="bi bi-pencil"> Editar evento</i>
            </button>
            <a class="btn btn-success" id="editar-ver" href="#">
              <i class="bi bi-eye"> Ver evento</i>
            </a>
          </div>
        </div>
        <!-- Tarjeta 7-->
        <div class="col">
          <div class="card text-center3">
            <h5 class="card-title text-center">Crear Evento</h5>
            <button class="btn btn-success" id="Crear-evento2" data-bs-toggle="modal" data-bs-target="#modalCrearEvento"> 
              <i class="bi bi-plus-circle-fill" style="font-size: 8rem;"></i>
          </div>
        </div>
      </div>
    </div>
  </body>
   <!-- Footer -->
   <footer class="pie-de-pagina">
    <p>Proyecto de aprendizaje SENA GAES 4: Anyelina Albarracín, Santiago Castro, Andrés Mena, Ederson Nossa y José Gregorio Patiño</p>
  </footer>
</main> 
<!----------------------------------------------------------------------Modal evento cada uno administrador (Más eventos- editar evento)------------------------------------------------------------------>
<div class="modal fade" id="modalEvento" tabindex="-1" aria-labelledby="modalEventoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEventoLabel">Mercado Rural</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p id="descevento">Un espacio donde los productores locales venden sus productos frescos y artesanales, promoviendo la economía local.</p>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.9688290186093!2d-77.04262508490626!3d-12.086180791475755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7f8a2c9d7b1%3A0x6a2a8a4d6c1d0d8a!2sFeria%20de%20las%20Americas!5e0!3m2!1sen!2spe!4v1624641600000!5m2!1sen!2spe" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="detalles-evento mt-3">
      <p id="lugevento">Campo Deportivo Local</p>
      <p id="fecevento">Fecha: Sábado 03 de Agosto</p>
      <p id="horevento">Hora: 7:30am-12:00pm</p>
      </div>
      <div class="modal-footer">
      <a href="eventos_logeado_a.html" class="btn btn-success" id="editar-ver">Más Eventos</a>
      <button class="btn btn-success" id="editar-ver" data-bs-toggle="modal" data-bs-target="#modalModificarEvento">
        <i class="bi bi-pencil"> Editar evento</i>
      </button>
      </div>
    </div>
  </div>
</div>
</div> 
<!---------------------------------------------------------------------Modal para Editar eventos--------------------------------------------------------------->>  
<div class="modal fade" id="modalModificarEvento" tabindex="-1" aria-labelledby="modalModificarEventoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalModificarEventoLabel">Editar evento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id = modificar-evento>
          <div class="mb-3 cambiar-nomevento">
            <label for="nombre-evento" class="form-label">Nombre del evento</label>
            <input type="text" class="form-control" id="nomevento" required>
          </div>
          <div class="mb-3 cambiar-descevento">
            <label for="descripcion-evento" class="form-label">Descripción</label>
            <textarea class="form-control" id="descevento" rows="3" required></textarea>
          </div>
          <div class="mb-3 cambiar-direvento">
            <label for="direccion-evento" class="form-label">Lugar</label>
            <input type="text" class="form-control" id="lugevento" required>
          </div>
          <div class="row cambiar-decevento-horevento">
            <div class="col-md-4">
              <label for="fecha-evento" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecevento" required>
            </div>
            <div class="col-md-4">
              <label for="hora-evento" class="form-label">Hora</label>
              <input type="time" class="form-control" id="horevento" required>
            </div>
            <div class="col-md-4">
              <label for="estado-evento" class="form-label">Estado</label>
              <select id="estevento" class="form-select">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
              </select>
            </div>
          </div>
          <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
          </div>
        </form>
        <div id="notificacion-evento-modificado" style="display: none; margin-top: 10px; color: green;">
          Evento editado
      </div>
      </div>
    </div>
  </div>
</div>
</div>

<!---------------------------------------------------------------------Modal para crear eventos--------------------------------------------------------------->>

  <div class="modal fade" id="modalCrearEvento" tabindex="-1" aria-labelledby="modalCrearEventoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCrearEventoLabel">Crear Evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id = crear-evento>
          <form>
            <div class="mb-3 crear-nomevento">
              <label for="nombre-evento" class="form-label">Nombre del Evento</label>
              <input type="text" class="form-control" id="nomevento" required>
            </div>
            <div class="mb-3 crear-descevento">
              <label for="descripcion-evento" class="form-label">Descripción</label>
              <textarea class="form-control" id="descevento" rows="3" required></textarea>
            </div>
            <div class="mb-3 crear-direvento">
              <label for="direccion-evento" class="form-label">Lugar</label>
              <input type="text" class="form-control" id="lugevento" required>
            </div>
            <div class="row crear-decevento-horevento">
              <div class="col-md-4">
                <label for="fecha-evento" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecevento" required>
              </div>
              <div class="col-md-4">
                <label for="hora-evento" class="form-label">Hora</label>
                <input type="time" class="form-control" id="horevento" required>
              </div>
              <div class="col-md-4">
                <label for="estado-evento" class="form-label">Estado</label>
                <select id="estevento" class="form-select">
                  <option value="Activo">Activo</option>
                  <option value="Inactivo">Inactivo</option>
              </div>
              <div class="mb-3">
              <label for="imagenes-evento" class="form-label">Imágenes del Evento</label>
                <div class="input-group">
                  <input type="file" class="form-control" id="imagenes-evento" multiple>
            </div>
            <div class="d-grid gap-2 mt-4">
              <button type="submit" class="btn btn-success">Crear</button>
            </div>
          </form>
          <div id="notificacion-evento-creado" style="display: none; margin-top: 10px; color: green;">
            Evento creado.
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</html>

<!-- modificar evento -->
<script>
  document.getElementById('modificar-evento').addEventListener('submit', function(event) {
      event.preventDefault(); 
      const mensajeConfirmacion = document.getElementById('notificacion-evento-modificado');
      mensajeConfirmacion.style.display = 'block';
      this.reset();
      setTimeout(() => {
          mensajeConfirmacion.style.display = 'none';
      }, 2000); 
  });
</script>

<!-- crear evento -->
<script>
  document.getElementById('crear-evento').addEventListener('submit', function(event) {
      event.preventDefault(); 
      const mensajeConfirmacion = document.getElementById('notificacion-evento-creado');
      mensajeConfirmacion.style.display = 'block';
      this.reset();
      setTimeout(() => {
          mensajeConfirmacion.style.display = 'none';
      }, 2000); 
  });
</script>