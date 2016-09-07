<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Sports&amp;Life</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header id="header">
    <div class="container"><div class="row">

            <a class="navbar-brand" href="./">Sports<span class="highlight">&amp;</span>Life</a>

            <div class="col-sm-12 mainmenu_wrap"><div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
                <ul id="mainmenu" class="menu sf-menu responsive-menu superfish">
                    <li class="">
                        <a href="./">Home</a>
                    </li>
                    <li class="dropdown active">
                        <a href="./classes.html">Classes</a>
                        <ul class="dropdown-menu">
                            <li class="active">
                                <a href="./classes.html">Classes</a>
                            </li>
                            <li class="">
                                <a href="./class-single.html">Single Class</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="./timetable.html">Timetable</a>
                    </li>
                    <li class="dropdown">
                        <a href="./trainers.html">Trainers</a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a href="./trainers.html">Trainers</a>
                            </li>
                            <li class="">
                                <a href="./trainer-single.html">Single Trainer</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="./404.html">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="">
                                <a href="./blog.html">Blog</a>
                            </li>
                            <li class="">
                                <a href="./blog-single.html">Blog Post</a>
                            </li>
                            <li class="">
                                <a href="./shortcodes.html">Shortcodes</a>
                            </li>
                            <li class="">
                                <a href="./404.html">404</a>
                            </li>
                            <li class="">
                                <a href="./icons.html">Icons</a>
                            </li>

                        </ul>
                    </li>
                    <li class="">
                        <a href="./contact.html">Contact</a>
                    </li>

                </ul>
            </div>

        </div></div>
</header>

<section id="abovecontent" class="dark_section bg_image">
    <div class="container"><div class="row">
            <div class="block col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="./" class="pathway"><i class="rt-icon-home"></i></a></li>
                    <li><span>Classes</span></li>
                </ul>
            </div>
        </div></div>
</section>





<section id="events" class="darkgrey_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header"><strong>New</strong> Classes</h2>
            </div>
        </div>
        <div class="row classes">
            <div class="col-sm-6">
                <a href="class-single.html">
                    <img src="example/horizontal_slider1.jpg" alt="">
                </a>

                <h3><a href="class-single.html">Basketball Match</a></h3>
                <div class="classes-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quam, cumque similique cupiditate aut omnis a obcaecati dolorem labore voluptatum nemo beatae maiores eos mollitia deserunt quos commodi assumenda hic.</p>
                    <p class="with-icon date">February 10, 2014</p>
                    <p class="with-icon time">9:00 - 11:00</p>
                    <p class="with-icon person"><a href="trainer-single.html">CJ Jones</a></p>
                </div>
            </div>

            <div class="col-sm-6">
                <a href="class-single.html">
                    <img src="example/horizontal_slider2.jpg" alt="">
                </a>

                <h3><a href="class-single.html">Weight Training</a></h3>
                <div class="classes-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, quam, cumque similique cupiditate aut omnis a obcaecati dolorem labore voluptatum nemo beatae maiores eos mollitia deserunt quos commodi assumenda hic.</p>
                    <p class="with-icon date">February 12, 2014</p>
                    <p class="with-icon time">11:30 - 13:30</p>
                    <p class="with-icon person"><a href="trainer-single.html">Jennifer Beyer</a></p>
                </div>
            </div>
        </div>

    </div>
</section>




<section id="portfolio" class="darkgrey_section last_content_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header"><strong>Training</strong> Classes</h2>
            </div>
        </div>

        <div id="portfolio_wrapper" class="row">
            <div class="text-center filters col-sm-12">
                <ul id="filtrable">
                    <li><a class="selected" data-filter="*" href="#">All</a></li>
                    <li><a data-filter=".graphicdesign" href="#" class="">Graphic Design</a></li>
                    <li><a data-filter=".photography" href="#" class="">Photography</a></li>
                    <li><a data-filter=".webdesign" href="#" class="">Web Design</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>


            <ul class="classes row filtrable clearfix isotope" id="portfolioContainer">
                <li class="item col-sm-6 col-md-3 isotope-item graphicdesign webdesign">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider1.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Basketball Match</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 10, 2014</p>
                        <p class="with-icon time">9:00 - 11:00</p>
                        <p class="with-icon person"><a href="trainer-single.html">CJ Jones</a></p>
                    </div>
                </li>


                <li class="item col-sm-6 col-md-3 isotope-item photography webdesign">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider2.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Weight Training</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 12, 2014</p>
                        <p class="with-icon time">11:30 - 13:30</p>
                        <p class="with-icon person"><a href="trainer-single.html">Jennifer Beyer</a></p>
                    </div>
                </li>


                <li class="item col-sm-6 col-md-3 isotope-item photography webdesign">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider3.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Powerlifting 101</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 13, 2014</p>
                        <p class="with-icon time">13:00 - 14:00</p>
                        <p class="with-icon person"><a href="trainer-single.html">Samuel Smith</a></p>
                    </div>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider4.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Bodybuilding</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 15, 2014</p>
                        <p class="with-icon time">14:00 - 15:20</p>
                        <p class="with-icon person"><a href="trainer-single.html">Hugo Cameron</a></p>
                    </div>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item graphicdesign webdesign">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider1.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Basketball Match</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 10, 2014</p>
                        <p class="with-icon time">9:00 - 11:00</p>
                        <p class="with-icon person"><a href="trainer-single.html">CJ Jones</a></p>
                    </div>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider2.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Weight Training</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 12, 2014</p>
                        <p class="with-icon time">11:30 - 13:30</p>
                        <p class="with-icon person"><a href="trainer-single.html">Jennifer Beyer</a></p>
                    </div>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item photography webdesign">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider1.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Basketball Match</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 10, 2014</p>
                        <p class="with-icon time">9:00 - 11:00</p>
                        <p class="with-icon person"><a href="trainer-single.html">CJ Jones</a></p>
                    </div>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item graphicdesign webdesign">
                    <a href="class-single.html">
                        <img src="example/horizontal_slider2.jpg" alt="">
                    </a>

                    <h3><a href="class-single.html">Weight Training</a></h3>
                    <div class="classes-description">
                        <p class="with-icon date">February 12, 2014</p>
                        <p class="with-icon time">11:30 - 13:30</p>
                        <p class="with-icon person"><a href="trainer-single.html">Jennifer Beyer</a></p>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</section>




<section id="partners" class="dark_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel partners">

                    <div class="item">
                        <img alt="" src="example/partner1.png">
                    </div>
                    <div class="item">
                        <img alt="" src="example/partner2.png">
                    </div>
                    <div class="item">
                        <img alt="" src="example/partner3.png">
                    </div>

                    <div class="item">
                        <img alt="" src="example/partner4.png">
                    </div>

                    <div class="item">
                        <img alt="" src="example/partner5.png">
                    </div>

                    <div class="item">
                        <img alt="" src="example/partner6.png">
                    </div>

                    <div class="item">
                        <img alt="" src="example/partner1.png">
                    </div>

                    <div class="item">
                        <img alt="" src="example/partner2.png">
                    </div>

                    <div class="item">
                        <img alt="" src="example/partner3.png">
                    </div>

                    <div class="item">
                        <img alt="" src="example/partner4.png">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<footer id="footer" class="dark_section">
    <div class="container">
        <div class="row">
            <div class="block widget_schedule col-md-3 col-sm-4">
                <h3>Opening Hours</h3>
                <dl class="dl-horizontal">
                    <dt>Monday-Friday</dt>
                    <dd><strong>9:00 - 21:00</strong></dd>
                    <dt>Saturday</dt>
                    <dd><strong>9:00 - 20:00</strong></dd>
                    <dt>Sunday</dt>
                    <dd><strong>9:00 - 16:00</strong></dd>
                </dl>
            </div>


            <div class="block widget_tweet col-md-3 col-sm-4">
                <h3>Twitter Widget</h3>
                <div class="twitter"></div>
            </div>

            <div class="block widget_text col-md-3 col-sm-4">
                <h3>Contact Info</h3>
                <p>65 Santa Monica Blvd, LA, CA 97845, US<br>
                    <span><strong>Phone:</strong> </span>+91 544 567 8943<br>
                    <span><strong>Email:</strong> </span>
                    <a href="mailto:info@company.com">info@company.com</a><br>
                </p>
                <p>
                    <a class="socialico-twitter" href="#" title="Twitter">#</a>
                    <a class="socialico-facebook" href="#" title="Facebook">#</a>
                    <a class="socialico-google" href="#" title="Google">#</a>
                    <a class="socialico-linkedin" href="#" title="Lindedin">#</a>
                </p>
            </div>


            <div class="block subscribe col-md-3 col-sm-4">
                <h3>Newsletter</h3>
                <p>Please, subscribe to our latest news to be updated.</p>
                <form id="signup" action="/" method="get" class="form-inline">
                    <div class="form-group">
                        <input name="email" id="mailchimp_email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="theme_btn">GO!</button>
                    <div id="response"></div>
                </form>
            </div>

        </div>
    </div>
</footer>


<section id="copyright" class="light_section">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 text-center">
                Copyright - Sports &amp; Life Template by <a href="http://modernwebtemplates.com">MW Templates</a>
            </div>
        </div>
    </div>
</section>


<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/placeholdem.min.js"></script>
<script src="js/vendor/hoverIntent.js"></script>
<script src="js/vendor/superfish.js"></script>
<script src="js/vendor/jquery.actual.min.js"></script>
<script src="js/vendor/jquerypp.custom.js"></script>
<script src="js/vendor/jquery.elastislide.js"></script>
<script src="js/vendor/jquery.flexslider-min.js"></script>
<script src="js/vendor/jquery.prettyPhoto.js"></script>
<script src="js/vendor/jquery.easing.1.3.js"></script>
<script src="js/vendor/jquery.ui.totop.js"></script>
<script src="js/vendor/jquery.isotope.min.js"></script>
<script src="js/vendor/jquery.easypiechart.min.js"></script>
<script src='js/vendor/jflickrfeed.min.js'></script>
<script src="js/vendor/jquery.sticky.js"></script>
<script src='js/vendor/owl.carousel.min.js'></script>
<script src='js/vendor/jquery.nicescroll.min.js'></script>
<script src='js/vendor/jquery.fractionslider.min.js'></script>
<script src='js/vendor/jquery.scrollTo-min.js'></script>
<script src='js/vendor/jquery.localscroll-min.js'></script>
<script src='js/vendor/jquery.parallax-1.1.3.js'></script>
<script src='js/vendor/jquery.bxslider.min.js'></script>
<script src='js/vendor/jquery.funnyText.min.js'></script>
<script src='twitter/jquery.tweet.min.js'></script>


<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>
</html>
