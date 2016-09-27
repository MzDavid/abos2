$(document).ready(function(){
    var form = $("#contactForm");
    if(form.length>=1){
        form.formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            locale: 'es_ES',
            excluded: ':disabled',
            fields: {
                name: {
                    validators: {notEmpty: {}}
                },
                tel: {
                    validators: {notEmpty: {}}
                },
                email: {
                    validators: {notEmpty: {}}
                },
                message: {
                    validators: {notEmpty: {}}
                }
            }
        }).on('success.form.fv', function(e) {
            e.preventDefault();
            contactResponse = $('#contactResponse');
            $('#contactResponse .alert').alert('close');
            $('.contactForm .contactBusy').css({'display':'block'});
            $.ajax({
                type : "POST",
                url : "/form-message",
                data : $(this).serialize(),
                dataType : "json",
                success : function(response){
                    if(response.code==200){
                        $('.contactForm .contactBusy').css({ 'display': 'none' });
                        contactResponse.html('<div class="alert alert-success alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Mensaje envíado! </strong>Gracias por tu mensaje!</div>');
                        contactResponse.alert();
                        resetForm(form);
                        form.formValidation('resetForm', true);
                    }else{
                        $('.contactForm .contactBusy').css({ 'display': 'none' });
                        contactResponse.html('<div class="alert alert-danger alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Lo sentimos! </strong>Ha ocurrido un error, intente nuevamente por favor</div>');
                        $('#contactResponse').alert();
                    }
                },
                error : function(){
                    $('.contactForm .contactBusy').css({ 'display': 'none' });
                    contactResponse.html('<div class="alert alert-danger alert-dismissable fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Error! </strong> Ha ocurrido un error, intente nuevamente por favor</div>');
                    contactResponse.alert();
                },complete:function(){
                    $('#contactResponse .alert').alert('close');
                    modal = $("#myModal");
                    if(modal.length>=1){
                        setTimeout(function(){
                            $("#myModal").modal('hide');
                        },1000);

                    }
                }
            });
        });
    }
});
function resetForm($form) {
    $form.find('input:text, input:password, input:file, input[type=email], select, textarea').val('');
    $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
}