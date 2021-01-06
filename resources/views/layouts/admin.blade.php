<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/A2.png') }}">
    <title>Admin Page</title>
    <!-- chartist CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{ asset('dist/css/pages/dashboard1.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- This page CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/ckeditor/samples/css/samples.css')}}">
    <link href="{{ asset('dist/css/pages/data-table.css') }}" rel="stylesheet">
    
    <!-- This page CSS -->
    <link href="{{ asset('dist/css/pages/form-page.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/prism/prism.css')}}" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Loading</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="{{ asset('assets/images/A2.png') }}" style="width:50px;">
                            <!-- <img class="dark-logo" src="{{ asset('assets/images/logo-icon.png') }}"> -->
                        </span>
                        <span class="text">
                            <img class="light-logo" src="{{ asset('assets/images/text.png') }}" style="width:140px; height:30px; margin-top:22px;">
                            <!-- <img class="dark-logo" src="{{ asset('assets/images/logo-text.png') }}"> -->
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        
                        <li class="search-box">
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="right">
                        <!-- ============================================================== -->
                        <!-- Profile icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="circle profile-pic"></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="{{ asset('assets/images/users/2.jpg') }}" alt="user"></div>
                                        <div class="u-text">
                                            <h4>{{ Auth::user()->name }}</h4>
                                            <p>{{ Auth::user()->email }}</p>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="material-icons">power_settings_new</i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>

                                <!-- <li><a href="{{ route('logout') }}"><i class="material-icons">power_settings_new</i> Logout</a></li> -->

                            </ul>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                
                <li>
                    <ul class="collapsible">
                        <li>
                            <a href="{{ route('home')}}" class="collapsible-header"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>
                        </li>   
                        <li>
                            <a href="{{ url('slider')}}" class="collapsible-header"><i class="material-icons">clear_all</i><span class="hide-menu"> Slider</span></a>
                        </li>
                        <li>
                            <a href="{{ url('about')}}" class="collapsible-header"><i class="material-icons">library_books</i><span class="hide-menu"> Profil </span></a>
                        </li>
                        <li>
                            <a href="{{ url('guru')}}" class="collapsible-header"><i class="material-icons">perm_identity</i><span class="hide-menu">Guru</span></a>
                        </li>  
                        <li>
                            <a href="{{ url('siswa')}}" class="collapsible-header"><i class="material-icons">school</i><span class="hide-menu">Prestasi Siswa</span></a>
                        </li>   
                        <!-- <li>
                            <a href="{{ url('partner')}}" class="collapsible-header"><i class="material-icons">rate_review</i><span class="hide-menu">Our Client</span></a>
                        </li> -->

                     
                        <li>
                            <a href="{{ url('berita')}}" class="collapsible-header"><i class="material-icons">announcement</i><span> Berita</span></a>
                        </li>
                        <li>
                            <a href="{{ url('pengumuman')}}" class="collapsible-header"><i class="material-icons">notification_important</i><span> Pengumuman</span></a>
                        </li>
                        <li>
                            <a href="{{ url('agenda')}}" class="collapsible-header"><i class="material-icons">view_agenda</i><span> Agenda</span></a>
                        </li>
                        <li>
                            <a href="{{ url('galeri')}}" class="collapsible-header"><i class="material-icons">collections</i><span class="hide-menu">Gallery</span></a>
                        </li>
                        <li>
                            <a href="{{ url('download')}}" class="collapsible-header"><i class="material-icons">cloud_download</i><span class="hide-menu">Download</span></a>
                        </li>
                        <li>
                            <a href="{{ url('kontak')}}" class="collapsible-header"><i class="material-icons">local_phone</i><span class="hide-menu"> Contact Us</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- == Main content -->
               @yield('content')
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>

    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script>
    <script src="{{ asset('assets/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/libs/ckeditor/samples/js/sample.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/jquery.repeater/repeater-init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/jquery.repeater/dff.js') }}"></script>
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
    
        <!-- Editable -->
        <script src="{{ asset('assets/extra-libs/jquery-datatables-editable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{ asset('assets/extra-libs/tiny-editable/numeric-input-example.js')}}"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(function() {
        $('#editable-datatable').DataTable();
    });
    </script>
</body>

</html>