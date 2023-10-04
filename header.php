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
    <header class="fixed-top">
        <div class="site-header">
            <div class="header-top container-fluid">
                <ul class="me-2">
                    <li><a href="tel:+919315228028">+91 93152 28028</a></li>
                    <li>|</li>
                    <li><a href="#" class="d-flex">Sign in <span class="ms-2"><img src="assets/images/signin.svg" class="signin-size" /></span> </a></li>
                </ul>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a href="index.php" class="navbar-brand" href="#"> <img src="assets/images/logo.svg" /></a>
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
                        <button type="button" class="btn-red" data-bs-toggle="modal" data-bs-target="#getdemoModal">Get Demo</button>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Modal popup for Get Demo -->
    <div class="modal fade" id="getdemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="assets/images/redfieldweblogo.svg">
                    <h6 class="modal-title">Request a personalized demo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Company Name*">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Mobile Number*">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email Id">
                        </div>
                        <div class="sect-datetime">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Preferred Date">
                                        <span class="input-group-text"><img src="assets/images/date-icon.svg" /></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Preferred Time">
                                        <span class="input-group-text"><img src="assets/images/time-icon.svg" /></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <div class="grey-ouline-block">
                                <div class="d-flex-common">
                                    <p class="black-sm-title">Select Industry</p>
                                    <img src="assets/images/rightarrow.svg" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="grey-ouline-block">
                                <div class="d-flex-common">
                                    <p class="black-sm-title">Select Number of Techs</p>
                                    <img src="assets/images/rightarrow.svg" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center mb-3">
                    <button type="button" class="btn-red">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal popup for Contact Sales -->
    <div class="modal fade" id="mdl_contactsales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Contact to Sales</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Company Name*">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Contact Number*">
                        </div>
                        <div class="mb-3">
                            <select class="form-select">
                                <option>Business Whatsapp</option>
                                <option>DND</option>
                                <option>White label customer app</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <button type="button" class="btn-red">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <!--scripts--->
    <script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
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
</body>
</html>