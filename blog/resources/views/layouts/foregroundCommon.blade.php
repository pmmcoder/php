<!DOCTYPE html>
<html>
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- include the site stylesheet -->
{{--<link href='https://fonts.googleapis.com/css?family=Merriweather:300,400,700%7CPoppins:400,300,500,600,700' rel='stylesheet' type='text/css'>--}}
<!-- include the site stylesheet -->
    <link rel="stylesheet" href="/css/blog/font-awesome.min.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="/css/blog/bootstrap.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="/css/blog/animate.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="/css/blog/style.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="/css/blog/responsive.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="/css/blog/colors.css">
</head>
<body class="version-ii">
<div class="loader-holder">
    <div class="loader">
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
    </div>
</div>
<!-- main container of all the page elements -->
<div id="wrapper">
    <!-- w1 of the page -->
    <div class="w1">
        <!-- header of the page -->
        <header id="header" class="version-ii">
            <div class="container">
                <div class="row top-bar">
                    <!-- Top Nav of the page -->
                    <nav class="col-xs-12 col-sm-6 policy-nav">
                        <ul>
                            <li><a href="#">sitemap</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">support</a></li>
                        </ul>
                    </nav>
                    <!-- Top Nav of the page end -->
                    <div class="col-xs-12 col-sm-6 pull-right hidden-xs">
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            <li><a href="#"><span class="ico-facebook"></span></a></li>
                            <li><a href="#"><span class="ico-twitter"></span></a></li>
                            <li><a href="#"><span class="ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="ico-pinterest"></span></a></li>
                        </ul>
                        <!-- Social Network of the page end -->
                    </div>
                </div>
                <div class="row holder">
                    <div class="col-xs-3 col-sm-2">
                        <!-- Logo of the page -->
                        <div class="logo"><a href="{{ url('/') }}"><img src="/images/blog/logo2.png" alt="dot"></a></div>
                        <!-- Logo of the page end -->
                    </div>
                    <div class="col-xs-9 col-sm-10 nav-holder">
                        <!-- Nav of the page -->
                        <nav id="nav" class="navbar navbar-default">
                            <!-- Navbar Header of the page -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Navbar Header of the page end -->
                            <a href="#" class="pull-right icon-menu"><span class="ico-menu"></span></a>
                            <!-- Collapse of the page -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('archive') }}">Archive</a></li>
                                    <li><a href="{{ url('single') }}">Single</a></li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Collapse of the page end -->
                        </nav>
                        <!-- Nav of the page -->
                    </div>
                </div>
            </div>
            <!-- Side Nav of the page -->
            <nav class="side-nav">
                <a href="#" class="close"><i class="fa fa-times"></i></a>
                <!-- Widget of the page -->
                <h2>About me</h2>
                <section class="widget profile-widget">
                    <div class="profile-pic">
                        <a href="#">
                            <img src="/images/blog/img11.jpg" alt="John Aston">
                        </a>
                    </div>
                    <h3><a href="#">John Aston</a></h3>
                    <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
                    <!-- Social Network of the page -->
                    <ul class="social-networks">
                        <li><a href="#"><span class="icon ico-facebook"></span></a></li>
                        <li><a href="#"><span class="icon ico-twitter"></span></a></li>
                        <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
                        <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
                        <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
                    </ul>
                    <!-- Social Network of the page end -->
                </section>
                <!-- Widget of the page end -->
            </nav>
            <!-- Side Nav of the page end -->
        </header>
        <!-- Header of the page end -->
        <!-- Main of the page -->
@yield('contact')
@yield('archive')
@yield('index')
@yield('single')
        <!-- Main of the page end -->
        <aside class="aside version-ii container">
            <div class="row">
                <div class="col-xs-12 holder">
                    <div class="col">
                        <div class="logo"><a href="#"><img src="/images/blog/logo2.png" alt="dot"></a></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p>
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            <li><a href="#"><span class="ico-facebook"></span></a></li>
                            <li><a href="#"><span class="ico-twitter"></span></a></li>
                            <li><a href="#"><span class="ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="ico-pinterest"></span></a></li>
                        </ul>
                        <!-- Social Network of the page end -->
                    </div>
                    <!-- Footer Nav of the page -->
                    <nav class="col footer-nav">
                        <h3>Important Links</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </nav>
                    <!-- Footer Nav of the page end -->
                    <!-- Footer Nav of the page -->
                    <nav class="col footer-nav">
                        <h3>Popular Links</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </nav>
                    <!-- Footer Nav of the page end -->
                    <div class="col">
                        <h3>Subscribe to Newsletter</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
                        <!-- subscribe form of the page -->
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email here">
                                <button type="button" class="ico-send"></button>
                            </div>
                        </form>
                        <!-- subscribe form of the page end -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- Aside of the page end -->
        <!-- Footer of the page -->
        <footer id="footer" class="container version-ii">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <!-- Social Network of the page -->
                    <ul class="social-networks">
                        <li><a href="#"><span class="ico-facebook"></span></a></li>
                        <li><a href="#"><span class="ico-twitter"></span></a></li>
                        <li><a href="#"><span class="ico-google-plus"></span></a></li>
                        <li><a href="#"><span class="ico-linkedin"></span></a></li>
                        <li><a href="#"><span class="ico-pinterest"></span></a></li>
                    </ul>
                    <!-- Social Network of the page end -->
                </div>
            </div>
        </footer>
        <!-- Footer of the page end -->
        <!-- Back Top of the page -->
        <span id="back-top" class="fa fa-angle-up"></span>
        <!-- Style Changer of the page -->
        {{--<div id="style-changer" data-src="inc/style-changer.html"></div>--}}
    </div>
</div>
<!-- include jQuery -->
<script src="/js/blog/jquery.js"></script>
<!-- include jQuery -->
<script src="/js/blog/plugins.js"></script>
<!-- include jQuery -->
<script src="/js/blog/jquery.main.js"></script>
</body>
</html>

