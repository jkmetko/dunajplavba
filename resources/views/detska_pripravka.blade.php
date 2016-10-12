@extends('layouts.master')

@section('content')
    <section id="abovecontent" class="dark_section bg_image">
        <div class="container"><div class="row">
                <div class="block col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="{{ url('/') }}" class="pathway"><i class="rt-icon-home"></i></a></li>
                        <li><span>Detská prípravka/span></li>
                    </ul>
                </div>
            </div></div>
    </section>

    <section id="middle" class="darkgrey_section last_content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Časy</strong> Tréningov</h2>
                </div>
            </div>
            <div class="row">
                <div class="text-center filters col-sm-12">
                    <ul id="timetable_filter">
                        <li><a class="selected" data-filter="all" href="#">Všetky</a></li>
                        <li><a data-filter=".ŠH_Mladosť" href="#" class="">ŠH Mladosť</a></li>
                        <li><a data-filter=".ZŠ_Rajčianska" href="#" class="">ZŠ Rajčianska</a></li>
                        <li><a data-filter=".ZŠ_Černyševského" href="#" class="">ZŠ Černyševského</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="timetable">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Pondelok</th>
                                <th>Utorok</th>
                                <th>Streda</th>
                                <th>Štvrtok</th>
                                <th>Piatok</th>
                                <th>Sobota</th>
                                <th>Nedeľa</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>15:30 - 17:00</th>
                                <td>
                                </td>
                                <td>
                                    <a href="#" class="ŠH_Mladosť">
                                        ŠH Mladosť
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <a href="#" class="ŠH_Mladosť">
                                        ŠH Mladosť
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                                <th>15:30 - 17:00</th>
                                <td>
                                    <a href="#" class="ZŠ_Černyševského">
                                        ZŠ_Černyševského
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <a href="#" class="ZŠ_Černyševského">
                                        ZŠ_Černyševského
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                            </tr>
                            <tr>
                                <th>15:00 - 16:00</th>
                                <td>
                                    <a href="#" class="ZŠ_Rajčianska">
                                        ZŠ Rajčianska
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <a href="#" class="ZŠ_Rajčianska">
                                        ZŠ Rajčianska
                                    </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="middle" class="darkgrey_section last_content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Miesta</strong> Tréningov</h2>
                </div>

                <div class="col-md-4">
                    <h3>ŠH Mladosť</h3>
                    <ul class="text-left">
                        <li>Trnavská cesta 39</li>
                        <li>831 04 Bratislava</li>
                        <li>Tréner: Mgr. Karol Mikuška</li>
                        <li>Utorok  15:30 - 17:00</li>
                        <li>Štvrtok 15:30 - 17:00</li>
                    </ul>
                    <section id="map" class="dark_section no-padding" style="height: 400px;"></section>
                </div>

                <div class="col-md-4">
                    <h3>ZŠ Rajčianska</h3>
                    <ul class="text-left">
                        <li>Rajčianska 3</li>
                        <li>821 07 Bratislava</li>
                        <li>Tréner: Mgr. Agáta Strzelczyk</li>
                        <li>Pondelok 15:00 - 16:00</li>
                        <li>Štvrtok 15:00 - 16:00</li>
                    </ul>
                    <section id="maptwo" class="dark_section no-padding" style="height: 400px;"></section>
                </div>

                <div class="col-md-4">
                    <h3>ZŠ Černyševského</h3>
                    <ul class="text-left">
                        <li>Černyševského 8</li>
                        <li>851 01 Bratislava</li>
                        <li>Tréner: Martin Bognár</li>
                        <li>Pondelok 15:30 - 17:00</li>
                        <li>Štvrtok 15:30 - 17:00</li>
                    </ul>
                    <section id="mapthree" class="dark_section no-padding" style="height: 400px;"></section>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <!-- Map Scripts -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkHqNqhBXdxO0E8ACD8uzgvDLEzzWhtrA"></script>
    <script type="text/javascript">
        var lat;
        var lng;
        var map;

        //type your address after "address="
        jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=Bratislava, Trnavská cesta, 39a&sensor=false', function(data) {
            lat = data.results[0].geometry.location.lat;
            lng = data.results[0].geometry.location.lng;
        }).complete(function(){
            dxmapLoadMap();
        });

        jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=Bratislava, Rajčianska, 3a&sensor=false', function(data) {
            lat = data.results[0].geometry.location.lat;
            lng = data.results[0].geometry.location.lng;
        }).complete(function(){
            dxmapLoadMapTwo();
        });

        jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=Bratislava, Černiševského, 8a&sensor=false', function(data) {
            lat = data.results[0].geometry.location.lat;
            lng = data.results[0].geometry.location.lng;
        }).complete(function(){
            dxmapLoadMapThree();
        });

        function attachSecretMessage(marker, message)
        {
            var infowindow = new google.maps.InfoWindow(
                    { content: message
                    });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
        }

        window.dxmapLoadMap = function()
        {
            var center = new google.maps.LatLng(lat, lng);
            var settings = {
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 16,
                draggable: true,
                scrollwheel: false,
                center: center
            };
            map = new google.maps.Map(document.getElementById('map'), settings);

            var marker = new google.maps.Marker({
                position: center,
                title: 'Map title',
                map: map
            });
            marker.setTitle('Map title'.toString());
            //type your map title and description here
            attachSecretMessage(marker, '<h3 style="color: #3266db">ŠH Mladosť</h3>Trnavská cesta 39, 831 04 Bratislava');
        }

        window.dxmapLoadMapTwo = function()
        {
            var center = new google.maps.LatLng(lat, lng);
            var settings = {
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 16,
                draggable: true,
                scrollwheel: false,
                center: center
            };
            map = new google.maps.Map(document.getElementById('maptwo'), settings);

            var marker = new google.maps.Marker({
                position: center,
                title: 'Map title',
                map: map
            });
            marker.setTitle('Map title'.toString());
            //type your map title and description here
            attachSecretMessage(marker, '<h3 style="color: #3266db">ZŠ Rajčianska</h3>Rajčianska 3, 821 07 Bratislava');
        }

        window.dxmapLoadMapThree = function()
        {
            var center = new google.maps.LatLng(lat, lng);
            var settings = {
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 16,
                draggable: true,
                scrollwheel: false,
                center: center
            };
            map = new google.maps.Map(document.getElementById('mapthree'), settings);

            var marker = new google.maps.Marker({
                position: center,
                title: 'Map title',
                map: map
            });
            marker.setTitle('Map title'.toString());
            //type your map title and description here
            attachSecretMessage(marker, '<h3 style="color: #3266db">ZŠ Černyševského</h3>Černyševského 8, 851 01 Bratislava');
        }
    </script>
@endsection