@extends('layouts.master-clean')

@section('page_css')
    <!--Stylesheets-->
    <link href="{{ asset('assets/plugins/jquery.modal/css/jquery.modal.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery.modal/css/jquery.modal.theme-xenon.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/jquery.modal/css/jquery.modal.theme-atlant.css') }}" type="text/css" rel="stylesheet" />
    <style>
        @media (max-width: 1199px) {
            #showHideBtnCss{
                right:3% !important;
                bottom:80px !important;
            }
        }
        @media (max-width: 991px) {
            #showHideBtnCss{
                right:15px !important;
                bottom:65px !important;
            }
        }
        @media (max-width: 321px) {
            #showHideBtnCss{
                bottom:75px !important;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center" style="font-size: 35px; margin-top: 100px">Prosím, prihláste sa</h1>
        <h3 class="colored text-center" style="margin: 0">pre vstup do administračnej zóny je nutná autentifikácia</h3>
        <div class="header-strips-two"></div><br/>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="row text-center" style="font-size: 18px">
                    Prihlásenie do klientskej sekcie. Účet je automaticky vytvorený pri zadaní Vašej prvej pohľadávky.
                    <a href="{{ url('zadanie-pohladavky/krok1') }}" class="colored">Zverte nám Vašu pohľadávku</a> a sledujte jej aktuálny stav on-line.
                </div>
                <hr>

                @if(count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                            @if(old('email'))
                                <li>
                                    <form method="POST" action="{{ url('password/email') }}" class="inline-block">
                                        {!! csrf_field() !!}

                                        <div>
                                            <input type="hidden" name="email" value="{{ old('email')}}">
                                        </div>

                                        <div class="inline-block">
                                            <button type="submit" class="inline-block colored" style="background: none; border: 0; font-size: 18px; text-decoration: underline">Zabudli ste heslo?</button>
                                        </div>
                                    </form>
                                </li>
                            @endif
                    </ul>
                @endif

                <form method="POST" action="{{ url('auth/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group" style="font-size: 18px">
                        Email
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                    </div>

                    <div class="form-group" style="font-size: 18px">
                        Password
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div id="showHideBtnCss" class="form-group" style="position:absolute; right:16px; bottom:23%;">
                        <img id="showHidePwdBtn" type="button" class="btn btn-danger" onclick="togglePassword()" src="{{ asset('assets/img/eye_closed.png')}}" title="Ukázať heslo" style="height: 41px;">
                    </div>

                    <div class="form-group" style="font-size: 18px">
                        <input type="checkbox" name="remember"> Zamäpatať si prihlásenie
                        <a href="#" id="modal-password-reset" class="pull-right colored">Zabudli ste heslo?</a>
                    </div>

                    <div class="form-group" style="font-size: 18px">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" style="font-size: 18px"><i class="fa fa-lock"></i> Prihlásiť sa</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection

@section('page_scripts')
    <script src="{{ asset('assets/plugins/jquery.modal/js/jquery.modal.js') }}"></script>
    <script>
        $('#modal-password-reset').click(function() {
            modal({
                type: 'prompt',
                title: 'Zadajte e-mail',
                text: 'Zadajte svoj e-mail, <strong class="colored">ktorým sa prihlasujete do klientskej zóny</strong>, pre zaslanie správy na reset hesla.',
                callback: function(result) {
                    resetPassword(result);
                },
                background: 'rgba(0,0,0,0.35)', //Background Color, it can be null
                center: true, //Center Modal Box?
                autoclose: false, //Auto Close Modal Box?
                closeClick: true, //Close Modal on click near the box
                closable: true, //If Modal is closable
                theme: 'xenon', //Modal Custom Theme
                animate: true, //Slide animation
                zIndex: 1050, //z-index
                buttonText: {
                    ok: 'OK',
                    yes: 'Yes',
                    cancel: 'Zrušiť'
                },
                template: '<div class="modal-box"><div class="modal-inner"><div class="modal-title"><a class="modal-close-btn"></a></div><div class="modal-text"></div><div class="modal-buttons"></div></div></div>',
                _classes: {
                    box: '.modal-box',
                    boxInner: ".modal-inner",
                    title: '.modal-title',
                    content: '.modal-text',
                    buttons: '.modal-buttons',
                    closebtn: '.modal-close-btn'
                }
            });
        });

        function resetPassword(email){
            if(email != "false"){
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    },
                    url: '{{ url('password/email') }}',
                    data: {
                        email: email
                    },
                    success: function (output) {
                        $.gritter.add({
                            title: "Obnovenie hesla",
                            text: "E-mail na obnovenie hesla bol odoslaný na adresu "+ email +"."
                        });
                    }
                });
            }
        };
    </script>
    <script>
        function togglePassword() {
            var userPwd = document.getElementById('password');
            var showHidePwdBtn = document.getElementById('showHidePwdBtn');
            if(userPwd.type == "password"){
                userPwd.type = "text";
                {{--showHidePwdBtn.src = "{{ asset('assets/img/eye_opened.png')}}";--}}
                $('#showHidePwdBtn').fadeOut(10, function() {
                    $('#showHidePwdBtn').attr("src","{{ asset('assets/img/eye_opened.png')}}");
                    $('#showHidePwdBtn').fadeIn(400);
                });
                $('#showHidePwdBtn').src =
                showHidePwdBtn.title = "Skyť heslo";
            } else {
                userPwd.type = "password";
                $('#showHidePwdBtn').fadeOut(10, function() {
                    $('#showHidePwdBtn').attr("src","{{ asset('assets/img/eye_closed.png')}}");
                    $('#showHidePwdBtn').fadeIn(400);
                });
                {{--showHidePwdBtn.src = "{{ asset('assets/img/eye_closed.png')}}";--}}
                showHidePwdBtn.title = "Ukázať heslo";
            }
        }
    </script>
@endsection