<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>uTOIP Dashboard - Telkomsel</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png" />

    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css" />

    <!-- Slick -->
    <link rel="stylesheet" href="vendors/slick/slick.css" type="text/css" />
    <link
      rel="stylesheet"
      href="vendors/slick/slick-theme.css"
      type="text/css"
    />

    <!-- Daterangepicker -->
    <link
      rel="stylesheet"
      href="vendors/datepicker/daterangepicker.css"
      type="text/css"
    />

    <!-- DataTable -->
    <link
      rel="stylesheet"
      href="vendors/dataTable/datatables.min.css"
      type="text/css"
    />

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css" />
  </head>
  <body id="body" class="dark small-navigation">
    <!-- begin::preloader-->
    <div class="preloader">
      <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <!-- BEGIN: Sidebar Group -->
    <div class="sidebar-group">
      <!-- BEGIN: User Menu -->
      <div class="sidebar" id="user-menu">
        <div
          class="py-4 text-center"
          data-backround-image="assets/media/image/image1.jpg"
        >
          <figure class="avatar avatar-lg mb-3 border-0">
            <img
              src="assets/media/image/user/admin-man.jpg"
              class="rounded-circle"
              alt="image"
            />
          </figure>
          <h5 class="d-flex align-items-center justify-content-center">
            Raihan
          </h5>
          <div>Role: <strong>Super Admin</strong></div>
        </div>
        <div class="card mb-0 card-body shadow-none">
          <div class="mb-4">
            <div class="list-group list-group-flush">
              <a href="#" class="list-group-item p-l-r-0">Profile</a>
              <a href="#" class="list-group-item p-l-r-0 d-flex">Followers</a>
              <a href="#" class="list-group-item p-l-r-0 d-flex">
                Notification <span class="badge badge-danger ml-auto">2</span>
              </a>
              <a
                href="#"
                class="list-group-item p-l-r-0"
                data-sidebar-target="#settings"
                >Settings</a
              >
              <a href="login.php" class="list-group-item p-l-r-0 text-danger"
                >Sign Out!</a
              >
            </div>
          </div>
          <div class="mb-4">
            <h6>About</h6>
            <p class="text-muted mb-0">
              I started my career here as a customer service representative and
              quickly moved up the ranks. I took on management positions when
              they became available, then became a supervisor when my manager
              left. Now I'm senior administrator—which means that if you need
              anything from me, you can just ask your boss!
            </p>
          </div>
          <div class="mb-4">
            <h6>Division</h6>
            <p class="text-muted mb-0">IT Telkomsel</p>
          </div>
          <div class="mb-4">
            <h6>Social Links</h6>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" class="btn btn-sm btn-floating btn-facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-sm btn-floating btn-twitter">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-sm btn-floating btn-dribbble">
                  <i class="fa fa-dribbble"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-sm btn-floating btn-whatsapp">
                  <i class="fa fa-whatsapp"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn btn-sm btn-floating btn-linkedin">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END: User Menu -->
    </div>
    <!-- END: Sidebar Group -->

    <!-- begin::main -->
    <div class="layout-wrapper">
      <!-- begin::header -->
      <div class="header">
        <div class="header-left">
          <div class="navigation-toggler">
            <a href="#" data-action="navigation-toggler">
              <i data-feather="menu"></i>
            </a>
          </div>
          <div class="header-logo">
            <a href="index.php">
              <img
                class="logo"
                src="assets/media/image/logo.png"
                alt="uTOIP - Telkomsel"
              />
              <img
                class="logo-light"
                src="assets/media/image/logo-light.png"
                alt="uTOIP - Telkomsel"
              />
            </a>
          </div>
        </div>

        <div class="header-body">
          <div class="header-body-left">
            <div class="page-title" style="display: none">
              <h4>.</h4>
            </div>
          </div>
          <div class="header-body-right">
            <ul class="navbar-nav">
              <!-- begin::header fullscreen -->
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link"
                  title="Fullscreen"
                  data-toggle="fullscreen"
                >
                  <i class="maximize" data-feather="maximize"></i>
                  <i class="minimize" data-feather="minimize"></i>
                </a>
              </li>
              <!-- end::header fullscreen -->

              <!-- begin::background mode -->
              <li class="nav-item dropdown">
                <a
                  href="#"
                  onclick="toggleDarkLight()"
                  class="nav-link"
                  title="dark/light mode"
                >
                  <i data-feather="sun"></i>
                </a>
              </li>
              <!-- end::background mode -->

              <!-- begin::user menu -->
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link"
                  title="User menu"
                  data-sidebar-target="#user-menu"
                >
                  <span class="mr-2 d-sm-inline d-none">Raihan</span>
                  <figure class="avatar avatar-sm">
                    <img
                      src="assets/media/image/user/admin-man.jpg"
                      class="rounded-circle"
                      alt="avatar"
                    />
                  </figure>
                </a>
              </li>
              <!-- end::user menu -->

              <!-- begin::logo Tsel -->
              <li class="nav-item">
                <img
                  class="logo-tsel"
                  src="assets/media/image/logo-tsel-light.svg"
                  alt="Telkomsel"
                />
              </li>
              <!-- end::logo Tsel -->
            </ul>

            <!-- begin::mobile header toggler -->
            <ul class="navbar-nav d-flex align-items-center">
              <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                  <i data-feather="arrow-down"></i>
                </a>
              </li>
            </ul>
            <!-- end::mobile header toggler -->
          </div>
        </div>
      </div>
      <!-- end::header -->

      <div class="content-wrapper">
        <!-- begin::navigation -->
        <div class="navigation">
          <div class="navigation-menu-tab">
            <ul>
              <li>
                <a
                  href="#"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Dashboard"
                  data-nav-target="#ecommerce"
                >
                  <i data-feather="grid"></i>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Components"
                  data-nav-target="#components"
                >
                  <i data-feather="layers"></i>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Forms"
                  data-nav-target="#forms"
                >
                  <i data-feather="edit-3"></i>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Plugins"
                  data-nav-target="#plugins"
                >
                  <i data-feather="gift"></i>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Pages"
                  data-nav-target="#pages"
                >
                  <i data-feather="copy"></i>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Administrator"
                  data-nav-target="#user"
                >
                  <i data-feather="users"></i>
                </a>
              </li>
              <li>
                <a
                  href="https://www.google.com/"
                  data-toggle="tooltip"
                  data-placement="right"
                  title="Google"
                >
                  <i data-feather="external-link"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="navigation-menu-body">
            <div class="navigation-menu-group">
              <div id="ecommerce">
                <ul>
                  <li class="navigation-divider d-flex align-items-center">
                    <i class="mr-2" data-feather="grid"></i>CONSOLIDATED
                    DASHBOARD
                  </li>
                  <li>
                    <a href="#">Gross Rev. Performance</a>
                    <ul>
                      <li>
                        <a class="active" href="index.php"
                          >General Performance</a
                        >
                      </li>
                      <li><a href="#">Dashboard 01</a></li>
                      <li><a href="#">Dashboard 02</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Rev. Driver Performance</a></li>
                  <li><a href="#">Cities & Subdistrics Performance</a></li>
                  <li><a href="#">Business KPI</a></li>
                </ul>
              </div>
              <div id="user">
                <ul>
                  <li class="navigation-divider d-flex align-items-center">
                    <i class="mr-2" data-feather="users"></i> Administrator
                  </li>
                  <li>
                    <!-- perubahan -->
                    <a href="RsPerformancee.php">RS Performance</a>
                  </li>
                  <li>
                    <a href="generalVoucher.php">General Voucher</a>
                  </li>
                  <li>
                    <a href="RsProductivity.php">RS Productivity</a>
                  </li>
                  <li>
                    <a href="revVoucher.php">Rev Voucher Performance</a>
                  </li>
                </ul>
              </div>
              <div id="components">
                <ul>
                  <li class="navigation-divider d-flex align-items-center">
                    <i class="mr-2" data-feather="layers"></i> Components
                  </li>
                  <li>
                    <a href="#">Basic Components</a>
                    <ul>
                      <li>
                        <a href="alert.php">Alerts</a>
                      </li>
                      <li>
                        <a href="accordion.php">Accordion</a>
                      </li>
                      <li>
                        <a href="buttons.php">Buttons</a>
                      </li>
                      <li>
                        <a href="pagination.php">Pagination</a>
                      </li>
                      <li>
                        <a href="progress.php">Progress</a>
                      </li>
                      <li>
                        <a href="modal.php">Modal</a>
                      </li>
                      <li>
                        <a href="tab.php">Tab</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Tables</a>
                    <ul>
                      <li>
                        <a href="basic-tables.php">Basic Tables</a>
                      </li>
                      <li>
                        <a href="responsive-tables.php">Responsive Tables</a>
                      </li>
                      <li>
                        <a href="dataTable.php">Datatable</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="icons.php">Icons</a>
                  </li>
                </ul>
              </div>
              <div id="forms">
                <ul>
                  <li class="navigation-divider d-flex align-items-center">
                    <i class="mr-2" data-feather="edit-3"></i> Forms
                  </li>
                  <li>
                    <a href="#">Basic Forms</a>
                  </li>
                  <li>
                    <a href="#">Advanced Forms</a>
                  </li>
                  <li>
                    <a href="#">Form Validation</a>
                  </li>
                  <li>
                    <a href="#">Form Wizard</a>
                  </li>
                  <li>
                    <a href="#">File Upload</a>
                  </li>
                  <li>
                    <a href="#">Datepicker</a>
                  </li>
                  <li>
                    <a href="#">Timepicker</a>
                  </li>
                  <li>
                    <a href="#">Colorpicker</a>
                  </li>
                </ul>
              </div>
              <div id="plugins">
                <ul>
                  <li class="navigation-divider d-flex align-items-center">
                    <i class="mr-2" data-feather="gift"></i> Plugins
                  </li>
                  <li>
                    <a href="sweet-alert.php">Sweet Alert</a>
                  </li>
                  <li>
                    <a href="tour.php">Tour</a>
                  </li>
                </ul>
              </div>
              <div id="pages">
                <ul>
                  <li class="navigation-divider d-flex align-items-center">
                    <i class="mr-2" data-feather="copy"></i> Pages
                  </li>
                  <li>
                    <a href="#">Error Pages</a>
                    <ul>
                      <li><a href="404.php" target="_blank">404</a></li>
                      <li><a href="503.php" target="_blank">503</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="blank-page.php">Blank Page</a>
                  </li>
                  <li>
                    <a href="#">Menu Level</a>
                    <ul>
                      <li>
                        <a href="#">Menu Level</a>
                        <ul>
                          <li>
                            <a href="#">Menu Level </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- end::navigation -->

        <div class="content-body">
          <div class="content">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Consolidated Dashboard</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">Gross Revenue Performance</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    General Performance
                  </li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12"></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="inputDate">Date</label>
                              <input
                                type="text"
                                name="single-date-picker"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group col-md-3">
                              <label for="selectArea">Area</label>
                              <select class="form-control" id="selectArea">
                                <option>Nasional</option>
                                <option>Area 1</option>
                                <option>Area 2</option>
                                <option>Area 3</option>
                                <option>Area 4</option>
                              </select>
                            </div>
                            <div class="form-group col-md-3">
                              <label for="selectArea">Region</label>
                              <select class="form-control" id="selectArea">
                                <option>All Region</option>
                                <option>Region 1</option>
                                <option>Region 2</option>
                                <option>Region 3</option>
                                <option>Region 4</option>
                              </select>
                            </div>
                            <div class="col-md-3 p-t-30">
                              <button
                                type="submit"
                                class="btn btn-primary m-l-r-5"
                              >
                                Submit
                              </button>
                              <button
                                type="button"
                                class="btn btn-success m-l-r-5"
                              >
                                <i class="fa fa-file-excel-o"></i>
                              </button>
                              <button
                                type="button"
                                class="btn btn-warning m-l-r-5"
                              >
                                <i class="fa fa-file-image-o"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                        <small class="form-text text-muted m-t-10"
                          >Update Date: 27-Mar-2023</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-lg-3 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="mb-3">
                          <div>
                            <p class="text-muted">Rev. All MTD</p>
                            <h2 class="font-weight-bold text-center">
                              5.999 Bn
                            </h2>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -4.2%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -5.2%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -1.5%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="mb-3">
                          <div>
                            <p class="text-muted">Rev. Data MTD</p>
                            <h2 class="font-weight-bold text-center">
                              3.477 Bn
                            </h2>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -3.7%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-success d-inline-flex">
                              <span class="ti-arrow-up mr-2"></span> 1.8%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-success d-inline-flex">
                              <span class="ti-arrow-up mr-2"></span> 5.1%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="mb-3">
                          <div>
                            <p class="text-muted">Rev. Voice MTD</p>
                            <h2 class="font-weight-bold text-center">777 Bn</h2>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -5.1%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -22.9%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -21.5%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="mb-3">
                          <div>
                            <p class="text-muted">Rev. Digital MTD</p>
                            <h2 class="font-weight-bold text-center">678 Bn</h2>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -4.2%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -5.2%</span
                            >
                          </div>
                          <div class="flex-fill text-center font-size-12">
                            MoM<br />
                            <span class="text-danger d-inline-flex">
                              <span class="ti-arrow-down mr-2"></span>
                              -1.5%</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h6 class="card-title">Achievement to Target</h6>
                      <div>
                        <a href="#" class="btn btn-outline-light btn-sm mr-2">
                          <i class="fa fa-refresh"></i>
                        </a>
                        <div class="dropdown">
                          <a
                            href="#"
                            data-toggle="dropdown"
                            class="btn btn-outline-light btn-sm"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <img
                        src="assets/media/image/barchart.png"
                        style="width: 100%"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h6 class="card-title">Service Contribution</h6>
                      <div>
                        <a href="#" class="btn btn-outline-light btn-sm mr-2">
                          <i class="fa fa-refresh"></i>
                        </a>
                        <div class="dropdown">
                          <a
                            href="#"
                            data-toggle="dropdown"
                            class="btn btn-outline-light btn-sm"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <img
                        src="assets/media/image/piechart.png"
                        style="width: 100%"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h6 class="card-title">LoS Performance</h6>
                      <div>
                        <a href="#" class="btn btn-outline-light btn-sm mr-2">
                          <i class="fa fa-refresh"></i>
                        </a>
                        <div class="dropdown">
                          <a
                            href="#"
                            data-toggle="dropdown"
                            class="btn btn-outline-light btn-sm"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <img
                        src="assets/media/image/barchart.png"
                        style="width: 100%"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- begin::footer -->
          <footer class="content-footer">
            <div>© 2023, uTOIP - <a href="#" target="_blank">Telkomsel</a></div>
            <div>
              <nav class="nav">
                <a href="#" class="nav-link">Docs</a>
                <a href="#" class="nav-link">Change Log</a>
                <a href="#" class="nav-link">Contact</a>
              </nav>
            </div>
          </footer>
          <!-- end::footer -->
        </div>
      </div>
    </div>
    <!-- end::main -->

    <!-- Plugin scripts -->
    <script src="vendors/bundle.js"></script>

    <!-- Datepicker -->
    <script src="vendors/datepicker/daterangepicker.js"></script>
    <script src="assets/js/examples/datepicker.js"></script>

    <!-- Dashboard scripts -->
    <script src="assets/js/examples/dashboard.js"></script>

    <script>
      function toggleDarkLight() {
        var body = document.getElementById("body");
        var currentClass = body.className;
        body.className =
          currentClass == "dark small-navigation"
            ? "light small-navigation"
            : "dark small-navigation";
      }
    </script>

    <!-- App scripts -->
    <script src="assets/js/app.min.js"></script>
  </body>
</html>
