$(document).ready(function(){
    $('#amazon-order').mask('000-0000000-0000000');
    // if($('.radio-group .radio').hasClass("selected")){
    //
    //     $('.radio-group .radio .selected').find("span.material-icons").removeAttr("hidden");
    //
    // }
    // else {
    //
    //     $('.radio-group .radio').find("span.material-icons").attr("hidden");
    //
    // }
});

$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    $('.set_data_input').val($('.selected .relative_pass .subtittle1').html());
    var elt = $(this).find("p.toogle_text").attr('for');
    $(this).find("p.toggle_text").text("Selected");
    $('.fa-check-circle').hide();
    $("#" + elt).toggle();
    // $(this).html($(this).find("p.toggle_text").html() == "Select" ? "Selected" : "Select");
    // console.log("#"+elt);

    // material-icons

    // $(this).find("span").toggle();
});


function myFunction2() {
    var copyText = document.getElementById("myInput");
    document.getElementById('btncopied').innerText = 'Copied!';
    copyText.select();
    document.execCommand("copy");

    Swal.fire({
        text:" "+ copyText.value,
        title: " ",
        confirmButtonColor:'#E6282B',
    });

    document.getElementById('amazon').removeAttribute('disabled');
    $('#amazon').addClass('button3');
}

function timeFunction() {
    setTimeout(function myFunction3(){
        document.getElementById('two').removeAttribute('disabled');
        $('#two').addClass('button3');
    }, 5000);
}

function textLength(value){
    var maxLength = 14;
    if(value.length > maxLength) return false;
    return true;
}

function reboot() {
    var review = document.getElementById("txtarea").value;
    window.location.replace("/review/"+review+"/");
}

function validate() {

    var txta = document.getElementById('txtarea').value;
    if (txta.trim().length == 0) {

        Swal.fire({
            text:" Please leave a review about the product!",
            title: " ",
            confirmButtonColor:'#E6282B',
        });

        return false;
    } else {
        if (txta.trim().length < 20) {
            Swal.fire({
                text:"Your review should be at least 100 characters long.",
                title: " ",
                confirmButtonColor:'#E6282B',
            });

            return false; // keep form from submitting

        }

    }
}
