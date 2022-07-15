<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="images/IK.png"/>
    <title>Contacto</title>
</head>

<body id="contacto">
    <header>
        <nav class="navbar navbar-expand-md mb-4">
          <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 " href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 " href="sobre-mi.html">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 " href="proyectos.html">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 py-1 active" href="contacto.html">Contacto</a>
                    </li>
                </ul>
                <div class="d-inline">
                    <a href="images/CV Ivan Dario Kolarik (1).pdf" target="_blank" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                </div>
            </div>
        </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
                    <div class class="col-12">
                        <h1>Contacto</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 py-4">
                    <p>Te invito a que me contactes enviadome un Mensaje o bien por Whatsapp.</p>
                </div>
                <div class="col-sm-6 col-12 py-4" id="form">
                    <form action="" method="POST"></form>
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="text" name="txtTel" id="txtTel" placeholder="Telefono/Whatsapp"
                            class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu mensaje"
                            class="form-control"></textarea>
                    </div>
                    <div class="pb-3">
                        <button name="btnEnviar" id="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </main>
    <footer class=" container mt-auto pb-4" id="c">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://www.linkedin.com/in/ivan-kolarik-15036a235" target="_blank"
                    title="Agreganos en Linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="https://github.com/kolariki/portfolio" target="_blank" title="Github">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://campus.depcsuite.com" target="_blank"> DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="https://mail.google.com" target="_blank">ivankolariki1990@gmail.com</a>
            </div>
        </div>
        </div>
    </footer>
    <div class="whatsapp" id="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=3644389712" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>
</body>

</html>