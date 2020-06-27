<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div id="banner-mobil" class="container-fluid">
    <div class="container text-center">
        <h1>Mobil version here</h1>
        <h2>Mobil version here</h2>
        <h3>Mobil version here</h3>
        <h4>Mobil version here</h4>
        <h5>Mobil version here</h5>
        <h6>Mobil version here</h6>

    </div>
</div>
<div id="index-banner" class="container-fluid banner" style="margin-top: 1%; padding: 0; height: 140%; width: 100%">
{{--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">--}}

    <div class="row banner-row">

        <div class="col-lg-6 col-sm-12" >
            {{ HTML::image('img/logo_01.png', 'logo', array('style' => 'width: 15%; margin: 0px; margin-left: 3%')) }}
            <h3 style="margin: 0px; margin-left: 3% ;" class="subtitle1">GET YOUR</h3>
            <h4 style="margin: 0px; margin-left: 3% ; margin-top: -4%;" class="subtittle2">FREE </h4>
            <h4 style="margin: 0px; margin-left: 3% ; margin-top: -4%" class="subtittle2">CREATINE</h4>

            <h4 style="margin: 0px; margin-left: 3% ; font-family: 'Montserrat','sans-serif'; font-weight: 300">after actively taking our product for at least 7 days.* <br> No Credit Card Required - Free Shipping!</h4>
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
            <br> least 7 br days. Limited to one free sample-sized bottle per product review, per household. The sample-sized product offering will
            <br> be selected by AI Wellness. Offer valid while supplies last. This offer is NOT contingent on leaving a review on any website.
            <br>Product must have been purchased through Amazon.com or AIwellness.com.</p>
    </div>

    </div>

</div>

<style>

    div.banner{
        background-image: url("img/banner-1.png");
        background-position: 40%;
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
