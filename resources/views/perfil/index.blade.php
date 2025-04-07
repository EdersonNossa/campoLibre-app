@extends('welcome')
@section('perfil')
    <div class="contenido">
        <div class="info-perfil">
            <div class="info-submenu">
                <h4>Mi perfil</h4>
            </div>
            <div class="info-cuerpo">
                <p>Nombre: <span class="nomusuario">Mónica Pedraza </span></p>
                <!---131 | Mónica|Pedraza|soy.administrador@campolibre.com|clave123|1988-10-22|administrador|Sopó-->
                <p>Correo: <span class ="corusuario">soy.administrador@campolibre.com</span></p>
                <p>Fecha de Nacimiento: <span class="fnausuario">1988-10-22</span></p>
                <p class="rol"><span>Su rol en esta página es de administrador</span></p>
                <button class="btn btn-editar-informacion" data-bs-toggle="modal" data-bs-target="#modalEditarPerfil">
                    Editar información
                </button>
                <button class="btn btn-cambiar-clave" data-bs-toggle="modal" data-bs-target="#modalCambiarClave">
                    Cambiar contraseña
                </button>
            </div>
        </div>
        <!-- Ventanas modales -->
        <!-- Modal para editar perfil (nombre, correo, celular) -->
        <div class="modal fade" id="modalEditarPerfil" tabindex="-1" aria-labelledby="modalEditarPerfilLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditarPerfilLabel">Editar perfil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="EditarPerfil">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="inputNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="inputNombre" value="Mónica Pedraza" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputCorreo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="inputCorreo"
                                    value="soy.administrador@campolibre.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="fnausuario" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fnausuario" value="1988-10-22" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                        </div>
                    </form>
                    <div id="notificacion-informacion-modificado" style="display: none; margin-top: 10px; color: green;">
                        Informacion editada
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para cambiar contraseña -->
        <div class="modal fade" id="modalCambiarClave" tabindex="-1" aria-labelledby="modalCambiarClaveLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCambiarClaveLabel">Cambiar contraseña</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formCambiarClave" onsubmit="return validarClave(event)">
                        <div class="modal-body">
                            <input type="password" class="form-control mb-2" id="inputClaveActual"
                                placeholder="Contraseña actual" required>
                            <input type="password" class="form-control mb-2" id="inputClaveNueva"
                                placeholder="Nueva contraseña" required>
                            <input type="password" class="form-control" id="inputConfirmarClave"
                                placeholder="Confirmar contraseña" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
