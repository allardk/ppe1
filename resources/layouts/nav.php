<!--
  -- Affichage de la navbar du site
  -->
<nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.html">
        Le volant Basséen
    </a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if (substr($_SERVER['SCRIPT_NAME'], 6) == "index.php") echo "active"; ?>">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item <?php if (substr($_SERVER['SCRIPT_NAME'], 6) == "news.php") echo "active"; ?>">
                <a class="nav-link" href="news.php">News</a>
            </li>
            <li class="nav-item <?php if (substr($_SERVER['SCRIPT_NAME'], 6) == "infos.php") echo "active"; ?>">
                <a class="nav-link" href="infos.php">Notre Association</a>
            </li>
            <li class="nav-item <?php if (substr($_SERVER['SCRIPT_NAME'], 6) == "about.php") echo "active"; ?>">
                <a class="nav-link" href="about.php">&Agrave; propos</a>
            </li>
            <li class="nav-item <?php if (substr($_SERVER['SCRIPT_NAME'], 6) == "contact.php") echo "active"; ?>">
                <a class="nav-link" href="contact.php">Contactez-nous</a>
            </li>
        </ul>

        <div id="newsletter" class="hidden-xs-down hidden-sm-down hidden-md-down form-inline mt-2 mt-md-0">
            <input id="emailNewsletter" name="email" required class="form-control mr-sm-2" type="email" placeholder="Newsletter">
            <button type="button" class="btn btn-primary" disabled="true" data-toggle="modal" data-target="#exampleModalLive">
                Subscribe
            </button>
        </div>
    </div>
</nav>
<!-- /-->

<!--
  -- Affichage du message de confirmation lorsqu'on est inscrit à la newsletter
  -->
<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Woohoo, vous êtes inscrit à la Newsletter!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /-->
