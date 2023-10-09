<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourly - Travel agancy</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">

    <style>

        
    </style>
</head>

<body id="top">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><div class="logo">
      <img src="{{ asset('img/log.png') }}" alt="Logo de tu empresa">

      </div></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/reserva">Reserva</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> portafolio
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Inicio</a></li>
              <li><a class="dropdown-item" href="/login">admin</a></li>

              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">contactenos</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true"></a>
          </li>
        </ul>
     
      </div>
    </div>
  </nav>
 

  <!-- 
    - #HEADER
  -->






  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('{{ asset('img/hero-banner.jpg') }}');">
  <div class="container">
    <h2 class="h1 hero-title">Descubre los lugares turisticos de Huánuco, Perú</h2>
    <p class="hero-text">
      Huánuco, un lugar de belleza natural y cultura rica. ¿Estás listo para explorar lo que esta maravillosa región tiene para ofrecer?
    </p>
    <div class="btn-group">
      <button class="btn btn-primary">Conoce más</button>
      <a href="/reserva" class="btn btn-secondary">Reserva ahora</a>

    
    </div>
  </div>
</section>







      <!-- 
        - #TOUR SEARCH
      -->



      <!-- 
        - #POPULAR
      -->
      <section class="popular" id="destination">
  <div class="container">

    <p class="section-subtitle">Descubre Huánuco</p>

    <h2 class="h2 section-title">Destinos Populares</h2>

    <p class="section-text">
      Conoce los lugares turísticos más destacados de Huánuco, Perú. Descubre su belleza natural y cultural.
    </p>

    <ul class="popular-list">

      <li>
        <div class="popular-card">

          <figure class="card-img">
            <img src="{{ asset('img/popular-1.jpg') }}" alt="Pichgacocha, Huánuco" loading="lazy">
          </figure>

          <div class="card-content">

            <div class="card-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <p class="card-subtitle">
              <a href="#">Huánuco, Perú</a>
            </p>

            <h3 class="h3 card-title">
              <a href="#">Pichgacocha</a>
            </h3>

            <p class="card-text">
              Pichgacocha es un hermoso lago en Huánuco, rodeado de naturaleza exuberante y paisajes impresionantes.
              Ideal para la pesca y el ecoturismo.
            </p>

          </div>

        </div>
      </li>

      <li>
        <div class="popular-card">

          <figure class="card-img">
            <img src="{{ asset('img/cueva.jpg') }}" alt="Cueva de las Lechuzas, Huánuco" loading="lazy">
          </figure>

          <div class="card-content">

            <div class="card-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <p class="card-subtitle">
              <a href="#">Huánuco, Perú</a>
            </p>

            <h3 class="h3 card-title">
              <a href="#">Cueva de las Lechuzas</a>
            </h3>

            <p class="card-text">
              La Cueva de las Lechuzas es una maravilla natural en Huánuco. Hogar de miles de lechuzas,
              ofrece una experiencia única de observación de aves.
            </p>

          </div>

        </div>
      </li>

      <li>
        <div class="popular-card">

          <figure class="card-img">
            <img src="{{ asset('img/corona.jpg') }}" alt="Corona del Inca, Huánuco" loading="lazy">
          </figure>

          <div class="card-content">

            <div class="card-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>

            <p class="card-subtitle">
              <a href="#">Huánuco, Perú</a>
            </p>

            <h3 class="h3 card-title">
              <a href="#">Corona del Inca</a>
            </h3>

            <p class="card-text">
              La Corona del Inca es un sitio arqueológico en Huánuco, Perú, que ofrece una vista impresionante
              de la región montañosa y la historia de los incas.
            </p>

          </div>

        </div>
      </li>

    </ul>

    <button class="btn btn-primary">Más destinos</button>

  </div>
</section>





      <!-- 
        - #PACKAGE
      -->
      <section class="package" id="package">
  <div class="container">

    <p class="section-subtitle">Lugares Turísticos en Huánuco, Perú</p>

    <h2 class="h2 section-title">Descubre Nuestros Destinos</h2>

    <p class="section-text">
      Huánuco, Perú te espera con sus hermosos lugares turísticos y experiencias únicas. ¡No te lo puedes perder!
    </p>

    <ul class="package-list">

      <li>
        <div class="package-card">

          <figure class="card-banner">
            <img src="{{ asset('img/pampa.jpg') }}" alt="Hco Pampa en Huánuco, Perú" loading="lazy">
          </figure>

          <div class="card-content">

            <h3 class="h3 card-title">Hco Pampa en Huánuco, Perú</h3>

            <p class="card-text">
              Descubre la belleza de Hco Pampa en Huánuco, Perú y todas sus comodidades. ¡No te lo pierdas!
            </p>

            <ul class="card-meta-list">

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="time"></ion-icon>

                  <p class="text">7D/6N</p>
                </div>
              </li>

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="people"></ion-icon>

                  <p class="text">pax: 10</p>
                </div>
              </li>

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="location"></ion-icon>

                  <p class="text">Huánuco, Perú</p>
                </div>
              </li>

            </ul>

          </div>

          <div class="card-price">

            <div class="wrapper">

              <p class="reviews"></p>

              <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>

            </div>

            <p class="price">
              S/75.00
              <span>/ por persona</span>
            </p>

            <a href="/reserva" class="btn btn-secondary">Reservar Ahora</a>

          </div>

        </div>
      </li>

      <li>
        <div class="package-card">

          <figure class="card-banner">
            <img src="{{ asset('img/huallaga.jpg') }}" alt="Río Huallaga en Huánuco, Perú" loading="lazy">
          </figure>

          <div class="card-content">

            <h3 class="h3 card-title">Río Huallaga en Huánuco, Perú</h3>

            <p class="card-text">
              Vive unas vacaciones inolvidables en el Río Huallaga en Huánuco, Perú.
            </p>

            <ul class="card-meta-list">

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="time"></ion-icon>

                  <p class="text">7D/6N</p>
                </div>
              </li>

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="people"></ion-icon>

                  <p class="text">pax: 10</p>
                </div>
              </li>

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="location"></ion-icon>

                  <p class="text">Huánuco, Perú</p>
                </div>
              </li>

            </ul>

          </div>

          <div class="card-price">

            <div class="wrapper">

              <p class="reviews"></p>

              <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>

            </div>

            <p class="price">
              S/52.00
              <span>/ por persona</span>
            </p>

            <a href="/reserva" class="btn btn-secondary">Reservar Ahora</a>

          </div>

        </div>
      </li>

      <li>
        <div class="package-card">

          <figure class="card-banner">
            <img src="{{ asset('img/milagros.jpg') }}" alt="Laguna de los Milagros en Huánuco, Perú" loading="lazy">
          </figure>

          <div class="card-content">

            <h3 class="h3 card-title">Laguna de los Milagros en Huánuco, Perú</h3>

            <p class="card-text">
              Disfruta de un fin de semana inolvidable en la hermosa Laguna de los Milagros en Huánuco, Perú.
            </p>

            <ul class="card-meta-list">

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="time"></ion-icon>

                  <p class="text">7D/6N</p>
                </div>
              </li>

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="people"></ion-icon>

                  <p class="text">pax: 10</p>
                </div>
              </li>

              <li class="card-meta-item">
                <div class="meta-box">
                  <ion-icon name="location"></ion-icon>

                  <p class="text">Huánuco, Perú</p>
                </div>
              </li>

            </ul>

          </div>

          <div class="card-price">

            <div class="wrapper">

              <p class="reviews"></p>

              <div class="card-rating">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>

            </div>

            <p class="price">
              S/.95.00
              <span>/ por persona</span>
            </p>

            <a href="/reserva" class="btn btn-secondary">Reservar Ahora</a>

          </div>

        </div>
      </li>

    </ul>

    <button class="btn btn-primary">Ver Todos los Destinos</button>

  </div>
</section>










<!-- 
- #CTA
-->

<section class="cta" id="contact">
  <div class="container">

    <div class="cta-content">
      <p class="section-subtitle">Llamado a la Acción</p>

      <h2 class="h2 section-title">Listo Para un Viaje Inolvidable. ¡Recuérdanos!</h2>

      <p class="section-text">
        Huánuco te espera con los brazos abiertos. No te pierdas la oportunidad de vivir experiencias únicas y emocionantes.
      </p>
    </div>

    <a href="https://wa.me/TUNUMERODEWHATSAPP" class="btn btn-secondary">¡Contáctanos!</a>

  </div>
</section>

</article>
</main>

<!-- 
- #FOOTER
-->

<footer class="footer">

<div class="footer-top">
  <div class="container">

    <div class="footer-brand">

      <a href="#" class="logo">
        <img src="{{ asset('img/logo.svg') }}" alt="Logo de Tourly">
      </a>

      <p class="footer-text">
        Descubre Huánuco, disfruta de su cultura y naturaleza. Te ayudamos a planificar tus próximas aventuras.
      </p>

    </div>

    <div class="footer-contact">

      <h4 class="contact-title">Contáctanos</h4>

      <p class="contact-text">
        ¡No dudes en ponerte en contacto con nosotros!
      </p>

      <ul>

        <li class="contact-item">
          <ion-icon name="call-outline"></ion-icon>

          <a href="tel:123456790" class="contact-link">+34543545</a>
        </li>

        <li class="contact-item">
          <ion-icon name="mail-outline"></ion-icon>

          <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
        </li>

        <li class="contact-item">
          <ion-icon name="location-outline"></ion-icon>

          <address>Huanuco</address>
        </li>

      </ul>

    </div>

    <div class="footer-form">

      

    </div>

  </div>
</div>

<div class="footer-bottom">
  <div class="container">

    <p class="copyright">
      &copy; 2022 <a href=""></a>. Todos los derechos reservados
    </p>

    <ul class="footer-bottom-list">

      <li>
        <a href="#" class="footer-bottom-link">Política de Privacidad</a>
      </li>

      <li>
        <a href="#" class="footer-bottom-link">Términos y Condiciones</a>
      </li>

      <li>
        <a href="#" class="footer-bottom-link">Preguntas Frecuentes</a>
      </li>

    </ul>

  </div>
</div>

</footer>

<!-- 
- #GO TO TOP
-->

<a href="#top" class="go-top" data-go-top>
<ion-icon name="chevron-up-outline"></ion-icon>
</a>

<!-- 
- Enlace a JavaScript personalizado
-->
<script src="{{ asset('js/script.js') }}"></script>

<!-- 
- Enlace a Ionicons
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
