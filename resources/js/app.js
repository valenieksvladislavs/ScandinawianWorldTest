import './bootstrap';

$(document).ready(function() {
    $('form#generate-password-form').validate({
        groups: {
            useCharacters: ['useNumbers useUppercase useLowercase'],
        },
        rules: {
            length: {
                required: true,
                digits: true,
                min: 5,
            },
            useNumbers: {
                require_from_group: [1, '.use-characters-group'],
            },
            useUppercase: {
                require_from_group: [1, '.use-characters-group'],
            },
            useLowercase: {
                require_from_group: [1, '.use-characters-group'],
            },
        },
        messages: {
            useNumbers: {
                require_from_group: 'Please select at least 1 option.'
            },
            useUppercase: {
                require_from_group: '',
            },
            useLowercase: {
                require_from_group: '',
            },
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") === "useNumbers" || element.attr("name") === "useUppercase" || element.attr("name") === "useLowercase") {
                error.insertAfter(".use-char:last");
            } else {
                error.insertAfter(element);
            }
        },
        errorClass: 'text-sm text-red-700',
        submitHandler: function(form) {
            try {
                const data = $(form).serialize();
                console.log(data);

                $.ajax({
                    url: '/api/generate-password',
                    type: 'post',
                    data: data,
                    success: function(response) {
                        $('#show-password').html(response);
                    },
                    error: function(xhr) {
                        alert('something went wrong');
                    }
                });
            } catch (e) {
              console.log(e);
            }

            return false;
        },
    });
});
