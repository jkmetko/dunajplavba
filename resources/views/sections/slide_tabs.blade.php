<section id="slide_tabs" class="dark_section bg_image">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-tabs nav-justified main-tab">
                    <li class="active">
                        <a data-toggle="tab" class="slide1" href="#1">Aktuality @ Muži</a>
                    </li>
                    <li class="">
                        <a data-toggle="tab" class="slide2" href="#2">Mládež</a>
                    </li>
                    {{--<li class="">--}}
                        {{--<a data-toggle="tab" class="slide3" href="#3">Yoga &amp; Pilates</a>--}}
                    {{--</li>--}}
                </ul>
                <div class="tab-content">
                    <div id="1" class="tab-pane fade active in">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">

                                <h3>Aktuality</h3>
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
                                        @foreach($newsAdults as $key => $new)
                                            <div class="item @if($key == 0) active @endif">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="{{ asset('gallery/'.$new->cover()->original_name) }}" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            {{ $new->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{--<div class="item active">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face1.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<p>--}}
                                                        {{--Ullamco laboris nialiquid exea commodi consat. Ut enim minim veniam norud exotation.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="item">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face2.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<p>--}}
                                                        {{--Veniam norud exotation. Ut enim minim ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="item">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face3.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<p>--}}
                                                        {{--Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    </div>


                                </div> <!-- eof carousel -->


                            </div>

                            {{--<div class="col-md-4 col-sm-6">--}}

                                {{--<h3>Podujatia</h3>--}}
                                {{--<div id="carousel-testimonials-gym" class="carousel slide" data-ride="carousel">--}}

                                    {{--<!-- Controls -->--}}
                                    {{--<div class="carousel-controls">--}}
                                        {{--<a class="" href="#carousel-testimonials-gym" data-slide="prev">--}}
                                            {{--<i class="arrow-icon-left-open-mini"></i>--}}
                                        {{--</a>--}}
                                        {{--<a class="" href="#carousel-testimonials-gym" data-slide="next">--}}
                                            {{--<i class="arrow-icon-right-open-mini"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}

                                    {{--<!-- Wrapper for slides -->--}}
                                    {{--<div class="carousel-inner">--}}
                                        {{--<div class="item active">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face3.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading">Your Name</h4>--}}
                                                    {{--<p>--}}
                                                        {{--Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="item">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face4.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading">Media heading</h4>--}}
                                                    {{--<p>--}}
                                                        {{--Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="item">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face1.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading">Media heading</h4>--}}
                                                    {{--<p>--}}
                                                        {{--Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}


                                {{--</div> <!-- eof carousel -->--}}


                            {{--</div>--}}

                            <div class="col-md-4 col-sm-12">
                                <h3>Kontaktné informácie</h3>
                                <p>
                                    <i class="rt-icon-earth"></i> <strong>Horarska 12/A</strong>, 821 09 Bratislava
                                </p>
                                <p>
                                    <i class="rt-icon-newspaper"></i> +421 949 754 510
                                </p>
                                <p>
                                    <i class="rt-icon-email2"></i> <a href="mailto:info@zkdunajplavba.sk">info@zkdunajplavba.sk</a>
                                </p>

                            </div>
                        </div>
                    </div> <!-- #1 -->


                    <div id="2" class="tab-pane fade">

                        <div class="row">
                            <div class="col-sm-8">

                                <h3>Aktuality</h3>
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

                                        @foreach($newsYouth as $key => $new)
                                            <div class="item @if($key == 0) active @endif">
                                                <div class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="{{ asset('gallery/'.$new->cover()->original_name) }}" alt="">
                                                    </a>
                                                    <div class="media-body">
                                                        <p>
                                                            {{ $new->description }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div> <!-- eof carousel -->


                            </div>

                            {{--<div class="col-sm-8">--}}

                                {{--<h3>Podujatia</h3>--}}
                                {{--<div id="carousel-testimonials-outdoor" class="carousel slide" data-ride="carousel">--}}

                                    {{--<div class="carousel-controls">--}}
                                        {{--<!-- Controls -->--}}
                                        {{--<a class="" href="#carousel-testimonials-outdoor" data-slide="prev">--}}
                                            {{--<i class="arrow-icon-left-open-mini"></i>--}}
                                        {{--</a>--}}
                                        {{--<a class="" href="#carousel-testimonials-outdoor" data-slide="next">--}}
                                            {{--<i class="arrow-icon-right-open-mini"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}

                                    {{--<!-- Wrapper for slides -->--}}
                                    {{--<div class="carousel-inner">--}}
                                        {{--<div class="item active">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face4.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading">Media heading</h4>--}}
                                                    {{--<p>--}}
                                                        {{--Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="item">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face5.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading">Media heading</h4>--}}
                                                    {{--<p>--}}
                                                        {{--Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="item">--}}
                                            {{--<div class="media">--}}
                                                {{--<a class="pull-left" href="#">--}}
                                                    {{--<img class="media-object" src="{{ asset('example/top-face6.jpg') }}" alt="">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-heading">Media heading</h4>--}}
                                                    {{--<p>--}}
                                                        {{--Ut enim minim veniam norud exotation ullamco laboris nialiquid exea commodi consat.--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div> <!-- eof carousel -->--}}


                            {{--</div>--}}

                            <div class="col-sm-4">
                                <h3>Kontaktné informácie</h3>
                                <p>
                                    <i class="rt-icon-earth"></i> <strong>Horarska 12/A</strong>, 821 09 Bratislava
                                </p>
                                <p>
                                    <i class="rt-icon-newspaper"></i> +421 949 754 510
                                </p>
                                <p>
                                    <i class="rt-icon-email2"></i> <a href="mailto:info@zkdunajplavba.sk">info@zkdunajplavba.sk</a>
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
                                                    <img class="media-object" src="{{ asset('example/top-face4.jpg') }}" alt="">
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
                                                    <img class="media-object" src="{{ asset('example/top-face3.jpg') }}" alt="">
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
                                                    <img class="media-object" src="{{ asset('example/top-face5.jpg') }}" alt="">
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
                                                    <img class="media-object" src="{{ asset('example/top-face2.jpg') }}" alt="">
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
                                                    <img class="media-object" src="{{ asset('example/top-face6.jpg') }}" alt="">
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
                                                    <img class="media-object" src="{{ asset('example/top-face1.jpg') }}" alt="">
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