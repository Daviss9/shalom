<!DOCTYPE html>
<html class="loading semi-dark-layout" lang="es" data-layout="semi-dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->
    @include('layouts.theme.head')
<!-- END: Head-->
    
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('layouts.theme.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('layouts.theme.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts.theme.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    @include('layouts.theme.scripts')
    <!-- BEGIN Vendor JS-->

</body>
<!-- END: Body-->

</html>