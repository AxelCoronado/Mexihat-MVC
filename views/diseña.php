<!DOCTYPE html>
<html lang="es">
<head>
    <link href="./../public/img/logos/logoPes.png" type="image/x-icon" rel="shortcut icon"/> 
    <meta charset="UTF-8">
    <title>Diseña</title>
    <meta name="viewport" content="widht=device-widht, user-scalable=yes, initial-scale=1.0, maximun scale=3.0, minimun-scale=1.0">
    <link rel="stylesheet" href="./../public/css/Estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Pacifico" rel="stylesheet">
    <link href = "https://file.myfontastic.com/G6zCtZr4Fy7AfsRa6YYzdG/icons.css" rel = "stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <title>CSS3 Lightbox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="CSS3 Lightbox - A CSS-only lightbox" />
    <meta name="keywords" content="css3, lightbox, overlay, effect, images, thumbnails, navigate" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="./../public/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="./../public/css/style3.css" />
    <link rel="stylesheet" type="text/css" href="./../public/css/EstiloDiseñaTuSombrero.css" />
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
                <li class="menu__item"><a href="catalogo.php" class="menu__link">Catálogo</a></li>
                <li class="menu__item"><a href="diseña.php" class="menu__link menu__link--select">Diseña</a></li>
            </ul>

            <ul class="social-buttons" id="demo2">
                <li>
                    <a href="https://www.facebook.com/MexiHat-Bonitos-sombreros-artesanales-102472884698486/" class="brandico-facebook"><img src="./../public/img/logos/looface.png"></a>
                </li>
                <li>
                    <a href="https://instagram.com/mexihat?utm_medium=copy_link" class="brandico-instagram"><img src="./../public/img/logos/logo ins.png"></a>
                </li>
                <li>
                    <a href="login.php" class="brandico-usuario"><img src="./../public/img/logos/usuario.png"></a>
                </li>
            </ul>
        </div>  
    </nav> 
    <section class="Encabezado">
            <ul>
                <li><img src="./../public/img/encabezado/3.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/2.jpeg" alt="" class="sombrero__img"></li>
                <li><img src="./../public/img/encabezado/1.jpeg" alt="" class="sombrero__img"></li>
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
        <div class="Encabezado__content">Bonitos sombreros artesanales
        </div>
    </section>
    <main class="main">
    <section class="group group--color">
        <div class="container">
            <h2 class="main__title">Diseña</h2>
            <p class="main__txt">En este apartado puedes jugar con las opciones que te ofrecemos, diseña y crea tu sombrero ideal!
            </p>
        </div>
    </section>
     <main class="main">
        <section class="group group--color">
            <div class="container container--flex">
                <div class="img1">
                    <img id= "color" src="./../public/img/Indiana/Frente/Indiana.png">
                </div>
                <div class="img2">
                    <img id= "designs" width="50%" src="./../public/img/Diseños/trans.png" class="dis">
                </div>
                <div class= "pos1">
                    <label for="list3">Modelo:</label>
                    <select id=list3>
                        <option selected disabled>Selecciona el modelo</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Cubano">Cubano</option>
                    </select>
                    <label for="list4">Posición:</label>
                    <select id=list4>
                        <option selected disabled>Selecciona una posición</option>
                    </select>
                    <label for="list">Color:</label>
                        <select id="list">
                            <option selected disabled>Seleccione Color</option>
                        </select>   
                    <label for="list2">Diseño:</label>    
                        <select id="list2">
                            <option selected disabled>Seleccione Diseño</option>
                            <option value="Colibrí">Colibrí</option>
                            <option value="Astronauta">Astronauta</option>
                            <option value="Flor1">Flor1</option>
                            <option value="Flor2">Flor2</option>
                            <option value="Mariposa">Mariposa</option>
                        </select>           
                    </div>
                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./../public/js/confimages.js"></script> 
    <script src="./../public/js/menu.js"></script>
</body>
</html>