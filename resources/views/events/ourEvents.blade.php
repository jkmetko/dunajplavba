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

@section('content')<section id="events" class="darkgrey_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header"><strong>Naše podujatia</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="classes">
                    <div class="row">
                       @foreach($ourEvents as $key => $event)
                            <div class="col-md-3 event">
                                <a  href="{{ url('admin/podujatia/upravit/'.$event->id) }}">
                                    <div class="event_photo" style="background-image: url('{{ asset('gallery/'.$event->cover()->original_name) }}')">
                                        {{--<img src="{{ asset('gallery/'.$event->cover()->original_name) }}" alt="Owl Image">--}}
                                    </div>
                                </a>

                                <h3><a href="{{ url('podujatia/1') }}">{{ $event->name }}</a></h3>
                                <div class="classes-description">
                                    <p class="with-icon date">{{ date('d. M Y', strtotime($event->date)) }}</p>
                                    <p class="with-icon time">{{ date('h:m', strtotime($event->time_from)) }} - {{ date('h:m', strtotime($event->time_to)) }}</p>
                                    <p class="with-icon pin"><a href="trainer-single.html">{{ $event->location }}/{{ $event->state }}</a></p>
                                </div>
                            </div>
                            @if($key % 3 == 0 AND $key > 0)
                                <div class="clearfix visible-md-block"></div>
                            @endif
                       @endforeach
                    </div>
                </div>
            </div>
       </div>
    </div>
@endsection