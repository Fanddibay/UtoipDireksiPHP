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

    <!-- font awesomne -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
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

    <!-- Prism -->
    <link rel="stylesheet" href="vendors/prism/prism.css" type="text/css" />

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
  </head>
  <!-- light mode -->
  <body id="body" class="small-navigation">
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
        <div class="card mb-0 card-body rounded shadow-none">
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
                      <li><a href="index.php">General Performance</a></li>
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
                 
                  <!-- perubahan -->
                   <li>
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
                        <a href="#">Alerts</a>
                      </li>
                      <li>
                        <a href="#">Accordion</a>
                      </li>
                      <li>
                        <a href="#">Buttons</a>
                      </li>
                      <li>
                        <a href="#">Pagination</a>
                      </li>
                      <li>
                        <a href="#">Progress</a>
                      </li>
                      <li>
                        <a href="#">Modal</a>
                      </li>
                      <li>
                        <a href="#">Tab</a>
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
                        <a class="active" href="dataTable.php">Datatable</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Icons</a>
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
                    <a href="#">Sweet Alert</a>
                  </li>
                  <li>
                    <a href="#">Tour</a>
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
                    <a href="#">Blank Page</a>
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
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">Tables</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Rev Voucher Performance
                  </li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <!-- header input -->
                    <section>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-lg-12 col-md-12">
                              <div class="card">
                                <div class="card-body rounded">
                                  <form class="">
                                    <div
                                      class="row mx-auto container-fluid justify-content-around align-content-center align-self-center mt-3"
                                    >
                                      <div
                                        class="form-group d-lg-flex col-md-2"
                                      >
                                        <label
                                          class="w-25 mt-1 font-size-16"
                                          for="single-date-picker"
                                          >Date</label
                                        >
                                        <div
                                          class="position-relative d-inline-block"
                                        >
                                          <span class="input-group-icon-2">
                                            <i class="fas fa-calendar"></i>
                                          </span>

                                          <input
                                            type="text"
                                            name="single-date-picker"
                                            class="form-control"
                                          />
                                        </div>
                                      </div>
                                      <div class="form-group col-md-2 d-flex">
                                        <label
                                          for="selectArea"
                                          class="mt-1 mr-2 font-size-16"
                                          >Area</label
                                        >
                                        <select
                                          class="form-control w-75"
                                          id="selectArea"
                                        >
                                          <option>Nasional</option>
                                          <option>Area 1</option>
                                          <option>Area 2</option>
                                          <option>Area 3</option>
                                          <option>Area 4</option>
                                        </select>
                                      </div>
                                      <div class="form-group col-md-2 d-flex">
                                        <label
                                          for="selectArea "
                                          class="mt-1 mr-2 font-size-16"
                                          >Region</label
                                        >
                                        <select
                                          class="form-control w-75"
                                          id="selectArea"
                                        >
                                          <option>All Region</option>
                                          <option>Region 1</option>
                                          <option>Region 2</option>
                                          <option>Region 3</option>
                                          <option>Region 4</option>
                                        </select>
                                      </div>
                                      <div class="col-md-1"></div>
                                      <div class="form-group col-md-2 d-flex">
                                        <label
                                          for="selectArea "
                                          class="mt-1 mr-2 font-size-16"
                                          >Denom</label
                                        >
                                        <select
                                          class="form-control w-75"
                                          id="selectArea"
                                        >
                                          <option>All Denom</option>
                                          <option>Denom 1</option>
                                          <option>Denom 2</option>
                                          <option>Denom 3</option>
                                          <option>Denom 4</option>
                                        </select>
                                      </div>
                                      <small class="font-size-18 col-md-2 mt-1"
                                        >Update Date: 27-Mar-2023</small
                                      >
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- end header input -->
                    <!-- main content -->
                    <section>
                      <div class="card rounded">
                        <div
                          class="d-lg-flex d-block bd-highlight bg-danger p-3 mb-3 rounded-top"
                        >
                          <div class="p-2 w-100 bd-highlight text-center">
                            <h1 class="text-center">
                              Physical Voucher Performance (National)
                            </h1>
                          </div>
                          <div class="p-2 flex-shrink-1 bd-highlight">
                            <div class="d-flex">
                              <button
                                type="button"
                                class="btn btn-success m-l-r-5 text-center fc-center"
                              >
                                <i class="fa fa-file-excel-o"></i>
                              </button>
                              <button
                                type="submit"
                                class="btn btn-info m-l-r-5 text-center fc-center"
                              >
                                <i class="fas fa-copy"></i>
                              </button>
                              <button
                                type="button"
                                class="btn btn-light m-l-r-5 text-center fc-center"
                              >
                                <i class="fa fa-file-image-o"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <!-- main card content -->
                        <div class="card-body rounded">
                          <div class="container-fluid">
                            <div class="position-relative">
                              <div class="row mx-3">
                                <!-- card content 1 -->
                                <div class="col-md-12">
                                  <div class="row px-5">
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h3
                                                class="text-center font-weight-bold"
                                              >
                                                DO PV MTD
                                              </h3>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h3
                                                class="text-center font-weight-bold"
                                              >
                                                Trx Inject PV MTD
                                              </h3>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h3
                                                class="text-center font-weight-bold"
                                              >
                                                Trx Redeem PV MTD
                                              </h3>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h3
                                                class="text-center font-weight-bold"
                                              >
                                                Rev Inject PV MTD
                                              </h3>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h4
                                                class="text-center font-weight-bold"
                                              >
                                                Rev Redeem PV MTD
                                              </h4>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- card content 2 -->
                                <div class="col-md-12">
                                  <div class="row px-5">
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h3
                                                class="text-center font-weight-bold"
                                              >
                                                Sellthru PV MTD
                                              </h3>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h4
                                                class="text-center font-weight-bold"
                                              >
                                                Stock Gudang PV MTD
                                              </h4>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h4
                                                class="text-center font-weight-bold"
                                              >
                                                Stock Outlet PV MTD
                                              </h4>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h3
                                                class="text-center font-weight-bold"
                                              >
                                                Stock Days PV MTD
                                              </h3>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                                <h5>YTD</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg col-md-12">
                                      <div class="card">
                                        <div class="card-body rounded">
                                          <div class="mb-4">
                                            <div>
                                              <h3
                                                class="text-center font-weight-bold"
                                              >
                                                Expired PV MTD
                                              </h3>
                                              <hr />
                                              <h2
                                                class="font-weight-bold text-center"
                                              >
                                                109.0 Bn
                                              </h2>
                                            </div>
                                          </div>
                                          <div class="d-flex m-t-10-minus">
                                            <div
                                              class="flex-fill text-center font-size-12"
                                            >
                                              <div
                                                class="d-flex justify-content-between px-3 m-b-10-minus"
                                              >
                                                <h5>MoM</h5>
                                                <h5>YoY</h5>
                                              </div>
                                              <hr />
                                              <div
                                                class="d-flex justify-content-between px-3 m-t-10-minus"
                                              >
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                                <p
                                                  class="text-black-50 d-inline-flex font-size-14 font-weight-bold"
                                                >
                                                  <i
                                                    class="ti-arrow-up text-success mt-1 mr-2"
                                                  ></i>
                                                  -4.2%
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- content 2 -->
                          <section>
                            <div class="form-group d-flex mt-5">
                              <label
                                for="selectArea "
                                class="mt-1 mr-2 font-size-16"
                                >Driver</label
                              >
                              <select
                                class="form-control w-25 mr-5"
                                id="selectArea"
                              >
                                <option>All Driver</option>
                                <option>Driver 1</option>
                                <option>Driver 2</option>
                                <option>Driver 3</option>
                                <option>Driver 4</option>
                              </select>
                              <label
                                for="selectArea "
                                class="mt-1 mr-2 font-size-16"
                                >L1</label
                              >
                              <select
                                class="form-control w-auto"
                                id="selectArea"
                              >
                                <option></option>
                                <option>Driver 1</option>
                                <option>Driver 2</option>
                                <option>Driver 3</option>
                                <option>Driver 4</option>
                              </select>
                            </div>
                            <div class="card">
                              <div class="card-body rounded">
                                <h2>Daily Trend</h2>
                                <!-- grafik content -->
                                <div class="my-4">
                                  <canvas
                                    id="myChart"
                                    style="
                                      height: 300px !important;
                                      width: 10vw !important;
                                    "
                                  ></canvas>
                                </div>
                                <!-- table -->
                                <table class="table-2">
                                  <tr>
                                    <th class="table-total bg-white"></th>
                                    <th class="table-title-2">01</th>
                                    <th class="table-title-2">02</th>
                                    <th class="table-title-2">03</th>
                                    <th class="table-title-2">04</th>
                                    <th class="table-title-2">05</th>
                                    <th class="table-title-2">06</th>
                                    <th class="table-title-2">07</th>
                                    <th class="table-title-2">08</th>
                                    <th class="table-title-2">09</th>
                                    <th class="table-title-2">10</th>
                                    <th class="table-title-2">11</th>
                                    <th class="table-title-2">12</th>
                                    <th class="table-title-2">13</th>
                                    <th class="table-title-2">14</th>
                                    <th class="table-title-2">15</th>
                                    <th class="table-title-2">16</th>
                                    <th class="table-title-2">17</th>
                                    <th class="table-title-2">18</th>
                                    <th class="table-title-2">19</th>
                                    <th class="table-title-2">20</th>
                                    <th class="table-title-2">21</th>
                                    <th class="table-title-2">22</th>
                                    <th class="table-title-2">23</th>
                                    <th class="table-title-2">24</th>
                                    <th class="table-title-2">25</th>
                                    <th class="table-title-2">26</th>
                                    <th class="table-title-2">27</th>
                                    <th class="table-title-2">28</th>
                                    <th class="table-title-2">29</th>
                                    <th class="table-title-2">30</th>
                                    <th class="table-total-average">TOTAL</th>
                                    <th class="table-total-average">
                                      AVG DAILY
                                    </th>
                                  </tr>
                                  <tr>
                                    <td class="table-total bg-danger">Total</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-content-2">728</td>
                                    <td class="table-total-average">1,448,3</td>
                                    <td class="table-total-average text-right">
                                      148,8
                                    </td>
                                  </tr>
                                  <tr class="no-outline">
                                    <td class="no-outline">Cumm % Mom</td>
                                    <td class="no-outline">-100.0%</td>
                                    <td class="no-outline">-46,7%</td>
                                    <td class="no-outline">-10.0%</td>
                                    <td class="no-outline">-12.0%</td>
                                    <td class="no-outline">-52.3%</td>
                                    <td class="no-outline">-10.0%</td>
                                    <td class="no-outline">-20.0%</td>
                                    <td class="no-outline">-25.8%</td>
                                    <td class="no-outline">-10.5%</td>
                                    <td class="no-outline">-10.5%</td>
                                    <td class="no-outline">-100.0%</td>
                                    <td class="no-outline">-46,7%</td>
                                    <td class="no-outline">-10.0%</td>
                                    <td class="no-outline">-12.0%</td>
                                    <td class="no-outline">-52.3%</td>
                                    <td class="no-outline">-10.0%</td>
                                    <td class="no-outline">-20.0%</td>
                                    <td class="no-outline">-25.8%</td>
                                    <td class="no-outline">-10.5%</td>
                                    <td class="no-outline">-10.5%</td>
                                    <td class="no-outline">-100.0%</td>
                                    <td class="no-outline">-46,7%</td>
                                    <td class="no-outline">-10.0%</td>
                                    <td class="no-outline">-12.0%</td>
                                    <td class="no-outline">-52.3%</td>
                                    <td class="no-outline">-10.0%</td>
                                    <td class="no-outline">-20.0%</td>
                                    <td class="no-outline">-25.8%</td>
                                    <td class="no-outline">-10.5%</td>
                                    <td class="no-outline">-10.5%</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    </section>
                    <!-- data  -->
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
    <!-- chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <!-- chart js -->
    <script>
      let myChart = document.getElementById("myChart").getContext("2d");

      let massPopChart = new Chart(myChart, {
        type: "line",
        data: {
          labels: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
          datasets: [
            {
              label: "YTD 2.0% Dec-22 (8053Bn)",
              data: [
                50, 100, 150, 200, 250, 50, 100, 150, 200, 250, 50, 100, 150,
                200, 250, 50, 100, 150, 200, 250,
              ],
              backgroundColor: ["grey"],
              borderColor: ["grey"],
              borderWidth: 3,
              borderRadius: 10,
              tension: 0.4,
              display: true,
              dataTable: true,
            },
            {
              label: "Actual",
              data: [
                75, 25, 23, 23, 25, 121, 23, 243, 12, 23, 25, 233, 12, 250, 210,
                150, 111,
              ],
              backgroundColor: ["green"],
              borderColor: ["green"],
              borderWidth: 3,
              tension: 0.4,
              borderRadius: 10,
            },
            {
              label: "Dec-21",
              data: [
                55, 150, 250, 240, 210, 150, 300, 250, 210, 50, 50, 200, 50, 20,
                50, 150, 200, 120, 100, 150,
              ],
              backgroundColor: "rgba(183, 213, 162,12)",
              borderColor: "rgba(183, 213, 162,12)",
              borderDash: [70, 50],
              backgroundDash: [10, 10],
              borderRadius: 10,
              borderWidth: 3,
              tension: 0.4,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            datalabels: {
              display: true,
              color: "black",
            },
            legend: {
              display: true,
              position: "chartArea",
              position: "right",
              align: "start",
              labels: {
                color: "rgb(255, 99, 132)",
              },
            },
          },
        },
      });
    </script>
    <!-- Datepicker -->
    <script src="vendors/datepicker/daterangepicker.js"></script>
    <script src="assets/js/examples/datepicker.js"></script>

    <!-- DataTable -->
    <script src="vendors/dataTable/datatables.min.js"></script>
    <script src="assets/js/examples/datatable.js"></script>

    <!-- Prism -->
    <script src="vendors/prism/prism.js"></script>

    <!-- <script>
      function toggleDarkLight() {
        var body = document.getElementById("body");
        var currentClass = body.className;
        body.className =
          currentClass == "dark small-navigation"
            ? "light small-navigation"
            : "dark small-navigation";
      }
    </script> -->

    <!-- App scripts -->
    <script src="assets/js/app.min.js"></script>
  </body>
</html>
