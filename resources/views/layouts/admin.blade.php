<!DOCTYPE html>
<html>

    <head>
        <meta name="csrf-token" content="{{--csrf_token()--}}" />
        <meta name="api-token" content="{{--auth()->user()->api_token--}}" />
        @yield('styles')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed text-sm">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
                @yield('navbar')
            </nav>
            <!-- Navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevaprimarytion-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="/dist/img/nwp-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">Graduate MS</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    @yield('sidebar')
                    <!-- /.sidebar -->
                </div>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                @yield('footer')
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @yield('scripts')
        @yield('pageScripts')
    </body>

</html>
