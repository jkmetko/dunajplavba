@extends('layouts.master')

@section('content')

    @include('sections.land')
    @include('sections.slide_tabs')
    @include('sections.info')
    @include('sections.events')
    @include('sections.classes')
{{--    @include('sections.prices')--}}
    {{--@include('sections.partners')--}}

@endsection