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

    <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                       aria-controls="collapseOne">
                        Se licencier
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="card-block">

                    <div class="alert alert-info"><i class="fa fa-info-circle" aria-hidden="true"></i> Feuille
                        d'inscription au
                        Volant Basséen + Certificat médical d'aptitude à la pratique du badminton à télécharger ICI
                    </div>

                    <table class="table table-hover" align="center">
                        <thead>
                        <td style="text-align: center;"><b>CATEGORIE</b></td>
                        <td style="text-align: center;"><b>PERIODE DE NAISSANCE</b></td>
                        <td style="text-align: center;">Licence FFBaD</td>
                        <td style="text-align: center;">Adhésion Club</td>
                        <td style="text-align: center;"><b>TARIF LICENCE</b></td>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align: center;"><b>U9 - Mini Poussins</b></td>
                            <td style="text-align: center;">Né(e) avant 2008</td>
                            <td style="text-align: center;">24,50 €</td>
                            <td style="text-align: center;">25.50 €</td>
                            <td style="text-align: center;">50 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>U11 - Poussins</b></td>
                            <td style="text-align: center;">Né(e) entre 2007 et 2008</td>
                            <td style="text-align: center;">47,50 €</td>
                            <td style="text-align: center;">28.50 €</td>
                            <td style="text-align: center;">76 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>U13 - Benjamins</b></td>
                            <td style="text-align: center;">Né(e) entre 2005 et 2006</td>
                            <td style="text-align: center;">47,50 €</td>
                            <td style="text-align: center;">28.50 €</td>
                            <td style="text-align: center;">76 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>U15 - Minimes</b></td>
                            <td style="text-align: center;">Né(e) entre 2003 et 2004</td>
                            <td style="text-align: center;">47,50 €</td>
                            <td style="text-align: center;">28.50 €</td>
                            <td style="text-align: center;">76 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>U17 - Cadets</b></td>
                            <td style="text-align: center;">Né(e) entre 2001 et 2002</td>
                            <td style="text-align: center;">47,50 €</td>
                            <td style="text-align: center;">28.50 €</td>
                            <td style="text-align: center;">76 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>U19 - Juniors</b></td>
                            <td style="text-align: center;">Né(e) entre 1999 et 2000</td>
                            <td style="text-align: center;">47,50 €</td>
                            <td style="text-align: center;">28.50 €</td>
                            <td style="text-align: center;">76 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Séniors Compétiteur</b></td>
                            <td style="text-align: center;">Né(e) de 1978 à 1998 (*)</td>
                            <td style="text-align: center;">54 €</td>
                            <td style="text-align: center;">76 €</td>
                            <td style="text-align: center;">130 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Loisir Séniors</b></td>
                            <td style="text-align: center;">Né(e) de 1978 à 1998</td>
                            <td style="text-align: center;">54 €</td>
                            <td style="text-align: center;">26 €</td>
                            <td style="text-align: center;">80 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Loisir vétérans</b></td>
                            <td style="text-align: center;">Né(e) en 1977 et avant</td>
                            <td style="text-align: center;">54 €</td>
                            <td style="text-align: center;">26 €</td>
                            <td style="text-align: center;">80 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Loisir en couple Sénior Vétérans</b></td>
                            <td style="text-align: center;">&nbsp;</td>
                            <td style="text-align: center;">54 €</td>
                            <td style="text-align: center;">21 €</td>
                            <td style="text-align: center;">75 €&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Loisir Famille</b></td>
                            <td style="text-align: center;">A partir de la 3éme licence<br> (Non compétiteur même
                                famille)
                            </td>
                            <td style="text-align: center;">
                                <p>Jeune 47.50 €</p>
                                <p>Senior 54 €</p>
                            </td>
                            <td style="text-align: center;">
                                <p>Jeune 16.50 €</p>
                                Senior 15 €
                            </td>
                            <td style="text-align: center;">
                                <p>64 € Jeune</p>
                                <p>69 € Sénior</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Famille Nombreuse</b></td>
                            <td style="text-align: center;">A partir du 3éme enfant licencié<br>
                                (Limité(e) à 25 ans - Compétiteurs ou Loisirs)
                            </td>
                            <td style="text-align: center;">
                                <p>Jeune 47.50 €</p>
                                Senior 54 €
                            </td>
                            <td style="text-align: center;">
                                <p>Jeune 16.50 €</p>
                                Senior 15 €
                            </td>
                            <td style="text-align: center;">
                                <p>64 € Jeune</p>
                                <p>69 € Sénior</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Licencié(e) Extérieur(e)</b></td>
                            <td style="text-align: center;">Etre licencié(e) dans un autre club</td>
                            <td style="text-align: center;">-</td>
                            <td style="text-align: center;">150 €</td>
                            <td style="text-align: center;">150 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Ecole de Badminton</b></td>
                            <td style="text-align: center;">Né(e) entre 2007 et 2010&nbsp;</td>
                            <td style="text-align: center;">50 €</td>
                            <td style="text-align: center;">-</td>
                            <td style="text-align: center;">50 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Section Art du Cirque</b></td>
                            <td style="text-align: center;">&nbsp;</td>
                            <td style="text-align: center;">&nbsp;</td>
                            <td style="text-align: center;">35 €</td>
                            <td style="text-align: center;">35 €</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><b>Carte membre Bienfaiteur</b></td>
                            <td colspan="4" style="text-align: center;">Montant Libre sous forme de Don(s)</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;">
                                <em>(*) Les joueurs(ses) entre 35 et 40 ans sont "seniors", autorisés à jouer en
                                    "vétérans 1"</em>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                       aria-expanded="false" aria-controls="collapseTwo">
                        Nos horaires d'entra&icirc;nement
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="card-block">
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
                            <td>Loisirs - V&eacute;t&eacute;rans Comp&eacute;titeurs <i>(Cr&eacute;neaux non encadr&eacute;s
                                    par un
                                    entra&icirc;neur)</i></td>
                            <td>Mardi / Vendredi</td>
                            <td>20h00 &agrave; 22h00</td>
                        </tr>

                        <tr>
                            <td>Loisirs - V&eacute;t&eacute;rans Comp&eacute;titeurs <i>(Cr&eacute;neaux non encadr&eacute;s
                                    par un
                                    entra&icirc;neur)</i></td>
                            <td>Dimanche</td>
                            <td>10h00 &agrave; 12h00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /-->

<?php include('resources/layouts/footer.php'); ?>
