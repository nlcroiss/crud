<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="img/ideacolor.ico" type="image/x-icon" />

    <title>Tecnología Educativa</title>

    <!-- TODO: ENLACE A GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap"
      rel="stylesheet"
    />

    <!-- TODO: ENLACE A BOOSTRAP 5 -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!-- TODO: ENLACE A LOS ICONOS DE BOOTSTRAP 5 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />

    <!-- TODO: ENLACE AL CSS PERSONALIZADO -->

    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/principal.css" />
  </head>
  <body>
    <!--TODO: ENCABEZAZO Y MENU -->
    <?php include 'temp/encabezado.php' ?>

    <!-- TODO: CONTENEDOR PRINCIPAL -->

    <div class="container mt-4 mb-4">
      <div class="row align-items-center">
        <section id="prueba" class="col-xs-12 col-md-6 col-lg-8">
          <h2>Mundo Digital</h2>
          <p>
            Como dice Stiegler, estamos ante un cambio de época, la tecnología
            produce un cambio disruptivo que ha venido a transformar y hacer que
            nada vuelva a ser igual. Ha modificado la forma de comunicarnos,
            relacionarnos y conectarnos, además de producir cambios en el mundo
            del trabajo y las actividades económicas.
          </p>
          <p>
            La velocidad del desarrollo de las tecnologías es sorprendente.
            Estamos siendo testigos de un avance tecnológico nunca antes visto,
            con tasas de crecimiento exponenciales en áreas como procesamiento
            de datos, capacidad de almacenamiento en la nube y velocidad de
            transmisión de datos.
          </p>
          <p>
            Hoy en día, los usuarios o consumidores de tecnología están llamados
            a la creación, son los productores de sus propios contenidos
            digitales. Cualquier persona “ahora intervienen sus fotos, editan
            sus videos, se apropian y crean sus propias colecciones de música, y
            rearticulan textos que pueden contener varios modos de comunicación
            (palabra, música, imagen) al mismo tiempo.” (Dussel y Quevedo, 2010)
          </p>
          <p>
            Esto permite que los jóvenes utilicen otros modos de comunicar
            sentidos, que involucra su propia estética, visión, formas de
            comunicación y expresión e incorporaría otros saberes y vivencias de
            su vida cotidiana, valiosas en el proceso de enseñanza-aprendizaje.
            “A partir de esto, entendemos que se les estarían posibilitando
            nuevos modos de habitar la escuela.” (Schaefer, 2013)
          </p>
        </section>

        <section class="col-xs-12 col-md-6 col-lg-4">
          <img
            src="img/tecnologia.jpg"
            class="img-fluid"
            alt="maestro enseñando por medio de la computadora"
          />
        </section>
      </div>
    </div>

    <!-- TODO: SEGUNDA SECCIÓN DE LA PÁGINA -->

    <div class="container-fluid franja">
      <div class="row align-items-center">
        <section class="col-xs-12 col-md-6 col-lg-8">
          <h2>Tecnología Educativa</h2>
          <p>
            La tecnología educativa es "el espacio intelectual pedagógico cuyo
            objeto de estudio son los medios y las tecnologías de la información
            y la comunicación, en cuanto formas de representación, difusión y
            acceso al conocimiento y a la cultura en los distintos contextos
            educativos: escolaridad, educación no formal, educación informal,
            educación a distancia y educación superior".
          </p>
          <p>
            Realizar la aplicación de herramientas tecnológicas en ámbitos
            educativos es lo que lleva a ser a la tecnología educativa lo que es
            hoy, una realidad en cada colegio, escuela, universidad e
            institución del mundo.
          </p>
          <p>
            Siguiendo a Edith Litwin, se debe entender la tecnología educativa
            como el desarrollo de propuestas de acción basadas en disciplinas
            científicas referidas a las prácticas de enseñanza que, incorporando
            todos los medios a su alcance, dan cuenta de los fines de la
            educación en los contextos socio históricos que le otorgan
            significación.
          </p>
          <p>
            La Tecnología educativa proporciona al docente herramientas de
            planificación y desarrollo necesarias para llevar a cabo los
            procesos de enseñanza y aprendizaje, a través de recursos
            tecnológicos, con la finalidad de mejorarlos para maximizar el
            progreso de los objetivos educativos y buscar el éxito del
            aprendizaje.
          </p>
        </section>

        <section class="col-xs-12 col-md-6 col-lg-4">
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/MzaM-Adl0rU"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>
        </section>
      </div>
    </div>

    <!-- TODO: PIE DE PÁGINA -->

    <footer class="container-fluid">
      <div class="row align-items-center">
        <!-- TODO: PRIMERA COLUMNA - BARRA DE NAVEGACIÓN -->

        <div class="col-xs-12 col-md-4 col-lg-8">
          <nav class="navbar barra navbar-expand-lg">
            <div class="container justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    aria-current="page"
                    href="index.html"
                    >Inicio</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="programacion.html">Programación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="robotica.html">Robótica</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="impresion.html">Impresión 3D</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="iot.html">IoT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contacto.html">Contacto</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>

        <!-- TODO: SEGUNDA COLUMNA - DERECHOS -->
        <div class="col-xs-12 col-md-4 col-lg-2">
          <h6>Derechos Reservados</h6>
          <h6>nlcroiss &copy; 2021</h6>
        </div>

        <!-- TODO: TERCERA COLUMNA - BARRA REDES SOCIALES -->
        <div class="col-xs-12 col-md-4 col-lg-2 iconos">
          <a
            href="https://www.facebook.com"
            target="_blank"
            rel="noopener noreferrer"
            ><i class="bi bi-facebook"></i
          ></a>
          <a
            href="https://www.instagram.com"
            target="_blank"
            rel="noopener noreferrer"
          >
            <i class="bi bi-instagram"></i
          ></a>
          <a
            href="https://twitter.com"
            target="_blank"
            rel="noopener noreferrer"
          >
            <i class="bi bi-twitter"></i
          ></a>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
