
var inProcess = false;

$(document).on('submit', '#lead-create-form', function() {

    if(inProcess === true) {
        return false;
    }


    $.ajax({
        type: "POST",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/site/ajax-create-lead',
        data: $('#lead-create-form').serializeArray(),
        beforeSend: function() {
            inProcess = true;
        }
    }).done(function (response) {

        inProcess = false;

        if (response.success == true) {

            location.href = '/';

        }else {

            for (var field in response.errors) {
                var field_errors = response.errors[field];
                $('#lead-create-form').yiiActiveForm('updateAttribute', 'lead-' + field, field_errors);
            }
        }
    });

    return false;
});