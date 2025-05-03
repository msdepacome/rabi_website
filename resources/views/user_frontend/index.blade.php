<!DOCTYPE html>
<html lang="en">

<head>
    @include('user_frontend.layouts.head')
</head>

<body>
    @include('user_frontend.layouts.preloader')
    <!-- /.preloader -->
    <div class="page-wrapper">

        @include('user_frontend.layouts.topbar')
        <!-- /.topbar-one -->
        @include('user_frontend.layouts.header')
        <!-- /.header-one -->

        <!-- banner-section -->
        @include('user_frontend.components.banner-section')
        <!-- banner-section end -->

        <!-- services-section -->
        @include('user_frontend.components.services-section')
        <!-- services-section end -->

        <!-- about-section -->
        @include('user_frontend.components.about-section')
        <!-- about-section end -->

        <!-- blog-grid -->
        @include('user_frontend.components.blog-grid__home')
        <!-- /.blog-grid -->

          <!-- team-three -->
          @include('user_frontend.components.team-three-carousel')
          <!-- /.team-three -->
          
        <!-- contact-one -->
        @include('user_frontend.components.contact-one__home')
        <!-- /.contact-one -->

        @include('user_frontend.layouts.footer')
        <!-- /.footer -->

    </div><!-- /.page-wrapper -->

    @include('user_frontend.layouts.scroll-to')
    <!-- /.scroll-to -->

    @include('user_frontend.layouts.side-menu__block')
    <!-- /.side-menu__block -->

    <!-- plugins Scripts -->
    @include('user_frontend.layouts.scripts-js')

</body>

</html>
