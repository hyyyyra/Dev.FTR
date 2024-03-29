<?php

if(isset($_POST['submit'])){
        
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $errors = array();

    if(empty($name)){
        $errors[] = 'El campo nombre es obligatorio.';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'El correo electronico no es valido.';
    }

    if(empty($message)){
        $errors[] = 'El campo mensaje es obligatorio.';
    }

    if(count($errors) == 0){
    }

    if(count($errors) > 0){
        // Si hay errores, construye una cadena de mensajes de error en formato JavaScript
        $error_message = "Error en el formulario:\n";
        foreach($errors as $error){
            $error_message .= "- " . $error . "\n";
        }
        // Utiliza la función `echo` para imprimir la alerta JavaScript en la página
        echo "<script>alert('$error_message');</script>";
    } else {
        // Si no hay errores, continua con el procesamiento del formulario
        // Por ejemplo, aquí puedes guardar los datos en la base de datos
        // o enviar un correo electrónico.
    }
}

?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Programador Fabián Trapp</title>
</head>

<body>
    <header>
        <div class="menu container">
            <img class="logo-1" src="images/logo.svg" alt="">
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">               
                <div class="menu-1">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <img class="logo-2" src="images/logo.svg" alt="">
            </nav>
        </div>

        <div class="header-content container">

            <div class="swiper mySwiper-1">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slider">
                            <div class="slider-txt">
                                <div class="iam">
                                    <p>
                                        Hola, soy Fabián Trapp...
                                    </p>
                                </div>
                                <h1>Programador</h1>
                                <div class="fullstack">
                                    <h1>Fullstack</h1>
                                </div>
                                <p>
                                    Programador y Analista de Sistema.
                                </p>
                                <div class="botones">
                                    <a href="#" class="btn-1">Descargar CV</a>
                                </div>
                            </div>
                            <div class="slider-img">
                                <img src="images/slider1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="products">
        <div class="tabs container">

            <input type="radio" name="tabs" id="tab2" checked="checked" class="tabInput" value="2">
            <label for="tab2">Skills</label>

            <div class="tab">
                <div class="swiper mySwiper-2" id="swiper2">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/html-icon.svg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Producto</h4>
                                    <p>Calidad premium</p>
                                    <span class="price">$80.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/css-icon.svg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Producto</h4>
                                    <p>Calidad premium</p>
                                    <span class="price">$80.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/js-icon.svg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Producto</h4>
                                    <p>Calidad premium</p>
                                    <span class="price">$80.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/php-svgrepo-com.svg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Producto</h4>
                                    <p>Calidad premium</p>
                                    <span class="price">$80.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/c-sharp-c.svg" alt="">
                                </div>
                                <div class="product-txt">
                                    <h4>Producto</h4>
                                    <p>Calidad premium</p>
                                    <span class="price">$80.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </main>

    <section class="info container">  
        <div class="contactodev">
            <form id="contactForm" class="contactodev" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="name" placeholder="Nombre" id="name" required>
                <input type="email" name="email" placeholder="Correo electrónico" id="email" required>
                <textarea name="message" placeholder="Mensaje" id="message" required></textarea>
                <input type="submit" name="submit" value="Enviar email">
            </form>
        </div>
        <div class="info-txt">
            <h2>Contacto</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi repellat soluta alias quasi delectus accusamus perspiciatis ullam, laborum asperiores! Cumque pariatur deleniti unde enim illum veritatis nemo inventore at exercitationem.
            </p>
            <a href="#" class="btn-2">Más información</a>
        </div>
    </section>

    <section>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53175.487636431004!2d-71.65250514598348!3d-33.59316022505625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966238514576f2af%3A0x153105bba7242aa2!2sSan%20Antonio%2C%20Valpara%C3%ADso!5e0!3m2!1ses-419!2scl!4v1709666203920!5m2!1ses-419!2scl" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer>
        <p>Diseñado por Fabián Trapp.</p>
    </footer>      

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="swiper.js"></script>

</body>

</html>