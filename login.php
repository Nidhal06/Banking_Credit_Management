<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gestion des Risques Bancaires</title>
  <meta name="description" content="Suivez, analysez et gérez les risques bancaires en toute simplicité.">
  <meta name="keywords" content="gestion des risques, banques, crédits, tableau de bord">

  <!-- Favicons -->
  <link href="assets/img/logo-bna-2023.png" rel="icon" type="image/png">
  <link href="assets/img/logo-bna-2023.png" rel="shortcut icon" type="image/png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/logo-bna-2023.png" alt="Logo">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero">Accueil</a></li>
          <li><a href="index.php#contact">Contact</a></li>
		  <li><a href="login.php#login" class="active">Connexion</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="dashboard.php">Accéder au Tableau de bord</a>

    </div>
  </header>

  <main class="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="Background">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">Bienvenue sur <span>Gestion des Risques</span></h1>
          <p data-aos="fade-up" data-aos-delay="100">Suivez, analysez et gérez les risques bancaires avec un tableau de bord intuitif.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="dashboard.php" class="btn-get-started">Accéder au Tableau de Bord</a>
            <a href="https://www.youtube.com/watch?v=JkU0661ZXlA" class="glightbox btn-watch-video d-flex align-items-center">
              <i class="bi bi-play-circle"></i><span>Regarder Vidéo</span>
            </a>
          </div>
        </div>
      </div>
    </section><!-- End Hero Section -->

   <!-- ======= Section Connexion ======= -->
   <section id="login" class="login section">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Connexion</h2>
          <p>Veuillez entrer vos identifiants pour accéder à la gestion des risques bancaires.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <form action="process_login.php" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" class="form-control" required>
              </div>
              <div class="form-group mt-3">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="form-group mt-4 text-center">
                <button type="submit" class="btn-get-started">Se connecter</button>
              </div>
              <div class="mt-3 text-center">
                <p><a href="password_recovery.php">Mot de passe oublié ?</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Section Login -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">BNA</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Avenue de la Banque</p>
            <p>Tunis, TN 1000</p>
            <p class="mt-3"><strong>Téléphone:</strong> <span>+216 71 000 000</span></p>
            <p><strong>Email:</strong> <span>contact@bna.tn</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Liens Utiles</h4>
          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Connexion</a></li>
            <li><a href="#">Tableau de Bord</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Newsletter</h4>
          <p>Abonnez-vous à notre newsletter pour recevoir les dernières mises à jour sur la gestion des risques.</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email"><input type="submit" value="S'abonner">
            </div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© 2024 <strong class="sitename">BNA</strong> - Tous Droits Réservés</p>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
<script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
