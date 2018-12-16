<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

  <title>Creative Education</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet"/>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/site/css/bootstrap.min.css'); ?>"/>

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?= base_url('assets/site/css/owl.carousel.css'); ?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/site/css/owl.theme.default.css'); ?>"/>

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?= base_url('assets/site/css/magnific-popup.css'); ?>"/>    

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="<?= base_url('assets/site/css/ont-awesome.min.css'); ?>"/>    

  <!-- Custom stlylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/site/css/style.css'); ?>"/>

</head>
<body>
  
  <!-- Header -->
  <header id="home">
  
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url(<?= base_url('assets/site/img/background1.jpg'); ?>)">
      <div class="overlay"></div>
    </div>

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a href="#">
              <img src="<?= base_url('assets/site/img/logo.png'); ?>" class="logo" alt="Logo"/>
              <img src="<?= base_url('assets/site/img/logo-alt.png'); ?>" class="logo-alt" alt="Logo"/>
            </a>
          </div>
          <!-- ./Logo -->

          <!-- Collapse nav button -->
          <div class="nav-collapse">
            <span></span>
          </div>
          <!-- ./Collapse nav button -->
        </div>

        <!-- Main Navigation -->
        <ul class="main-nav nav navbar-nav navbar-right">
          <li><a href="#">Home</a></li>
          <li><a href="#">Sobre Nós</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Quem Somos</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
        <!-- ./Main Navigation -->

      </div>
    </nav>
    <!-- ./Nav -->

  </header>
  <!-- ./Header -->

  <script src="<?= base_url('assets/site/js/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/site/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('assets/site/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?= base_url('assets/site/js/jquery.magnific-popup.js'); ?>"></script>
  <script src="<?= base_url('assets/site/js/main.js'); ?>"></script>

</body>
</html>