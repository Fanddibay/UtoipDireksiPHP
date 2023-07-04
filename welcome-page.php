<!doctype php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uTOIP Dashboard - Telkomsel</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/custom.css" type="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css" type="text/css">
</head>
<body class="login-background dark">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

        <!-- begin::header -->
        <div class="header">
    
            <div class="header-left">
                <div class="header-logo">
                    <a href=index.php>
                        <img class="logo" src="assets/media/image/logo.png" alt="uTOIP - Telkomsel">
                        <img class="logo-light" src="assets/media/image/logo-light.png" alt="uTOIP - Telkomsel">
                    </a>
                </div>
            </div>
    
            <div class="header-body">
                <div class="header-body-left">
                    <div class="page-title"  style="width: 600px;">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control form-control-lg" id="searchApp" aria-describedby="searchlHelp" placeholder="Search App">
                        </div>
                    </div>
                </div>
                <div class="header-body-right">
                    <ul class="navbar-nav">
                        
                    <!--sign out-->
                    <li class="nav-item">
                        <a href="#" class="nav-link" title="Help" data-toggle="modal" data-target="#helpModal">
                            <i data-feather="help-circle"></i>
                        </a>
                    </li>
                    <!--sign out-->         

                    <!-- begin::header notification dropdown -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                            <i data-feather="bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Notifications</h5>
                                <small class="opacity-7">3 New App Add</small>
                            </div>
                            <div>
                                <ul class="list-group list-group-flush">
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New App Name 03
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">20 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New App Name 02
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">2 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                            <div class="flex-grow-1">
                                                <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                    New App Name 01
                                                    <i title="Mark as read" data-toggle="tooltip"
                                                       class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                                </p>
                                                <span class="text-muted small">12 hours ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- end::header notification dropdown -->

                    <!--sign out-->
                    <li class="nav-item m-r-20">
                        <a href="#" class="nav-link" title="Sign Out">
                            <i data-feather="log-out"></i>
                        </a>
                    </li>
                    <!--sign out-->
    
                        <!-- begin::logo Tsel -->
                        <li class="nav-item">
                            <img class="logo-tsel" src="assets/media/image/logo-tsel.svg" alt="Telkomsel">
                        </li>
                        <!-- end::logo Tsel -->
    
                    </ul>

                </div>
            </div>
    
        </div>
        <!-- end::header -->

    

<div class="main">
    <div class="welcome-box">
        <div class="welcome-box-spacing">
            <div class="welcome-user mb-2">
                <figure class="avatar avatar-welcome mr-4">
                    <img src="assets/media/image/user/admin-man.jpg" class="rounded-circle" alt="avatar">
                </figure>
                <div class="gap-welcome">
                    <div>Good Morning</div>
                    <div class="user-name-welcome">Raihan <span class="text-muted font-weight-light">|</span> Super Admin</div>
                    <div>Division: IT Telkomsel </div>
                </div>
            </div>
            <div class="container-menu-welcome">
                <a href="#">
                    <div class="modul-app">HRC</div>
                </a>
                <a href="#">
                    <div class="modul-app disable">Tableau</div>
                </a>
                <a href="#">
                    <div class="modul-app">Finance</div>
                </a>
                <a href="#">
                    <div class="modul-app">Sales</div>
                </a>
                <a href="#">
                    <div class="modul-app">FMC</div>
                </a>
                <a href="#">
                    <div class="modul-app">Marketing</div>
                </a>
                <a href="#">
                    <div class="modul-app">Visionic</div>
                </a>
                <a href="#">
                    <div class="modul-app disable">Olap</div>
                </a>
            </div>
        </div> 
        <div class="welcome-box-spacing">
            <div class="calendar-size">
                <div id="calendar"></div>
            </div>
        </div> 
    </div>
</div>

<!--help modal-->
<div class="modal fade" id="helpModal" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Help</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>
        <div class="modal-body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit: Sed vehicula ante nec nunc efficitur fermentum. Fusce nec turpis euismod, feugiat tortor id, dictum nibh. 
            <ol>
                <li>Sed tincidunt est a nunc pulvinar, et fringilla lacus viverra. Quisque lacinia metus eu ex fringilla, vitae tempor felis fermentum. Duis nec est sit amet sem fringilla ultrices.</li>
                <li>Sed tincidunt est a nunc pulvinar, .</li>
                <li>Sed tincidunt est a nunc pulvinar, et fringilla lacus viverra. Quisque lacinia metus eu ex fringilla, </li>
                <li>Sed tincidunt est a nunc pulvinar, et fringilla lacus viverra. Quisque lacinia metus eu ex fringilla, vitae tempor felis fermentum.</li>
            </ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--help modal-->

<!-- Plugin scripts -->
<script src="vendors/bundle.js"></script>

<!-- Datepicker -->
<script src="vendors/datepicker/daterangepicker.js"></script>
<script src="assets/js/examples/datepicker.js"></script>

<!-- App scripts -->
<script src="assets/js/app.min.js"></script>

<!-- partial -->
<script  src="assets/js/script.js"></script>
</body>
</php>
