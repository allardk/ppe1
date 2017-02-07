<?php
/**
 * Created by PhpStorm.
 * User: allardk
 * Date: 19/01/17
 * Time: 10:16
 */

include "resources/layouts/header.php";

?>

<!--
  -- Affichage du corps principal du site
  -->
<div class="container">
    <h1>&Agrave; propos du volant Basséen</h1>

    <h4><a href="#">Se licencier</a></h4>

    <div class="block" style="display: none;">
        Bonsoir
    </div>


    <h4><a href="#">Nos horaires d'entraînement</a></h4>
    <div class="block" style="display: none;">
        <table class="table table-hover">
            <thead>
            <th>Catégorie</th>
            <th>Jour</th>
            <th>Heure</th>
            </thead>
            <tbody>
            <tr>
                <td>&Eacute;cole de Badminton</td>
                <td>Vendredi</td>
                <td>17h15 &agrave; 18h30</td>
            </tr>

            <tr>
                <td>Poussins (U11) - Benjamins (U13) - Minimes (U15)</td>
                <td>Mercredi</td>
                <td>13h00 &agrave; 15h00</td>
            </tr>

            <tr>
                <td>Mini Poussins (U9) - Poussins (U11) - Benjamins (U13) - Minimes (U15)</td>
                <td>Samedi</td>
                <td>10h00 &agrave; 11h30</td>
            </tr>

            <tr>
                <td>Comp&eacute;titeurs Benjamins (U13) - Minimes (U15)</td>
                <td>Mardi / Jeudi</td>
                <td>17h30 &agrave; 19h15</td>
            </tr>

            <tr>
                <td>Comp&eacute;titeurs Cadets (U17) - Juniors (U19) - S&eacute;niors</td>
                <td>Mardi / Jeudi</td>
                <td>19h30 &agrave; 21h30</td>
            </tr>

            <tr>
                <td>Comp&eacute;titeurs Cadets (U17) - Juniors (U19) - S&eacute;niors <i>(s&eacute;ance
                        individuelles)</i>
                </td>
                <td>Mercredi</td>
                <td>18h00 &agrave; 20h00</td>
            </tr>

            <tr>
                <td>
                    Comp&eacute;titeurs Cadets (U17) - Juniors (U19) - S&eacute;niors<br/>
                    Classement D7 / D8 / D9 / P1 / P2 / P3 / NC
                </td>
                <td>Vendredi</td>
                <td>19h30 &agrave; 21h30</td>
            </tr>

            <tr>
                <td>Loisirs - V&eacute;t&eacute;rans Comp&eacute;titeurs <i>(Cr&eacute;neaux non encadr&eacute;s par un
                        entra&icirc;neur)</i></td>
                <td>Mardi / Vendredi</td>
                <td>20h00 &agrave; 22h00</td>
            </tr>

            <tr>
                <td>Loisirs - V&eacute;t&eacute;rans Comp&eacute;titeurs <i>(Cr&eacute;neaux non encadr&eacute;s par un
                        entra&icirc;neur)</i></td>
                <td>Dimanche</td>
                <td>10h00 &agrave; 12h00</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- /-->

<?php include('resources/layouts/js.php'); ?>

<script>
    $(document).ready(function () {
        $('a').click(function () {
            if ($(this).next('.block').css("display") == "none") {
                $(this).next().show();
            } else {
                $(this).next().hide();
            }
        });
    });
</script>


<?php include('resources/layouts/footer.php'); ?>
