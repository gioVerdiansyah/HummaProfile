<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
  <meta content="Themesbrand" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('cssAdmin/images/favicon.ico') }}">

  <link href="{{ asset('cssAdmin/libs/chartist/chartist.min.css') }}" rel="stylesheet">

  <!-- Bootstrap Css -->
  <link href="{{ asset('cssAdmin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="{{ asset('cssAdmin/css/icons.min.css') }}" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="{{ asset('cssAdmin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('cssAdmin/css/dashboard/dashboard.css') }}">

</head>

<body data-sidebar="dark">

  <!-- Begin page -->
  <div id="layout-wrapper">

    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex sidebar-switcher">
          <!-- LOGO -->
          {{-- <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
              <span class="logo-sm">
                <img src="{{ asset('cssAdmin/images/logo-sm.png') }}" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="{{ asset('cssAdmin/images/logo-dark.png') }}" alt="" height="17">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="{{ asset('cssAdmin/images/logo-sm.png') }}" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="{{ asset('cssAdmin/images/logo-light.png') }}" alt="" height="18">
              </span>
            </a>
          </div> --}}

          <button type="button" class="btn btn-sm px-3 font-size-24 header-item " id="vertical-menu-btn">
            <i class="mdi mdi-menu"></i>
          </button>

          <div class="d-none d-sm-block">
            <div class="dropdown pt-3 d-inline-block">

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <!-- App Search-->

          <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-magnify"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

              <form class="p-3">
                <div class="form-group m-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="dropdown d-none d-lg-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
              <i class="mdi mdi-fullscreen"></i>
            </button>
          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-bell-outline"></i>
              <span class="badge bg-danger rounded-pill">3</span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
              <div class="p-3">
                <div class="row align-items-center">
                  <div class="col">
                    <h5 class="m-0 font-size-16"> Notifications (258) </h5>
                  </div>
                </div>
              </div>
              <div data-simplebar style="max-height: 230px;">
                <a href="#" class="text-reset notification-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-xs">
                        <span class="avatar-title bg-success rounded-circle font-size-16">
                          <i class="mdi mdi-cart-outline"></i>
                        </span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Your order is placed</h6>
                      <div class="font-size-12 text-muted">
                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="#" class="text-reset notification-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-xs">
                        <span class="avatar-title bg-warning rounded-circle font-size-16">
                          <i class="mdi mdi-message-text-outline"></i>
                        </span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New Message received</h6>
                      <div class="font-size-12 text-muted">
                        <p class="mb-1">You have 87 unread messages</p>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="#" class="text-reset notification-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-xs">
                        <span class="avatar-title bg-info rounded-circle font-size-16">
                          <i class="mdi mdi-glass-cocktail"></i>
                        </span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Your item is shipped</h6>
                      <div class="font-size-12 text-muted">
                        <p class="mb-1">It is a long established fact that a reader will</p>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="#" class="text-reset notification-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-xs">
                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                          <i class="mdi mdi-cart-outline"></i>
                        </span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Your order is placed</h6>
                      <div class="font-size-12 text-muted">
                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                      </div>
                    </div>
                  </div>
                </a>

                <a href="#" class="text-reset notification-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar-xs">
                        <span class="avatar-title bg-danger rounded-circle font-size-16">
                          <i class="mdi mdi-message-text-outline"></i>
                        </span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New Message received</h6>
                      <div class="font-size-12 text-muted">
                        <p class="mb-1">You have 87 unread messages</p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-2 border-top">
                <div class="d-grid">
                  <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                    View all
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle header-profile-user" src="{{ asset('cssAdmin/images/users/user-4.jpg') }}" alt="Header Avatar">
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
            </div>
          </div>

        </div>
      </div>
    </header>

    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

      <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Main</li>

            <li>
              <a href="#" class="waves-effect">
                <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="menu-title">Persetujuan</li>

            <li>
              <a href="index.html" class="waves-effect">
                <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                <span>Siswa Magang</span>
              </a>
            </li>

            <li>
              <a href="index.html" class="waves-effect">
                <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                <span>Kelas Industri</span>
              </a>
            </li>

            <li class="menu-title">Persetujuan</li>

            <li>
              <a href="index.html" class="waves-effect">
                <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                <span>Berita</span>
              </a>
            </li>

            <li>
              <a href="index.html" class="waves-effect">
                <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                <span>Kategori Berita</span>
              </a>
            </li>

            <li class="menu-title">Later Used</li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-email"></i>
                <span>Email</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="email-inbox.html">Inbox</a></li>
                <li><a href="email-read.html">Email Read</a></li>
                <li><a href="email-compose.html">Email Compose</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-package"></i>
                <span>UI Elements</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="ui-alerts.html">Alerts</a></li>
                <li><a href="ui-buttons.html">Buttons</a></li>
                <li><a href="ui-cards.html">Cards</a></li>
                <li><a href="ui-carousel.html">Carousel</a></li>
                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                <li><a href="ui-grid.html">Grid</a></li>
                <li><a href="ui-images.html">Images</a></li>
                <li><a href="ui-lightbox.html">Lightbox</a></li>
                <li><a href="ui-modals.html">Modals</a></li>
                <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                <li><a href="ui-rangeslider.html">Range Slider</a></li>
                <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                <li><a href="ui-sweet-alert.html">SweetAlert 2</a></li>
                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                <li><a href="ui-typography.html">Typography</a></li>
                <li><a href="ui-video.html">Video</a></li>
                <li><a href="ui-general.html">General</a></li>
                <li><a href="ui-colors.html">Colors</a></li>
                <li><a href="ui-rating.html">Rating</a></li>
                <li><a href="ui-utilities.html">Utilities</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="waves-effect">
                <i class="ti-receipt"></i>
                <span class="badge rounded-pill bg-success float-end">9</span>
                <span>Forms</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="form-elements.html">Form Elements</a></li>
                <li><a href="form-validation.html">Form Validation</a></li>
                <li><a href="form-advanced.html">Form Advanced</a></li>
                <li><a href="form-editors.html">Form Editors</a></li>
                <li><a href="form-uploads.html">Form File Upload</a></li>
                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                <li><a href="form-repeater.html">Form Repeater</a></li>
                <li><a href="form-wizard.html">Form Wizard</a></li>
                <li><a href="form-mask.html">Form Mask</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-pie-chart"></i>
                <span>Charts</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="charts-morris.html">Morris Chart</a></li>
                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                <li><a href="charts-flot.html">Flot Chart</a></li>
                <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-view-grid"></i>
                <span>Tables</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="tables-basic.html">Basic Tables</a></li>
                <li><a href="tables-datatable.html">Data Tables</a></li>
                <li><a href="tables-responsive.html">Responsive Tables</a></li>
                <li><a href="tables-editable.html">Editable Tables</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-face-smile"></i>
                <span>Icons</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="icons-material.html">Material Design</a></li>
                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                <li><a href="icons-ion.html">Ion Icons</a></li>
                <li><a href="icons-themify.html">Themify Icons</a></li>
                <li><a href="icons-dripicons.html">Dripicons</a></li>
                <li><a href="icons-typicons.html">Typicons Icons</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="waves-effect">
                <i class="ti-location-pin"></i>
                <span class="badge rounded-pill bg-danger float-end">2</span>
                <span>Maps</span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="maps-google.html"> Google Map</a></li>
                <li><a href="maps-vector.html"> Vector Map</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-layout"></i>
                <span>Layouts</span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                  <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                    <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                    <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                    <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                    <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                  <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-horizontal.html">Horizontal</a></li>
                    <li><a href="layouts-hori-topbar-light.html">Light Topbar</a></li>
                    <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-archive"></i>
                <span> Authentication </span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="pages-login.html">Login 1</a></li>
                <li><a href="pages-login-2.html">Login 2</a></li>
                <li><a href="pages-register.html">Register 1</a></li>
                <li><a href="pages-register-2.html">Register 2</a></li>
                <li><a href="pages-recoverpw.html">Recover Password 1</a></li>
                <li><a href="pages-recoverpw-2.html">Recover Password 2</a></li>
                <li><a href="pages-lock-screen.html">Lock Screen 1</a></li>
                <li><a href="pages-lock-screen-2.html">Lock Screen 2</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-support"></i>
                <span> Extra Pages </span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="pages-timeline.html">Timeline</a></li>
                <li><a href="pages-invoice.html">Invoice</a></li>
                <li><a href="pages-directory.html">Directory</a></li>
                <li><a href="pages-starter.html">Starter Page</a></li>
                <li><a href="pages-404.html">Error 404</a></li>
                <li><a href="pages-500.html">Error 500</a></li>
                <li><a href="pages-pricing.html">Pricing</a></li>
                <li><a href="pages-gallery.html">Gallery</a></li>
                <li><a href="pages-profile.html">Profile</a></li>
                <li><a href="pages-maintenance.html">Maintenance</a></li>
                <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                <li><a href="pages-faq.html">FAQs</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-bookmark-alt"></i>
                <span> Email Templates </span>
              </a>
              <ul class="sub-menu" aria-expanded="false">
                <li><a href="email-template-basic.html">Basic Action Email</a></li>
                <li><a href="email-template-alert.html">Alert Email</a></li>
                <li><a href="email-template-billing.html">Billing Email</a></li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ti-more"></i>
                <span>Multi Level</span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li><a href="javascript: void(0);">Level 1.1</a></li>
                <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                  <ul class="sub-menu" aria-expanded="true">
                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
      <div class="page-content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      <!-- End Page-content -->

      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script> Veltrix<span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->

  <!-- Right Sidebar -->
  <div class="right-bar">
    <div data-simplebar class="h-100">
      <div class="rightbar-title px-3 py-4">
        <a href="javascript:void(0);" class="right-bar-toggle float-end">
          <i class="mdi mdi-close noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
      </div>

      <!-- Settings -->
      <hr class="mt-0" />
      <h6 class="text-center">Choose Layouts</h6>

      <div class="p-4">
        <div class="mb-2">
          <img src="{{ asset('cssAdmin/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="form-check form-switch mb-3">
          <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
          <label class="form-check-label" for="light-mode-switch">Light Mode</label>
        </div>

        <div class="mb-2">
          <img src="{{ asset('cssAdmin/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="form-check form-switch mb-3">
          <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="asset/css/bootstrap-dark.min.html" data-appStyle="asset/css/app-dark.min.html" />
          <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
        </div>

        <div class="mb-2">
          <img src="{{ asset('cssAdmin/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="form-check form-switch mb-5">
          <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="asset/css/app-rtl.min.css" />
          <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
        </div>
        <div class="d-grid">
          <a href="https://1.envato.market/grNDB" class="btn btn-primary mt-3" target="_blank"><i class="mdi mdi-cart me-1"></i> Purchase Now</a>
        </div>
      </div>

    </div>
    <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('cssAdmin/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('cssAdmin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('cssAdmin/libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('cssAdmin/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('cssAdmin/libs/node-waves/waves.min.js') }}"></script>

  <!-- Peity chart-->
  <script src="{{ asset('cssAdmin/libs/peity/jquery.peity.min.js') }}"></script>

  <!-- Plugin Js-->
  <script src="{{ asset('cssAdmin/libs/chartist/chartist.min.js') }}"></script>
  <script src="{{ asset('cssAdmin/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>

  <script src="{{ asset('cssAdmin/js/pages/dashboard.init.js') }}"></script>

  <script src="{{ asset('cssAdmin/js/app.js') }}"></script>

</body>

</html>