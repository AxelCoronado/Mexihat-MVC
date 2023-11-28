<!DOCTYPE html>
<html lang="es">
<head>
    <link href="./../public/img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    <meta charset="UTF-8">
    <title>Mexihat</title>
    <meta name="viewport" content="widht=device-widht, user-scalable=yes, initial-scale=1.0, maximun scale=3.0, minimun-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="./../public/css/Estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Pacifico" rel="stylesheet">
    <link href = "https://file.myfontastic.com/G6zCtZr4Fy7AfsRa6YYzdG/icons.css" rel = "stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
    <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails, navigate" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="./../public/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="./../public/css/style3.css" />
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
                <li class="menu__item"><a href="./index.php" class="menu__link menu__link--select">Inicio</a></li>
                <li class="menu__item"><a href="./../views/nosotros.php" class="menu__link">Nosotros</a></li>
                <li class="menu__item"><a href="./../views/catalogo.php" class="menu__link">Catálogo</a></li>
                <li class="menu__item"><a href="./../views/diseña.php" class="menu__link">Diseña</a></li>
            </ul>

            <ul class="social-buttons" id="demo2">
                <li>
                    <a href="https://www.facebook.com/MexiHat-Bonitos-sombreros-artesanales-102472884698486/" class="brandico-facebook"><img src="./../public/img/logos/looface.png"></a>
                </li>
                <li>
                    <a href="https://instagram.com/mexihat?utm_medium=copy_link" class="brandico-instagram"><img src="./../public/img/logos/logo ins.png"></a>
                </li>
                <li>
                    <a href="./../views/login.php" class="brandico-usuario"><img src="./../public/img/logos/usuario.png"></a>
                </li>
            </ul>
        </div>  
    </nav> 
    <section class="Encabezado">
            <ul>
                <li><img src="./../public/img/encabezado/1.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/2.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/3.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/4.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/5.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/6.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/8.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/10.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/9.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/11.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/12.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/13.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/14.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/15.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/16.jpeg" alt="" class="sombrero__img"></li>
            </ul>
        <div class="Encabezado__content">Bonitos sombreros artesanales</div>
    </section>
    <main class="main">
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Mexihat</h2>
            <p class="main__txt">Mexihat es una micro empresa dedicada a diseñar y elaborar productos artesanales de la más alta calidad, tales como sombreros, zapatos y ropa pintados 100% a mano, brindando la confianza para plasmar en los artículos las ideas y pasiones de los clientes.</p>
        </div>
    </section>     
    <section class="group main__about__description">
        <div class="container container--flex">
        <div class="column column--50">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./../public/img/Envios/Envio1.jpeg"></div>
                <div class="swiper-slide"><img src="./../public/img/Envios/Envio2.jpeg"></div>
                <div class="swiper-slide"><img src="./../public/img/Envios/Envio3.jpeg"></div>
                <div class="swiper-slide"><img src="./../public/img/Envios/Envio4.jpeg"></div>
                <div class="swiper-slide"><img src="./../public/img/Envios/Envio5.jpeg"></div>
                <div class="swiper-slide"><img src="./../public/img/Envios/Envio6.jpeg"></div>      
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
        </div>
            <div class="column column--50">
                <h3 class="column__title">Envios Nacionales e internacionales</h3>
                    <p class="column__txt">Mexihat cuenta con envíos a toda la Republica Mexicana, así como a otros paises</p>
            </div> 
        </div> 
    </section>          
    <section class="group main__about__description">
        <div class="container container--flex">
            <div class="column column--50">
                <h3 class="column__title">Escoge tu talla</h3>
                    <p class="column__txt">Contamos con una gran variedad de tallas con el fin de que tu sombrero Mexihat se adapte de forma cómoda en tu cabeza.</p>
            </div> 
            <div class="column column--50">
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./../public/img/Inicio/talla.jpeg"></div>
                    <div class="swiper-slide"><img src="./../public/img/Inicio/talla2.jpeg"></div>   
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
            </div>
        </div>
    </section>
    <section class="group main__about__description">
        <div class="container container--flex">
        <div class="column column--50">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./../public/img/Inicio/adaptacion.jpg"></div>
                <div class="swiper-slide"><img src="./../public/img/Inicio/adaptacion2.jpg"></div>
                <div class="swiper-slide"><img src="./../public/img/Inicio/adaptacion3.jpg"></div>
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
        </div>
            <div class="column column--50">
                <h3 class="column__title">Plasmamos tus diseños</h3>
                    <p class="column__txt">Envíanos la imagen de tu diseño y nosotros la adaptamos al sombrero.</p>
            </div> 
        </div> 
    </section>          
    <section class="group group--color">
        <div class="container">
            <div id="main" class="card card-body">
            <h2 class="main__comentarios">Agregar comentarios</h2>
            <form class="form-inline mb-3" id="formAgregar">
      <input type="text" class="form-control mr-2" id="item">
      <input type="submit" class="btn btn-dark" value="Enviar">
    </form>
    <h2 class="main__comentarios">Comentarios</h2>
    <ul id="items" class="list-group">
      
    </ul> <br>
   </div>
    </section>
    </main>
    <footer class="main-footer">
        <div class="container container--flex">
            <div class="column column--33">
                <h2 class="column__title">¿Por que visitarnos?</h2>
                <p class="column__txt">Te ofrecemos una extensa variedad de lindos diseños de sombreros pintados a mano </p>   
            </div>
            <div class="column column--33">
                <h2 class="column__title">Contactanos</h2>   
                <p class="column__txt">Telefono: 477 592 86 46</p>    
                <p class="column__txt">mexihatleon@gmail.com</p>    
            </div>
            <div class="column column--33">
                <h2 class="column__title">Siguenos en nuestras redes sociales</h2>
                <p class="column__txt"><a href="https://www.facebook.com/MexiHat-Bonitos-sombreros-artesanales-102472884698486/" class="" > facebook</a></p>    
                <p class="column__txt"><a href="https://instagram.com/mexihat?utm_medium=copy_link" class="" > Instagram</a></p>     
            </div>
                <p class="copy">2020 Mexihat | Todos los derechos reservados</p>
        </div>
    </footer>
    <script src="./../public/js/menu.js"></script>
    <script src="./../public/js/app.js"></script>
</body>
</html>