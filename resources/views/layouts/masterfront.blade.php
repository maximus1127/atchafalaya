<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<head>
    <!-- Basic need -->
    <title>Atchafalaya Homes</title>

    <meta charset="UTF-8">
    <meta name="description" content="Atchafalaya Homes - The Proof is on the Roof!">
    <!--<meta name="keywords" content="">
	<meta name="author" content="">-->
    <link rel="profile" href="">
    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone-no">

    <!-- External Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:700,800|Roboto:400,500,700" rel="stylesheet">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{asset('/css\plugins.css')}}">
    <link rel="stylesheet" href="{{asset('/css\style.css')}}">
    <link href="{{asset('/css\footer.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/assets/components/gallery/css/web.css')}}" type="text/css" />

    @yield('header-styles')
</head>

<body>

    <header class="header header--blue header--top">
        <div class="container">
            <div class="topbar">
                <ul class="topbar__contact">

                    <li class="yalla"><strong>{{$site->city}}</strong>
                    </li>
                    <li><span class="ion-ios-telephone-outline topbar__icon"></span><a href="#" class="topbar__link">{{$site->phone_1_number}}</a></li>
                    <li><span class="ion-ios-location-outline topbar__icon"></span><a href="#" class="topbar__link">
                            {{$site->address}},
                            {{$site->city}},
                            {{$site->state}}
                            {{$site->zip}}
                        </a></li>

                    <li> <a href="{{$site->facebook}}"><i class="fab fa-facebook fa-2x" style="color:#DEDEDE;"></i></a> <a href="{{$site->twitter}}"><i class="fab fa-twitter-square fa-2x"
                              style="color:#DEDEDE;"></i></a></li>
                    <li></li>

                </ul><!-- .topbar__contact -->
            </div><!-- .topbar -->

            <div class="header__main">
                <div class="header__logo">
                    <a href="/">
                        <h1 class="screen-reader-text">Atchafalaya Homes</h1>
                        <img src="{{asset('/images\uploads\logo.png')}}" alt="Atchafalaya Homes">
                    </a>
                </div><!-- .header__main -->

                <div class="nav-mobile">
                    <a href="#" class="nav-toggle">
                        <span></span>
                    </a><!-- .nav-toggle -->
                </div><!-- .nav-mobile -->

                <div class="header__menu header__menu--v1">
                    <ul class="header__nav">
                        <li class="header__nav-item">
                            <a href="/" class="header__nav-link">Home</a>

                        </li>
                        <li class="header__nav-item">
                            <a href="/about-us" class="header__nav-link">About Us</a>
                            <ul>
                                <li><a href="/construction">Construction</a></li>
                                <li><a href="/financing">Financing</a></li>
                                <li><a href="/warranties">Warranties</a></li>
                            </ul>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" onclick="return false" class="header__nav-link">Floor Plans</a>
                            <ul>
                              @foreach(App\Type::all() as $type)
                                <li><a href="{{route('view-models', $type->id)}}">{{$type->name}}</a></li>
                              @endforeach
                            </ul>
                        </li>
                        {{-- <li class="header__nav-item">
                            <a href="index-9.html?id=17" class="header__nav-link">Gallery</a>
                            <ul>
                                <li><a href="index-10.html?id=21">Exterior</a></li>
                                <li><a href="index-11.html?id=22">Kitchen</a></li>
                                <li><a href="index-12.html?id=23">Bathroom</a></li>
                                <li><a href="index-13.html?id=24">Closet</a></li>
                                <li><a href="index-14.html?id=27">Living Room</a></li>
                            </ul>
                        </li> --}}
                        <li class="header__nav-item">
                            <a href="/contact" class="header__nav-link">Contact Us</a>

                        </li>
                    </ul>

                    <!--<ul class="topbar__user">
					<li><a href="#" class="topbar__link">Sign In</a></li>
					<li><a href="#" class="topbar__link">Join</a></li>
				</ul>-->
                    <a href="https://dochub.com/josh-b6k4a5/6gN3WOb/atchafalaya-homes-credit-application?dt=5wZYsKu2pHe_sxgQ7EX8" class="header__cta">Get Approved Today!</a>
                    <!--<a href="index.php?id=72" class="header__cta">Get Approved Today!</a>-->
                    <!--<a href="72" class="header__cta">Get Approved Today!</a>-->
                </div><!-- .header__menu -->
            </div><!-- .header__main -->
        </div><!-- .container -->
    </header><!-- .header -->


    @yield('content')

    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 newsletter__content">
                    <img src="{{asset('/images\icon_mail.png')}}" alt="Newsletter" class="newsletter__icon">
                    <div class="newsletter__text-content">
                        <h2 class="newsletter__title">Newsletter</h2>
                        <p class="newsletter__desc">Sign up for our newsletter to get specials and more from us</p>
                    </div>
                </div><!-- .col -->

                <div class="col-md-6">
                    <form action="https://atchafalayahomes.us17.list-manage.com/subscribe/post?u=0076a8fb0857327fd7a4bf59d&amp;id=eb30841f39" class="newsletter__form" method="POST">
                        <input type="email" name="EMAIL" class="newsletter__field" placeholder="Enter Your E-mail">
                        <input type="submit" value="Subscribe" class="newsletter__submit">
                    </form>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .newsletter -->
    <footer class="footer">
        <div class="footer__links">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 footer__links-single">
                        <h3 class="footer__title">Location</h3>
                        <ul class="footer__list">


                            <li>
                                <span class="footer--highlighted">Address:</span>
                                <a href="#">
                                  {{$site->address}},
                                  {{$site->city}},
                                  {{$site->state}}
                                  {{$site->zip}}
                                </a>
                            </li>
                            <li><span class="footer--highlighted">Email:</span> <a href="mailto:{{$site->general_manager_email}}">{{$site->general_manager_email}}</a></li>
                            <li><span class="footer--highlighted">Phone:</span> <a href="#">{{$site->phone_1_number}}</a></li>
                        </ul><!-- .footer__list -->

                        <a href="{{$site->facebook}}"><i class="fab fa-facebook fa-2x" style="color:#777676"></i></a>
                        <a href="{{$site->twitter}}"><i class="fab fa-twitter-square fa-2x" style="color:#777676"></i></a>

                    </div><!-- .col -->

                    <div class="col-sm-4 col-md-3 footer__links-single">
                        <ul class="footer__list">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">About Us</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                    </div><!-- .col -->
                    <img src="{{asset('/images\uploads\logo_dark.png')}}" alt="ReaLand">
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer__links -->

        <!--     <div class="footer__main">
    <div class="container">
        <div class="footer__logo">
            <h1 class="screen-reader-text">ReaLand</h1>
            <img src="images/uploads/logo_dark.png" alt="ReaLand">
        </div>.footer__logo


    </div>.container
</div>.footer__main -->

        <div class="footer__copyright" style="height: 50px;">
            <div class="container">
                <div class="footer__copyright-inner" style="margin: auto">
                    <p class="footer__copyright-desc">
                        &copy; {{Carbon\Carbon::now()->format('Y')}} <span class="footer--highlighted">Atchafalaya Homes</span>
                    </p>

                </div><!-- .footer__copyright-inner -->
            </div><!-- .container -->
        </div><!-- .footer__copyright -->
    </footer><!-- .footer -->

    <div class="poweredby" style="margin-top: -30px; padding: 0;">
        <div class="logo">
            <a href="https://mysearchnerds.com" target="_blank"><img src="{{asset('/images\logo_search_nerds.jpg')}}" alt="My Search Nerds - Web Design in Broussard, Lafayette, Youngsville" style="width: 130px;"></a>
        </div>
        {{-- <div class="links">
            <ul>
                <li><a href="https://mysearchnerds.com" target="_blank">Web Design</a></li>
            </ul>
        </div> --}}
    </div>
    <!--/ poweredby -->

    <!-- JS files -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{asset('/js\plugins.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDyCxHyc8z9gMA5IlipXpt0c33Ajzqix4"></script>
    {{-- <script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script> --}}
    <script src="{{asset('/js\custom.js')}}"></script>

    <script src="//app.lassocrm.com/analytics.js" type="text/javascript"></script>
    <script type="text/javascript">
        <!--
        var LassoCRM = LassoCRM || {};
        (function(ns) {
            ns.tracker = new LassoAnalytics('LAS-453047-01');
        })(LassoCRM);
        try {
            LassoCRM.tracker.setTrackingDomain("//app.lassocrm.com");
            LassoCRM.tracker.init(); // initializes the tracker
            LassoCRM.tracker.track(); // track() records the page visit with the current page title, to record multiple visits call repeatedly.
            //@--
        } catch (error) {}
        -->
    </script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-125186805-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125186805-1');
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bea390794de12c7"></script>
    @yield('footer-scripts')

</body>

</html>
