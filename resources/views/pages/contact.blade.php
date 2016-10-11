@extends('layouts.master')

    @section('content')
    <section id="abovecontent" class="dark_section bg_image">
        <div class="container"><div class="row">
                <div class="block col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="./" class="pathway"><i class="rt-icon-home"></i></a></li>
                        <li><span>Kontakt</span></li>
                    </ul>
                </div>
            </div></div>
    </section>


    <section id="map" class="dark_section"></section>


    <section id="middle" class="darkgrey_section last_content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Kontaktujte</strong> nás</h2>
                </div>
            </div>
            <div class="row">
                <div class="contact-form">
                    <form class="contact-form" method="post" action="{{ url('contact_mail') }}">
                        <div class="col-sm-6">
                            <p class="contact-form-name">
                                <label for="name">Meno <span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Meno">
                            </p>
                            <p class="contact-form-email">
                                <label for="email">E-mail <span class="required">*</span></label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="E-mail">
                            </p>
                            <p class="contact-form-subject">
                                <label for="subject">Predmet správy <span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Predmet správy">
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="contact-form-message">
                                <label for="message">Správa</label>
                                <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Správa"></textarea>
                            </p>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p class="contact-form-submit text-center vertical-margin-40">
                                <input type="submit" value="Odoslať správu" id="contact_form_submit" name="contact_submit" class="theme_btn">
                            </p>
                        </div>
                    </form>
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
        jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=Bratislava, Horarska, 12a&sensor=false', function(data) {
            lat = data.results[0].geometry.location.lat;
            lng = data.results[0].geometry.location.lng;
        }).complete(function(){
            dxmapLoadMap();
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
                draggable: false,
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
            attachSecretMessage(marker, '<h3 style="color: #3266db">ZK Dunajplavba</h3>Horarska 12/A, 821 09 Bratislava');
        }
    </script>
@endsection