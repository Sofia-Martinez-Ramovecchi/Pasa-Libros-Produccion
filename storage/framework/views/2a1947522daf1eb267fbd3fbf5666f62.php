<!-- Incluir el archivo modales.blade.php -->
<?php echo $__env->make('modales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasaLibros</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/EstiloInicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <script defer src="../js/InicioPL.js"></script>
    <script defer src="../js/intercambioLibros.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs/build/alertify.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css"/>

</head>
<body>

    <header>
        <div class="container-lg" id="headerDiv">
            <div class="row align-items-center p-3">
                <div id="Logo" class="col-sm-3 text-start">
                    <h3>PasaLibros</h3>
                </div>
                <!------- buscador ----->
                <div class="col-md-6 d-flex justify-content-center"> <!-- Centro el buscador -->
                    <div class="input-group" id="search-bar">
                        <label for="BuscadorLibro" class="visually-hidden">Buscar libros</label> <!-- Label accesible -->
                        <input id="BuscadorLibro" type="text" class="form-control" placeholder="Buscar libros..." aria-label="Buscar libros...">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <nav class="col-sm-3 text-end ">
                    <button type="button" class="btn btn-link" onclick="window.location='<?php echo e(route('login')); ?>'">Iniciar Sesión</button>
                    <button type="button" class="btn btn-link" onclick="window.location='<?php echo e(route('register')); ?>'">Registrarse</button>

                </nav>
            </div>
        </div>
    </header><br>

    <main>
        <!---------- Listado de publicaciones ------------->
        <section class="book-list my-4">
            <h5>Publicados Recientemente</h5>
            <div id="recentlyPublishedCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 1</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 2</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 3</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 4</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 5</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 6</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 7</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="book-item border p-3 rounded mb-3">
                                        <h3>Libro 8</h3>
                                        <p class="descripcion">Descripción del libro 1...</p>
                                        <p class="Estado">Estado</p>
                                        <p class="Editorial">Editorial</p>
                                        <p class="Autor">Autor</p>
                                        <p class="Version">Versión</p>
                                        <p class="Codigo">Código internacional</p>
                                        <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                            Ver más&#8230; <!-- Tres puntos -->
                                        </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!--  agregar más item  -->
                </div>
                <!-- Botones de navegación fuera del carousel-inner -->
                <div class="carousel-controls">
                    <button class="carousel-control-prev" type="button" data-bs-target="#recentlyPublishedCarousel" data-bs-slide="prev"  aria-label="Anterior" aria-controls="recentlyPublishedCarousel">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#recentlyPublishedCarousel" data-bs-slide="next"  aria-label="Siguiente" aria-controls="recentlyPublishedCarousel">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </section><br>

       <!------ Clasicos --------->
       <section class="book-list my-4">
            <h5>Clásicos</h5>
            <div id="ClasicosCarrusel" class="carousel slide" data-bs-ride="carousel"> <!-- ID único -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 1</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 2</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 3</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 4</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 5</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 6</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 7</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="book-item border p-3 rounded mb-3">
                                    <h3>Libro 8</h3>
                                    <p class="descripcion">Descripción del libro 1...</p>
                                    <p class="Estado">Estado</p>
                                    <p class="Editorial">Editorial</p>
                                    <p class="Autor">Autor</p>
                                    <p class="Version">Versión</p>
                                    <p class="Codigo">Código internacional</p>
                                    <button type="button" class="btn btn-link edit-button" data-bs-toggle="modal" data-bs-target="#ModalInfoLibro">
                                        Ver más&#8230; <!-- Tres puntos -->
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#ClasicosCarrusel" data-bs-slide="prev" aria-label="Anterior" aria-controls="ClasicosCarrusel">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#ClasicosCarrusel" data-bs-slide="next" aria-label="Siguiente" aria-controls="ClasicosCarrusel">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
       </section><br><br>

        <!----------- Categorias -------------->
        <section class="book-list my-4" id="categorias">
            <h5>Categorías</h5>
            <div class="container border rounded shadow-sm p-4">
                <div class="row">
                    <div class="col-md-3">
                        <button type="button"  class="btn btn-outline-dark CategoriaBtn">Fantasía</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-dark CategoriaBtn">Terror</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-dark CategoriaBtn">Historia</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-dark CategoriaBtn">Comics y Mangas</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-dark CategoriaBtn">Arte</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-dark CategoriaBtn">Infantiles</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-dark CategoriaBtn">Filosofía</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" class="btn btn-outline-dark CategoriaBtn">Biografía</button>
                    </div>
                </div>
            </div><br>
        </section>

    </main>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container p-4">
            <section class="mb-4">
                <p>Gracias por visitar nuestro sitio. Mantente conectado con nuestras redes sociales.</p>
            </section>
        </div>
        <p class="mb-0">PasaLibros © 2024 - Todos los derechos reservados</p>
    </footer>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/InicioPL.blade.php ENDPATH**/ ?>