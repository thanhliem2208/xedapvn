<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 05:34:23 GMT -->
  <!-- Head-->
      @include('admin.Layouts.head')
    <!--End Head -->

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        @include('admin.Layouts.navbar-header')
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
            @include('admin.Layouts.navbar-menu')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <!-- Page-content -->
            <div class="page-content">
                <div class="container-fluid">
                    <!--Phần thân của tamplate-->
                    
                    @yield('body')

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
             <!--  Footer-->
                @include('admin.Layouts.footer')
            <!-- end Footer-->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


    <!-- JAVASCRIPT -->
    <script src="{{asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('backend/libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('backend/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{asset('backend/js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('backend/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{asset('backend/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('backend/libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!--Swiper slider js-->
    <script src="{{asset('backend/libs/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{asset('backend/js/pages/dashboard-ecommerce.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/js/app.js')}}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 05:35:19 GMT -->
</html>