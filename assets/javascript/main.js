$(document).ready(function () {
    $('#contact').validate({
        rules: {
            name:    {
                required:  true,
                minlength: 3
            },
            email:   {
                required: true,
                email:    true
            },
            message: {
                required:  true,
                minlength: 50
            }
        },

        messages: {
            name:    {
                required:  "Merci de saisir votre nom.",
                minlength: "Il faut 3 caractères au minimum."
            },
            email:   {
                required: "Si vous souhaitez une réponse, merci de renseigner votre email",
                email:    "Merci d'entrer une adresse email valide."
            },
            message: {
                required:  "Merci de saisir votre message afin de mieux vous renseigner.",
                minlength: "Merci de renseigner 50 caractères au minimum."
            }
        }
    });

    $('#contact').change(function () {
        var empty = false;
        if ($('#name').val().length === 0) {
            empty = true;
        } else {
            empty = false
        }
        if ($('#email').val().length === 0) {
            empty = true
        } else {
            empty = false
        }
        if ($('#message').val().length <= 50) {
            empty = true
        } else {
            empty = false
        }

        if (empty == true) {
            $('input[type=submit]').attr('disabled', true)
        } else {
            $('input[type=submit]').attr('disabled', false)
        }
    });
});

