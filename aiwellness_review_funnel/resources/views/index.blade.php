@extends('layouts.app')

@section('extra_links')

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
@endsection

@section('banner')

@extends('banners.banner1')

@endsection

@section('content')

<div class="container">
    <div class="text-center"> <strong><h2> Please select the product you purchase </h2></strong></div>
    <br>
    <div class="row text-center">
            <div class="col-md-4">
                {{ HTML::image('img/Stage1.png', 'banner1', array('style' => 'width: 60%; high: 60%; margin: 0px; ')) }}
                <div class="text-center">
                    <p>
                        STAGE-1 IGNT
                    </p>
                    <P>
                        PRE WORKOUT
                    </P>
                    <div class="btn btn-primary" style="background-color: white; color: #6c757d">
                        Select
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{ HTML::image('img/Stage2.png', 'banner1', array('style' => 'width: 60%; high: 60%; margin: 0px; ')) }}
                <div class="text-center">
                    <p>
                        STAGE-1 IGNT
                    </p>
                    <P>
                        PRE WORKOUT
                    </P>
                    <div class="btn btn-primary" style="background-color: white; color: #6c757d">
                        Select
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{ HTML::image('img/Jointcap.png', 'banner1', array('style' => 'width: 60%; high: 60%; margin: 0px; ')) }}
                <div class="text-center">
                    <p>
                        STAGE-1 IGNT
                    </p>
                    <P>
                        PRE WORKOUT
                    </P>
                    <div class="btn btn-primary" style="background-color: white; color: #6c757d">
                        Select
                    </div>
                </div>
            </div>

{{--        {{ HTML::image('img/Stage2.png', 'banner1', array('style' => 'width: 60%; high: 60%; margin: 0px; ')) }}--}}
{{--        <label>--}}
{{--            <input type="radio" name="test" value="big">--}}
{{--            <button class="btn btn-warning">SELECT</button>--}}
{{--        </label>--}}

{{--        {{ HTML::image('img/Jointcap.png', 'banner1', array('style' => 'width: 60%; high: 60%; margin: 0px; ')) }}--}}
{{--        <label>--}}
{{--            <input type="radio" name="test" value="small" checked>--}}
{{--            <button class="btn btn-warning">SELECT</button>--}}
{{--        </label>--}}

{{--        {{ HTML::image('img/Stage1.png', 'banner1', array('style' => 'width: 60%; high: 60%; margin: 0px; ')) }}--}}
{{--        <label>--}}
{{--            <input type="radio" name="test" value="small" checked>--}}
{{--            <button class="btn btn-warning">SELECT</button>--}}
{{--        </label>--}}

    </div>
</div>
<br>
<br>
<div class="container">
<div class="text-center">
    <h3 class="form-question text-center">
        What is your Amazon order #?
    </h3>
    <div class="form-group text-center">
        <input style="max-width:100%;"   type="text" name="order" class="text-center amazon underline" id="amazon-order" placeholder="___-_______-______" maxlength="17" >

    </div>
</div>
</div>

<div class="container">

    <!-- End Input with Masking -->
    <p class="text-center sans" style="color: #333333;font-weight:300; font-size: 22px; padding-bottom:5px; ">Your overall satisfaction rating: </p>


    <!-- Star System -->
    <div class="text-center underline" style="margin-top: 30px; ">
        <input type="radio" class="hidden" name="stars" id="star-null" hidden/>
        <input type="radio" class="hidden" name="stars" value="1" id="star-1" hidden/>
        <input type="radio" class="hidden" name="stars" value="2" id="star-2" hidden/>
        <input type="radio" class="hidden" name="stars" value="3" id="star-3" hidden/>
        <input type="radio" class="hidden" name="stars" value="4" id="star-4" hidden/>
        <input type="radio" class="hidden" name="stars" value="5" id="star-5"  checked  hidden/>   <!-- checked hace que este activo -->
        <section>

            <label for="star-1"> <svg width="10%" id="star1" onclick="ani1()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                    <path  d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                </svg> </label>
            <label for="star-2"> <svg width="10%" id="star2" onclick="ani2()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                </svg> </label>
            <label for="star-3"> <svg width="10%" id="star3" onclick="ani3()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                </svg> </label>
            <label for="star-4"> <svg width="10%" id="star4" onclick="ani4()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                </svg> </label>
            <label for="star-5"> <svg width="10%" id="star5" onclick="ani5()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                    <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z"/>
                </svg> </label>
            <!-- <label for="star-null"> Clear </label> -->    <!-- Esto es para reset las estrellas -->
        </section>


        <br>
        <br>

        <p class="text-center" style="padding-top:0px; color: #333333;font-weight:300; font-size: 22px;  ">Tell us about your expirience with the product. <br>Please include details about how it's benefiting you</p>

        <br>
        <br>

        <br>

        <p class="text-center" style="padding-top:0px; color: #333333;font-weight:300; font-size: 21px;  ">

            The patented design removes leak-prone compression fittings by combining all of the critical sample handling
            <br> components, including a flow meter, metering valve,3-way gas control valve, sensor pocket and pressure sensor ,into
            <br> one solid cross drilled block. The flow efficent design results in up to 400% faster measurement response time.

        </p>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="text-center">
            <textarea id="txtarea" name="review" class="textareastyle" rows="10" style="margin-top:25px; max-width:100%; width:570px;"></textarea>
        </div>

        <br>
        <br>

        <p class="text-center" >

            <button  id="two"class="button1 text-center">Get My FREE Creatine </button>
        </p>

        <!-- End Start System -->
    </div>

</div>

<br>
<br>




<script>

    $('input[name="order"]').mask('000-0000000-0000000');
</script>

@endsection
