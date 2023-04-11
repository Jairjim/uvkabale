<!DOCTYPE html>
<html>

<head>
    <title>
        Servicios|Kabale
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="servicesCSS.css">
    <link rel="icon" type="image/png" href="logo.png">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.0/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

<body>
    <header id="regreso">
        <div class="container">
            <div class="contenedor">
                <a class="btn btn-link btn-floating btn-lg m-1" href="http://www.linkedin.com/in/unidad-de-inspecci%C3%B3n-kabale-s-a-de-c-v-7b915a234" role="button" target="_blank">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.facebook.com/profile.php?id=100079046550116" role="button" data-mdb-ripple-color="dark" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://twitter.com/KabaleUi?t=AYX-oA3kvUYJiJ_hLvPbtA&s=08" role="button" data-mdb-ripple-color="dark" target="_blank">
                    <i class="bi bi-twitter"></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/uikabale/" role="button" data-mdb-ripple-color="dark" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://wa.me/message/ECFFKO55QMCEG1" role="button" data-mdb-ripple-color="dark" target="_blank">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="mailto:uni@kabale.com.mx" role="button" data-mdb-ripple-color="dark" target="_blank">
                    <i class="bi bi-envelope"></i>
                </a>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light azul scrolling-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand" href="https://uvkabale.com"><img src="logo.png" width="180" height="90"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
                <ul class="navbar-nav navbar-nav-scroll pull-right" style="max-height: 100px;">
                    <li class="nav-item ">
                        <a class="nav-link page" href="Nosotros"> Acerca de nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page" href="Servicios"> Servicios </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link contact" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> Contáctanos </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Breadcrum-->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://uvkabale.com"><i class="bi bi-house"></i></a></li>
                <li class="breadcrumb-item active"> <a href="Nosotros"> Acerca de Nosotros </a></li>
                <li class="breadcrumb-item active" aria-current="page"> Servicios </li>
            </ol>
        </nav>
    </div>

    <!--Todos los servicios desktop-->
    <div class="container-fluid" id="service">
        <h5 id="tiserve"> Todos nuestros Servicios </h5>
        <div class="servicess">
            <a  onclick="eliminar1()">
                <i class="fas fa-award"></i>
                <p id="base"> Inspección </p>
            </a>
            <a href="#base" onclick="eliminar2()">
                <i class="fa-solid fa-tag"></i>
                <p> Diseño y Evaluación <br>de Etiquetado </p>
            </a>
            <a href="#base" onclick="eliminar3()">
                <i class="fa-solid fa-globe"></i>
                <p> Tramites y Asesorías en Comercio Exterior </p>
            </a>
            <a href="#tiserve" onclick="eliminar4()">
                <i class="fa-solid fa-truck-plane"></i>
                <p> Logística de Distribución </p>
            </a>
            <a href="#base" onclick="eliminar5()">
                <i class="fa-solid fa-chalkboard-user"></i>
                <p> Capacitación </p>
            </a>
            <a href="#base">
                <i class="fa-solid fa-file"></i>
                <p> Nuestras Certificaciones </p>
            </a>
        </div>
    </div>

    <!--Version de escritorio inspeccion-->
    <div class="container-fluid info esconder" id="inspec-desk">
        <div class="card card-signin my-5 mx-auto">
            <div class="card-header">
                Inspección
                <a type="button" class="btn-close" onclick="eliminar1()"></a>
            </div>
            <div class="card-body">
                <p class="card-text">La inspección es la constatación ocular o comprobación mediante muestreo, medición, pruebas de laboratorio o examen de documentos, que se realiza para evaluar la conformidad con una Norma Oficial Mexicana (NOM) de un sistema sujeto a este
                    instrumento legal.</p>
                <h5 class="card-title">Constancia de conformidad</h5>
                <p class="card-text">Trámite que deriva en la emisión de un documento que avala el cumplimiento de origen con las normas oficiales mexicanas aplicables a la información comercial que el importador o fabricante nacional expresa en sus etiquetas, manuales y
                    garantías.
                </p>
                <h5 class="card-title">Dictamen de Cumplimiento</h5>
                <p class="card-text">Trámite que le permite al importador el ingreso de sus productos a territorio nacional para etiquetarlo un almacén general de depósito fiscal ,o en su domicilio particular antes de su comercialización, demostrando cumplimiento con las normas oficiales mexicanas aplicables.</p>

            </div>
        </div>
    </div>

    <!--Version de escritorio etiquetado-->
    <div class="container-fluid info esconder" id="etiquet-desk">
        <div class="card card-signin my-5 mx-auto">
            <div class="card-header">
                Diseño y Evaluación de Etiquetado
                <a type="button" class="btn-close" onclick="eliminar2()"></a>
            </div>
            <div class="card-body">
                <p class="card-text">Servicio enfocado a brindar una opinión técnica del grado de cumplimiento de sus etiquetadas con base en los requisitos normativos.</p>
                <p class="card-text">Mediante los procesos de Inspección de Información Comercial se brinda a los importadores, fabricantes y comercializadores, la certeza de que la información que se presenta en los empaques, instructivos, y garantías de sus productos, cumple
                    con las Normas Oficiales Mexicanas de Información Comercial establecidas.</p>
            </div>
        </div>
    </div>

    <!--Version de escritorio tramites-->
    <div class="container-fluid info esconder" id="tramite-desk">
        <div class="card card-signin my-5 mx-auto">
            <div class="card-header">
                Tramites Y Asesorias en Comercio Exterior
                <a type="button" class="btn-close" onclick="eliminar3()"></a>
            </div>
            <div class="card-body">
                <p class="card-text">Trámites y Gestorías relacionados con el cumplimiento de las Regulaciones y Restricciones No Arancelarias ante las dependencias Gubernamentales y Privadas que correspondan. Planeación door to door en operaciones de importación y exportación, auditorías internas en operaciones de Comercio Exterior. </p>
            </div>
        </div>
    </div>

    <!--Version de escritorio logistica-->
    <div class="container-fluid info esconder" id="logis-desk">
        <div class="card card-signin my-5 mx-auto">
            <div class="card-header">
                Logística de Distribución
                <a type="button" class="btn-close" onclick="eliminar4()"></a>
            </div>
            <div class="card-body">
                <p class="card-text">Estrategias para la Transportación Marítima, Aérea y Terrestre Internacional y Nacional.</p>
            </div>
        </div>
    </div>

    <!--Version de escritorio capacitacion-->
    <div class="container-fluid info esconder" id="capacita-desk">
        <div class="card card-signin my-5 mx-auto">
            <div class="card-header">
                Capacitación
                <a type="button" class="btn-close" onclick="eliminar5()"></a>
            </div>
            <div class="card-body">
                <p class="card-text">Kabale ofrece el servicio de Capacitación de las NOM acreditadas dentro de la Unidad de Inspección, así como la Norma ISO NMX-EC-17020-IMNC-2014. El proceso de crecimiento y desarrollo es importante dentro de su organización, creemos que
                    uno de los puntos más relevantes a desarrollar es tener una adecuada capacitación de sus empleados y/o colaboradores, especialmente en áreas como Servicio al Cliente y cargos operativos.</p>
            </div>
        </div>
    </div>

    <!--todos los servicios-->
    <section class="container-fluid fondo" id="servicios-full">
        <h5> Todos nuestros Servicios </h5>
        <div class="servicios">
            <a href="#first">
                <div><i class="fas fa-award"></i></div>
                <div> Inspección </div>
            </a>
            <a href="#second">
                <div><i class="fa-solid fa-tag"></i></div>
                <div> Diseño y Evaluación de Etiquetado </div>
            </a>
            <a href="#third">
                <div><i class="fa-solid fa-globe"></i></div>
                <div> Tramites y Asesorías en Comercio Exterior </div>
            </a>
            <a href="#four">
                <div><i class="fa-solid fa-truck-plane"></i></div>
                <div> Logística de Distribución </div>
            </a>
            <a href="#movil-logi" id="first">
                <div><i class="fa-solid fa-chalkboard-user"></i></div>
                <div> Capacitación </div>
            </a>
            <a href="#five">
                <div><i class="fa-solid fa-file"></i></div>
                <div> Nuestras Certificaciones </div>
            </a>
        </div>
    </section>

    <!--Version movil inspeccion-->
    <div class="inspeccion-movil " id="movil-inspeccion">
        <div class="container ">
            <h5> <i class="fas fa-award"></i> Inspección </h5>
            <div class="servicios-inspeccion ">
                <div class="container ">
                    <div class="txto ">La inspección es la constatación ocular o comprobación mediante muestreo, medición, pruebas de laboratorio o examen de documentos, que se realiza para evaluar la conformidad con una Norma Oficial Mexicana (NOM) de un sistema sujeto
                        a este instrumento legal.
                    </div>
                </div>
                <div class="container ">
                    <div class="title "> Constancia de Conformidad </div>
                    <div class="txto ">Trámite que deriva en la emisión de un documento que avala el cumplimiento de origen con las normas oficiales mexicanas aplicables a la información comercial que el importador o fabricante nacional expresa en sus etiquetas, manuales
                        y garantías.</div>
                </div>
                <div class="container">
                    <div class="title" id="second"> Dictamen de Cumplimiento </div>
                    <div class="txto ">Trámite que le permite al importador el ingreso de sus productos a territorio nacional para etiquetarlo en su almacén o bodega, antes de su comercialización, demostrando cumplimiento con las normas oficiales mexicanas aplicables.</div>
                </div>
            </div>
        </div>
    </div>

    <!--Version movil etiquetado-->
    <div class="etiquetado-movil " id="movil-etiquetado">
        <div class="container ">
            <h5><i class="fa-solid fa-tag"></i> Diseño y Evaluación de Etiquetado</h5>
            <div class="servicios-inspeccion ">
                <div class="container ">
                    <div class="txto ">Servicio enfocado a brindar una opinión técnica del grado de cumplimiento de sus etiquetadas con base en los requisitos normativos.
                    </div>
                </div>
                <div class="container ">
                    <div class="txto" id="third">Mediante los procesos de Inspección de Información Comercial se brinda a los importadores, fabricantes y comercializadores, la certeza de que la información que se presenta en los empaques, instructivos, y garantías de sus productos,
                        cumple con las Normas Oficiales Mexicanas de Información Comercial establecidas.</div>
                </div>
            </div>
        </div>
    </div>

    <!--Version movil tramites-->
    <div class="tramites-movil " id="movil-tramites">
        <div class="container ">
            <h5><i class="fa-solid fa-globe"></i> Tramites y Asesorias en Comercio Exterior</h5>
            <div class="servicios-inspeccion ">
                <div class="container ">
                    <div class="txto " id="four">Trámites y Gestorías relacionados con el cumplimiento de las Regulaciones y Restricciones No Arancelarias ante las dependencias Gubernamentales y Privadas que correspondan. Planeación door to door en operaciones de importación y exportación, auditorías internas en operaciones de Comercio Exterior. </div>
                </div>
            </div>
        </div>
    </div>

    <!--Version movil logistica-->
    <div class="logi-movil " id="movil-logi">
        <div class="container ">
            <h5> <i class="fa-solid fa-truck-plane"></i> Logistica de Distribución </h5>
            <div class="servicios-inspeccion ">
                <div class="container ">
                    <div class="txto ">Estrategias para la Transportación Marítima, Aérea y Terrestre Internacional y Nacional.
                    </div>
                </div>
            </div>
            <h5><i class="fa-solid fa-chalkboard-user"></i>Capacitación</h5>
            <div class="servicios-inspeccion ">
                <div class="container ">
                    <div class="txto">Kabale ofrece el servicio de Capacitación de las NOM acreditadas dentro de la Unidad de Inspección, así como la Norma ISO NMX-EC-17020-IMNC-2014. El proceso de crecimiento y desarrollo es importante dentro de su organización, creemos
                        que uno de los puntos más relevantes a desarrollar es tener una adecuada capacitación de sus empleados y/o colaboradores, especialmente en áreas como Servicio al Cliente y cargos operativos.
                    </div>
                </div>
            </div>
        </div>
        <div id="five"></div>
    </div>

    <!--Certificaciones-->
    <div class="container certificaciones ">
        <div class="row justify-content-center ">
            Nuestras certificaciones
        </div>
        <section class="cards ">
            <article class="card card--1 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-004-SE-2021 </span>
                    <h3 class="card__title ">Etiquetado de Productos Textiles</h3>
                </div>
            </article>
            <article class="card card--2 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-015-SCFI-2007 </span>
                    <h3 class="card__title ">Etiquetado de Juguetes</h3>
                </div>
            </article>
            <article class="card card--3 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-020-SCFI-1997 </span>
                    <h3 class="card__title ">Etiquetado de cueros y pieles</h3>
                </div>
            </article>
        </section>
        <section class="cards ">
            <article class="card card--4 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-024-SCFI-2013 </span>
                    <h3 class="card__title ">Etiquetado de productos electrónicos, eléctricos y electrodomésticos.</h3>
                </div>
            </article>
            <article class="card card--5 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-050-SCFI-2004 </span>
                    <h3 class="card__title ">Etiquetado general de productos.</h3>
                </div>
            </article>
            <article class="card card--6 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-051-SCFI/SSA1-2010 </span>
                    <h3 class="card__title "> Etiquetado de alimentos y bebidas no alcohólicas preenvasadas</h3>
                </div>
            </article>
        </section>
        <section class="cards ">
            <article class="card card--7 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-116-SCFI-2018 </span>
                    <h3 class="card__title ">Aceites lubricantes para motores a gasolina y diésel</h3>
                </div>
            </article>
            <article class="card card--8 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-141-SSA1/SCFI-2012 </span>
                    <h3 class="card__title ">Etiquetado para productos cosmeticos preenvasados</h3>
                </div>
            </article>
            <article class="card card--9 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-142-SSA1/SCFI-2014 </span>
                    <h3 class="card__title "> Etiquetado de bebidas Alcohólicas</h3>
                </div>
            </article>
        </section>
        <section class="cards ">
            <article class="card card--10 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-186-SSA1/SCFI-2013 </span>
                    <h3 class="card__title "> Etiquetado de Cacao, chocolate y productos similares, y derivados del cacao
                    </h3>
                </div>
            </article>
            <article class="card card--11 ">
                <div class="card__img "></div>
                <a href="Servicios " class="card_link ">
                    <div class="card__img--hover "></div>
                </a>
                <div class="card__info ">
                    <span class="card__category "> NOM-189-SSA1/SCFI-2018 </span>
                    <h3 class="card__title "> Etiquetado y envasado para productos de aseo de uso doméstico.</h3>
                </div>
            </article>
        </section>
    </div>

    <!--Offcanvas-->
    <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="text-white" id="offcanvasRightLabel"> Contáctanos </h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <p class="text-white text-center"> Puedes comunicarte con nosotros al
            <a target="_blank" href="https://wa.me/message/ECFFKO55QMCEG1">55 3245 9292</a> o bien llenar el siguiente formulario y uno de nuestros operadores se pondrá encontacto contigo en breve</p>

        <div class="offcanvas-body position-absolute start-50 translate-middle ">
            <div class="formulario ">
                <div class="card-header text-center ">
                    Información de Contacto
                </div>
                <div class="modal-body ">
                    <form action=" " method="post">
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="nombre" type="text " class="form-control " placeholder="name ">
                            <label for="nombre"> Nombre Completo </label>
                        </div>
                        <br>
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="email" type="email " class="form-control " placeholder="email ">
                            <label for="email"> E-mail </label>
                        </div>
                        <br>
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="empresa" type="empresa " class="form-control " placeholder="company ">
                            <label for="empresa"> Compañia </label>
                        </div>
                        <br>
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="tel" type="tel " class="form-control " placeholder="tel " maxlength="10" required>
                            <label for="tel"> Numero de teléfono </label>
                        </div>
                        <div class="modal-footer ">
                            <button type="submit " class="btn btn-primary "> Enviar </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Pie de pagina-->
    <footer class="text-center text-white " style="background-color: #f1f1f1; ">
        <div class="container pt-4 ">
            <section class="mb-4 ">
                <!-- Redes Sociales -->
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 " href="https://wa.me/message/ECFFKO55QMCEG1" role="button " data-mdb-ripple-color="dark ">
                    <i class="bi bi-whatsapp "></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 " target="_blank " href="https://twitter.com/KabaleUi?t=AYX-oA3kvUYJiJ_hLvPbtA&s=08 " role="button " data-mdb-ripple-color="dark ">
                    <i class="bi bi-twitter "></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 " href="https://www.instagram.com/uikabale/ " role="button " data-mdb-ripple-color="dark ">
                    <i class="bi bi-instagram "></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 " href="http://www.linkedin.com/in/unidad-de-inspecci%C3%B3n-kabale-s-a-de-c-v-7b915a234 " role="button " data-mdb-ripple-color="dark ">
                    <i class="bi bi-linkedin "></i>
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1 " href="https://www.facebook.com/profile.php?id=100079046550116" role="button " data-mdb-ripple-color="dark ">
                    <i class="bi bi-facebook "></i>
                </a>
            </section>
            <div class="mb-4">
                <a href="AVISOPRIVACIDAD_KABALE.pdf" target="_blank">Aviso de Privacidad</a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center text-dark p-3 " style="background-color: rgba(0, 0, 0, 0.2); ">
            © 2022 Copyright:
            <a class="text-dark " href="https://mdbootstrap.com/ "> uvKabale.com </a>
        </div>
        <!-- Copyright -->
    </footer>

    <?php

    error_reporting(E_ERROR | E_PARSE);
    $conexion = mysqli_connect("localhost", "u899500393_jairjimarez200", "JairjimUNI21", "u899500393_Cliente");
    if (!$conexion){
        die("Connection failed: " . mysqli_connect_error());
    }
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $empresa = $_POST["empresa"];
    $tel = $_POST["tel"];
    if(isset($nombre)){
    $query = "insert into usuario(Nombre, Correo, Empresa, Telefono) values('$nombre', '$email', '$empresa', '$tel')";
        if (mysqli_query($conexion, $query)) {
            echo "<script type='text/javascript'>
                    window.location.href='services.php'
                  </script>";
        }else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
    }
    mysqli_close($conexion);

    ?>

    <!-- JQuery -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js "></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js "></script>
    <script>
        function eliminar1() {
            var inspeccion = document.getElementById("inspec-desk");
            inspeccion.classList.toggle("esconder");
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function eliminar2() {
            var etiquetado = document.getElementById("etiquet-desk");
            etiquetado.classList.toggle("esconder");
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function eliminar3() {
            var etiquetado = document.getElementById("tramite-desk");
            etiquetado.classList.toggle("esconder")
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function eliminar4() {
            var logistica = document.getElementById("logis-desk");
            logistica.classList.toggle("esconder");
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function eliminar5() {
            var capacitacion = document.getElementById("capacita-desk");
            capacitacion.classList.toggle("esconder");
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
        
        function bajar() {
            window.scrollTo({top: 100, behavior: 'smooth'});
        }
        
    </script>
</body>

</html>