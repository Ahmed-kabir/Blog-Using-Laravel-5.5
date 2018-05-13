<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta charset="utf-8"/>
        <meta name="description" content="">
        <meta name="author" content="">

        <title>CoolBlue</title>

        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('kabir/css/coolblue.css')}}" />

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('kabir/js/jquery-1.6.1.min.js')}}"><\/script>')</script>

        <script src="{{asset('kabir/js/scrollToTop.js')}}"></script>

    </head>

    <body id="top">

        <!--header -->
        <div id="header-wrap"><header>

                <hgroup>
                    <h1><a href="index.html">Coolblue</a></h1>
                    <h3>Just Another Styleshout Template</h3>
                </hgroup>

                @include('frontend.include.menu')

                @include('frontend.include.searachbar')

                <!--/header-->
            </header></div>

        <!-- content-wrap -->
        <div id="content-wrap">

            <!-- content -->
            <div id="content" class="clearfix">

                <!-- main -->
                @yield('kabir')

                <!-- sidebar -->
                <div id="sidebar">

                     @include('frontend.include.aboutme')


                    @include('frontend.include.slidebar')

                     @include('frontend.include.sponsor')
                     
                     

                    @include('frontend.include.mostpopular')

                    <!-- /sidebar -->
                </div>

                <!-- content -->
            </div>

            <!-- /content-out -->
        </div>

        <!-- extra -->
        @include('frontend.include.footer')

        <!-- footer -->
        <footer>

            <p class="footer-left">
                &copy; 2011 Copyright Info &nbsp; &nbsp; &nbsp;
                Design by <a href="http://www.styleshout.com/">styleshout</a>
            </p>

            <p class="footer-right">
                <a href="index.html">Home</a> |
                <a href="index.html">Sitemap</a> |
                <a href="index.html">RSS Feed</a> |
                <a href="#top" class="back-to-top">Back to Top</a>
            </p>

            <!-- /footer -->
        </footer>

    </body>
</html>
