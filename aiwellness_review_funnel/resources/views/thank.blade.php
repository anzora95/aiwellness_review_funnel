@extends('layouts.app')
@section('extra_links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop


@section('banner')

    @extends('banners.banner2')

@endsection
@section('content')

    <div class="container" style="padding-top: 0px; padding-bottom: 0px;margin-top:40px;">
        <div class="row">
            <div class="col-lg-12" style="text-align: left">
                <h2 class="" style="color: #000000; font-weight: 500; font-size: 30px; padding-top: 0px; margin-bottom: 20px; font-family: 'Montserrat','sans-serif';">Your Free Sample Is On the Way!</h2>
                <!-- <p class="text-center sans" style="color: #FFF;  font-weight: 700;font-size: 35px;">PLEASE SHARE YOUR REVIEW ON AMAZON</p> -->
                <p class="secondtittle" >The next time you purchase AI Wellness Products, we would like to
                    <br>help you save. Here are our latest offers for you:</p>
            </div>
        </div>
    </div>

    <div class="container-fluid " style="margin-top: 20px">

        <div class="row text-center">

            <div class="col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div>
                            <p class="over_botton">
                                Subscribe and <br> Save 20%
                            </p>
                        </div>
                        <button class=" button2" type="button">
                            View Subscriptions<i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left: 30px; font-size: 20px"></i>
                        </button>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div>
                            <p class="over_botton">
                                Use <strong>“AIWELLNESS10”</strong>  <br> to Save 10% Off
                            </p>
                        </div>
                        <button class="button2" type="button">
                            See All Products<i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left: 40px; font-size: 20px"></i>
                        </button>
                    </div>
                </div>

            </div>

        </div>
        <div class="row text-center ">
            <div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                {{ HTML::image('img/bundle.png', 'logo', array('style' => 'width: 50%; min-width: 200px;')) }}
            </div>
        </div>

    </div>



@endsection

@section('footer')
    @include('banners.footer')
    @endsection
