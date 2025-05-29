<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Site touristique </title>
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
    @include('client.layouts.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('client.layouts.navbar')
    </div>
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Prochaine destination</h1>

        </div>
    </div>
    <!-- Header End -->

    <!-- Destination Start -->
    <div class="container-fluid destination ">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destination</h5>
                <h1 class="mb-0">Site touristique</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 150px;">Tous</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark" style="width: 150px;">Abomey</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Ouidah</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-dark" style="width: 150px;">Porto-Novo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-dark" style="width: 150px;">Nattingou</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-6">
                            <span class="text-dark" style="width: 150px;">Dassa-Zoume</span>
                        </a>
                    </li>
                </ul>

                {{-- Images des sites --}}
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-xl-8">
                                <div class="row g-4">
                                    {{-- Ouidah --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="/img/sites/porte_du_non_retour.jpg"
                                                alt="La porte du non retour de Ouidah"
                                                style="height: 250px; object-fit: cover;">

                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Ouidah</h4>
                                                <a href="{{ Route('site.detail') }}"
                                                    class="btn-hover text-white">Reserver <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-1.jpg" data-lightbox="destination-1"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Ouidah --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="/img/sites/memoire.png"alt=""
                                                style="height: 250px; object-fit: cover";>
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Ouidah</h4>
                                                <a href="{{ Route('site.detail') }}"
                                                    class="btn-hover text-white">Reserver<i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-2.jpg" data-lightbox="destination-2"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Abomey --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="/img/sites/palais_royal_abomey.jpg" alt="Palais royal d'Abomey"
                                                style="height: 250px; object-fit: cover";>
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Abomey</h4>
                                                <a href="{{ Route('site.detail') }}"
                                                    class="btn-hover text-white">Reserver <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-7.jpg" data-lightbox="destination-7"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Natitingou --}}
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="/img/sites/tata_somba.jpg"
                                                alt="Tata Somba" style="height: 250px; object-fit: cover";>
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Natitingou</h4>
                                                <a href="{{ Route('site.detail') }}"
                                                    class="btn-hover text-white">Reserver <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="img/destination-8.jpg" data-lightbox="destination-8"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Cotonou --}}
                            <div class="col-xl-4">
                                <div class="destination-img h-100">
                                    <img class="img-fluid rounded w-100 h-100" src="/img/sites/monument_amazone.jpg"
                                        aria-label="La place Amazone" style="height: 250px; object-fit: cover";
                                        alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                            Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Cotonou</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-9.jpg" data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Dassa-Zoume --}}
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/grotte.jpg"
                                        alt="Les grottes trouées aux pieds humains"
                                        style="height: 250px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                            Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Dassa-Zoume</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">Reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-4.jpg" data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Atacora --}}
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/cite_des_tata.jpeg"
                                        alt="Cité des tatas" style="height: 250px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                            Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Atacora</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">Reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-5.jpg" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Ouidah --}}
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/temples des pyton ouidah.jpg"
                                        alt="Le temple desd pythons de Ouidah"
                                        style="height: 250px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                            Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Ouidah</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">Reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-6.jpg" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tri section Abomey --}}
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/palais_royal_abomey.jpg"
                                        alt="Palais royal d'Abomey" style="height: 450px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">Palais royal</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">Reserver<i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="/img/sites/palais_royal_abomey.jpg" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/behanzin.jpg"
                                        alt="Le rois Behanzin" style="height: 450px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">Le roi Behanzin</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">Reserver<i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-6.jpg" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tri section Ouidah --}}
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/memoire.png" alt=""
                                        style="height: 450px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">Mémorial du Jubilé de l'An 2000</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">Reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="/img/sites/memoire.png" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- Tri section Ouidah la porte du non retour --}}
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/porte_du_non_retour.jpg"
                                        alt="" style="height: 450px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">La porte du non retour</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">Reserver<i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-6.jpg" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tri section Porto-Novo --}}
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/mosquee_porto.jpg"
                                        alt="La mosquee historique de Porto-Novo"
                                        style="height: 450px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3"> Mosquee historique de Porto-Novo</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="/img/sites/mosquee_porto.jpg" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="/img/sites/Temple_du_monstre_à_9_têtes_au_quartier_Bèsan_à_Porto-novo_Bénin.jpg"
                                        alt="" style="height: 450px; object-fit: cover";>
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">Temple du monstre à 9 têtes au quartier Bèsan
                                            à Porto-novo</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="Temple_du_monstre_à_9_têtes_au_quartier_Bèsan_à_Porto-novo_Bénin"
                                            data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tri section natitingou --}}
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/tata_somba.jpg"
                                        alt="sites historique des tata soba" style="height: 450px; object-fit: cover">
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">Mémorial
                                            du Jubilé de l'An 2000</h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-5.jpg" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/natitingou.jpg"
                                        alt="" style="height: 450px; object-fit: cover">
                                    <div class="destination-overlay p-4">

                                        <h4 class="text-white mb-2 mt-3"> statue dorée de Bio Guerra </h4>
                                        <a href="{{ Route('site.detail') }}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-6.jpg" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tri section dassa zoume --}}
                    <div id="tab-6" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/grotte.jpg"
                                        alt="grottes de dassa" style="height: 450px; object-fit: cover">
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">Grottes de Dassa</h4>
                                         <a href="{{ Route('site.detail') }}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-5.jpg" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="/img/sites/maria.jpg"
                                        alt="colines de dassa" style="height: 450px; object-fit: cover">
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">Sanctuaire Notre Dame d'Arigbo de Dassa-Zoumé au Bénin/DR </h4>
                                      <a href="{{ Route('site.detail') }}" class="btn-hover text-white">reserver <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="img/destination-6.jpg" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

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
    @include('client.layouts.footer')
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
