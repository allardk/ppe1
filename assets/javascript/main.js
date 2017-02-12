$(document).ready(function () {
    /**
     * Cette méthode permet de vérifier avec une expression régulière ce qui est saisi dans l'adresse email et ainsi
     * retourner un booléen (true/false).
     * Retourne false si l'adresse e-mail n'est pas au format xxx@xxx.tld
     * Retourn true si l'adrsse e-mail est bien formatée.
     * @param email
     * @returns {boolean}
     */
    function isValidEmail(email) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

        return pattern.test(email);
    }

    function isValidName(name) {
        var pattern = /^([a-z\u00e0-\u00e8-\u00ec-\u00f2-\u00f9\u00c0-\u00c8-\u00cc-\u00d2-\u00d9-\u00e1-\u00e9-\u00ed-\u00f3-\u00fa-\u00fd\u00c1-\u00c9-\u00cd-\u00d3-\u00da-\u00dd-\u00e2-\u00ea-\u00ee-\u00f4-\u00fb\u00c2-\u00ca-\u00ce-\u00d4-\u00db-\u00e3-\u00f1-\u00f5-\u00c3-\u00d1-\u00d5-\u00e4-\u00eb-\u00ef-\u00f6-\u00fc-\u00ff\u00c4-\u00cb-\u00cf-\u00d6-\u00dc-\u0178-\u00e7\u00c7\- ']+)$/gi;

        return pattern.test(name);
    }

    $('#contact').keyup(function () {
        var name   = $('#name').val();
        var nameOK = name.length > 0 && isValidName(name); //si name est rempli, name est OK

        if (!nameOK) {
            $('#name').css('border', 'red 1px solid');
        } else {
            $('#name').css('border', 'green 1px solid');
        }

        var email   = $('#email').val();
        var emailOK = email.length > 0 && isValidEmail(email); //si email est rempli & valide, email est OK

        if (!emailOK) {
            $('#email').css('border', 'red 1px solid');
        } else {
            $('#email').css('border', 'green 1px solid');
        }

        var message   = $('#message').val();
        var messageOK = message.length >= 50; //si longueur du message > 50, message est OK

        if (!messageOK) {
            $('#message').css('border', 'red 1px solid');
        } else {
            $('#message').css('border', 'green 1px solid');
        }

        if (nameOK && emailOK && messageOK) { //on check les 3 vars pour être sur que les trois sont OK
            $('input[type=submit]').attr('disabled', false)
        } else {
            $('input[type=submit]').attr('disabled', true)
        }
    });

    $('#newsletter').keyup(function () {
        var email = $('#emailNewsletter').val();
        var emailOK = email.length > 0 && isValidEmail(email);

        if (emailOK) { //on check les 3 vars pour être sur que les trois sont OK
            $('button').attr('disabled', false);
            $('#emailNewsletter').css('border', 'green 1px solid');
        } else {
            $('button').attr('disabled', true);
            $('#emailNewsletter').css('border', 'red 1px solid');
            console.log($('email'));
        }
    });
});