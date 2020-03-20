<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpg') }}">
    
    @include('layouts.css')

    <!-- <style type="text/css">
        
        }
    </style> -->
    
</head>
<body>
    <div id="app">
        <div class="" style="min-height: 100% !important; position: relative !important;">
            @include('layouts.admin.header')
            
            
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
<div class="sidebar-content">
    <!--- Sidemenu -->
    <div id="sidebar-menu" class="slimscroll-menu">
        <ul class="metismenu" id="menu-bar">
            <li class="menu-title">About</li>

            <li>
                <router-link :to="{name: 'home'}">
                    <i data-feather="home"></i>
                    <span> Escritorio </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'notificaciones'}">
                    <i data-feather="bell"></i>
                    <span> Notificaciones </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'noticias'}">
                    <i data-feather="twitch"></i>
                    <span> Noticias </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'productosServicios'}">
                    <i data-feather="truck"></i>
                    <span> Productos y servicios </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'estacionamientos'}">
                    <i data-feather="share"></i>
                    <span> Estacionamiento </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'inmuebles'}">
                    <i data-feather="map"></i>
                    <span> Inmuebles </span>
                </router-link>
            </li>

            <li>
                <router-link :to="{name: 'residentes'}">
                    <i data-feather="users"></i>
                    <span> Residentes </span>
                </router-link>

            <li class="menu-title">Pagos </li>

            <li>
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span> Pagos </span>
                </a>
            </li>

            <!-- <li>
                <a href="#">
                    <i data-feather="credit-card"></i>
                    <span> Arriendos </span>
                </a>
            </li> -->

            <li>
                <a href="#">
                    <i data-feather="dollar-sign"></i>
                    <span> Multas y recargas </span>
                </a>
            </li>

            <li class="menu-title">Configuración </li>
            
            <li>
                <a href="angular-doc.html">
                    <i data-feather="users"></i>
                    <span> Usuarios </span>
                </a>
            </li>

            <li>
                <a href="laravel-doc.html">
                    <i data-feather="user"></i>
                    <span> Ver perfil </span>
                </a>
            </li>

            <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i data-feather="power"></i>
                    <span> Salir </span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>


        </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
</div>
<!-- Sidebar -left -->

</div>


<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <h4 class="mb-1 mt-0">ControlApp <label class="badge badge-soft-danger">v1.0.1</label>
                                </h4>
                            </div>
                        </div>
                        <div>
                            
                            <app></app>
                        </div>
                        
                        <!-- <example-component></example-component> -->
                        <!-- <residentes></residentes> -->
                        <!-- @yield('breadcomb')
                        @yield('content') -->

                        <!-- <div class="row" id="intro">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mt-0 header-title">Introduction</h5>
                                        
                                        <p class="font-size-15">
                                            Shreyu is a fully featured premium admin and dashboard template, built using Bootstrap 4.3.1. It
                                            comes with tons of carefully designed flexible components, UI elements, application pages, etc. It is fully
                                            responsive and works across all modern/supported browsers, devices. The well structured code will allow easy
                                            customization and helps to build a modern web application with great speed. Shreyu can be used to build any modern
                                            web application including a saas based interface, custom admin panels, dashboard, CRM, CMS, e-commerce panel, etc.
                                        </p>

                                        <h5 class="mt-4 header-title">Highlights</h5>

                                        <ul class="font-size-14">
                                            <li>Built on latest bootstrap (v4.3.1)</li>
                                            <li>Multiple navigation layouts and navigation color schemes</li>
                                            <li>Easy customizations with extensive use of SCSS variables</li>
                                            <li>Fully responsive and works across all modern/supported browsers, devices</li>
                                            <li>Easy development and tooling with Gulp workflow</li>
                                            <li>
                                                A fully functional versions available with <strong>Angular</strong>, <strong>React</strong>,
                                                <strong>Vue</strong> and <strong>Laravel</strong>
                                            </li>
                                        </ul>

                                        <p class="font-size-15">
                                            This documentation
                                            is guidelines for all users who can even be a beginner or experienced web
                                            developer.
                                        </p>

                                        <p class="border-top pt-3 font-size-15">
                                            Thank you very much for considering Shreyu :)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

            </div>


            
        </div>
    </div>
    

    @include('layouts.admin.footer')
    <!-- Scripts -->
        @include('layouts.scripts')
    @section('script')
        <script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    @endsection
</body>
</html>
