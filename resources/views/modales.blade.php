<!-- Incluir el archivo mapa.blade.php -->
@include('mapa')
<!--Vista Perfil -->

<!-- Modal para publicar libro -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="modal fade" id="publicarLibroModalInicio" tabindex="-1" aria-labelledby="publicarLibroModalInicioLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Publicar un libro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="publicarLibroForm2" enctype="multipart/form-data" method="POST" action="{{ route('perfil.mostrar') }}">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="tituloLibro2" class="form-label">Título del Libro</label>
                                    <input type="text" class="form-control" id="tituloLibro2" name="title" placeholder="Escribe el título del libro" required>
                                    <div class="invalid-feedback">Por favor, ingresa un título.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="autorLibro2" class="form-label">Autor</label>
                                    <input type="text" class="form-control" id="autorLibro2" name="author" placeholder="Escribe el autor del libro" required>
                                    <div class="invalid-feedback">Por favor, ingresa el autor.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="EditorialLibro2" class="form-label">Editorial</label>
                                    <input type="text" class="form-control" id="EditorialLibro2" name="genre" placeholder="Indique la editorial del libro" required>
                                    <div class="invalid-feedback">Por favor, ingresa la editorial.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="VersionLibro2" class="form-label">Versión</label>
                                    <input type="text" class="form-control" id="VersionLibro2" name="condition" placeholder="Escriba la versión del libro" required>
                                    <div class="invalid-feedback">Por favor, ingresa la versión.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="InternacionalCodigo2" class="form-label">Código Internacional</label>
                                    <input type="text" class="form-control" id="InternacionalCodigo2" name="description" placeholder="Escribe el Código Internacional" required>
                                    <div class="invalid-feedback">Por favor, ingresa el código internacional.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="imagenLibro2" class="form-label">Subir portada del libro</label>
                                    <input class="form-control" type="file" id="imagenLibro2" name="photos[]" multiple required>
                                    <div class="invalid-feedback">Por favor, sube la portada.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="LibroContraportada2" class="form-label">Contraportada (Opcional)</label>
                                    <input class="form-control" type="file" id="LibroContraportada2" name="photos[]">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="descripcionLibro2" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="descripcionLibro2" name="description" rows="3" placeholder="Escribe una breve descripción del libro" required></textarea>
                                    <div class="invalid-feedback">Por favor, ingresa una descripción.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="cancelarLibro2" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="BtnPublicarLibro2">Publicar</button>
            </div>
        </div>
    </div>
</div>

<!-- Incluir el archivo JavaScript -->
@vite([ 'resources/js/publicarLibro.js'])

    <!-- Modal para editar libro -->
        <div class="modal fade" id="editarLibroModal" tabindex="-1" aria-labelledby="editarLibroLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarLibroLabel">Editar Publicación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editarLibroForm">
                            <div class="mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="tituloLibroEditar" class="form-label">Título del Libro</label>
                                            <input type="text" class="form-control" id="tituloLibroEditar" placeholder="Escribe el título del libro" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="autorLibroEditar" class="form-label">Autor</label>
                                            <input type="text" class="form-control" id="autorLibroEditar" placeholder="Escribe el autor del libro" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="editorialEditar" class="form-label">Editorial</label>
                                            <input type="text" class="form-control" id="editorialEditar" placeholder="Indique la editorial del libro" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="versionLibroEditar" class="form-label">Versión</label>
                                            <input type="text" class="form-control" id="versionLibroEditar" placeholder="Escriba la versión del libro" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="EditarcodigoInternacional" class="form-label">Código Internacional</label>
                                            <input type="text" class="form-control" id="EditarcodigoInternacional" placeholder="Escribe el Código Internacional" required>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="imagenLibroEditar" class="form-label">Cambiar portada del libro (Opcional)</label>
                                            <input class="form-control" type="file" id="imagenLibroEditar">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="imagenLibroContraportadaEditar" class="form-label">Contraportada (Opcional)</label>
                                            <input class="form-control" type="file" id="imagenLibroContraportadaEditar">
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="descripcionLibroEditar" class="form-label">Descripción</label>
                                            <textarea class="form-control" id="descripcionLibroEditar" rows="3" placeholder="Escribe una breve descripción del libro" required></textarea>
                                            <div class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="BtnCancelarEditLibro" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="BtnGuardarCambiosLibro">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- MODAL ELIMINAR PUBLICACION ---->
        <div class="modal fade" id="EliminarPublicacionModal" tabindex="-1" aria-labelledby="EliminarPublicacionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div id="EliminarModalBody" class="modal-body">
                        ¿Estás seguro de que deseas eliminar esta publicacion?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" id="CancelarEliminarPublicacion" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-outline-danger" id="btnEliminarPublicacion">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>


<!--Vista Perfil Usuario -->

    <!--Modal Enviar Mensaje-->
        <div>
            <div class="modal fade" id="enviarMensajeModal" tabindex="-1" aria-labelledby="enviarMensajeLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                              <h5 class="modal-title" id="enviarMensajeLabel">Enviar Mensaje</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="enviarMensajeForm">
                                <div class="mb-3">
                                    <label for="mensaje" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="mensaje" rows="3" required></textarea>
                                    <div class="invalid-feedback">Por favor, ingresa un mensaje.</div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="enviarMensajeBtn">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--Modal reportar -->
        <div class="modal" id="DenunciarModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">¿Qué tipo de problema quieres denunciar?</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="">
                            <div class="container mt-4">
                                <div class="form-check mb-3 p-3 border rounded bg-light">
                                    <input type="radio" class="form-check-input" id="radio_privacidad" name="optradio" value="privacidad">
                                    <label class="form-check-label fw-bold" for="radio_privacidad">Privacidad</label>
                                    <p class="small text-muted mt-1">
                                        Distribución de información privada, amenazas de distribuir/exponer información privada, distribución de imágenes de mí que no deseo que estén en la plataforma.
                                    </p>
                                </div>
                                <div class="form-check mb-3 p-3 border rounded bg-light">
                                    <input type="radio" class="form-check-input" id="radio_odio" name="optradio" value="odio" checked>
                                    <label class="form-check-label fw-bold" for="radio_odio">Odio</label>
                                    <p class="small text-muted mt-1">
                                        Palabras ofensivas, estereotipos racistas o sexistas, deshumanización, incitación al miedo o la discriminación, referencias a discursos de odio, símbolos y logotipos relacionados con discursos de odio.
                                    </p>
                                </div>
                                <div class="form-check mb-3 p-3 border rounded bg-light">
                                    <input type="radio" class="form-check-input" id="radio_abuso" name="optradio" value="abuso">
                                    <label class="form-check-label fw-bold" for="radio_abuso">Abuso y acoso</label>
                                    <p class="small text-muted mt-1">
                                        Insultos, contenido no deseado de carácter sexual y cosificación explícita, contenido gráfico no deseado, negación de eventos violentos, acoso dirigido e incitación al acoso.
                                    </p>
                                </div>
                                <div class="form-check mb-3 p-3 border rounded bg-light">
                                    <input type="radio" class="form-check-input" id="radio_discurso" name="optradio" value="discurso">
                                    <label class="form-check-label fw-bold" for="radio_discurso">Discurso violento</label>
                                    <p class="small text-muted mt-1">
                                        Amenazas violentas, deseo de provocar lesiones, glorificación de la violencia, incitación a la violencia, incitación codificada a la violencia.
                                    </p>
                                </div>
                                <div class="form-check mb-3 p-3 border rounded bg-light">
                                    <input type="radio" class="form-check-input" id="radio_otro" name="optradio" value="otro">
                                    <label class="form-check-label fw-bold" for="radio_otro">Otro</label><br>
                                    <textarea class="form-control mt-2" rows="3" id="otro_textarea" placeholder="Por favor, describa las razones por las que quiere denunciar esta publicación."></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="EnviarDenuncia">Enviar Denuncia</button>
                        <button type="button" class="btn btn-danger" id="CerrarDenuncia" data-bs-dismiss="modal">Cerrar</button>
                   </div>
                </div>
            </div>
        </div>

    <!--Modal Valoracion Intercambio -->
        <div class="modal fade" id="valoracionModal" tabindex="-1" aria-labelledby="valoracionModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="valoracionModalLabel">Valorar Intercambio</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="FormValorarIntercambio">
                            <div class="mb-3">
                                <label for="opinion" class="form-label">Deja tu opinión sobre el intercambio:</label>
                                <textarea class="form-control" id="opinion" name="opinion" rows="3" required></textarea> <!-- Agregué name -->
                                <div class="invalid-feedback">Por favor, ingresa un mensaje.</div>
                            </div>

                            <!-- Calificación con estrellas -->
                            <div class="mb-3">
                                <label for="rating" class="form-label">Calificación:</label>
                                <div id="estrellas" style="font-size: 2rem;">
                                    <i class="bi bi-star-fill text-muted" data-value="1"></i>
                                    <i class="bi bi-star-fill text-muted" data-value="2"></i>
                                    <i class="bi bi-star-fill text-muted" data-value="3"></i>
                                    <i class="bi bi-star-fill text-muted" data-value="4"></i>
                                    <i class="bi bi-star-fill text-muted" data-value="5"></i>
                                </div>
                                <input type="hidden" name="rating" id="ratingValue"> <!-- Campo oculto para la calificación -->
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" id="CancelarValoracionBtn" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="BtnValoracion">Enviar Valoración</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <!-- Modal para mostrar el mapa -->
        <div class="modal fade" id="ubicacionModal" tabindex="-1" aria-labelledby="ubicacionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ubicacionModalLabel">Ubicación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



<!--Modales de Inicio -->

    <div class="modal fade" id="SolicitarIntercambio" tabindex="-1" aria-labelledby="intercambioLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Encabezado -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="intercambioLabel">Solicitar Intercambio</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Cuerpo del Modal -->
                <div class="modal-body p-4">
                    <form id="IntercambioForm">
                        <!-- Seleccionar libros propios -->
                        <div class="mb-4">
                            <label for="SelectLibrosSolicitante" class="form-label">Libros Propios</label>
                            <select name="SelectLibrosSolicitante" id="SelectLibrosSolicitante" class="form-select">
                                <option value="">Seleccione uno libro propio para intercambiar</option>
                                <option value="1">libro</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Checkbox más libros -->
                        <div class="mb-4 form-check">
                            <label for="MasLibrosSolicitante" class="form-check-label">¿Seleccionar más?</label>
                            <input class="form-check-input" type="checkbox" id="MasLibrosSolicitante" />
                        </div>

                        <div id="masLibrosDivSolicitante" class="mb-4 d-none">
                            <p>Libros Adicionales</p>
                            <div class="form-check">
                                <label for="LibroAdicionalSolicitante1">Libro Adicional 1
                                <input  type="checkbox" value="Libro1" id="LibroAdicionalSolicitante1" name="LibroAdicionalSolicitante1"/>
                                </label>
                            </div>

                            <div class="form-check">
                                <label for="LibroAdicionalSolicitante2">Libro Adicional 2
                                <input  type="checkbox" value="Libro2" id="LibroAdicionalSolicitante2" name="LibroAdicionalSolicitante2"/>
                                </label>
                            </div>

                            <div class="form-check">
                                <label for="LibroAdicionalSolicitante3">Libro Adicional 3
                                <input type="checkbox" value="Libro3" id="LibroAdicionalSolicitante3" name="LibroAdicionalSolicitante3" />
                                </label>
                            </div>
                        </div>

                        <!-- Seleccionar libro para ofertar -->
                        <div class="mb-4">
                            <label for="LibrosOfertante" class="form-label">Libro para Ofertar</label>
                            <select name="LibrosOfertante" id="LibrosOfertante" class="form-select">
                                <option value="">Selecciona un libro para ofertar</option>
                                <option value="1">Libro 1</option>
                                <option value="2">Libro 2</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-4 form-check">
                            <input class="form-check-input" type="checkbox" id="MasLibrosOfertante" />
                            <label class="form-check-label" for="MasLibrosOfertante">¿Seleccionar más?</label>
                        </div>
                        <div id="masLibrosDivOfertante" class="mb-4 d-none">
                            <p>Libros Adicionales</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Libro1" id="LibroAdicionalOfertante1"
                                    aria-labelledby="LabelLibroAdicionalOfertante1" />
                                <label class="form-check-label" for="LibroAdicionalOfertante1"
                                    id="LabelLibroAdicionalOfertante1">Libro Adicional 1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Libro2" id="LibroAdicionalOfertante2"
                                    aria-labelledby="LabelLibroAdicionalOfertante2" />
                                <label class="form-check-label" for="LibroAdicionalOfertante2"
                                    id="LabelLibroAdicionalOfertante2">Libro Adicional 2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Libro3" id="LibroAdicionalOfertante3" />
                                <label class="form-check-label" for="LibroAdicionalOfertante3">Libro Adicional 3</label>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" id="cancelarIntercambio" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="BtnEnviarSolicitud">Enviar Solicitud</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Información de Publicación -->
    <div class="modal fade" id="ModalInfoLibro" tabindex="-1" aria-labelledby="bookInfoModalLabel">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="bookInfoModalLabel">Información de publicación</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
            <div class="row">
                <!-- Columna para las imágenes -->
                <div class="col-md-4 text-center">

                </div>

                <!-- Columna para la información -->
                <div class="col-md-8">
                    <h3 id="bookTitle" class="mb-3">Nombre del Libro</h3>
                    <p><strong>Estado:</strong> <span id="bookState"></span></p>
                    <p><strong>Descripción:</strong> <span id="bookDescription"></span></p>
                    <p><strong>Localidad:</strong> <span id="bookLocation"></span></p>
                    <p><strong>Editorial:</strong> <span id="bookEditorial"></span></p>
                    <p><strong>Autor:</strong> <span id="bookAuthor"></span></p>
                    <p><strong>Versión:</strong> <span id="bookVersion"></span></p>
                    <p><strong>Código Internacional:</strong> <span id="bookCode"></span></p>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <!-- Botones para las opciones -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SolicitarIntercambio">Enviar solicitud de intercambio</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="CerrarModalBtn">Volver</button>
            </div>
        </div>
        </div>
    </div>




