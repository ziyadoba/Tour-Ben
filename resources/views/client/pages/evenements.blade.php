<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evenements</title>
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
            <h3 class="text-white display-3 mb-4">Nos évènements culturels </h1>

        </div>
    </div>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Evenement culturels</h5>
                <h1 class="mb-0">Rejoins Nous </h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="/img/evenement/event2.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Cotonou</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>10/05/2025</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2000
                                    Personnes</small>
                            </div>
                            <div class="packages-price py-2 px-4">25000 FCFA</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Ouidah</h5>
                                <p class="mb-4">Le Festival Couleurs d’Afrique est un événement culturel béninois qui
                                    célèbre l’art et la diversité africaine à travers des expositions, spectacles et
                                    créations artistiques.</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="/img/evenement/vodoun5.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Ouidah</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>10/01/2026</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>Nombre
                                    illimité</small>
                            </div>
                            <div class="packages-price py-2 px-4">Gratuit</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Discover Bénin</h5>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                    nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="img/evenement/vodoun6.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Porto-Novo</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>1000
                                    personnes ou plus</small>
                            </div>
                            <div class="packages-price py-2 px-4">3000 FCFA</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Adjara party</h5>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                    nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="img/evenement/vodoun6.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Porto-Novo</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>1000
                                    personnes ou plus</small>
                            </div>
                            <div class="packages-price py-2 px-4">3000 FCFA</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Adjara party</h5>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                    nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="img/evenement/vodoun6.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Porto-Novo</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>1000
                                    personnes ou plus</small>
                            </div>
                            <div class="packages-price py-2 px-4">3000 FCFA</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Adjara party</h5>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                    nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="packages-item d-flex flex-column h-120 w-100">
                        <div class="packages-img position-relative">
                            <img src="img/evenement/vodoun6.jpg" class="img-fluid w-100 rounded-top object-fit-cover"
                                alt="Image" style="height:250px;">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-map-marker-alt me-2"></i>Porto-Novo</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>1000
                                    personnes ou plus</small>
                            </div>
                            <div class="packages-price py-2 px-4">3000 FCFA</div>
                        </div>
                        <div class="packages-content bg-light flex-grow-1 d-flex flex-column">
                            <div class="p-4 pb-0">
                                <h5 class="mb-2">Adjara party</h5>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                    nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0 mt-auto">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">voir plus</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Participer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Packages End -->

    <!-- Tour Booking Start -->
    <div class="container-fluid booking py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h5 class="section-booking-title pe-3">Booking</h5>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                        maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus
                        praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                    </p>
                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                        maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus
                        praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                    </p>
                    <a href="#" class="btn btn-light text-primary rounded-pill py-3 px-5 mt-2">Read More</a>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-white mb-3">Book A Tour Deals</h1>
                    <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure
                        Trip With Travela. Get More Deal Offers Here.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-white border-0" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-white border-0" id="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-white border-0" id="datetime"
                                        placeholder="Date & Time" data-target="#date3"
                                        data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="select1">
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 2</option>
                                        <option value="3">Destination 3</option>
                                    </select>
                                    <label for="select1">Destination</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="SelectPerson">
                                        <option value="1">Persons 1</option>
                                        <option value="2">Persons 2</option>
                                        <option value="3">Persons 3</option>
                                    </select>
                                    <label for="SelectPerson">Persons</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-white border-0" id="CategoriesSelect">
                                        <option value="1">Kids</option>
                                        <option value="2">1</option>
                                        <option value="3">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="CategoriesSelect">Categories</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-white border-0" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary text-white w-100 py-3" type="submit">Participer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Booking End -->

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
