@extends('layouts.master')

@section('content')

<section id="abovecontent" class="dark_section bg_image">
    <div class="container"><div class="row">
            <div class="block col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="./" class="pathway"><i class="rt-icon-home"></i></a></li>
                    <li><span><a href="./classes.html">Podujatia</a></span></li>
                    <li><span>MT Plzeň/CZE</span></li>
                </ul>
            </div>
        </div></div>
</section>


<section class="darkgrey_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header"><strong>MT Plzeň</strong> /CZE</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="classes media light_section">
                    <div class="fill pull-left">
                        <a href="#">
                            <img src="{{ asset('example/trainer-vertical2.jpg') }}" alt="image01" class="media-object fill">
                        </a>
                    </div>
                    <div class="media-body">
                        <h3><a href="class-single.html">Adam Mocko</a></h3>
                        <div class="classes-description">
                            <p>V dňoch 12-13.2.2016 sme sa zúčastnili Medzinárodného turnaja o Veľkú cenu Plzne.</p>
                            <p>Pretekári ZK Dunajplavba Bratislava získala nasledovne umiestnenia:</p>
                            <div class="col-md-6">
                                <h4>Starší žiaci:</h4>
                                <ul>
                                    <li>54 kg Kevin Mikécz 2.miesto</li>
                                    <li>63 kg Gerhardt Pohl 1.miesto.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h4>Juniori:</h4>
                                <ul>
                                    <li>85 kg Viliam Oross 2.miesto</li>
                                    <li>85 kg Adam Štrba 3.miesto</li>
                                    <li>85 kg Michal Pecha 5.miesto</li>
                                    <li>85 kg Miroslav Lažo 6.miesto</li>
                                    <li>120 kg Marek Zeman 3.miesto</li>
                                </ul>
                            </div>
                            {{--<p class="with-icon date">February 12, 2014</p>--}}
                            {{--<p class="with-icon time">11:30 - 13:30</p>--}}
                            {{--<p class="with-icon pin"><a href="trainer-single.html">Plzeň/CZE</a></p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
</section>

<section id="portfolio" class="darkgrey_section last_content_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header"><strong>Foto</strong>galéria</h2>
            </div>
        </div>

        <div id="portfolio_wrapper" class="row">
            {{--<div class="text-center filters col-sm-12">--}}
                {{--<ul id="filtrable">--}}
                    {{--<li><a class="selected" data-filter="*" href="#">All</a></li>--}}
                    {{--<li><a data-filter=".graphicdesign" href="#" class="">Graphic Design</a></li>--}}
                    {{--<li><a data-filter=".photography" href="#" class="">Photography</a></li>--}}
                    {{--<li><a data-filter=".webdesign" href="#" class="">Web Design</a></li>--}}
                {{--</ul>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}


            <ul class="classes row filtrable clearfix isotope" id="portfolioContainer">
                <li class="item col-sm-6 col-md-3 isotope-item graphicdesign webdesign">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider1.jpg') }}" alt="">
                    </a>
                </li>


                <li class="item col-sm-6 col-md-3 isotope-item photography webdesign">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider2.jpg') }}" alt="">
                    </a>
                </li>


                <li class="item col-sm-6 col-md-3 isotope-item photography webdesign">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider3.jpg') }}" alt="">
                    </a>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider4.jpg') }}" alt="">
                    </a>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item graphicdesign webdesign">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider1.jpg') }}" alt="">
                    </a>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider2.jpg') }}" alt="">
                    </a>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item photography webdesign">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider1.jpg') }}" alt="">
                    </a>
                </li>



                <li class="item col-sm-6 col-md-3 isotope-item graphicdesign webdesign">
                    <a href="class-single.html">
                        <img src="{{ url('example/horizontal_slider2.jpg') }}" alt="">
                    </a>
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
                        <img alt="" src="{{ url('example/partner1.png') }}">
                    </div>
                    <div class="item">
                        <img alt="" src="{{ url('example/partner2.png') }}">
                    </div>
                    <div class="item">
                        <img alt="" src="{{ url('example/partner3.png') }}">
                    </div>

                    <div class="item">
                        <img alt="" src="{{ url('example/partner4.png') }}">
                    </div>

                    <div class="item">
                        <img alt="" src="{{ url('example/partner5.png') }}">
                    </div>

                    <div class="item">
                        <img alt="" src="{{ url('example/partner6.png') }}">
                    </div>

                    <div class="item">
                        <img alt="" src="{{ url('example/partner1.png') }}">
                    </div>

                    <div class="item">
                        <img alt="" src="{{ url('example/partner2.png') }}">
                    </div>

                    <div class="item">
                        <img alt="" src="{{ url('example/partner3.png') }}">
                    </div>

                    <div class="item">
                        <img alt="" src="{{ url('example/partner4.png') }}">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection