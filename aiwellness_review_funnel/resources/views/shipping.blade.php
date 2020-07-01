@extends('layouts.app')
@section('extra_links')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
@stop


@section('banner')

    @extends('banners.banner2')

@endsection
@section('content')




    <div class="container-fluid" style="padding: 30px 0px 0px 0px; background-color: #FFF;">
{{--        <div class="container">--}}
{{--            <div class="row"  style="">--}}
{{--                <div class="col-lg-12" style="text-align: left">--}}
{{--                    <h2 class="" style="color: #000000; font-weight: 500; font-size: 30px; padding-top: 0px; margin-bottom: 20px; font-family: 'Montserrat','sans-serif';">Thank You for Your Review</h2>--}}
{{--                    <!-- <p class="text-center sans" style="color: #FFF;  font-weight: 700;font-size: 35px;">PLEASE SHARE YOUR REVIEW ON AMAZON</p> -->--}}
{{--                    <p class="" style="color: #000000; font-size: 15px; font-family: 'Montserrat','sans-serif'; font-weight: normal;">Sharing your review helps us pursue our mission to develop the best--}}
{{--                        <br> natural supplements products possible.*</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-sm-12">
                    {{ HTML::image('img/steps2.png', 'step2', array('style' => 'width: 100%; high: 80%; margin: 0px; ')) }}
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12 col-md-8 offset-md-2" >

                {{--        <div style="max-width:100%;" class="text-center col-lg-6 offset-lg-3" style="padding-bottom: 70px;">--}}



                <!-- START OF NEW FORM -->

                    <form action="" onsubmit="return validateshipping()" method="POST">
                        <p class="form-question" style="margin-top:30px; font-family: 'Arial Black','sans-serif'; font-size: 32px;">
                            Where do we send your free sample?
                        </p>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input style="width:100%;" type="text" name="fName" class="amazon2 underline" oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '').replace(/(\.*)\./g, '$1');" id="fName" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input style="width:100%;" type="text" name="lName" class="amazon2 underline" oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '').replace(/(\.*)\./g, '$1');" id="lName" placeholder="Last Name" required>
                            </div>
                        </div>
                        <input style="width:100%;" type="text" name="email" class="amazon2 underline" id="amazon-ordermail" placeholder="Your Email Address" required>

                        <input style="width:100%;" type="text" id="sAddress1" name="sAddress1" class="amazon2 underline"  placeholder="Street Address" required>
                        <input style="width:100%;" type="text" name="sAddress2" class="amazon2 underline" id="amazon-order" placeholder="Address Line 2" required>
                        <input style="width:100%;" type="text" id="route" name="route" class="amazon2 underline"  placeholder="Route" title="Add unit number if applicable" data-toggle="tooltip" data-placement="top" rel="txtTooltip" hidden>
                        <input style="width:100%;" type="text" id="street_number" name="stree_number" class="amazon2 underline"  placeholder="Street Number " title="Add unit number if applicable" data-toggle="tooltip" data-placement="top" rel="txtTooltip" hidden>

                        <div class="row">
                            <div class="col-md-6">
                                <input style="width:100%;" type="text" name="city" class="amazon2 underline" id="locality" placeholder="City">
                            </div>
                            <div class="col-6 col-md-2">
                                <input id="administrative_area_level_1" name="state" class="amazon2 underline" placeholder="State" style="padding-bottom:1px;  width:100%;" required>

                                    {{--                        <?php include("src/includes/states.php");?> <!--Lista de Estados (src/includes/states)-->--}}

                                </input>
                            </div>
                            <div class="col-6 col-md-4">
                                <input  style="width:100%;" type="text" name="zip" class="amazon2 underline" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\.*)\./g, '$1');"  id="postal_code" pattern=".{5,5}"maxlength="5" placeholder="Zip"required>
                            </div>
                        </div>
                        <!-- <input  type="submit" name="send" value="Submit" required/> -->

                        <div class="text-center">
                            <button class="button12 text-center">Send My Free Sample <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left: 10px; font-size: 24px"></i></button>
                        </div>


                        {{--        </div>--}}
                    </form>
                </div>
            </div>
        </div>


        <!-- FORM END -->


    </div>

    <!-- FOOTER -->
<!--    --><?php //include ("src/includes/footer.php"); ?>
    <!-- END FOOTER -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/scripts.js"></script>
    <script>function validateshipping() {

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var nameformat=/^[a-zA-Z]{5,45}$/;
            var mail=document.getElementById('amazon-ordermail').value;
            var zip=document.getElementById('zip').value;
            var fName=document.getElementById('fName').value;
            var lName=document.getElementById('lName').value;
            var sAddress1=document.getElementById('sAddress1').value;
            var city=document.getElementById('city').value;
            /* MAIL VALIDATION */
            if(mail.match(mailformat)){
            }
            else{
                alertify.alert('Please insert a valid email!');
                return false;
            }
            /*
            FIRST NAME VALIDATION */
            if(fName.trim().length <= 2){
                alertify.alert('Please check your first name!');
                return false;
            }

            /*
            LAST NAME VALIDATION */
            if(lName.trim().length <= 2){
                alertify.alert('Please check your last name!');
                return false;
            }

            /*
            SHIPPIN ADDRES VALIDATION */
            if(sAddress1.trim().length <= 0){
                alertify.alert('Please check your shipping addres!');
                return false;
            }

            /*
            City VALIDATION */
            if(city.trim().length <= 0){
                alertify.alert('Please check your city!');
                return false;
            }
            /* STATE VALIDATION */
            var val = document.getElementById('state').value;
            if (val == 'select') {
                alertify.alert('Please choose a state!');
                return false; // keep form from submitting
            }
            /* ZIP VALIDATION */
            if(zip.length < 5){
                alertify.alert('Please insert a valid zip code!');
                return false;
            }





            // else form is good let it submit, of course you will
            // probably want to alert the user WHAT went wrong.
            return true;
        }</script>
    <script>
        alertify.defaults = {
            // dialogs defaults
            autoReset:true,
            basic:false,
            closable:false,
            closableByDimmer:true,
            frameless:false,
            maintainFocus:true, // <== global default not per instance, applies to all dialogs
            maximizable:true,
            modal:true,
            movable:true,
            moveBounded:false,
            overflow:true,
            padding: true,
            pinnable:true,
            pinned:true,
            preventBodyShift:false, // <== global default not per instance, applies to all dialogs
            resizable:true,
            startMaximized:false,
            transition:'pulse',

            // notifier defaults
            notifier:{
                // auto-dismiss wait time (in seconds)
                delay:5,
                // default position
                position:'bottom-right',
                // adds a close button to notifier messages
                closeButton: false
            },

            // language resources
            glossary:{
                // dialogs default title
                title:'FreeGobiotix',
                // ok button text
                ok: 'OK',
                // cancel button text
                cancel: 'Cancel'
            },

            // theme settings
            theme:{
                // class name attached to prompt dialog input textbox.
                input:'ajs-input',
                // class name attached to ok button
                ok:'ajs-ok',
                // class name attached to cancel button
                cancel:'ajs-cancel'
            }
        };
    </script>

    <script>
        var placeSearch, autocomplete;

        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            postal_code: 'short_name'

        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search predictions to
            // geographical location types.
            autocomplete = new google.maps.places.Autocomplete(
                document.getElementById('sAddress1'), {types: ['geocode']});
            // Avoid paying for data that you don't need by restricting the set of
            // place fields that are returned to just the address components.
            autocomplete.setFields(['address_component']);

            // When the user selects an address from the drop-down, populate the
            // address fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);

        }

        function fillInAddress() {
            console.log("entra en el fill address ");
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();
            var address_data;

            // for (var component in componentForm) {
            //     document.getElementById(component).value = '';
            //     // document.getElementById(component).disabled = false;
            //     console.log("funcion  get element by id");
            // }
            // console.log("salio de funcion get element by id ");
            // Get each component of the address from the place details,
            // and then fill-in the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {


                console.log(place.address_components.length);
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    console.log("Address component : ");
                    console.log(addressType);

                    if (addressType == "street_number"){
                        var address1_street_number = place.address_components[i][componentForm[addressType]];

                    }else if (addressType=="route"){
                        var address1_route = place.address_components[i][componentForm[addressType]];

                    }

                    // console.log("valor de cada address type");
                    // console.log(val);
                    document.getElementById(addressType).value = val;

                }
            }

            if (!address1_street_number){

                document.getElementById("sAddress1").value =address1_route;
            }
            else{

                document.getElementById("sAddress1").value = address1_street_number +" "+ address1_route;
            }


        }

        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle(
                        {center: geolocation, radius: position.coords.accuracy});
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHrRpn0FGYLAZ0bi1UTHPCmGClIZo8diA&libraries=places&callback=initAutocomplete" ></script>
    </body>


@endsection
