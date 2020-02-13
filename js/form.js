
$(document).ready(function() {
    $('#form').submit(function() {
        if (document.form.name.value == '' || document.form.email.value == '') {
            return false;
        }
        $.ajax({
            //type: "POST",
            //url: "../php/add_guests.php",
            //data: $(this).serialize()
        }).done(function() {


            $("#myModal").modal('show');
            $(this).find('input').val('');
            $('#form').trigger('reset');
        });
        return false;
    });
});

// Закрыть попап «спасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
    $('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне
    var popup = $('.popup');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $('.js-overlay-thank-you').fadeOut();
    }
});


