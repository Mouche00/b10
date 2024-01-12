<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1a53866afa.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo URLROOT;?>/css/style.css">

    <!-- links for footer -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <div class="">
        <!-- Begin Main Container -->

        <div class="d-flex justify-content-center align-items-center vh-100">
            <div class="card text-center" style="width: 400px;">
                <div class="card-header h5 text-white bg-primary">Password Reset</div>
                <div class="card-body px-5">
                    <p class="card-text py-2">
                        Enter your email address and we'll send you an email with instructions to reset your password.
                    </p>
                    <form id="myForm" class="form-outline">
                        <input type="email" id="email" name="email" placeholder="Email input" class="form-control my-3" />
                        <input type="hidden" id="link" name="link" value="" placeholder="Email input" class="form-control my-3" />
                        <label class="form-label" for="typeEmail"></label>
                        <input type="submit" id="submit" value="SUBMIT" class="pass-btn btn btn-primary w-100" />
                    </form>
                    <div class="d-flex justify-content-between mt-4">
                        <a class="" href="<?= URLROOT . '/client/login'?>">Login</a>
                        <a class="" href="#">Register</a>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"
    ></script>

    <script type="text/javascript">      (function () {
        emailjs.init("mlqiqm_6KrTPxjGJM");
      })();
    </script>


    <script src="<?php echo URLROOT; ?>/js/config.js"></script>
    <script src="<?php echo URLROOT; ?>/js/password.js"></script>
</body>

</html>