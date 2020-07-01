@extends('layouts.app')
@section('extra_links')

    <!-- Alertify -->
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>

    <!--
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.rtl.min.css"/>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
@section('banner')

    @extends('banners.banner2')


{{--    4 y 5  van a amzon  3 solo guardada--}}
@endsection
@section('content')
    <br>
    <br>
    <form action="/shipping" method="post" >
        @csrf
    <div class="container" style="padding-top: 0px; padding-bottom: 0px;margin-top:-40px;">
        <div class="row"  style="">
            <div class="col-lg-12" style="text-align: left">
            <h2 class="" style="color: #000000; font-weight: 500; font-size: 43px; padding-top: 0px; margin-bottom: 20px; font-family: 'Montserrat','sans-serif';">Please Share Your Review</h2>
            <!-- <p class="text-center sans" style="color: #FFF;  font-weight: 700;font-size: 35px;">PLEASE SHARE YOUR REVIEW ON AMAZON</p> -->
            <p class="" style="color: #000000; font-size: 20px; font-family: 'Montserrat','sans-serif'; font-weight: normal;">Sharing your review helps us pursue our mission to develop the best
                <br> natural supplements products possible.*</p>
            </div>
        </div>
    </div>

    <!-- START OF FORM -->

    <div class="container-fluid" style="padding: 30px 0px; ">
        <div class="container text-center">
            <div class="row">

                <div class="col-lg-6 offset-lg-3 col-sm-12">
                    {{ HTML::image('img/steps1.png', 'step2', array('style' => 'width: 100%; high: 100%; margin: 0px; ')) }}
                </div>

            </div>

        </div>

        <div class="col-sm-12 col-md-8 offset-md-2">

            <p class="form-question text-center" style="font-size: 25px;">
                <br>
                Here is your review:
            </p>
            <div class="col-lg-12 text-center">
                <textarea disabled class="textareastyle" rows="10" style="margin-top: 25px; width:100%;">
                    {{$review}}
                </textarea>
            </div>
            <!-- To be able to copy from the text we need to user the input tag **User css to change the aspect**-->
            <input type="text"  value="{{$review}}" style="opacity: 0.0;
  filter: alpha(opacity=00); " id="myInput">
            <!-- Que es esto de arriba? Lo podemos quitar ^? O esconder porfa? -->

            <p class="form-overall text-center">
                Click to copy your review, then share it on AMAZON.* <br> Don’t worry, you won’t lose your place in the process.
            </p>
            <!-- Start of 3 Buttons -->


{{--            <p class="text-center" style="margin-top: 25px;">--}}




{{--</p>--}}

{{--            </p>--}}
            <hr>

        </div> <!-- End of col-md-6 col-md-offset-3 -->
    </div> <!-- End of Container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-sm-12 text-center">
                <div class="row ">
            <div class="col-lg-4 col-sm-12 text-center">
                <button class="button2 " type="button" onclick="myFunction2()" id="btncopied" style="margin-right: 10px;margin-bottom: 15px;">Click to Copy <i class="fa fa-files-o" aria-hidden="true" style="margin-left: 10px; font-size: 24px"></i>
                </button>
            </div>
            <div class="col-lg-4 col-sm-12 text-center">
                <button class="buttondisabled2 "  type="button" id="amazon" onclick="timeFunction()"  style="margin-right: 10px;margin-bottom: 15px;" disabled>Review Us On Amazon <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left: 10px; font-size: 24px"></i> </button>

            </div>
            <div class="col-lg-4 col-sm-12 text-center">
{{--                <a href="/shipping">--}}
                    <button class="buttondisabled2" id="two" style="margin-right: 10px" disabled>My Review Is On Amazon</button>
{{--                </a>--}}
            </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    <p class="text-center">

        <!-- End of 3 Buttons -->
    <p class="text-center " style="font-size: 13px; margin-top: 10px;">*Optional - Not mandatory to claim your free sample</p>
    <!-- FORM END -->




@endsection
@section('footer')
    @include('banners.footer')
@endsection
