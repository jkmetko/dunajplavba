@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('js/vendor/dropzone-4.0.1/dropzone.css') }}">
    <style>
        #dropzoneFileUpload {
            display: block;
            height: auto;
            background: lightgray;
        }
        #dropzoneFileUpload > span{
            display: block;
            line-height:100px;
            vertical-align:middle;
            text-align:center;
            margin:0 auto;
            width:100%;
            font-size: 25px;
            color: gray;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('js/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css') }}">
@endsection

@section('content')

    <section id="abovecontent" class="dark_section bg_image">
        <div class="container"><div class="row">
                <div class="block col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}" class="pathway"><i class="rt-icon-home"></i></a></li>
                        <li><span>Náš plán</span></li>
                    </ul>
                </div>
            </div></div>
    </section>

    <section id="events" class="darkgrey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Náš plán</strong></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="classes">
                        <div class="row">
                           @foreach($ourPlan as $event)
                                <div class="col-md-3">
                                    <a  href="{{ url('admin/podujatia/upravit/'.$event->id) }}">
                                        <div class="event_photo" style="background-image: url('{{ asset('gallery/'.$event->cover()->original_name) }}')">
                                            <img src="{{ asset('gallery/'.$event->cover()->original_name) }}" alt="Owl Image">
                                        </div>
                                    </a>

                                    <h3><a href="{{ url('podujatia/1') }}">{{ $event->name }}</a></h3>
                                    <div class="classes-description">
                                        <p class="with-icon date">{{ date('d. M Y', strtotime($event->date)) }}</p>
                                        <p class="with-icon time">{{ date('h:m', strtotime($event->time_from)) }} - {{ date('h:m', strtotime($event->time_to)) }}</p>
                                        <p class="with-icon pin"><a href="trainer-single.html">{{ $event->location }}/{{ $event->state }}</a></p>
                                    </div>
                                </div>
                           @endforeach
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>




{{--<section id="middle" class="darkgrey_section last_content_section">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-12 text-center">--}}
                {{--<h2 class="block-header"><strong>Classes</strong> Timetable</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="text-center filters col-sm-12">--}}
                {{--<ul id="timetable_filter">--}}
                    {{--<li><a class="selected" data-filter="all" href="#">All</a></li>--}}
                    {{--<li><a data-filter=".basketball" href="#" class="">Basketball</a></li>--}}
                    {{--<li><a data-filter=".bodyuilding" href="#" class="">Bodyuilding</a></li>--}}
                    {{--<li><a data-filter=".fitness" href="#" class="">Fitness</a></li>--}}
                    {{--<li><a data-filter=".yoga" href="#" class="">Yoga</a></li>--}}
                    {{--<li><a data-filter=".pilates" href="#" class="">Pilates</a></li>--}}
                {{--</ul>--}}
                {{--<div class="clearfix"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-12">--}}
                {{--<div class="table-responsive">--}}
                    {{--<table class="table table-striped table-bordered" id="timetable">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th></th>--}}
                            {{--<th>Jan</th>--}}
                            {{--<th>Feb</th>--}}
                            {{--<th>Mar</th>--}}
                            {{--<th>Apr</th>--}}
                            {{--<th>May</th>--}}
                            {{--<th>Jun</th>--}}
                            {{--<th>Jul</th>--}}
                            {{--<th>Aug</th>--}}
                            {{--<th>Sep</th>--}}
                            {{--<th>Okt</th>--}}
                            {{--<th>Nov</th>--}}
                            {{--<th>Dec</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--<tr>--}}
                            {{--<th>8:00 - 9:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>9:00 - 10:00</th>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="pilates">--}}
                                    {{--Pilates--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>10:00 - 11:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>11:00 - 12:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="pilates">--}}
                                    {{--Pilates--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="pilates">--}}
                                    {{--Pilates--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>12:00 - 13:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>13:00 - 14:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="pilates">--}}
                                    {{--Pilates--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="pilates">--}}
                                    {{--Pilates--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>14:00 - 15:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>15:00 - 16:00</th>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="pilates">--}}
                                    {{--Pilates--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<th>16:00 - 17:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}


                        {{--<tr>--}}
                            {{--<th>17:00 - 18:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}


                        {{--<tr>--}}
                            {{--<th>18:00 - 19:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="basketball">--}}
                                    {{--Basketball--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td></td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td></td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}


                        {{--<tr>--}}
                            {{--<th>19:00 - 20:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="bodyuilding">--}}
                                    {{--Bodyuilding--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}


                        {{--<tr>--}}
                            {{--<th>20:00 - 21:00</th>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="yoga">--}}
                                    {{--Yoga--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td>--}}

                            {{--</td>--}}
                            {{--<td>--}}
                                {{--<a href="./class-single.html" class="fitness">--}}
                                    {{--Fitness--}}
                                {{--</a>--}}
                            {{--</td>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}

                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
@endsection