<?php
require_once('./../controllers/CatalogoController.php');

if (isset($_SESSION["user_id"])) {
    $catalogoController = new CatalogoController();
    $products = $catalogoController->getCatalogos();
}else{
    echo "<script>
                alert('Debe de loguearse antes de entrar al Catálogo');
                window.location= 'login.php';
		</script>";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link href="../public/img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon" />
    <meta charset="UTF-8">
    <title>Mexihat</title>
    <meta name="viewport"
        content="widht=device-widht, user-scalable=yes, initial-scale=1.0, maximun scale=3.0, minimun-scale=1.0">

    <link rel="stylesheet" href="../public/css/Estilo.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Pacifico" rel="stylesheet">

    <link href="https://file.myfontastic.com/G6zCtZr4Fy7AfsRa6YYzdG/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CSS3 Lightbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
    <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails, navigate" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../public/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/style3.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

</head>

<body style="background-color:#4C0324;">
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">MexiHat</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <span class="icon-phone">477 592 86 46</span>
                </p>
                <p class="main-header__contactInfo__address">
                    <span class="icon-location"> León, Guanajuato.</span>
                </p>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-linea" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item"><a href="./../index.php" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="nosotros.php" class="menu__link">Nosotros</a></li>
                <li class="menu__item"><a href="catalogo.php" class="menu__link menu__link--select">Catálogo</a></li>
                <li class="menu__item"><a href="diseña.php" class="menu__link">Diseña</a></li>
            </ul>

            <ul class="social-buttons" id="demo2">

                <li>
                    <a href="https://www.facebook.com/MexiHat-Bonitos-sombreros-artesanales-102472884698486/"
                        class="brandico-facebook"><img src="../public/../public/img/logos/looface.png"></a>
                </li>
                <li>
                    <a href="https://instagram.com/mexihat?utm_medium=copy_link" class="brandico-instagram"><img
                            src="../public/../public/img/logos/logo ins.png"></a>
                </li>
                <li>
                    <a href="login.php" class="brandico-usuario"><img
                            src="../public/../public/img/logos/usuario.png"></a>
                </li>
            </ul>



        </div>
    </nav>
    <section class="Encabezado">
        <ul>
            <li><img src="../public/img/encabezado/1.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/2.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/3.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/4.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/5.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/6.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/8.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/10.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/9.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/11.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/12.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/13.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/14.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/15.jpeg" alt="" class="sombrero__img"></li>
            <li><img src="../public/img/encabezado/16.jpeg" alt="" class="sombrero__img"></li>
        </ul>
        <div class="Encabezado__content">Bonitos sombreros artesanales</div>
    </section>
    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">Catálogo</h2>
            </div>
        </section>
        <section>
            <div class="container container--flex">

                <ul class="lb-album">
                    <li>
                        <a href="#image-1">
                            <img src="../public/img/catalogo/Animal1.png" id="Animal" alt="image01">
                            <span>Fénix</span>
                        </a>
                        <div class="lb-overlay" id="image-1">
                            <center>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="../public/img/catalogo/Animal1.png">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../public/img/catalogo/Animal2.png">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </center>
                            <center>
                                <div>
                                    <?php
                                        $m3_key = array_search('Mo003', array_column($products, 'id_modelo'));
                                        $m3 = $products[$m3_key];
                                    ?>
                                    <h3>Precio <span> <?php echo $m3['nombre_M'] . ' ' . $m3['id_modelo']; ?> </span></h3>
                                    <p>Menudeo $<?php echo $m3['precioMen_M']; ?>
                                        Mayoreo $<?php echo $m3['precioMay_M']; ?>
                                    </p>
                                    <a href="pedido.php?vari=<?php echo $m3['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                                </div>
                            </center>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-2">
                            <img src="../public/img/catalogo/Pluma1.png" id="Pluma" alt="image02">
                            <span>Pluma</span>
                        </a>
                        <div class="lb-overlay" id="image-2">
                            <center><img src="../public/img/catalogo/Pluma1.png" alt="image02" /></center>
                            <div>
                            <?php
                                $m4_key = array_search('Mo004', array_column($products, 'id_modelo'));
                                $m4 = $products[$m4_key];
                            ?>
                            <h3>Precio <span> <?php echo $m4['nombre_M'] . ' ' . $m4['id_modelo']; ?> </span></h3>
                            <p>Menudeo $<?php echo $m4['precioMen_M']; ?>
                                Mayoreo $<?php echo $m4['precioMay_M']; ?>
                            </p>
                            <a href="pedido.php?vari=<?php echo $m4['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-3">
                            <img src="../public/img/catalogo/Colibri1.png" id="Colibri" alt="image03">
                            <span>Colibrí Huichol</span>
                        </a>
                        <div class="lb-overlay" id="image-3">
                            <center><img src="../public/img/catalogo/Colibri1.png" alt="image03" /></center>
                            <div>
                                <?php
                                    $m5_key = array_search('Mo005', array_column($products, 'id_modelo'));
                                    $m5 = $products[$m5_key];
                                ?>
                                <h3>Precio <span> <?php echo $m5['nombre_M'] . ' ' . $m5['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m5['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m5['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m5['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-4">
                            <img src="../public/img/catalogo/Especial1.png" id="Especial" alt="image04">
                            <span>Pirámide</span>
                        </a>
                        <div class="lb-overlay" id="image-4">
                            <center>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Especial1.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Especial2.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Especial3.png"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </center>
                            <div>
                                <?php
                                    $m6_key = array_search('Mo006', array_column($products, 'id_modelo'));
                                    $m6 = $products[$m6_key];
                                ?>
                                <h3>Precio <span> <?php echo $m6['nombre_M'] . ' ' . $m6['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m6['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m6['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m6['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-5">
                            <img src="../public/img/catalogo/Flor1.png" id="Flor" alt="image05">
                            <span>Girasol</span>
                        </a>
                        <div class="lb-overlay" id="image-5">
                            <center>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Flor1.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Flor14.png"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </center>
                            <div>
                                <?php
                                    $m2_key = array_search('Mo002', array_column($products, 'id_modelo'));
                                    $m2 = $products[$m2_key];
                                ?>
                                <h3>Precio <span> <?php echo $m2['nombre_M'] . ' ' . $m2['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m2['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m2['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m2['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-6">
                            <img src="../public/img/catalogo/Mandala2.png" id="Flor" alt="image06">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-6">
                            <center>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Mandala2.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Mandala11.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Mandala12.png"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </center>
                            <div>
                                <?php
                                    $m8_key = array_search('Mo008', array_column($products, 'id_modelo'));
                                    $m8 = $products[$m8_key];
                                ?>
                                <h3>Precio <span> <?php echo $m8['nombre_M'] . ' ' . $m8['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m8['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m8['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m8['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-7">
                            <img src="../public/img/catalogo/Mariposa1.png" id="Mariposa" alt="image07">
                            <span>Mariposa</span>
                        </a>
                        <div class="lb-overlay" id="image-7">
                            <center><img src="../public/img/catalogo/Mariposa1.png" alt="image07" /></center>
                            <div>
                                <?php
                                    $m1_key = array_search('Mo001', array_column($products, 'id_modelo'));
                                    $m1 = $products[$m1_key];
                                ?>
                                <h3>Precio <span> <?php echo $m1['nombre_M'] . ' ' . $m1['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m1['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m1['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m1['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-8">
                            <img src="../public/img/catalogo/Vaquero1.png" id="Vaquero" alt="image08">
                            <span>Rodeo Vaquero</span>
                        </a>
                        <div class="lb-overlay" id="image-8">
                            <center><img src="../public/img/catalogo/Vaquero1.png" alt="image08" /></center>
                            <div>
                                <?php
                                    $m9_key = array_search('Mo009', array_column($products, 'id_modelo'));
                                    $m9 = $products[$m9_key];
                                ?>
                                <h3>Precio <span> <?php echo $m9['nombre_M'] . ' ' . $m9['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m9['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m9['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m9['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-9">
                            <img src="../public/img/catalogo/Animal3.png" id="Animal" alt="image09">
                            <span>Tiburón</span>
                        </a>
                        <div class="lb-overlay" id="image-9">
                            <center><img src="../public/img/catalogo/Animal3.png" alt="image09" /></center>
                            <div>
                                <?php
                                    $m10_key = array_search('Mo010', array_column($products, 'id_modelo'));
                                    $m10 = $products[$m10_key];
                                ?>
                                <h3>Precio <span> <?php echo $m10['nombre_M'] . ' ' . $m10['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m10['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m10['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m10['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            </center>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-10">
                            <img src="../public/img/catalogo/Pluma2.png" id="Pluma" alt="image10">
                            <span>Pluma Arcoiris</span>
                        </a>
                        <div class="lb-overlay" id="image-10">
                            <center><img src="../public/img/catalogo/Pluma2.png" alt="image10" /></center>
                            <div>
                                <?php
                                    $m11_key = array_search('Mo011', array_column($products, 'id_modelo'));
                                    $m11 = $products[$m11_key];
                                ?>
                                <h3>Precio <span> <?php echo $m11['nombre_M'] . ' ' . $m11['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m11['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m11['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m11['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-11">
                            <img src="../public/img/catalogo/Colibri2.png" id="Colibri" alt="image11">
                            <span>Colibrí</span>
                        </a>
                        <div class="lb-overlay" id="image-11">
                            <center><img src="../public/img/catalogo/Colibri2.png" alt="image11" /></center>
                            <div>
                                <?php
                                    $m12_key = array_search('Mo012', array_column($products, 'id_modelo'));
                                    $m12 = $products[$m12_key];
                                ?>
                                <h3>Precio <span> <?php echo $m12['nombre_M'] . ' ' . $m12['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m12['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m12['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m12['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-12">
                            <img src="../public/img/catalogo/Especial4.png" id="Especial" alt="image12">
                            <span>Quetzalcoatl</span>
                        </a>
                        <div class="lb-overlay" id="image-12">
                            <center>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Especial4.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Especial5.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Especial6.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Especial7.png"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </center>
                            <div>
                            <?php
                                $m13_key = array_search('Mo013', array_column($products, 'id_modelo'));
                                $m13 = $products[$m13_key];
                            ?>
                            <h3>Precio <span> <?php echo $m13['nombre_M'] . ' ' . $m13['id_modelo']; ?> </span></h3>
                            <p>Menudeo $<?php echo $m13['precioMen_M']; ?>
                                Mayoreo $<?php echo $m13['precioMay_M']; ?>
                            </p>
                            <a href="pedido.php?vari=<?php echo $m13['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-13">
                            <img src="../public/img/catalogo/Flor2.png" id="Flor" alt="image13">
                            <span>Flor</span>
                        </a>
                        <div class="lb-overlay" id="image-13">
                            <center><img src="../public/img/catalogo/Flor2.png" alt="image13" /></center>
                            <div>
                                <?php
                                    $m14_key = array_search('Mo014', array_column($products, 'id_modelo'));
                                    $m14 = $products[$m14_key];
                                ?>
                                <h3>Precio <span> <?php echo $m14['nombre_M'] . ' ' . $m14['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m14['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m14['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m14['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-14">
                            <img src="../public/img/catalogo/Mandala3.png" id="Mandala" alt="image14">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-14">
                            <center>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Mandala3.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Mandala9.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Mandala10.png"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </center>
                            <div>
                                <?php
                                    $m15_key = array_search('Mo015', array_column($products, 'id_modelo'));
                                    $m15 = $products[$m15_key];
                                ?>
                                <h3>Precio <span> <?php echo $m15['nombre_M'] . ' ' . $m15['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m15['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m15['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m15['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-15">
                            <img src="../public/img/catalogo/Mariposa2.png" id="Mariposa" alt="image15">
                            <span>Mariposa</span>
                        </a>
                        <div class="lb-overlay" id="image-15">
                            <center><img src="../public/img/catalogo/Mariposa2.png" alt="image015" /></center>
                            <div>
                                <?php
                                    $m16_key = array_search('Mo016', array_column($products, 'id_modelo'));
                                    $m16 = $products[$m16_key];
                                ?>
                                <h3>Precio <span> <?php echo $m16['nombre_M'] . ' ' . $m16['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m16['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m16['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m16['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-16">
                            <img src="../public/img/catalogo/Vaquero2.png" id="Vaquero" alt="image16">
                            <span>Rodeo</span>
                        </a>
                        <div class="lb-overlay" id="image-16">
                            <center><img src="../public/img/catalogo/Vaquero2.png" alt="image16" /></center>
                            <div>
                                <?php
                                    $m17_key = array_search('Mo017', array_column($products, 'id_modelo'));
                                    $m17 = $products[$m17_key];
                                ?>
                                <h3>Precio <span> <?php echo $m17['nombre_M'] . ' ' . $m17['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m17['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m17['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m17['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-17">
                            <img src="../public/img/catalogo/Animal4.png" id="Animal" alt="image17">
                            <span>Xolo</span>
                        </a>
                        <div class="lb-overlay" id="image-17">
                            <center><img src="../public/img/catalogo/Animal4.png" alt="image17" /></center>
                            <div>
                                <?php
                                    $m18_key = array_search('Mo018', array_column($products, 'id_modelo'));
                                    $m18 = $products[$m18_key];
                                ?>
                                <h3>Precio <span> <?php echo $m18['nombre_M'] . ' ' . $m18['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m18['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m18['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m18['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-18">
                            <img src="../public/img/catalogo/Colibri3.png" id="Colibri" alt="image18">
                            <span>Colibrí</span>
                        </a>
                        <div class="lb-overlay" id="image-18">
                            <center>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Colibri3.png"></div>
                                        <div class="swiper-slide"><img src="../public/img/catalogo/Colibri6.png"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <!-- Swiper JS -->
                                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </center>
                            <div>
                                <?php
                                    $m19_key = array_search('Mo019', array_column($products, 'id_modelo'));
                                    $m19 = $products[$m19_key];
                                ?>
                                <h3>Precio <span> <?php echo $m19['nombre_M'] . ' ' . $m19['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m19['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m19['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m19['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-19">
                            <img src="../public/img/catalogo/Especial8.png" id="Especial" alt="image19">
                            <span>Muñeca</span>
                        </a>
                        <div class="lb-overlay" id="image-19">
                            <center><img src="../public/img/catalogo/Especial8.png" alt="image19" /></center>
                            <div>
                                <?php
                                    $m20_key = array_search('Mo020', array_column($products, 'id_modelo'));
                                    $m20 = $products[$m20_key];
                                ?>
                                <h3>Precio <span> <?php echo $m20['nombre_M'] . ' ' . $m20['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m20['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m20['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m20['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-20">
                            <img src="../public/img/catalogo/Especial11.png" id="Especial" alt="image20">
                            <span>Arte</span>
                        </a>
                        <div class="lb-overlay" id="image-20">
                            <center><img src="../public/img/catalogo/Especial11.png" alt="image20" /></center>
                            <div>
                                <?php
                                    $m21_key = array_search('Mo021', array_column($products, 'id_modelo'));
                                    $m21 = $products[$m21_key];
                                ?>
                                <h3>Precio <span> <?php echo $m21['nombre_M'] . ' ' . $m21['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m21['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m21['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m21['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-21">
                            <img src="../public/img/catalogo/Animal5.png" id="Animal" alt="image21">
                            <span>Unicornio</span>
                        </a>
                        <div class="lb-overlay" id="image-21">
                            <center><img src="../public/img/catalogo/Animal5.png" alt="image21" /></center>
                            <div>
                                <?php
                                    $m22_key = array_search('Mo022', array_column($products, 'id_modelo'));
                                    $m22 = $products[$m22_key];
                                ?>
                                <h3>Precio <span> <?php echo $m22['nombre_M'] . ' ' . $m22['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m22['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m22['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m22['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-22">
                            <img src="../public/img/catalogo/Especial14.png" id="Especial" alt="image22">
                            <span>Princesa</span>
                        </a>
                        <div class="lb-overlay" id="image-22">
                            <center><img src="../public/img/catalogo/Especial14.png" alt="image22" /></center>
                            <div>
                                <?php
                                    $m23_key = array_search('Mo023', array_column($products, 'id_modelo'));
                                    $m23 = $products[$m23_key];
                                ?>
                                <h3>Precio <span> <?php echo $m23['nombre_M'] . ' ' . $m23['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m23['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m23['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m23['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-23">
                            <img src="../public/img/catalogo/Especial15.png" id="Especial" alt="image23">
                            <span>Personaje</span>
                        </a>
                        <div class="lb-overlay" id="image-23">
                            <center><img src="../public/img/catalogo/Especial15.png" alt="image23" /></center>
                            <div>
                                <?php
                                    $m24_key = array_search('Mo024', array_column($products, 'id_modelo'));
                                    $m24 = $products[$m24_key];
                                ?>
                                <h3>Precio <span> <?php echo $m24['nombre_M'] . ' ' . $m24['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m24['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m24['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m24['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-24">
                            <img src="../public/img/catalogo/Flor3.png" id="Flor" alt="image24">
                            <span>Flor</span>
                        </a>
                        <div class="lb-overlay" id="image-24">
                            <center><img src="../public/img/catalogo/Flor3.png" alt="image24" /></center>
                            <div>
                                <?php
                                    $m25_key = array_search('Mo025', array_column($products, 'id_modelo'));
                                    $m25 = $products[$m25_key];
                                ?>
                                <h3>Precio <span> <?php echo $m25['nombre_M'] . ' ' . $m25['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m25['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m25['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m25['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-25">
                            <img src="../public/img/catalogo/Flor7.png" id="Flor" alt="image25">
                            <span>Alcatraz</span>
                        </a>
                        <div class="lb-overlay" id="image-25">
                            <center><img src="../public/img/catalogo/Flor7.png" alt="image25" /></center>
                            <div>
                                <?php
                                    $m26_key = array_search('Mo026', array_column($products, 'id_modelo'));
                                    $m26 = $products[$m26_key];
                                ?>
                                <h3>Precio <span> <?php echo $m26['nombre_M'] . ' ' . $m26['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m26['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m26['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m26['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-26">
                            <img src="../public/img/catalogo/Flor8.png" id="Flor" alt="image26">
                            <span>Flores</span>
                        </a>
                        <div class="lb-overlay" id="image-26">
                            <center><img src="../public/img/catalogo/Flor8.png" alt="image26" /></center>
                            <div>
                                <?php
                                    $m27_key = array_search('Mo027', array_column($products, 'id_modelo'));
                                    $m27 = $products[$m27_key];
                                ?>
                                <h3>Precio <span> <?php echo $m27['nombre_M'] . ' ' . $m27['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m27['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m27['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m27['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-27">
                            <img src="../public/img/catalogo/Pluma3.png" id="Pluma" alt="image27">
                            <span>Pluma</span>
                        </a>
                        <div class="lb-overlay" id="image-27">
                            <center><img src="../public/img/catalogo/Pluma3.png" alt="image27" /></center>
                            <div>
                                <?php
                                    $m28_key = array_search('Mo028', array_column($products, 'id_modelo'));
                                    $m28 = $products[$m28_key];
                                ?>
                                <h3>Precio <span> <?php echo $m28['nombre_M'] . ' ' . $m28['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m28['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m28['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m28['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-28">
                            <img src="../public/img/catalogo/Mariposa3.png" id="Mariposa" alt="image28">
                            <span>Mariposa</span>
                        </a>
                        <div class="lb-overlay" id="image-28">
                            <center><img src="../public/img/catalogo/Mariposa3.png" alt="image28" /></center>
                            <div>
                                <?php
                                    $m29_key = array_search('Mo029', array_column($products, 'id_modelo'));
                                    $m29 = $products[$m29_key];
                                ?>
                                <h3>Precio <span> <?php echo $m29['nombre_M'] . ' ' . $m29['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m29['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m29['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m29['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-29">
                            <img src="../public/img/catalogo/Pluma4.png" id="Pluma" alt="image29">
                            <span>Pluma</span>
                        </a>
                        <div class="lb-overlay" id="image-29">
                            <center><img src="../public/img/catalogo/Pluma4.png" alt="image29" /></center>
                            <div>
                                <?php
                                    $m30_key = array_search('Mo030', array_column($products, 'id_modelo'));
                                    $m30 = $products[$m30_key];
                                ?>
                                <h3>Precio <span> <?php echo $m30['nombre_M'] . ' ' . $m30['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m30['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m30['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m30['id_modelo']; ?>" class="lb-comprar">Comprar</a>
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                    <li>
                        <a href="#image-30">
                            <img src="../public/img/catalogo/Mandala4.png" id="Mandala" alt="image30">
                            <span>Mandala</span>
                        </a>
                        <div class="lb-overlay" id="image-30">
                            <center><img src="../public/img/catalogo/Mandala4.png" alt="image30" /></center>
                            <div>
                                <?php
                                    $m31_key = array_search('Mo031', array_column($products, 'id_modelo'));
                                    $m31 = $products[$m31_key];
                                ?>
                                <h3>Precio <span> <?php echo $m31['nombre_M'] . ' ' . $m31['id_modelo']; ?> </span></h3>
                                <p>Menudeo $<?php echo $m31['precioMen_M']; ?>
                                    Mayoreo $<?php echo $m31['precioMay_M']; ?>
                                </p>
                                <a href="pedido.php?vari=<?php echo $m31['id_modelo']; ?>" class="lb-comprar">Comprar
                            </div>
                            <a href="#page" class="lb-close">X Cerrar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    <footer class="main-footer">
        <div class="container container--flex">
            <div class="column column--33">
                <h2 class="column__title">¿Por que visitarnos?</h2>
                <p class="column__txt">Te ofrecemos una extensa variedad de lindos diseños de sombreros pintados a mano
                </p>
            </div>
            <div class="column column--33">
                <h2 class="column__title">Contactanos</h2>
                <p class="column__txt">Telefono: 477 592 86 46</p>
                <p class="column__txt">mexihatleon@gmail.com</p>
            </div>
            <div class="column column--33">
                <h2 class="column__title">Siguenos en nuestras redes sociales</h2>
                <p class="column__txt"><a
                        href="https://www.facebook.com/MexiHat-Bonitos-sombreros-artesanales-102472884698486/" class="">
                        facebook</a></p>
                <p class="column__txt"><a href="https://instagram.com/mexihat?utm_medium=copy_link" class="">
                        Instagram</a></p>
            </div>
            <p class="copy">2020 Mexihat | Todos los derechos reservados</p>
        </div>
    </footer>
    <script src="../public/js/menu.js"></script>
</body>

</html>