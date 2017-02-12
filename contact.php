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
    <h1>Contactez-nous</h1>

    <form id="contact">
        <div class="form-group row">
            <label for="name" class="col-form-label col-3">Nom :</label>
            <div class="col-8">
                <input id="name" type="text" class="form-control" name="name" autofocus="true">
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-form-label col-3">E-mail :</label>
            <div class="col-8">
                <input id="email" type="email" class="form-control" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="message" class="col-form-label col-3">Message :</label>
            <div class="col-8">
                <textarea id="message" class="form-control" name="message"  cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-3">&nbsp;</div>
            <div class="col-8" align="right">
                <input class="btn btn-primary" disabled="true" type="submit" value="Envoyer">
            </div>
        </div>
    </form>
</div>
    <!-- /-->

    <?php include('resources/layouts/footer.php'); ?>
