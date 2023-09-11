<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a bootstrap & laravel admin dashboard template">
    <meta name="keywords"
          content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">
    <meta name="author" content="Themesbox17">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Milli Piyango Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('panel-assets/images/favicon.ico') }}">
    <!-- Start css -->


    <link href="{{ asset('panel-assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">
    <!-- Summernote css -->
    <link href="{{ asset('panel-assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">
    <!-- Code Mirror css -->
    <link href="{{ asset('panel-assets/plugins/code-mirror/codemirror.css') }}" rel="stylesheet">
    <link href="{{ asset('panel-assets/plugins/code-mirror/hopscotch.css') }}" rel="stylesheet">


    <link href="{{ asset('panel-assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet">

    <link href="{{ asset('panel-assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
    <link href="{{ asset('panel-assets/plugins/ion-rangeSlider/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel-assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel-assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet"
          type="text/css">
    <!-- Select2 css -->
    <link href="{{ asset('panel-assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('panel-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel-assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel-assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('panel-assets/css/style.css') }}" rel="stylesheet" type="text/css">


    @yield('css')
    <!-- End css -->
</head>
<body class="horizontal-layout">

<!-- Start Containerbar -->
    <!-- Start Rightbar -->
    <div class="rightbar">
        <!-- Start Topbar Mobile -->
        <div class="topbar-mobile">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="mobile-logobar">

                    </div>
                    <div class="mobile-togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="topbar-toggle-icon">
                                    <a class="topbar-toggle-hamburger" href="javascript:void(0);">
                                        <img src="{{ asset('panel-assets/images/svg-icon/horizontal.svg') }}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                        <img src="{{ asset('panel-assets/images/svg-icon/verticle.svg') }}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="menubar">
                                    <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                        <img src="{{ asset('panel-assets/images/svg-icon/collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="{{ asset('panel-assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Topbar -->
        <div class="topbar">
            <!-- Start container-fluid -->
            <div class="container-fluid">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="logobar">

                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                                <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit" id="button-addon2"><img src="{{ asset('panel-assets/images/svg-icon/search.svg') }}" class="img-fluid" alt="search"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('panel-assets/images/users/profile.svg') }}" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                        <h5>{{ auth()->user()->name }}</h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item">
                                                    <div class="userbox">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="{{ route('panel.logout') }}" class="profile-icon"><img src="{{ asset('panel-assets/images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item menubar-toggle">
                                    <div class="menubar">
                                        <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                            <img src="{{ asset('panel-assets/images/svg-icon/collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{ asset('panel-assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Topbar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <!-- Start container-fluid -->
            <div class="container-fluid">
                <!-- Start Horizontal Nav -->
                <nav class="horizontal-nav mobile-navbar fixed-navbar">
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="horizontal-menu">
                            <li class="scroll dropdown">
                                <a href="{{ route('panel.about') }}"><img src="{{ asset('panel-assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Hakkımızda ve İletişim</span></a>
                            </li>
                            <li class="scroll dropdown">
                                <a href="{{ route('panel.printed') }}"><img src="{{ asset('panel-assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Printed</span></a>
                            </li>
                            <li class="scroll dropdown">
                                <a href="{{ route('works.index') }}"><img src="{{ asset('panel-assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>İş Ortaklarımız</span></a>
                            </li>
                            <li class="scroll dropdown">
                                <a href="{{ route('our_works.index') }}"><img src="{{ asset('panel-assets/images/svg-icon/dashboard.svg') }}" class="img-fluid" alt="dashboard"><span>Yaptığımız İşler</span></a>
                            </li>

                        </ul>

                    </div>
                </nav>
                <!-- End Horizontal Nav -->
            </div>
            <!-- End container-fluid -->
        </div>
        <!-- End Navigationbar -->

@yield('body')



<!-- Start Footerbar -->
<div class="footerbar">
    <footer class="footer">
        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Milli Piyango - Tüm Hakları Saklıdır</p>
    </footer>
</div>

<!-- Start js -->

<script src="{{ asset('panel-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/popper.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/detect.js') }}"></script>
<script src="{{ asset('panel-assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('panel-assets/js/horizontal-menu.js') }}"></script>
<!-- Datatable js -->
<script src="{{ asset('panel-assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<!-- Switchery js -->
<script src="{{ asset('panel-assets/plugins/switchery/switchery.min.js') }}"></script>
<!-- Chart js -->
<script src="{{ asset('panel-assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- Select2 js -->
<script src="{{ asset('panel-assets/plugins/select2/select2.min.js') }}"></script>
<!-- Piety Chart js -->
<script src="{{ asset('panel-assets/plugins/peity/jquery.peity.min.js') }}"></script>
<!-- Vector Maps js -->
<script src="{{ asset('panel-assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('panel-assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<script src="{{ asset('panel-assets/plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('panel-assets/js/custom/custom-form-editor.js') }}"></script>
<script src="{{asset('panel-assets/plugins/code-mirror/codemirror.js')}}"></script>
<script src="{{asset('panel-assets/plugins/code-mirror/htmlmixed.js')}}"></script>
<script src="{{asset('panel-assets/plugins/code-mirror/css.js')}}"></script>
<script src="{{asset('panel-assets/plugins/code-mirror/javascript.js')}}"></script>
<script src="{{asset('panel-assets/plugins/code-mirror/xml.js')}}"></script>
<script src="{{ asset('panel-assets/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- Social js -->
<script src="{{ asset('panel-assets/js/custom/custom-dashboard-social.js') }}"></script>
<!-- Core js -->
<script src="{{ asset('panel-assets/js/core.js') }}"></script>
<!-- End js -->

@yield('js')

</body>
</html>
