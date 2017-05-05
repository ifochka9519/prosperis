
$(document).ready(function () {


    $('.remove').on('click',function () {
        var jobId = $(this).attr('job');

       if(window.confirm("DELETE?")){
           document.getElementById('delete'+jobId).click();
       }
    })

    $('#save_button').on('click', function () {
        window.alert( "DONE!" );
    })


    $('.edit-title').on('click',function () {
        var id = $(this).attr('id');
        var text = $(this).attr('text');
        var description = $(this).attr('description');
        $('#id_change').val(id);
        $('#text_change').val(text);
        $('#description_change').val(description);
        $('#modal_change').modal();
    })

    $('#save_change').on('click',function () {
        $.ajax({
            method: 'POST',
            url: urlT,
            data:{
                id: $('#id_change').val(),
                text: $('#text_change').val(),
                description: $('#description_change').val(),
                _token: token
            }
        })
            .done(function () {
                $('#modal_change').modal('hide');
                location.reload();
            })
            .fail(function() {
                window.alert( "Проверьте введенные вами данные" );
                $('#name-order').val(' ');
                $('#phone-order').val(' ');
            })
    })

})