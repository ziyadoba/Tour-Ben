<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A propos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('client.layouts.topbar');
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('client.layouts.navbar');
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">About Us</h1>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-150"
                        style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">A propos de nous</h5>
                    <h1 class="mb-4">Bienvenue sur <span class="text-primary">TourBen, </span></h1>
                    <p class="mb-4">votre nouvelle passerelle vers la découverte et la culture. Nous avons imaginé
                        et développé une solution intuitive qui simplifie la réservation de visites de sites
                        touristiques et l’inscription à des événements culturels, pour que chaque expérience devienne un
                        souvenir inoubliable. </p>
                    <h2 class="text-primary">Notre mission</h2>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Accessibilité :
                                offrir une interface claire et conviviale, accessible à tous les voyageurs, qu’ils
                                soient novices ou passionnés d’aventure.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Diversité : proposer
                                un large éventail de destinations — monuments historiques, parcs naturels, musées, ainsi
                                que festivals, expositions et spectacles vivants.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Personnalisation :
                                permettre à chacun de composer son parcours selon ses envies (visites guidées, visites
                                libres, ateliers thématiques…) et de recevoir des recommandations sur mesure
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Nous mettons un point
                                d'honneur à rendre notre plateforme accessible 24h/24 et 7j/7, afin que vous puissiez
                                planifier vos visites et événements à tout moment, où que vous soyez
                            </p>
                        </div>
                    </div>
                    <h2 class="text-primary">Pourquoi nous choisir ?</h2>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Fiabilité : des
                                partenariats exclusifs avec des acteurs locaux pour garantir des informations à jour et
                                des prestations de qualité.
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sécurité : paiement
                                en ligne sécurisé et support client à l’écoute avant, pendant et après votre
                                expérience..</p>
                        </div>
                    </div>

                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Visiter les sites
                        touristiques et évènements</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Travel Guide Start -->
    <div class="container-fluid guide py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Travel Guide</h5>
                <h1 class="mb-0">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="img/guide-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore
                    nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita
                    laudantium fugiat corrupti eum cum repellat a laborum quasi.
                </p>
                <div class="position-relative mx-auto">
                    <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

    <!-- Footer Start -->
    @include('client.layouts.footer');
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
