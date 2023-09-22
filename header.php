<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='assets/css/style.css' rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FieldWeb</title>-->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <title>FieldWeb</title>
</head>

<body>
    <div class="site-header fixed-top ">
        <div class="header-top container-fluid">
            <ul class="me-2">
                <li><a href="tel:+919315228028">+91 93152 28028</a></li>
                <li>|</li>
                <li><a href="#" class="d-flex">Sign in <span class="ms-2"><img src="assets/images/signin.svg" class="signin-size" /></span> </a></li>
            </ul>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <img src="assets/images/logo.svg" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li>
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li>
                            <a class="nav-link" href="industries.php">Industries</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <div class="navbar-buttons">
                        <button type="button" class="btn-outline-black">Explore Pricing</button>
                        <button type="button" class="btn-red">Get Demo</button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!--scripts--->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
        /**
         * Animation on scroll function and init
         */
        function aos_init() {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }
        window.addEventListener('load', () => {
            aos_init();
        });
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</body>

</html>