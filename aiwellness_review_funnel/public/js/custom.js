$(document).ready(function(){
    $('#amazon-order').mask('000-0000000-0000000');
});

$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
    $('.set_data_input').val($('.selected .relative_pass .subtittle1').html());
    // var val = $(this).attr('data-value');
    // //alert(val);
    // $(this).parent().find('input').val(val);
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
        $('#two').addClass('button2');
    }, 5000);
}

function textLength(value){
    var maxLength = 14;
    if(value.length > maxLength) return false;
    return true;
}
