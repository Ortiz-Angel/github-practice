<?php
include("conexion.php");
$libros = "SELECT * FROM titulos"
?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Libreria ITLA</title>
        <!-- Favicon-->
        <link  rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            table.dataTable thead {
                background: linear-gradient(to right, #0575E6, #00f260);
                color: white;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="libros.php">Libros</a></li>
                        <li class="nav-item"><a class="nav-link" href="autores.php">Autores</a></li>
                        <li class="nav-item "><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Listado de libros-->
        <h1 class="text-center">Libreria ITLA</h1>

        <h3 class="text-center">Acceda a nuestro catalogo</h3>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table id="tablaLibros" class="table-hover table-bordered table-primary table align-middle" style="width:100%">
                         <thead class="text-center">
                            <th>id-titulo</th>
                            <th>titulo</th>
                            <th>tipo</th>
                            <th>id-publicacion</th>
                            <th>precio</th>
                            <th>avance</th>
                            <th>total de ventas</th>
                            <th>notas</th>
                            <th>fecha de publicacion</th>
                            <th>contrato</th>
                         </thead>
                         <tbody>
                            <?php  $resultado = mysqli_query($conexion, $libros);
                            while($titulo=mysqli_fetch_assoc($resultado)){ ?>
                         <tr>
                                <td><?php echo $titulo['id_titulo']?></td>
                                <td><?php echo $titulo['titulo']?></td>
                                <td><?php echo $titulo['tipo']?></td>
                                <td><?php echo $titulo['id_pub']?></td>
                                <td><?php echo $titulo['precio']?></td>
                                <td><?php echo $titulo['avance']?></td>
                                <td><?php echo $titulo['total_ventas']?></td>
                                <td><?php echo $titulo['notas']?></td>
                                <td><?php echo $titulo['fecha_pub']?></td>
                                <td><?php echo $titulo['contrato']?></td>
                            </tr>
                             <?php  } mysqli_free_result($resultado); ?>


                         </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Locacion</h4>
                        <p class="lead mb-0">
                            Autopista 30 de mayo
                            <br />
                            Santo Domingo, DN
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">REDES</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Libreria ITLA</h4>
                        <p class="lead mb-0">
                            Su mejor libreria virtual
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; ITLA 2023, todos los derechos reservados</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
