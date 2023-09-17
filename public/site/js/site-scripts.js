document.addEventListener('DOMContentLoaded', () => {
    const timeDelay = 1500;
    let preloader = document.getElementById('preloader');
    let body = document.getElementsByTagName('body')[0];
  
    body.style.overflowY = 'hidden';
    preloader.scrollIntoView();

    setTimeout(function() {
        preloader.classList.add('preloader--hide');
        body.style.overflowY = 'scroll';
    }, timeDelay);
});


$(document).ready(function(){
    $('.js-form-send').on('click', function(event){
        event.preventDefault();

        form = $(this).parent('form');

        $.post(form.attr('action'), form.serialize(), function(response){
            console.log(response);
            // alert(data);
        }).fail(function(error) {
            if (typeof error.responseJSON.errors !== 'undefined') {
                errors = error.responseJSON.errors;
                $.each(errors, function(key, value){
                    input = $("input[name="+ key +"]");
                    if (input.attr('data-required') === 'true' && input.attr('type') === 'text') {
                        $("input[name=" + key + "]").css('border-bottom', '1px solid red');
                    }else if (input.attr('data-required') === 'true' && input.attr('type') === 'checkbox') {
                        input.next('.checkbox-button__control').css('border', '1px solid red');
                    }
                });
            }
        });
    });

    $('input[type="text"]').on('keyup focus', function(){
        if ($(this).css('border-bottom') === '1px solid rgb(255, 0, 0)') {
            $(this).css('border-bottom', '1px solid white');
        }
    });

    $('input[type="checkbox"]').on('change', function(){

        console.log($(this).next('.checkbox-button__control').css('border'));
        if ($(this).next('.checkbox-button__control').css('border') === '1px solid rgb(255, 0, 0)') {
            $(this).next('.checkbox-button__control').css('border', '');
        }
    });
});