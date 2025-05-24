<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Tour-Ben Admin</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!--calendar css-->
    <link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

</head>


<body>

    <!-- Navigation Bar-->
    @include('admin.layout.header')

    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex justify-content-between align-items-center w-100">
                        <h4 class="page-title mb-0">Organisateur</h4>
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                            data-animation="bounce" data-target="#addModal">Ajouter</button>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            {{-- Contenue proprement dit --}}
            <div class="mt-2">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title pb-3 mt-0">Listes des organisateur</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="align-self-center">
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Heal</td>
                                                <td> Kevin</td>
                                                <td>gestionnaire@gmail.com</td>
                                                  <td>
                                                    <button type="button" class="btn btn-sm btn-success"
                                                        data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet site touristique ?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> Lyons</td>
                                                <td> Frank M.</td>
                                                <td>gestionnaire@gmail.com</td>
                                                  <td>
                                                    <button type="button" class="btn btn-sm btn-success"
                                                        data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet site touristique ?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Butler</td>
                                                <td> Angelo </td>
                                                <td>gestionnaire@gmail.com</td>
                                                  <td>
                                                    <button type="button" class="btn btn-sm btn-success"
                                                        data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet site touristique ?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Phillip </td>
                                                <td>Morse </td>
                                                <td>gestionnaire@gmail.com</td>
                                                  <td>
                                                    <button type="button" class="btn btn-sm btn-success"
                                                        data-toggle="modal" data-target="#editModal">
                                                        <i class="fas fa-edit"></i>
                                                    </button>

                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet site touristique ?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!--end table-responsive-->
                                <div class="pt-3 border-top text-right">
                                    <a href="#" class="text-primary">View all <i
                                            class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nouveau Gestionnaire</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" name="nom" class="form-control" required
                                            placeholder="Entrez votre nom">
                                    </div>

                                    <div class="form-group">
                                        <label>Prenom</label>
                                        <input type="text" name="prenom" class="form-control" required
                                            placeholder="Entrez votre prenom">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" required
                                            placeholder="Entrez votre email">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Add Modal -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        @include('admin.layout.footer')
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

        <!-- KNOB JS -->
        <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
        <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('assets/pages/dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
