

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1a53866afa.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">

    <!-- links for footer -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>

    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <div class=""> <!-- Begin Main Container -->


    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="<?= URLROOT . '/images/imagelogin.png'?>" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-0 col-lg-5 col-xl-0 offset-xl-0">
        <form id="form" method="POST" action="">
          <div class="container mt-5">
            <h1 class="display-4 font-weight-bold mb-12">Welcome Back :)</h1>
            <p class="lead text-sm-start mb-12">"Bienvenue chez Carrefour ! Découvrez un univers de choix, de qualité et d'offres personnalisées pour une expérience shopping exceptionnelle."</p>
          </div>
         
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" placeholder="email" name="email" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13"></label>
          </div>

          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" name="password" placeholder="password" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23"></label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="<?= URLROOT . '/client/password'?>">Forgot password?</a>
          </div>

          <button type="submit" class="login-button btn btn-primary btn-lg btn-block">Login Now</button>
          <button type="button" class="login-btn btn btn-light btn-lg btn-block">Create Account</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="<?php echo URLROOT; ?>/js/config.js"></script>
<script src="<?php echo URLROOT; ?>/js/login.js"></script>
</body>

<!-- Ajoutez les liens vers les scripts JavaScript ou d'autres bibliothèques, si nécessaire -->
<!-- <script src="lien_vers_bootstrap.js"></script> -->

