<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>OTMS | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    @include('admin.includes.css')
    @yield('style')


</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
<!-- Begin page -->
<div class="wrapper">
    @include('admin.includes.leftsidebar')



    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            @include('admin.includes.topbar')

            <!-- Start Content-->
            <div class="container-fluid">

                @yield('body')

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        @include('admin.includes.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('admin.includes.rightsidebar')
<!-- /End-bar -->

@include('admin.includes.scripts')
@yield('script')
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 14:57:36 GMT -->
</html>

