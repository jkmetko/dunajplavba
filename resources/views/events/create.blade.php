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
@endsection

@section('content')
    <div class="container" style="margin-top: 100px;">
        <h1>Zadanie pohľadávky - Priloženie dokumentov</h1>
        <div class="row">
            @if($errors->has())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        {{ $error}} <br>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="row m-t-40">
            <div class="col-lg-12">
                <h4>Dokumenty súvisiace s pohľadávkou</h4>
                <div class="dropzone m-t-40" id="dropzoneFileUpload"></div>
            </div>
        </div>
        <div class="row m-t-40">
            <div class="col-lg-12">
                <a href="{{ url('zadanie-pohladavky/uspesne-zadane/') }}" class="btn btn-primary pull-right m-l-20">Zašlem dokumenty poštou</a>
                <a href="{{ url('zadanie-pohladavky/uspesne-zadane/') }}" class="btn btn-success pull-right m-l-20" id="addDocuments">Priložiť dokumenty</a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/vendor/dropzone-4.0.1/dropzone.js') }}"></script>

    <script>
        $(document).ready(function(){
            var addButton = $('#addDocuments');
            window.canUpoad = false;

            addButton.click(function(){
                if(window.canUpload){
                    return true;
                }else{
                    $.gritter.add({
                        title: 'Chyba',
                        text: 'Pre nahranie dokumentov kliknite do šedého rámčeka a vyberte požadované dokumenty.'
                    });
                    return false;
                }
            });
        });
    </script>

    <!-- DROPZONE -->
    <script type="text/javascript">
        var baseUrl = "{{ url('/') }}";
        var token = "{{ Session::getToken() }}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#dropzoneFileUpload", {
            url: baseUrl + "/dropzone/uploadFiles",
            params: {
                _token: token,
                'claimID': {{ $claim_id }},
                claimer: 1
            }
        });
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 500, // MB
            addRemoveLinks: true,
            accept: function(file, done) {

            },
            complete: function(){
                alert('complete');
            }
        };
        myDropzone.on("queuecomplete", function(file) {
            window.canUpload = true;
        });
    </script>
@endsection