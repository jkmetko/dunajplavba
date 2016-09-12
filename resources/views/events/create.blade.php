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
    <section class="darkgrey_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <input type="text" name="name" class="block-header input text-center full-width text-white twxt-bold text-raleway underline" placeholder="Zadajte názov" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="classes media light_section">
                        <div class="fill pull-left">
                            <input id="cover_photo" type="file" style="visibility:hidden" />
                            <div onclick="$('#cover_photo').click();">
                                <img src="{{ asset('img/upload_image.jpg') }}" id="cover_image" alt="image01" class="media-object fill">
                            </div>
                        </div>
                        <div class="media-body">
                            <h3><a href="class-single.html">Informácie</a></h3>
                            <div class="classes-description no-padding">
                                <textarea name="description" id="description" style="width: 100%; height: 320px; margin: 0; border: none; padding: 30px" placeholder="Zadajte informácie o podujatí"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
    </section>

    <section id="portfolio" class="darkgrey_section last_content_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header"><strong>Foto</strong>galéria</h2>
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

                <div class="dropzone m-t-40" id="dropzoneFileUpload"></div>
            </div>

        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/vendor/dropzone-4.0.1/dropzone.js') }}"></script>

    <!-- DROPZONE -->
    <script type="text/javascript">
        var baseUrl = "{{ url('/') }}";
        var token = "{{ Session::getToken() }}";
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#dropzoneFileUpload", {
            url: baseUrl + "/dropzone/uploadFiles",
            params: {
                _token: token,
                'eventID': "{{ $event->id }}"
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

    <script src="{{ asset('js/vendor/autogrow/autogrow.min.js') }}"></script>
    <script>
        $("#description").autogrow();

        $("#cover_photo").change(function(){
            var file_data = $('#cover_photo').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);

            $.ajax({
                url: '{{ url('dropzone/uploadCover/'.$event->id ) }}',
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}'
                },
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(output){
                    if(output.result == 'success'){
                        $("#cover_image").attr('src', output.image_url);
                    }else{
                        alert('Obrázok sa nepodarilo nahrať. Akciu opakujte znovu, prosím.')
                    }
                }
            });
        });
    </script>
@endsection