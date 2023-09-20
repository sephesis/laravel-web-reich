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

        if (typeof window.FormData === 'undefined') {
            return;
        }

        form = $(this).parent('form')[0];

        formData = new FormData(form);

        let file = $(this).parent('form').find('input[type="file"]')[0].files[0];
        formData.append('feedback_file', file);
        
        $.ajax({
            url: $(this).parent('form').attr('action'),
            method: 'post',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(data){
                //console.dir(data);
            },
            error: function (jqXHR, exception) {
                   if (typeof jqXHR.responseJSON.errors !== 'undefined') {
                    errors = jqXHR.responseJSON.errors;
                    $.each(errors, function(key, value){
                        input = $("input[name="+ key +"]");
                        if (input.attr('data-required') === 'true' && input.attr('type') === 'text') {
                            $("input[name=" + key + "]").css('border-bottom', '1px solid red');
                        }else if (input.attr('data-required') === 'true' && input.attr('type') === 'checkbox') {
                            input.next('.checkbox-button__control').css('border', '1px solid red');
                        }
                    });
                }
            }
        });
    });

    $('input[type="text"]').on('keyup focus', function(){
        if ($(this).css('border-bottom') === '1px solid rgb(255, 0, 0)') {
            $(this).css('border-bottom', '1px solid white');
        }
    });

    $('input[type="checkbox"]').on('change', function(){
        if ($(this).next('.checkbox-button__control').css('border') === '1px solid rgb(255, 0, 0)') {
            $(this).next('.checkbox-button__control').css('border', '');
        }
    });
});