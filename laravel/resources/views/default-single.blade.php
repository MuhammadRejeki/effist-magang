<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Developer Test | Magang</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ url('assets/vendors/choices.js/choices.min.css') }}" />

    <link rel="stylesheet" href="{{ url('assets/css/app-pro.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app-style.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">

    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
</head>

<body class="dark">
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#"><img src="{{ url('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <!-- <li class="sidebar-title">Menu</li> -->

                        <li class="sidebar-item active">
                            <a href="{{ url('/home') }}" class="sidebar-link">
                                <i class="bi bi-laptop"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-stack"></i>
                                <span>Master Data</span>
                            </a>

                            <ul class="submenu">
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Users</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Employment status</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Company</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">News</a>
                                </li>
                            </ul>
                        </li>


                        <!-- <li class="sidebar-item active has-sub">
                            <a href="#" class="sidebar-link">
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Form Elements</span>
                            </a>

                            <ul class="submenu active">
                                <li class="submenu-item">
                                    <a href="form-element-input.html" class="submenu-link">Input</a>
                                </li>

                                <li class="submenu-item">
                                    <a href="form-element-input-group.html" class="submenu-link">Input Group</a>
                                </li>

                                <li class="submenu-item active">
                                    <a href="form-element-select.html" class="submenu-link">Select</a>
                                </li>

                            </ul>
                        </li> -->

                        <li class="sidebar-item">
                            <a href="{{ url('/logout') }}" class="sidebar-link">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <p class="text-subtitle mb-0">{{ date('l'); }}</p>
                            <p class="text-subtitle text-muted">
                                <i>{{ date('d M Y') }}</i>
                            </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/home') }}"> <i class="bi bi-laptop"></i> Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        *
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="free-name">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">*</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                **
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="free-name">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">*</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h6>**</h6>
                                                <p>
                                                    Use <code>.***</code> for code
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Multiple choices end -->
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p> Developer Magang Test 2023 &copy;</p>
                    </div>
                    <!-- <div class="float-end">
                        <p>
                            Created by Kiki
                        </p>
                    </div> -->
                </div>
            </footer>
        </div>
    </div>


    <!-- <script src="https://zuramai.github.io/mazer/demo/assets/static/js/pages/form-element-select.js"></script> -->

    <script src="{{ url('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendors/choices.js/choices.min.js') }}"></script>

    <script src="{{ url('assets/js/dark.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
</body>

</html>