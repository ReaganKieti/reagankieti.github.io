<!doctype html>
<html class="no-js" lang="zxx">

@include('include.head')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    @include('include.header')
    <!-- header-end -->

    <!-- content  -->
    @yield('content')
    <!--/ content  -->
    <div class="counter_area">
        <!--/ counter  -->
        @include('include.counter')
        <!--/ counter end  -->

        <!-- testimonial_area  -->
        @include('include.testimonials')
        <!-- /testimonial_area  -->

        <!-- /Discuss Projects  -->
        @include('include.discuss_projects')
        <!-- /Discuss Projects end  -->

        <!-- footer start -->
        @include('include.footer')
        <!--/ footer end  -->

        <!-- Scripts here -->
        @include('include.script')
        <!--/ Scripts End  -->
    </div>
</body>

</html>
