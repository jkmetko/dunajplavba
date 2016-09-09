@extends('layouts.master')

    @section('content')
    <section id="abovecontent" class="dark_section bg_image">
        <div class="container"><div class="row">
                <div class="block col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="./" class="pathway"><i class="rt-icon-home"></i></a></li>
                        <li><span>Contact</span></li>
                    </ul>
                </div>
            </div></div>
    </section>


    <section id="map" class="dark_section"></section>


    <section id="middle" class="darkgrey_section last_content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Contact</strong> Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="contact-form">
                    <form class="contact-form" method="post" action="/">
                        <div class="col-sm-6">
                            <p class="contact-form-name">
                                <label for="name">Name <span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Name">
                            </p>
                            <p class="contact-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                            </p>
                            <p class="contact-form-subject">
                                <label for="subject">Subject <span class="required">*</span></label>
                                <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="contact-form-message">
                                <label for="message">Message</label>
                                <textarea aria-required="true" rows="8" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                            </p>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p class="contact-form-submit text-center vertical-margin-40">
                                <input type="submit" value="Send Message" id="contact_form_submit" name="contact_submit" class="theme_btn">
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

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var lat;
        var lng;
        var map;

        //type your address after "address="
        jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=london, baker street, 221b&sensor=false', function(data) {
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
            attachSecretMessage(marker, '<h3>Map title</h3>Map HTML description');
        }
    </script>
@endsection