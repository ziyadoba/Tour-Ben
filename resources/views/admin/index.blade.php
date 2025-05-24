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

        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!--calendar css-->
        <link href="{{asset('assets/plugins/fullcalendar/css/fullcalendar.min.css')}}" rel="stylesheet" />

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        @include('admin.layout.header')
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Tableau de bord</h4>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <div class="icon-contain">
          <div class="row">
            <div class="col-2 align-self-center">
              <i class="fas fa-calendar-check text-gradient-success"></i>
            </div>
            <div class="col-10 text-right">
              <h5 class="mt-0 mb-1">190</h5>
              <p class="mb-0 font-12 text-muted">Réservation</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <div class="icon-contain">
          <div class="row">
            <div class="col-2 align-self-center">
              <i class="fas fa-calendar-alt text-gradient-danger"></i>
            </div>
            <div class="col-10 text-right">
              <h5 class="mt-0 mb-1">62</h5>
              <p class="mb-0 font-12 text-muted">Évènements</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <div class="icon-contain">
          <div class="row">
            <div class="col-2 align-self-center">
              <i class="fas fa-map-marked-alt text-gradient-info"></i>
            </div>
            <div class="col-10 text-right">
              <h5 class="mt-0 mb-1">62</h5>
              <p class="mb-0 font-12 text-muted">Site touristique</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <div class="icon-contain">
          <div class="row">
            <div class="col-2 align-self-center">
              <i class="fas fa-user-cog text-gradient-warning"></i>
            </div>
            <div class="col-10 text-right">
              <h5 class="mt-0 mb-1">14</h5>
              <p class="mb-0 font-12 text-muted">Gestionnaire</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <div class="icon-contain">
          <div class="row">
            <div class="col-2 align-self-center">
              <i class="fas fa-wallet text-gradient-primary"></i>
            </div>
            <div class="col-10 text-right">
              <h5 class="mt-0 mb-1">$15 562</h5>
              <p class="mb-0 font-12 text-muted">Budget</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

                        <div class="card">
                            <div class="card-body">
                                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm active">
                                        <input type="radio" name="options" id="option1" checked=""> Cette semaine
                                    </label>
                                    <label class="btn btn-primary btn-sm">
                                        <input type="radio" name="options" id="option2"> Mois passé
                                    </label>                                                
                                </div>
                                <h5 class="header-title mb-4 mt-0">Record hebdomadaire</h5>
                                <canvas id="lineChart" height="80"></canvas>
                            </div>
                        </div>                                    
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mb-4 mt-0">Activite</h5>
                                <div>
                                    <canvas id="dash-doughnut" height="200"></canvas>
                                </div>
                                <ul class="list-unstyled list-inline text-center mb-0 mt-3">
                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-success mr-2"></i>Active</li>
                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-danger mr-2"></i>Terminé</li>
                                    <li class="mb-2 list-inline-item text-muted font-13"><i class="mdi mdi-label text-warning mr-2"></i>En cours</li>
                                </ul>
                            </div>                               
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-warning"></i>New Leads</p>                            
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0 text-muted font-13"><i class="mdi mdi-album mr-2 text-danger"></i>New Leads Target</p>
                                    </div>
                                </div>
                                <div class="progress bg-gradient1 mb-3" style="height:5px;">
                                    <div class="progress-bar bg-gradient3" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <a class="btn btn-primary btn-sm btn-block text-white">Voir plus</a>
                            </div>
                            
                        </div>
                    </div>                                
                </div>

                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        @include('admin.layout.footer')


        <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

    <!-- KNOB JS -->
    <script src="{{ asset('assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/pages/dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
       
    </body>
</html>