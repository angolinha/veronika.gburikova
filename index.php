<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Spravodajsky portal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/site.css" rel="stylesheet">
    </head>
    <body>
        <div class="row site-header">
            <div class="col-lg-5">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="#">eKnihy</a></li>
                    <li role="presentation"><a href="#">Archív</a></li>
                    <li role="presentation"><a href="#">O nás</a></li>
                    <li role="presentation"><a href="#">Prihlásenie</a></li>
                    <li role="presentation"><a href="#">Registrácia</a></li>
                </ul>
            </div>
            <div class="col-lg-2 site-header-item">
                <?php echo date("l, d. F Y"); ?>
            </div>
            <div class="col-lg-1 col-lg-offset-2 site-header-item">Odber RSS</div>
            <div class="col-lg-2 site-header-icon-item">
                <div class="row">
                    <div class="col-lg-2 col-lg-offset-2">
                        <img class="site-header-icon" src="images/facebook.png"/>
                    </div>
                    <div class="col-lg-2">
                        <img class="site-header-icon" src="images/twitter.png"/>
                    </div>
                    <div class="col-lg-2">
                        <img class="site-header-icon" src="images/google-plus.png"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row site-title">
            <div class="col-lg-4 col-lg-offset-4">
                NazovDennika.sk
            </div>
        </div>
    </body>
    <script src="js/bootstrap.min.js"/>
</html>