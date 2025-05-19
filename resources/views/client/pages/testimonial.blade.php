<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Testimonial</title>
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
            <h3 class="text-white display-3 mb-4">Our Testimonial</h1>
                
        </div>
    </div>
    <!-- Header End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Testimonial</h5>
                <h1 class="mb-0">Our Clients Say!!!</h1>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis
                            nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi
                            porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis
                            nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi
                            porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis
                            nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi
                            porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis
                            nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi
                            porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Subscribe Start -->
    <div class="container-fluid subscribe py-5">
        <div class="container text-center py-5">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="subscribe-title px-3">Subscribe</h5>
                <h1 class="text-white mb-4">Our Newsletter</h1>
                <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore
                    nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita
                    laudantium fugiat corrupti eum cum repellat a laborum quasi. ok 
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
