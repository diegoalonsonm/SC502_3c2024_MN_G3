<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcantarillado Costa Rica</title>
    <link rel="stylesheet" href="assets/css/styles.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="./assets/img/aya_logo.ico" type="image/x-icon">
    <style>
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>

<?php include './assets/componentes/header.php' ?>

    <section class="carousel-container">
        <div class="carousel">
            <div class="carousel-item">
                <img src="assets/img/alcantarilla1.jpg" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="assets/img/alcantarilla2.jpg" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="assets/img/alcantarilla3.jpg" alt="Imagen 3">
            </div>
        </div>
        <button class="prev" id="carousel-prev">&#10094;</button>
        <button class="next" id="carousel-next">&#10095;</button>
    </section>


    <div class="container">
            <h1 class="center-content">¡Bienvenidos a Alcantarillado Costa Rica!</h1>
            <br>
            <p class="center-content">
                Este sistema está diseñado para monitorear el estado del alcantarillado en Costa Rica, 
                ofreciendo herramientas para gestionar alertas, mapas interactivos y reportes.
            </p>
    </div>

    <section class="map-container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <h1>ALERTAS RECIENTES</h1>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.0089124881297!2d-84.03758522430299!3d9.933215174178976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3f47ea4ff37%3A0x7a7818a6a9e5c90c!2sFidelitas%20University%20Campus%20San%20Pedro!5e0!3m2!1sen!2scr!4v1727333026357!5m2!1sen!2scr"
                class="map-iframe" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h4>Estas son las alertas más recientes brindadas por nuestro sistema.</h4>
            <span class="blur"></span>
        </div>
    </section>

    <?php include './assets/componentes/footer.php' ?>

    <div class="copyright">
        Copyright © 2024 Alcantarillado Costa Rica. All Rights Reserved.
    </div>

    <script src="assets/js/index.js"></script>
</body>

</html>