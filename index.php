<?

$t = '';
if (isset($_GET['t']))
    $t = $_GET['t'];

?><!DOCTYPE html>
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
    <style type="text/css">

    </style>
    <link href="css/kamerascheu.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>

<div class="container">

    <div class="masthead">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li <?php echo ($t === '') ? 'class="active"' : ''; ?>><a href="index.php">Startseite</a></li>
                        <li <?php echo ($t === 'video') ? 'class="active"' : ''; ?>><a href="?t=unterstuetzen">Helfen
                                Sie mit!</a></li>
                        <li <?php echo ($t === 'impressum') ? 'class="active"' : ''; ?>><a
                                href="?t=impressum">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.navbar -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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


    <?php


    switch ($t) {
        case 'impressum':
            include("impressum.php");
            break;
        case 'kosten':
            include("kosten.php");
            break;
        case 'video':
            include("video.php");
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
        <p>&copy; <a href='?t=impressum'>Piratenpartei Steiermark</a> 2013 - <a
                href='https://www.facebook.com/kamerascheuer'>kamerascheu auf Facebook</a> - <a
                href='https://twitter.com/piratenstmk'>Folge uns auf Twitter</a></p>
    </div>

</div> <!-- /container -->


</body>
</html>
