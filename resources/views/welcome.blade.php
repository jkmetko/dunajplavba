@extends('layouts.master')

@section('content')
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <header id="header">
        <div class="container"><div class="row">

                <a class="navbar-brand" href="./">Sports<span class="highlight">&amp;</span>Life</a>

                <div class="col-sm-12 mainmenu_wrap"><div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
                    <ul id="mainmenu" class="menu sf-menu responsive-menu superfish">
                        <li class="active">
                            <a href="./">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="./classes.html">Classes</a>
                            <ul class="dropdown-menu">
                                <li class="">
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

    <section id="land" class="parallax">

        <div id="slide1" class="land parallax shown">

            <div class="slide_description">
                <h3>Welcome to Sports<span class="highlight">&amp;</span>Life</h3>
                <h2>Fitness Theme</h2>
                <p><a href="#" class="theme_btn">Buy This Theme</a></p>
            </div>

        </div>

        <div id="slide2" class="land parallax not_shown">

            <div class="slide_description dark">
                <h3><span>Sports<span class="highlight">&amp;</span>Life is</span></h3>
                <h2><span>MultiPurpose</span></h2>
                <p><a href="#" class="theme_btn">Buy This Theme</a></p>
            </div>

        </div>

        <div id="slide3" class="land parallax not_shown">

            <div class="slide_description white">
                <h3>Sports<span class="highlight">&amp;</span>Life is Fully</h3>
                <h2>Customizable</h2>
                <p><a href="#" class="theme_btn">Buy This Theme</a></p>
            </div>

        </div>
    </section>


    <section id="slide_tabs" class="dark_section bg_image">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs nav-justified main-tab">
                        <li class="active">
                            <a data-toggle="tab" class="slide1" href="#1">Gym &amp; Fitness</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" class="slide2" href="#2">Outdoor Sports</a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" class="slide3" href="#3">Yoga &amp; Pilates</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="1" class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">

                                    <h3>Latest News</h3>
                                    <div id="carousel-news-gym" class="carousel slide" data-ride="carousel">

                                        <!-- Controls -->
                                        <div class="carousel-controls">
                                            <a class="" href="#carousel-news-gym" data-slide="prev">
                                                <i class="arrow-icon-left-open-mini"></i>
                                            </a>
                                            <a class="" href="#carousel-news-gym" data-slide="next">
                                                <i class="arrow-icon-right-open-mini"></i>
                                            </a>
                                        </div>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face1.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ullamco laboris nialiquid exea commodi consat. Ut enim minim veniam norud exotation.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face2.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Veniam norud exotation. Ut enim minim ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face3.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div> <!-- eof carousel -->


                                </div>

                                <div class="col-md-4 col-sm-6">

                                    <h3>Testimonials</h3>
                                    <div id="carousel-testimonials-gym" class="carousel slide" data-ride="carousel">

                                        <!-- Controls -->
                                        <div class="carousel-controls">
                                            <a class="" href="#carousel-testimonials-gym" data-slide="prev">
                                                <i class="arrow-icon-left-open-mini"></i>
                                            </a>
                                            <a class="" href="#carousel-testimonials-gym" data-slide="next">
                                                <i class="arrow-icon-right-open-mini"></i>
                                            </a>
                                        </div>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face3.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Your Name</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face4.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face1.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div> <!-- eof carousel -->


                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <h3>Contact Info</h3>
                                    <p>
                                        <i class="rt-icon-earth"></i> <strong>65 Santa Monica Blvd</strong>, LA, CA 97845, US
                                    </p>
                                    <p>
                                        <i class="rt-icon-newspaper"></i> +91 544 567 8943
                                    </p>
                                    <p>
                                        <i class="rt-icon-email2"></i> <a href="mailto:fitness@sportslife.com">fitness@sportslife.com</a>
                                    </p>

                                </div>
                            </div>
                        </div> <!-- #1 -->


                        <div id="2" class="tab-pane fade">

                            <div class="row">
                                <div class="col-sm-4">

                                    <h3>Latest News</h3>
                                    <div id="carousel-news-outdoor" class="carousel slide" data-ride="carousel">

                                        <!-- Controls -->
                                        <div class="carousel-controls">
                                            <a class="" href="#carousel-news-outdoor" data-slide="prev">
                                                <i class="arrow-icon-left-open-mini"></i>
                                            </a>
                                            <a class="" href="#carousel-news-outdoor" data-slide="next">
                                                <i class="arrow-icon-right-open-mini"></i>
                                            </a>
                                        </div>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face6.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face5.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face2.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- eof carousel -->


                                </div>

                                <div class="col-sm-4">

                                    <h3>Testimonials</h3>
                                    <div id="carousel-testimonials-outdoor" class="carousel slide" data-ride="carousel">

                                        <div class="carousel-controls">
                                            <!-- Controls -->
                                            <a class="" href="#carousel-testimonials-outdoor" data-slide="prev">
                                                <i class="arrow-icon-left-open-mini"></i>
                                            </a>
                                            <a class="" href="#carousel-testimonials-outdoor" data-slide="next">
                                                <i class="arrow-icon-right-open-mini"></i>
                                            </a>
                                        </div>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face4.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face5.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face6.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- eof carousel -->


                                </div>

                                <div class="col-sm-4">
                                    <h3>Contact Info</h3>
                                    <p>
                                        <i class="rt-icon-earth"></i> <strong>65 Santa Monica Blvd</strong>, LA, CA 97845, US
                                    </p>
                                    <p>
                                        <i class="rt-icon-newspaper"></i> +91 544 567 8943
                                    </p>
                                    <p>
                                        <i class="rt-icon-email2"></i> <a href="mailto:fitness@sportslife.com">fitness@sportslife.com</a>
                                    </p>

                                </div>
                            </div>


                        </div> <!-- #2 -->


                        <div id="3" class="tab-pane fade">


                            <div class="row">
                                <div class="col-sm-4">

                                    <h3>Latest News</h3>
                                    <div id="carousel-news-yoga" class="carousel slide" data-ride="carousel">

                                        <div class="carousel-controls">
                                            <!-- Controls -->
                                            <a class="" href="#carousel-news-yoga" data-slide="prev">
                                                <i class="arrow-icon-left-open-mini"></i>
                                            </a>
                                            <a class="" href="#carousel-news-yoga" data-slide="next">
                                                <i class="arrow-icon-right-open-mini"></i>
                                            </a>
                                        </div>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face4.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face3.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face5.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- eof carousel -->


                                </div>

                                <div class="col-sm-4">

                                    <h3>Testimonials</h3>
                                    <div id="carousel-testimonials-yoga" class="carousel slide" data-ride="carousel">

                                        <div class="carousel-controls">
                                            <!-- Controls -->
                                            <a class="" href="#carousel-testimonials-yoga" data-slide="prev">
                                                <i class="arrow-icon-left-open-mini"></i>
                                            </a>
                                            <a class="" href="#carousel-testimonials-yoga" data-slide="next">
                                                <i class="arrow-icon-right-open-mini"></i>
                                            </a>
                                        </div>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face2.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face6.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="example/top-face1.jpg" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>
                                                            Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div> <!-- eof carousel -->


                                </div>

                                <div class="col-sm-4">
                                    <h3>Contact Info</h3>
                                    <p>
                                        <i class="rt-icon-earth"></i> <strong>65 Santa Monica Blvd</strong>, LA, CA 97845, US
                                    </p>
                                    <p>
                                        <i class="rt-icon-newspaper"></i> +91 544 567 8943
                                    </p>
                                    <p>
                                        <i class="rt-icon-email2"></i> <a href="mailto:fitness@sportslife.com">fitness@sportslife.com</a>
                                    </p>

                                </div>
                            </div>

                        </div> <!-- #3 -->
                    </div> <!-- .tab-content -->
                </div> <!-- .col-sm-12 -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section><!-- #slide_tabs -->




    <section id="info" class="dark_section bg_image">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1>Awesome Theme</h1>
                    <h3>for <strong><span class="highlight">Sports Club</span></strong> &amp; <strong><span class="highlight">Multi-Purpose</span></strong> Websites</h3>
                    <p>
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.
                    </p>
                    <p>
                        <a href="#" class="theme_btn">Know More</a>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section id="events" class="darkgrey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Upcoming</strong> Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">


                    <div class="owl-carousel owl-items-4 classes">
                        <div class="owl-carousel-item">
                            <a href="class-single.html"><img src="example/horizontal_slider1.jpg" alt="Owl Image"></a>

                            <h3><a href="class-single.html">Basketball Match</a></h3>
                            <div class="classes-description">
                                <p class="with-icon date">February 10, 2014</p>
                                <p class="with-icon time">9:00 - 11:00</p>
                                <p class="with-icon person"><a href="trainer-single.html">CJ Jones</a></p>
                            </div>
                        </div>

                        <div class="owl-carousel-item">
                            <a href="class-single.html"><img src="example/horizontal_slider2.jpg" alt="Owl Image"></a>

                            <h3><a href="class-single.html">Weight Training</a></h3>
                            <div class="classes-description">
                                <p class="with-icon date">February 12, 2014</p>
                                <p class="with-icon time">11:30 - 13:30</p>
                                <p class="with-icon person"><a href="trainer-single.html">Jennifer Beyer</a></p>
                            </div>
                        </div>

                        <div class="owl-carousel-item">
                            <a href="class-single.html"><img src="example/horizontal_slider3.jpg" alt="Owl Image"></a>

                            <h3><a href="class-single.html">Powerlifting 101</a></h3>
                            <div class="classes-description">
                                <p class="with-icon date">February 13, 2014</p>
                                <p class="with-icon time">13:00 - 14:00</p>
                                <p class="with-icon person"><a href="trainer-single.html">Samuel Smith</a></p>
                            </div>
                        </div>

                        <div class="owl-carousel-item">
                            <a href="class-single.html"><img src="example/horizontal_slider4.jpg" alt="Owl Image"></a>

                            <h3><a href="class-single.html">Bodybuilding</a></h3>
                            <div class="classes-description">
                                <p class="with-icon date">February 15, 2014</p>
                                <p class="with-icon time">14:00 - 15:20</p>
                                <p class="with-icon person"><a href="trainer-single.html">Hugo Cameron</a></p>
                            </div>
                        </div>

                        <div class="owl-carousel-item">
                            <a href="class-single.html"><img src="example/horizontal_slider1.jpg" alt="Owl Image"></a>

                            <h3><a href="class-single.html">Basketball Match</a></h3>
                            <div class="classes-description">
                                <p class="with-icon date">February 10, 2014</p>
                                <p class="with-icon time">9:00 - 11:00</p>
                                <p class="with-icon person"><a href="trainer-single.html">CJ Jones</a></p>
                            </div>
                        </div>

                        <div class="owl-carousel-item">
                            <a href="class-single.html"><img src="example/horizontal_slider2.jpg" alt="Owl Image"></a>

                            <h3><a href="class-single.html">Weight Training</a></h3>
                            <div class="classes-description">
                                <p class="with-icon date">February 12, 2014</p>
                                <p class="with-icon time">11:30 - 13:30</p>
                                <p class="with-icon person"><a href="trainer-single.html">Jennifer Beyer</a></p>
                            </div>
                        </div>

                    </div> <!-- eof owl-carousel -->


                </div>
            </div>
        </div>
    </section>


    <section id="classes" class="color_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Trainer</strong>&amp;Classes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">

                    <!--vertical slider -->
                    <div class="vertical-slider">
                        <div class="slide media darkgrey_section">
                            <a href="#" class="pull-left">
                                <img src="example/trainer-vertical1.jpg" alt="image01" class="media-object">
                            </a>

                            <div class="media-body">
                                <h3>CJ Jones</h3>
                                <p><a href="class-single.html">Bascetball</a></p>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet.</p>
                                <p class="team-social">
                                    <a class="socialico-twitter" href="#" title="Twitter">#</a>
                                    <a class="socialico-facebook" href="#" title="Facebook">#</a>
                                    <a class="socialico-google" href="#" title="LinkedIn">#</a>
                                </p>
                            </div>
                        </div>

                        <div class="slide media light_section">
                            <a href="#" class="pull-left">
                                <img src="example/trainer-vertical2.jpg" alt="image01" class="media-object">
                            </a>

                            <div class="media-body">
                                <h3>Jennifer Beyer</h3>
                                <p><a href="class-single.html">Yoga &amp; Pilates</a></p>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet.</p>
                                <p class="team-social">
                                    <a class="socialico-twitter" href="#" title="Twitter">#</a>
                                    <a class="socialico-facebook" href="#" title="Facebook">#</a>
                                    <a class="socialico-google" href="#" title="LinkedIn">#</a>
                                </p>
                            </div>
                        </div>

                        <div class="slide media darkgrey_section">
                            <a href="#" class="pull-left">
                                <img src="example/trainer-vertical2.jpg" alt="image01" class="media-object">
                            </a>

                            <div class="media-body">
                                <h3>Samanta Fox</h3>
                                <p><a href="class-single.html">Weight Training</a></p>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet.</p>
                                <p class="team-social">
                                    <a class="socialico-twitter" href="#" title="Twitter">#</a>
                                    <a class="socialico-facebook" href="#" title="Facebook">#</a>
                                    <a class="socialico-google" href="#" title="LinkedIn">#</a>
                                </p>
                            </div>
                        </div>

                        <div class="slide media light_section">
                            <a href="#" class="pull-left">
                                <img src="example/trainer-vertical1.jpg" alt="image01" class="media-object">
                            </a>

                            <div class="media-body">
                                <h3>Alex Smith</h3>
                                <p><a href="class-single.html">Salsa &amp; Cha cha cha</a></p>
                                <p>Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor sit amet.</p>
                                <p class="team-social">
                                    <a class="socialico-twitter" href="#" title="Twitter">#</a>
                                    <a class="socialico-facebook" href="#" title="Facebook">#</a>
                                    <a class="socialico-google" href="#" title="LinkedIn">#</a>
                                </p>
                            </div>
                        </div>





                    </div><!-- End of vertical slider -->
                </div>

                <div class="col-md-4">
                    <!-- collapse -->
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        Gym &amp; Fitness
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="example/top-face1.jpg" alt="image">
                                        </a>
                                        <div class="media-body">
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt enim eiusmod high life accusamus terry richardson.
                                            <a href="class-single.html" class="theme_btn_small">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                        Outdoor Sports
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="example/top-face5.jpg" alt="image">
                                        </a>
                                        <div class="media-body">
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt enim eiusmod high life accusamus terry richardson.
                                            <a href="class-single.html" class="theme_btn_small">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                        Yoga &amp; Pilates
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="example/top-face6.jpg" alt="image">
                                        </a>
                                        <div class="media-body">
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt enim eiusmod high life accusamus terry richardson.
                                            <a href="class-single.html" class="theme_btn_small">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                                        Weight Training
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="example/top-face6.jpg" alt="image">
                                        </a>
                                        <div class="media-body">
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt enim eiusmod high life accusamus terry richardson.
                                            <a href="class-single.html" class="theme_btn_small">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">
                                        Salsa &amp; Cha cha cha
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="example/top-face4.jpg" alt="image">
                                        </a>
                                        <div class="media-body">
                                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt enim eiusmod high life accusamus terry richardson.
                                            <a href="class-single.html" class="theme_btn_small">More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- eof collapse -->
                </div>
            </div>
        </div>
    </section>

    <section id="prices" class="darkgrey_section last_content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Membership</strong> Pricing</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <ul class="pricing-table">
                        <li class="plan-name"><p>One Day Training</p></li>
                        <li class="plan-price"><span>9</span> <span>99</span> <p>Day</p></li>
                        <li class="features-list">
                            <ul>
                                <li>Onetime access to all clubs</li>
                                <li>Group Trainer</li>
                                <li>Massage</li>
                                <li>Fitness orientation</li>
                            </ul>
                        </li>
                        <li class="call-to-action"><a href="#" class="theme_btn">Sign Up!</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <ul class="pricing-table style2">
                        <li class="plan-name"><p>Standard Training</p></li>
                        <li class="plan-price"><span>29</span> <span>99</span> <p>Month</p></li>
                        <li class="features-list">
                            <ul>
                                <li>Group Classes</li>
                                <li>Discuss Fitness Goals</li>
                                <li>Group Trainer</li>
                                <li>Fitness orientation</li>
                            </ul>
                        </li>
                        <li class="call-to-action"><a href="#" class="theme_btn">Sign Up!</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6">
                    <ul class="pricing-table">
                        <li class="plan-name"><p>Total Access Training</p></li>
                        <li class="plan-price"><span>59</span> <span>99</span> <p>Month</p></li>
                        <li class="features-list">
                            <ul>
                                <li>Access to all clubs</li>
                                <li>Massage</li>
                                <li>Personal Trainer</li>
                                <li>Acess 24/7</li>
                            </ul>
                        </li>
                        <li class="call-to-action"><a href="#" class="theme_btn">Sign Up!</a></li>
                    </ul>
                </div>

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


    <div class="preloader">
        <div class="preloaderimg"></div>
    </div>

@endsection