<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='assets/css/style.css' rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
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
    
   
  


    <title>FieldWeb</title>

</head>

<body>

    <div class="main-header-navbar fixed-top ">
        <div class="header-top container-fluid">
            <ul class="me-2">
                <li>+91 93152 28028</li>
                <li>|</li>
                <li><a href="#" class="d-flex">Sign in <span class="ms-2"><img src="assets/images/signin.svg"
                                class="signin-size" /></span> </a></li>
            </ul>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">

            <div class="container-fluid">



                <a class="navbar-brand" href="#"> <img src="assets/images/logo.svg" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item  navbar-menu-title">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item  navbar-menu-title">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item  navbar-menu-title">
                            <a class="nav-link" href="#">Industries</a>
                        </li>
                        <li class="nav-item  navbar-menu-title">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item  navbar-menu-title">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item  navbar-menu-title">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>

                    <div class="navbar-text">
                        <button type="button" class="btn-outline-black">Explore Pricing</button>
                        <button type="button" class="btn-outline-red" data-bs-toggle="modal"
                            data-bs-target="#getdemoModal">Get Demo</button>
                    </div>

                </div>

            </div>

        </nav>
    </div>


    <!-- Modal popup for Get Demo -->

    <!-- Modal -->
    <div class="getdemo-modal">
        <div class="modal fade" id="getdemoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex gap-5 align-items-center">
                            <img src="assets/images/redfieldweblogo.svg">
                            <p class="title-poppins-bold">Request a personalized demo</p>
                        </div>
                        <img src="assets/images/greycross.svg" data-bs-dismiss="modal" aria-label="Close"
                            class="pointer-cursor" />

                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Company Name*">
                            </div>
                            <div class="col-md-12">
                                <input type="number" class="form-control mt-2" placeholder="Mobile Number*">
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="form-control mt-2" placeholder="Email Id">
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mt-2" placeholder="Preferred Date">

                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mt-2" placeholder="Preferred Time">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mt-2" placeholder="Name*">
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="grey-ouline-block">
                                    <div class="d-flex-common">
                                        <p class="black-sm-title">Select Industry</p>
                                        <img src="assets/images/rightarrow.svg" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="grey-ouline-block">
                                    <div class="d-flex-common">
                                        <p class="black-sm-title">Select Number of Techs</p>
                                        <img src="assets/images/rightarrow.svg" />
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="text-center mb-3">
                        <button type="button" class="btn-outline-red">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>