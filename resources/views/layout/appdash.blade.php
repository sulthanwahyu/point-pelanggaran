<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Uji Level</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('images/tb.png')}}">
    <link rel="stylesheet" href="{{ asset ('vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{ asset('vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    
    <!-- Datatable -->
    <link href="{{ asset ('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

    
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  

{{-- <link href="{{ asset('focus-2/css/app.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



</head>

<body>

    <!--*******
        Preloader start
    ********-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******
        Preloader end
    ********-->


    <!--************
        Main wrapper start
    *************-->
    <div id="main-wrapper">

        <!--************
            Nav header start
        *************-->
        <div class="nav-header bg-dark">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{asset('images/tb.png')}}" alt="">
                <img class="logo-compact" src="{{asset('focus-2/images/logo-text.png')}}" alt="">
                {{-- <img class="brand-title" src="{{asset('focus-2/images/logo-text.png')}}" alt=""> --}}
                <h1 class="brand-title" style="color: white;font-size:20px;padding-left:2px;padding-top:10px">Starbhak</h1>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--************
            Nav header end
        *************-->

        <!--************
            Header start
        *************-->
        <div class="header bg-danger">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <a style="text-decoration: none;color:white" href="/">Home</a>
                            <a style="text-decoration: none;color:white;padding-left:7px" href="/guru">Guru</a>
                            <a style="text-decoration: none;color:white;padding-left:7px" href="/siswa">Siswa</a>
                            <a style="text-decoration: none;color:white;padding-left:7px" href="/pelanggaran">Pelanggaran</a>
                            {{-- <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div> --}}
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--************
            Header end ti-comment-alt
        *************-->

        <!--************
            Sidebar start
        *************-->
        <div class="quixnav bg-danger">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first text-white-50" class="text-light">Main Menu</li>
      
                            <li><a href="/"><i class="icon icon-home "></i><span class="nav-text">Dashboard</span></a></li>
                    <li class="nav-label text-white-50">Table</li>
                    <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25 "></i><span class="nav-text">Table</span></a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/guru" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Guru</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="/siswa" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Siswa</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="/pelanggaran" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Pelanggaran</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="/laporan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Transaksi</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="/kelas" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Kelas</p>
                              </a>
                            </li>
                            <li class="nav-item">
                                <a href="/jurusan" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Table Jurusan</p>
                                </a>
                              </li>
                          </ul>
                        {{-- <ul aria-expanded="false">
                            <li><a href="/guru">Table Guru</a></li>
                            <li><a href="/siswa">Table Siswa</a></li>
                            <li><a href="/pelanggaran">Table Pelanggaran</a></li> --}}
                            {{-- <li><a href="/laporan">Table Laporan</a></li>
                            <li><a href="/kelas">Table Kelas</a></li>
                            <li><a href="/jurusan">Table Jurusan</a></li>
                        </ul> --}}
                    </li>

                    {{-- <li class="nav-label text-white-50">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>


        </div>
        <!--************
            Sidebar end
        *************-->
@yield('content')

<!--************
            Footer start
        *************-->
        {{-- <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div> --}}
        <!--************
            Footer end
        *************-->

        <!--************
           Support ticket button start
        *************-->

        <!--************
           Support ticket button end
        *************-->


    </div>
    <!--************
        Main wrapper end
    *************-->

    <!--************
        Scripts
    *************-->
    <!-- Required vendors -->
    <script src="{{asset('focus-2/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('focus-2/js/quixnav-init.js')}}"></script>
    <script src="{{asset('focus-2/js/custom.min.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{asset('focus-2/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('focus-2/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('focus-2/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('focus-2/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('focus-2/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('focus-2/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('focus-2/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('focus-2/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('focus-2/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('focus-2/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('focus-2/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{asset('focus-2/js/dashboard/dashboard-1.js')}}"></script>

    <!-- Required vendors -->
        <script src="{{asset('focus-2/vendor/global/global.min.js')}}"></script>
        <script src="{{asset('focus-2/js/quixnav-init.js')}}"></script>
        <script src="{{asset('focus-2/js/custom.min.js')}}"></script>

    <!-- Required vendors -->
    <script src="{{ asset ('vendor/global/global.min.js')}}"></script>
    <script src="{{ asset ('js/quixnav-init.js')}}"></script>
    <script src="{{ asset ('js/custom.min.js')}}"></script>
        
    
    
        <!-- Datatable -->
    <script src="{{ asset ('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset ('js/plugins-init/datatables.init.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        @include('sweetalert::alert')

        @yield('scripts')
</body>

</html>