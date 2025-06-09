
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio - Plataforma de Capacitación</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <section class="tank-bootstrap-header">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container">
               <img src="imagenes/insig1.png">
                <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse"  id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="dad" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="dad" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="dad" href="class.html">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="dad" href="team.html">Teachers</a>
                        </li>
                        <li class="nav-item">
                            <a class="dad" href="gallery.html">Gallery</a>
                        </li>
                         @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="dad"
                                    >
                                        Login
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="dad"
                                        >
                                            Registrarse
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif

                    </ul>
                </div>
           </div>
        </nav>
    </section>



    <section class="tank-main-banner">

        <div class="slider-info banner-view text-center">
            <div class="banner-info container">
                <h3 class="sec">COLEGIO 7054</h3>
                <b class="jaj">Tu mejor opción en aprendizaje de calidad </b>
            </div>
        </div>

    </section>







    <div class="container-fluid bg-primary px-0 px-md-5 mb-5" style="background-color: #29a7c0;">
        <div class="row align-items-center px-3">
            <!-- Columna de texto -->
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5"></h4>
                <h1 class="display-6 font-weight-bold text-white" style="font-family: 'Comic Sans MS', cursive;">¡Descubre la Mejor Educación para el Futuro en la Institución Educativa 7054!</h1>
                <p class="text-white mb-4">Ofrecemos calidad académica, innovación y un ambiente ideal para el desarrollo de tus hijos. ¡Únete y asegura su éxito!.</p>
                <a href="#" class="btn btn-dark mt-1 py-3 px-6">Mas informacion</a>
            </div>
            <!-- Columna de la imagen -->
            <div class="col-lg-6 text-center text-lg-right">
                <div class="img-container">
                    <img class="img-fluid" src="imagenes/nub.jpg" alt="Child reading" style="border-radius: 50%; max-width: 45%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <div class="icon">
                            <span class="fas fa-laptop-code"></span>
                        </div>
                            <div class="icon-info">
                              <h4>Capacitación en Herramientas Digitales:</h4>
                              <p class="m-0">Cursos sobre plataformas educativas y gestión digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <div class="icon">
                                <span class="fas fa-chalkboard-teacher"></span>
                            </div>
                            <div class="icon-info">
                            <h4>Formación en Pedagogía Digital:</h4>
                            <p class="m-0">Talleres sobre metodologías efectivas para educación a distancia.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <div class="icon">
                                <span class="fas fa-tools"></span>
                            </div>
                            <div class="icon-info">
                            <h4>Soporte Técnico y Asesoría:</h4>
                            <p class="m-0">para resolver problemas técnicos y asistencia en la plataforma.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <div class="icon">
                                <span class="fas fa-book-reader"></span>
                            </div>
                            <div class="icon-info">
                            <h4>Desarrollo Profesional Continuo:</h4>
                            <p class="m-0">Programas de actualización sobre tendencias y enfoques educativos.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <div class="icon">
                                <span class="fas fa-book-open"></span>
                            </div>
                            <div class="icon-info">
                            <h4>Recursos Educativos Abiertos:</h4>
                            <p class="m-0">Biblioteca digital con materiales y recursos didácticos.</p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <div class="icon">
                                <span class="fas fa-clipboard-check"></span>
                            </div>
                            <div class="icon-info">
                            <h4>Evaluación y Feedback:</h4>
                            <p class="m-0">Herramientas para autoevaluación y retroalimentación del desempeño docente.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->





    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="imagenes/col2.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">Aprende Sobre Nosotros</span></p>
                    <h1 class="mb-4">¡Bienvenidos a la I.E. 7054!</h1>
                    <p>Nos sentimos orgullosos de recibirlos en nuestra institución, un espacio donde la formación integral y el desarrollo de valores son pilares fundamentales. Aquí, cada estudiante es protagonista de su aprendizaje, y juntos, con el apoyo de un equipo docente comprometido, trabajamos para forjar una sociedad más justa y exitosa. Les invitamos a ser parte de esta comunidad educativa, donde la innovación, el respeto y el esfuerzo nos guían hacia el crecimiento y el éxito. ¡Bienvenidos a un nuevo capítulo lleno de oportunidades y logros!</p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="imagenes/COL1.jpeg" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Educación académica integral</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Desarrollo personal y social</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Actividades extracurriculares</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-2 py-2 px-4">Mas informacion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">TALLERES DE VERANO</span></p>
                <h1 class="mb-4">¡Descubre los talleres extracurriculares!</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="imagenes/cocina.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Clases de Panaderia</h4>
                            <p class="card-text">Aprende a crear deliciosos productos horneados y desarrolla tu creatividad.</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Edades</strong></div>
                                <div class="col-6 py-1">12 - 19 años</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Disponible</strong></div>
                                <div class="col-6 py-1">35 cupos</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Hora de clase</strong></div>
                                <div class="col-6 py-1">01:00 pm - 04:00 pm</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Cuota de matrícula</strong></div>
                                <div class="col-6 py-1">S/20 / Mensual</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Informacion</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="imagenes/depor.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Clases Deportivas</h4>
                            <p class="card-text">Fortalece cuerpo y mente, promoviendo la disciplina y el trabajo en equipo.</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Edades</strong></div>
                                <div class="col-6 py-1">4 - 18 años</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Disponible</strong></div>
                                <div class="col-6 py-1">35 cupos</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Hora de clase</strong></div>
                                <div class="col-6 py-1">01:00 pm - 5:00 pm</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Cuota de matrícula</strong></div>
                                <div class="col-6 py-1">S/20 / Mensual</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Informacion</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="imagenes/Dan.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Clases de Danza</h4>
                            <p class="card-text"> Expresa tu creatividad y mejora tu coordinación a través del movimiento.</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Edades</strong></div>
                                <div class="col-6 py-1">8 - 18 años</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Disponible</strong></div>
                                <div class="col-6 py-1">35 cupos</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Hora de clase</strong></div>
                                <div class="col-6 py-1">11:00 AM - 03:00 PM </div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Cuota de matrícula</strong></div>
                                <div class="col-6 py-1">S/20 / Mensual</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Informacion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">Vacantes Abiertas</span></p>
                    <h1 class="mb-4">Reserve un lugar para su hijo</h1>
                    <p>Estos talleres no solo complementan su formación académica, sino que también les permiten crecer en un ambiente divertido y enriquecedor. ¡Inscríbelos hoy y potencia su futuro con nosotros!</p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Desarrolla su talento en los deportes.</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>perfeccionar sus habilidades culinarias.</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>Expresar su creatividad a través de la danza.</li>
                    </ul>
                    <a href="" class="btn btn-primary mt-4 py-2 px-4">Reservar</a>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Reservar Inscripciones</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Nombre completo" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Seleccione la Clase</option>
                                        <option value="1">Clase de Panaderia</option>
                                        <option value="2">Clase Deportiva</option>
                                        <option value="3">Clase de Danza</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit">Reservar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->







    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">NUESTROS DIRECTORES</span></p>
                <h1 class="mb-4">Enseñansa de Calidad</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">JOSÉ MENDOZA MUNAYCO </h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Director </small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> secundaria </small>

                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">VÍCTOR MARTÍNEZ</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Subdirector</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i>Primaria</small>

                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">RAUL FIDEL CASTRO </h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Coordinador </small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> administrativa </small>

                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->



<!-- Carrusel de imágenes -->
<div id="carouselExample" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img  src="imagenes/capa.jpeg"  class="d-block w-100" alt="Innovación Educativa">
            <div class="carousel-caption d-none d-md-block">
                <h5>Innovación en la Enseñanza</h5>
                <p>Aplicamos tecnología para mejorar la calidad educativa.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imagenes/olym.jpg" class="d-block w-100" alt="Capacitación Virtual">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item">
            <img src="imagenes/pos.jpg" class="d-block w-100" alt="Mejorar la Interacción">
            <div class="carousel-caption d-none d-md-block">
                <h5>Mejora la Interacción en el Aula</h5>
                <p>Potencia el aprendizaje de tus estudiantes con nuevas estrategias.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>
























    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                    <i class="flaticon-043-teddy-bear"></i>
                    <span class="text-white">I.E. Nº 7054 </span>
                </a>
                <p> ¡Te esperamos para descubrir tus talentos y acompañarte en cada paso de tu crecimiento! Únete a nuestra gran familia y vive una experiencia única de aprendizaje.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.facebook.com/profile.php?id=100057699060144"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Informacion</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Direccíon</h5>
                        <p>Av. Villa María cuadra 8 S/N Lima - Perú </p>
                        <p>R3Q4+65C, Villa María del Triunfo 15809 </p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>Colegio7054@gmail.com</p>
                        <p>i.e.7054vmt@gmail.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Telefono</h5>
                        <p>Fijo: 2812599</p>
                        <p>cel: 960 182 873</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Principal</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>AAcerca de nosostros </a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestras clases </a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestros profesores </a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Nuestro blog </a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contacto </a>
                   

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Contacto de Informacion</h3>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Nombre completo" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Email"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">Contactanos</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                </a>2024 Plataforma de Capacitación I.E 7054.

            </p>
        </div>
    </div>





 <!-- Back to Top -->
 <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="lib/isotope/isotope.pkgd.min.js"></script>
 <script src="lib/lightbox/js/lightbox.min.js"></script>

 <!-- Contact Javascript File -->
 <script src="mail/jqBootstrapValidation.min.js"></script>
 <script src="mail/contact.js"></script>

 <!-- Template Javascript -->
 <script src="js/main.js"></script>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
