/**
 * Created by user on 24.04.17.
 */
$(document).ready(function () {
    var id = 0;
    if( ($(window).width() >= 220) && ($(window).width() <= 1100)){
        $('.call-text').css('color', 'black');
        $('.img-job').css('margin-top', '20%');
        $('.call-text').css('margin-top', '10%');
    }
    else if( ($(window).width() > 1100) && ($(window).width() <= 1920)){
        $('.call-text').css('color', 'white');
    }


    if( ($(window).width() >= 220) && ($(window).width() <= 1100)){
        $('.maintext').css('color', 'black');
    }
    else if( ($(window).width() > 1100) && ($(window).width() <= 1920)){
        $('.maintext').css('color', 'white');
    }


    if( ($(window).width() >= 1000) && ($(window).width() <= 1400)){
        $('.br').remove();
    }


    $('.order1').on('click',function () {

        var tmp = '';
        $('#note-order').attr('value', tmp);
        var note = $(this).attr('note');
        $('#note-order').attr('value', note);
        $('#call-modal').modal();
    })

    $('.order1').on('mouseenter',function () {
        $(this).css('animation','move 1s');
    })
    $('.order1').on('mouseleave',function () {
        $(this).css('animation','  go 1s');
    })
    $('.order2').on('mouseenter',function () {
        $(this).css('animation','move 1s');
    })
    $('.order2').on('mouseleave',function () {
        $(this).css('animation','  go 1s');
    })

    $('#save-order').on('click', function () {
        $.ajax({
            method: 'POST',
            url: url_save,
            data:{
                name: $('#name-order').val(),
                phone: $('#phone-order').val(),
                note: $('#note-order').val(),
                _token: token
            }
        })
            .done(function () {
                $('#call-modal').modal('hide');
                $('#modal-ok').modal();
            })
            .fail(function() {
                window.alert( "Проверьте введенные вами данные" );
                $('#name-order').val(' ');
                $('#phone-order').val(' ');
            })
    })



    $('#first').on('click', function () {
        window.scrollTo(0, 0);
    })

   window.onscroll = function () {
       if(window.scrollY > 1000){
           $('#first').css('display', 'block');
           if(window.scrollY < 1500)
           $('#first').css('opacity', window.scrollY/2000);
       }
       else {
           $('#first').css('display', 'none');
       }


       /* id++;
        var position = $('#'+id).position();

        window.scrollTo(position.left, position.top);*/
    }


$('#more').on('click',function () {
    
})



});