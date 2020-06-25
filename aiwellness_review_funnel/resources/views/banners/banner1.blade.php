<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container-fluid banner" style="margin-top: 1%; padding: 0; height: 140%; width: 100%">

    <div class="row banner-row">

        <div class="col-lg-6 col-sm-12" >
            {{ HTML::image('img/logo_01.png', 'logo', array('style' => 'width: 15%; margin: 0px; margin-left: 3%')) }}
            <h3 style="margin: 0px; margin-left: 3%; " class="subtitle1">GET YOUR</h3>
            <h1 style="margin: 0px; margin-left: 3%; " class="subtittle2">FREE</h1>
            <h1 style="margin: 0px; margin-left: 3%; " class="subtittle2">CREATINE</h1>
            <h4 style="margin: 0px; margin-left: 3%; font-family: 'Montserrat','sans-serif'">after actively taking our product for at least 7 days.* <br> No Credit Card Required - Free Shipping!</h4>
        </div>
        <div class="col-lg-6 col-sm-12">
            {{ HTML::image('img/creatine.png', 'logo', array('style' => 'width: 100%; margin: 0px; ')) }}
        </div>

    </div>
    <div class="row" style="color:white">
        <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2 text-center">
            <h3 style="font-family: 'Arial Black','sans-serif'">Share your HONEST feedback with us and we'll send you a FREE <br> sample-sized bottle of our best-selling product!</h3>
        </div>
        <br>
    <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2 text-center">
        <p>*Following Conditions Apply: Customer agrees to share their honest feedback with us on our product after actively using for at least 7 days. Limited to one free sample-sized bottle per product review, per household. The sample-sized product offering will be selected by AI Wellness. Offer valid while supplies last. This offer is NOT contingent on leaving a review on any website. Product must have been purchased through Amazon.com or AIwellness.com.</p>
    </div>

    </div>

</div>

<style>

    div.banner{
        background-image: url("img/banner-1.png");
        background-position: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
        padding: 100px 10px 100px 10px;

    }
    .container-fluid.banner{
        padding-left: 10px;
        padding-right: 10px;
    }


    .banner-row{
        max-width: 100%;
        padding: auto;
        margin: auto;
    }
    .banner-row{
        max-width: 100%;
        display: flex;

        justify-content: center;
    }

</style>
