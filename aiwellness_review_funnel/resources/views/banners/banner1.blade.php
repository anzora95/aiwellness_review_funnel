<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div id="banner-mobil" class="container-fluid" style="background-color: #ffffff;">
    <div class="container text-center">
        {{ HTML::image('img/logo_01.png', 'logo', array('style' => 'width: 40%; margin: 0px; margin-left: 3%; margin-top:20px','id'=>'logo-header')) }}
        <h3  class="subtitle1"></h3>
        <h4  class="subtittle2"><span style="color: #E6282B;">GET YOUR</span><br> FREE <br>CREATINE</h4>
        <p style="font-weight: 300; margin-bottom: 0px !important; line-height: 20px;">after actively taking our product for <br>at least 7 days.* <br> No Credit Card Required - Free Shipping!</p>
        {{ HTML::image('img/creatine.png', 'logo', array('style' => 'width: 70%; margin: 0px; ','id'=>'creatine-bottle')) }}

    </div>
</div>
{{--<div style="background-color: #000000; color: #ffffff; " class="container-fluid top-shape" >--}}
{{--    <h1 style="margin-bottom: 0px !important;">Top image here</h1>--}}
{{--</div>--}}
<!-- begin Separator -->
{{--<div class="separator" style="background-color: #ffffff;">--}}
{{--    <svg class="separator__svg" width="100%" height="150" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#e5272d" version="1.1" xmlns="http://www.w3.org/2000/svg">--}}
{{--        <path d="M 100 100 V 10 L 0 100"/>--}}
{{--        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>--}}
{{--    </svg>--}}
{{--</div>--}}
<div  class="container-fluid text-center middle" style="padding: 0px;">
    {{ HTML::image('img/movil-fondo.jpg', 'logo', array('style' => 'width: 100%; margin: 0px; margin-top:-216px;','id'=>'shape-mobil')) }}
</div>
<div style="background-color: #e5272d; color: #ffffff; padding-top: 20px; padding-bottom: 20px;" class="container-fluid text-center middle">
    <h4 style="font-family: 'Montserrat','sans-serif';">Share your HONEST feedback with us and we'll send you a FREE  sample-sized bottle of our best-selling product!</h4>
    <p style="text-align: justify !important;">*Following Conditions Apply: Customer agrees to share their honest feedback with us on our product after actively using for at
         least 7 br days. Limited to one free sample-sized bottle per product review, per household. The sample-sized product offering will
        be selected by AI Wellness. Offer valid while supplies last. This offer is NOT contingent on leaving a review on any website.
        Product must have been purchased through Amazon.com or AIwellness.com.</p>
</div>
{{--<div style="background-color: #000000; color: #ffffff;" class="container-fluid bottom-shape">--}}
{{--    <h1>bottom image here</h1>--}}
{{--</div>--}}
<div  class="container-fluid text-center middle" style="padding: 0px; background-color: #ffffff;">
    {{ HTML::image('img/movil-bottom.png', 'logo', array('style' => 'width: 100%; margin: 0px; ')) }}
</div>
<div class="mobil-spacer" style="background-color: #ffffff;">
    <br>
    <br>
</div>
<div id="index-banner" class="container-fluid banner" style="margin-top: 1%; padding: 0; height: 140%; width: 100%; background-color: #ffffff;">
{{--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">--}}

    <div class="row banner-row">

        <div class="col-lg-6 col-sm-12" >
            <div class="container text-left">
                {{ HTML::image('img/logo_01.png', 'logo', array('style' => 'width: 15%; margin: 0px; margin-left: 5px;')) }}
                <h3 style="margin: 0px; margin-left: 5px ;" class="subtitle1">GET YOUR</h3>
                <h4 style="margin: 0px;  margin-top: -4%;" class="subtittle2">FREE </h4>
                <h4 style="margin: 0px;  margin-top: -4%" class="subtittle2">CREATINE</h4>

                <h4 style="margin: 0px;  margin-left: 5px ; font-family: 'Montserrat','sans-serif'; font-weight: 300">after actively taking our product for at least 7 days.* <br> No Credit Card Required - Free Shipping!</h4>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 text-center" style="padding-bottom:10%">
            {{ HTML::image('img/creatine.png', 'logo', array('style' => 'width: 100%; margin: 0px; ')) }}
        </div>

    </div>
    <div class="row" style="color:white; margin: 0px;">
        <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2 text-center" style="padding-right: 5px; padding-left:5px ; ">
            <h3 style="font-family: 'Montserrat','sans-serif';">Share your HONEST feedback with us and we'll send you a FREE <br> sample-sized bottle of our best-selling product!</h3>
        </div>
        <br>
    <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2 text-center">
        <p >*Following Conditions Apply: Customer agrees to share their honest feedback with us on our product after actively using for at
            <br> least 7 br days. Limited to one free sample-sized bottle per product review, per household. <br>The sample-sized product offering will
            be selected by AI Wellness. Offer valid while supplies last. <br>This offer is NOT contingent on leaving a review on any website.
            <br>Product must have been purchased through Amazon.com or AIwellness.com.</p>
    </div>

    </div>

</div>

<style>

    div.banner{
        background-image: url("img/banner-1.png");
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
        padding: 0px 0px 0px 0px;

    }
    .container-fluid.banner{
        padding-left: 10px;
        padding-right: 10px;
        margin: 0px;
    }


    .banner-row{
        max-width: 100%;
        padding: 0px;
        margin: 0px;
    }
    .banner-row{
        max-width: 100%;
        height: 65%;
        /*display: flex;*/

        justify-content: center;
    }

</style>
