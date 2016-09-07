@extends('layouts.master-clean')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center colored" style="font-size: 35px; margin-top: 100px">Heslo</h1>
                <h3 class="text-center" style="margin: 0">Zmena hesla</h3>
                <div class="header-strips-two"></div>

                <form method="POST" action="/password/reset">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="form-group m-t-20">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group m-t-20">
                        <label for="password">Nové heslo</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="form-group m-t-20">
                        <label for="password_confirmation">Overenie nového hesla</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>

                    <br>

                    <div class="form-group m-t-20">
                        <button type="submit" class="btn btn-success">
                            Upraviť heslo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection