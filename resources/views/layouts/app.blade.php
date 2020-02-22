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
    
</head>
<body>
    <div id="app">
        <div class="" style="min-height: 100% !important; position: relative !important;">
            @include('layouts.admin.header')
            
            @include('layouts.admin.menu')


            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row page-title">
                            <div class="col-md-12">
                                <h4 class="mb-1 mt-0">Dashboard <label class="badge badge-soft-danger">v1.0.1</label>
                                </h4>
                            </div>
                        </div>

                        @yield('breadcomb')
                        @yield('content')

                        <div class="row" id="intro">
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
                        </div>
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

            </div>


            
        </div>
    </div>
    

    @include('layouts.admin.footer')
    <!-- Scripts -->
    @include('layouts.scripts')
</body>
</html>
