@extends('layouts.app')
@section('extra_links')

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
@endsection
@section('banner')

    @extends('banners.banner2')


{{--    4 y 5  van a amzon  3 solo guardada--}}
@endsection
@section('content')
    <br>
    <br>
    <div class="container-fluid" style="padding-top: 0px; padding-bottom: 75px;margin-top:-40px;">
        <div class="container">
            <h1 class="text-center sanscondensed" style="color: #000000; font-weight: 700; font-size: 60px; padding-top: 20px; margin-bottom: 20px; font-family: 'Arial Black','sans-serif' ">PLEASE SHARE YOUR REVIEW</h1>
            <!-- <p class="text-center sans" style="color: #FFF;  font-weight: 700;font-size: 35px;">PLEASE SHARE YOUR REVIEW ON AMAZON</p> -->
            <p class="text-center sans" style="color: #000000; font-size: 20px; font-family: 'Arial Black','sans-serif'; font-weight: normal;">Sharing your review helps us pursue our mission to develop the best
                <br> natural supplements products possible.*</p>
        </div>
    </div>

    <!-- START OF FORM -->

    <div class="container-fluid" style="padding: 30px 0px; ">
        <div class="container text-center">
            {{ HTML::image('img/steps1.png', 'step2', array('style' => 'width: 55%; high: 55%; margin: 0px; ')) }}
        </div>
        <div class="col-sm-12 col-md-6 offset-md-3">

            <p class="form-question text-center" style="font-size: 16px;">
                <br>
                Here's what you said:
            </p>
            <div class="col-md-12 text-center">
                <textarea disabled class="textareastyle" rows="10" style="margin-top: 25px;">

                </textarea>
            </div>
            <!-- To be able to copy from the text we need to user the input tag **User css to change the aspect**-->
            <input type="text"  value="" style="opacity: 0.0;
  filter: alpha(opacity=00); /* For IE8 and earlier */" id="myInput" >
            <!-- Que es esto de arriba? Lo podemos quitar ^? O esconder porfa? -->

            <p class="form-question text-center">
                Click to copy your review, then share it on Amazon.* Don’t worry, you won’t lose your place in the process.
            </p>
            <!-- Start of 3 Buttons -->
            <p class="text-center" style="margin-top: 25px;">
                <button class="button2 text-uppercase" onclick="myFunction2()" id="btncopied" style="margin-right: 10px;margin-bottom: 15px;">Click to Copy</button>


                    <button class="buttondisabled2 text-uppercase" id="amazon" onclick="timeFunction()" disabled style="margin-right: 10px;margin-bottom: 15px;" >Review us on Amazon</button>

                <a href="shipping.php">
                    <button class="buttondisabled2" id="two" style="margin-top: 10px;" disabled > OKAY IT'S ON AMAZON</button>
                </a></p>

            </p>
            <hr>
            <p class="text-center">

            <!-- End of 3 Buttons -->
            <p class="text-center sans" style="font-size: 13px; margin-top: 10px;">*Optional - Not mandatory to claim your free sample</p>
        </div> <!-- End of col-md-6 col-md-offset-3 -->
    </div> <!-- End of Container -->
    <!-- FORM END -->


@endsection
