@extends('layouts.layout')

@section('content')
    <h2>Send a post:</h2>

    <form action="/post" method="get">

        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Feedback:</label>
            <input class="form-control" type="text" name="userName" id="userName" placeholder="User Name*" required autofocus>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address*" required
                   autofocus>
            <input type="url" id="inputHomepage" name="homepage" class="form-control" placeholder="Homepage">
            <input type="text" id="inputMsg" name="msg" class="form-control" placeholder="Enter your message*" required
                   autofocus>
            <p>*Required fields</p>
            <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">


            {!! captcha_image_html('ExampleCaptcha') !!}
            <input type="text" id="CaptchaCode" name="CaptchaCode">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Send</button>
        </div>

        @include('layouts.error')

    </form>


@endsection