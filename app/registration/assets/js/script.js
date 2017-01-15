$(document).ready(function(){

    $('#application').submit(function(e) {

        if (!e.target.checkValidity()) { 

            e.preventDefault();

            $('input[required]').each(function() {
                if(!this.validity.valid)
                {
                    $(this).focus();
                    $(this).attr('placeholder', this.validationMessage).addClass('invalid');
                    $(this).val('');
                    return false;
                }
            });
            return false;
        }
    });   
});


