@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/lightbox2/css/lightbox.min.css') }}">
@endsection

@section('content')

    <section id="abovecontent" class="dark_section bg_image">
        <div class="container"><div class="row">
                <div class="block col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}" class="pathway"><i class="rt-icon-home"></i></a></li>
                        <li><span><a href="{{ url('/#podujatia') }}">Podujatia</a></span></li>
                        <li><span>{{ $event->name }}/{{ $event->state }}</span></li>
                    </ul>
                </div>
            </div></div>
    </section>


    <section class="darkgrey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>{{ $event->name }}</strong> /{{ $event->state }}</h2>
                </div>
            </div>
            <div class="row classes media light_section">
                {{--<div class="col-md-5" style="background-image: url('{{ asset('gallery/'.$event->cover()->original_name) }}')">--}}
                <div class="col-md-5 no-padding">
                    <a href="{{ asset('gallery/'.$event->cover()->original_name) }}" data-lightbox="cover" data-title="{{ $event->name }}/{{ $event->state }} - {{ date('d. M Y', strtotime($event->date)) }}">
                        <div class="fill" style="background-image: url('{{ asset('gallery/'.$event->cover()->original_name) }}')">
                            {{--<a href="{{ asset('gallery/'.$event->cover()->original_name) }}" data-lightbox="cover" data-title="{{ $event->name }}/{{ $event->state }} - {{ date('d. M Y', strtotime($event->date)) }}">--}}
                                {{--<img src="{{ asset('gallery/'.$event->cover()->original_name) }}" alt="image01" class="">--}}
                            {{--</a>--}}
                        </div>
                    </a>
                </div>
                <div class="col-md-7 media-body no-padding">
                    <h3><a href="class-single.html">Informácie</a></h3>
                    <div class="classes-description">
                        {!! nl2br($event->description) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="darkgrey_section last_content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header" id="fotogaleria"><strong>Foto</strong>galéria</h2>
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
                    @foreach($files as $file)
                        <li class="item col-sm-6 col-md-3 isotope-item graphicdesign webdesign {{ $file->id }}">
                            <a href="{{ url('gallery/'.$file->original_name) }}" data-lightbox="set">
                                <img src="{{ asset('gallery/'.$file->original_name) }}" alt="">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        {{ $files->fragment('fotogaleria')->links() }}
                    </div>
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

@section('js')
    <script src="{{ asset('plugins/lightbox2/js/lightbox.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            var height = $('.light_section').height();
            var fill = $('.fill');
            var img = $('.fill img');

            fill.css({ height: height });

            $('.fill').find('img').each(function(){
                var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
                $(this).addClass(imgClass);
            })
        });
    </script>
@endsection