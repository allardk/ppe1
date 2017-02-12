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
        console.log(pattern.test(email));
        return pattern.test(email);
    }

    /**
     * Cette fonction permet de vérifier que ce qui est saisi est bien au format email xxx@xxx.tld sinon
     * le bouton de soumission n'est pas activé.
     */
    $('#newsletter').keyup(function () {
        var empty = false;
        var email = $('#email').val()

        if (email.length === 0) {
            empty = true
        }
        else if (!isValidEmail(email)) {
            empty = true
        } else {
            empty = false
        }

        if (empty == true) {
            $('button').attr('disabled', true)
        } else {
            $('button').attr('disabled', false)
        }
    });

    /**
     * Cette partie s'occupe de vérifier que les champs soient bien remplis selon certaines conditions
     * Tout d'abord, on initialise la variable empty a false ensuite, on stocke les valeurs des chanps dans
     * des variables pour prendre en compte le cas ou on l'id pourrait être changé à terme et également
     * éviter de faire appel plusieurs fois aux valeurs.
     * Tant que les champs ne sont pas remplis, la soumission du formulaire est impossible.
     */
    $('#contact').keyup(function () {
        var empty = false;
        var name = $('#name').val()
        var email = $('#email').val()
        var message = $('#message').val()

        if (name.length === 0) {
            empty = true;
        } else {
            empty = false
        }
        if (email.length === 0) {
            empty = true
        } else if (!isValidEmail(email)) {
            empty = true
        } else {
            empty = false
        }
        if (message.length <= 50) {
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

