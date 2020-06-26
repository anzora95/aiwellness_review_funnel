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
    alertify.alert("Copied the text: " + copyText.value);
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

// function change() // no ';' here
// {
//     var elem = document.getElementsByClassName("sele");
//     if (elem.value=="Close Curtain") elem.value = "Open Curtain";
//     else elem.value = "Close Curtain";
// }
