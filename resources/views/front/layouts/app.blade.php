<html>
    @include('front.layouts.partials.head')

    <body class="home-one">
        <div class="page-wrapper">

            <!-- Preloader -->
            <!-- <div class="preloader"></div> -->

            @include('front.layouts.partials.header')

            @include('front.layouts.partials.navbar')

            @yield('content')

            @include('front.layouts.partials.footer')
        </div>
    </body>
</html>
