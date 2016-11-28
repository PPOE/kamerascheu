<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <title>kamerascheu.at - Gemeinderatssitzungen live ins Internet - JETZT!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
              content="Wir fordern die rasche Umsetzung der Übertragung der Gemeinderatssitzungen ins Internet!">
        <meta name="author" content="Piratenpartei Steiermark">

        <!-- Le styles -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/kamerascheu.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="favicon.ico">
    </head>

    <body>
    <?php
        $t = '';
        if (isset($_GET['t'])) {
            $t = $_GET['t'];
        }
    ?>

        <div class="container">

            <div class="masthead">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <li <?php echo ($t === '') ? 'class="active"' : ''; ?>><a href="/">Startseite</a></li>
                                <li <?php echo ($t === 'unterstuetzen') ? 'class="active"' : ''; ?>><a href="?t=unterstuetzen">Helfen
                                        Sie mit!</a></li>
                                <li <?php echo ($t === 'impressum') ? 'class="active"' : ''; ?>><a
                                        href="?t=impressum">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.navbar -->
            </div>


            <?php

            switch ($t) {
                case 'impressum':
                    include("impressum.php");
                    break;
                case 'kosten':
                    include("kosten.php");
                    break;
                case 'unterstuetzen':
                    include("unterstuetzen.php");
                    break;
                case 'vielendank':
                    include("vielendank.php");
                    break;
                case 'dieandern':
                    include("wirsindnichtdieandern.php");
                    break;
                case 'petition':
                    include("petition_form.php");
                    break;
                case 'sign':
                    include("petition_sign.php");
                    break;
                default:
                    include("default.php");
            }

            ?>


            <hr>

            <div class="footer">
                <p>
                    <a href="//creativecommons.org/publicdomain/zero/1.0/">CC0 1.0</a>
                    &copy;
                    <a href='?t=impressum'>Piratenpartei Steiermark</a> <?php echo date('Y'); ?> -
                    <a href="//www.facebook.com/kamerascheuer">kamerascheu auf Facebook</a> -
                    <a href="//twitter.com/PiratenGraz">Folge uns auf Twitter</a>
                </p>
            </div>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <script src="js/bootstrap-popover.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>

    </body>
</html>
