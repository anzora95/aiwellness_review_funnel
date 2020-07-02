@extends('layouts.app')

@section('extra_links')

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('banner')

@extends('banners.banner1')

@endsection

@section('content')
{{-- <form method="get">--}}
{{--     @csrf--}}
    <div class="container">
        <div class="text-center"> <h3 style="font-family: 'Montserrat','sans-serif';"> Please select the product you purchased: </h3></div>
        <br>
        <div class="row text-center radio-group">
                <div class="col-md-4 radio">
                    {{ HTML::image('img/Stage1.png', 'banner1', array('style' => 'width: 40%; high: 40%; margin: 0px; ')) }}
                    <div class="text-center relative_pass">
                        <p class="subtittle1">
                            STAGE-1 IGNT&trade;
                        </p>
                        <P style="font-family: 'Arial Black','sans-serif'; color: #E6282B; margin: 0; ">
                            PRE WORKOUT
                        </P>

                            <div class="buttonselect" style="margin: auto;">
                                <p style="margin: 0" for="q1" class="toogle_text">Select<i class="fa fa-check-circle" aria-hidden="true" id="q1" style="margin-left: 5px;"></i></p>
                            </div>

                    </div>
                </div>
                <div class="col-md-4 radio text-center">
                    {{ HTML::image('img/Stage2.png', 'banner1', array('style' => 'width: 40%; high: 40%; margin: 0px; ')) }}
                    <div class="text-center relative_pass">
                        <p class="subtittle1">
                            STAGE-2 PRFM&trade;
                        </p>
                        <P style="font-family: 'Arial Black','sans-serif'; color: #E6282B; margin: 0; ">
                            INTRA-WORKOUT
                        </P>

                            <div class="buttonselect text-center" style="margin: auto;">
                                <p style="margin: 0" for="q2" class="toogle_text">Select<i class="fa fa-check-circle" aria-hidden="true" id="q2" style="margin-left: 5px;" ></i></p>
                            </div>

                    </div>
                </div>
                <div class="col-md-4 radio">
                    {{ HTML::image('img/Jointcap.png', 'banner1', array('style' => 'width: 40%; high: 40%; margin: 0px; ')) }}
                    <div class="text-center relative_pass">
                        <p class="subtittle1">
                            JOINTCAP X4&trade;
                        </p>
                        <P style="font-family: 'Arial Black','sans-serif'; color: #E6282B; margin: 0; ">
                            JOINT HEALTH SUPPORT
                        </P>

                        <div class="buttonselect" style="margin: auto;">
                            <p style="margin: 0" for="q3" class="toogle_text">Select<i class="fa fa-check-circle" aria-hidden="true" id="q3" style="margin-left: 5px;"></i></p>
                        </div>


                    </div>
                </div>


        </div>
        <input type="text" name="product" class="set_data_input" hidden>
    </div>
    <br>
    <br>
    <div class="container">
    <div class="text-center">
        <h3 class="form-question text-center">
            What is your Amazon order #?
        </h3>
        <div class="form-group text-center">
            <input style="max-width:100%;"   type="text" name="order" class="text-center amazon " id="amazon-order" placeholder="___-_______-______" maxlength="17" required>

        </div>
    </div>
    </div>

    <div class="container">

        <!-- End Input with Masking -->
        <h3 class="text-center sans form-overall" style="color: #333333;font-weight:300; padding-bottom:5px; ">Your overall satisfaction rating: </h3>

        <!-- Star System -->
        <div class="text-center " style="margin-top: 30px; ">
            <input type="radio" class="hidden" name="stars" id="star-null" hidden/>
            <input type="radio" class="hidden" name="stars" value="1" id="star-1" hidden/>
            <input type="radio" class="hidden" name="stars" value="2" id="star-2" hidden/>
            <input type="radio" class="hidden" name="stars" value="3" id="star-3" hidden/>
            <input type="radio" class="hidden" name="stars" value="4" id="star-4" hidden/>
            <input type="radio" class="hidden" name="stars" value="5" id="star-5"  checked  hidden/>   <!-- checked hace que este activo -->
            <section>

                <label for="star-1"> <svg width="10%" id="star1" onclick="ani1()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                        <path  d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" stroke="#e6282b"/>
                    </svg> </label>
                <label for="star-2"> <svg width="10%" id="star2" onclick="ani2()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                        <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" stroke="#e6282b"/>
                    </svg> </label>
                <label for="star-3"> <svg width="10%" id="star3" onclick="ani3()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                        <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" stroke="#e6282b"/>
                    </svg> </label>
                <label for="star-4"> <svg width="10%" id="star4" onclick="ani4()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                        <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" stroke="#e6282b"/>
                    </svg> </label>
                <label for="star-5"> <svg width="10%" id="star5" onclick="ani5()" height="10%" style="fill:#eeeeee;" viewBox="0 0 51 48">
                        <path d="m25,1 6,17h18l-14,11 5,17-15-10-15,10 5-17-14-11h18z" stroke="#e6282b"/>
                    </svg> </label>
                <!-- <label for="star-null"> Clear </label> -->    <!-- Esto es para reset las estrellas -->

            </section>
            <!-- End Start System -->
            <br>
            <br>
            <p class="text-center" style="padding-top:0px; color: #333333;font-weight:300; font-size: 22px; font-family: 'Montserrat','sans-serif'">Tell us about your experience with the product. <br>Please include details about how it's benefiting you.</p>
            <div class="text-center">
                <textarea id="txtarea" name="review" class="textareastyle" rows="10" style="margin-top:5px; max-width:100%; width:595px;" required></textarea>
            </div>
            <p class="text-center" style="margin-top: 16px;">
                <button  id="two"class="button25 text-center" onclick="reboot()">Get My FREE Creatine <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left: 10px; font-size: 24px"></i> </button>
            </p>
        </div>
    </div>
{{--</form>--}}
<script>






    $('input[name="order"]').mask('000-0000000-0000000');
</script>

@endsection
@section('footer')

    @include('banners.footer')

@endsection
