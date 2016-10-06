@extends('layouts.master')

@section('content')

    <section class="dark_section bg_image">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Admin zóna</h1>
                <h3 class="text-center">Vitajte, <span class="highlight">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span></h3>
            </div>

            <hr>

            <div class="row text-center">
                <a href="{{ url('admin/podujatia') }}" class="col-md-3 col-lg-offset-3 admin-icon">
                    <i class="glyphicon glyphicon-calendar"></i>
                </a>
                <a href="{{ url('admin/podujatia/vytvorit') }}" class="col-md-3 admin-icon">
                    <i class="glyphicon glyphicon-plus"></i>
                </a>
            </div>
        </div>
    </section>
@endsection