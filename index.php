<?php $pg = "index";?>

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
    <link rel="shortcut icon" href="images/IK.png" />
    <title>Inicio</title>
</head>

<body id="inicio">
    <header>
    <?php include_once "menu.php" ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 text-center div-cohete">
                    <a href="proyectos.html"><img src="images/cohete.svg" class="cohete"></a>
                </div>
            </div>
        </div>
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center my-4 mt-sm-5 offset-sm-3 mb-3">
                        <p>Bienvenid@ a mi sitio web sobre inicio en Full Stack</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-4 mx-auto">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.html" class="btn-blanco shadow"> Conoce mis proyectos </a>
                </div>
            </div>
        </div>
    </main>
    <footer class=" container mt-auto" id="c">
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