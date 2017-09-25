@extends('layouts.layout')

@section('content')


    <form action="/post" class="form" method="get" name="registration">
        <link rel="stylesheet" href="{{ URL::asset('css/formValidation.css')}}"/>
        {{csrf_field()}}
        <div class="form-group">

            <label for="userName">Name</label>
            <input class="form-control" type="text" name="userName" id="userName" placeholder="User Name*" required autofocus>

            <label for="email">E-mail</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address*" required
                   autofocus>

            <label for="email">Homepage</label>
            <input type="url" id="inputHomepage" name="homepage" class="form-control" placeholder="Homepage">

            <label for="msg">Message</label>
            <p><textarea rows="4" cols="45" id="msg" name="msg" class="form-control" placeholder="Enter your message*" required></textarea></p>

            <p>*Required fields</p>

            {!! captcha_image_html('ExampleCaptcha') !!}
            <input type="text" id="CaptchaCode" class="captcha" name="CaptchaCode" required autofocus>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Send</button>
        </div>

        @include('layouts.error')

    </form>

@endsection