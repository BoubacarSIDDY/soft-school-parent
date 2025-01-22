<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>{{env('APP_NAME')}} | {{ $title ?? '' }}</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="DexignZone">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="keywords"
              content="YashAdmin, sales Admin Dashboard, Bootstrap Template, Web Application, sales Management, Responsive Design, User Experience, Customizable, Modern UI, Dashboard Template, Admin Panel, Bootstrap 5, HTML5, CSS3, JavaScript, Analytics, Products, Admin Template, UI Kit, SASS, SCSS, CRM, Analytics, Responsive Dashboard, responsive admin dashboard, sales dashboard, ui kit, web app, Admin Dashboard, Template, Admin, CMS pages, Authentication, FrontEnd Integration, Web Application UI, Bootstrap Framework, User Interface Kit, Financial Dashboard, SASS Integration, Customizable Template, Product Management, HTML5/CSS3, CRM Dashboard, Analytics Dashboard, Admin Dashboard UI, Mobile-Friendly Design, UI Components, Dashboard Widgets, Dashboard Framework, Data Visualization, User Experience (UX), Dashboard Widgets, Real-time Analytics, Cross-Browser Compatibility, Interactive Charts, Product Processing, Performance Optimization, Multi-Purpose Template, Efficient Admin Tools, Task Management, Modern Web Technologies, Product Tracking, Responsive Tables, Dashboard Widgets, Invoice Management, Access Control, Modular Design, Product History, Trend Analysis, User-Friendly Interface">

        <meta name="description"
              content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">

        <meta property="og:title" content="YashAdmin -Sales Management System Admin Dashboard Bootstrap HTML Template | DexignZone">
        <meta property="og:description"
              content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">
        <meta property="og:image" content="https://yashadmin.dexignzone.com/xhtml/social-image.png">

        <meta name="format-detection" content="telephone=no">

        <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/datatables/css/buttons.dataTables.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

        <!-- Style css -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

        <link href="{{asset('assets/icons/fontawesome/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/icons/material-design-iconic-font/css/materialdesignicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/icons/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/icons/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/icons/flaticon/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/icons/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- autres fichiers à css à définir -->
        @yield('css')
    </head>
    <body>
        <!--*******************
                Preloader start
            ********************-->
        <div id="preloader">
            <div>
                <img src="{{asset('assets/images/loader1.gif')}}" alt="">
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->

        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">
            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
               <h6 class="text-success fw-bold">DAR AL QURAN AL KARIM</h6>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.7468 5.58925C11.0722 5.26381 11.0722 4.73617 10.7468 4.41073C10.4213 4.0853 9.89369 4.0853 9.56826 4.41073L4.56826 9.41073C4.25277 9.72622 4.24174 10.2342 4.54322 10.5631L9.12655 15.5631C9.43754 15.9024 9.96468 15.9253 10.3039 15.6143C10.6432 15.3033 10.6661 14.7762 10.3551 14.4369L6.31096 10.0251L10.7468 5.58925Z" fill="#452B90"/>
                                <path opacity="0.3" d="M16.5801 5.58924C16.9056 5.26381 16.9056 4.73617 16.5801 4.41073C16.2547 4.0853 15.727 4.0853 15.4016 4.41073L10.4016 9.41073C10.0861 9.72622 10.0751 10.2342 10.3766 10.5631L14.9599 15.5631C15.2709 15.9024 15.798 15.9253 16.1373 15.6143C16.4766 15.3033 16.4995 14.7762 16.1885 14.4369L12.1443 10.0251L16.5801 5.58924Z" fill="#452B90"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
            @include('includes.header', ['pageTitle'=>$title??''])
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            @include('includes.sidebar')
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!--**********************************
                Content body end
            ***********************************-->

            <!--**********************************
                Footer start
            ***********************************-->
            @include('includes.footer')
            <!--**********************************
                Footer end
            ***********************************-->
        </div>
        <!--**********************************
            Main wrapper end
        ***********************************-->
        <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.min.js')}}"></script>
        <script src="{{asset('assets/js/deznav-init.js')}}"></script>
        @yield('js')
    </body>
</html>
