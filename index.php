<?php
  // Parameter als String, sogenannter Query String
  $queryString = strstr($_SERVER['REQUEST_URI'], '?');
  $queryString = ($queryString===false) ? '' : substr($queryString, 1);
  //echo $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133498872-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133498872-1');
    </script>


    <title>Prometheus
      <?php if ($queryString == "") { echo ""; }
            if ($queryString == about) { echo " | Wettbewerb"; }
            if ($queryString == about_us) { echo " | Über Uns"; }
            if ($queryString == sponsors) { echo " | Sponsoren"; }
            if ($queryString == contact) { echo " | Kontakt"; }
            if ($queryString == impressum) { echo " | Impressum"; }?>
    </title>
    <base href="" target="_self"/>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="media/favicon.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="media/favicon.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="media/favicon.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="media/favicon.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="media/favicon.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="media/favicon.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="media/favicon.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="media/favicon.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="media/favicon.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="media/favicon.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="media/favicon.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="media/favicon.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="media/favicon.ico/favicon-16x16.png">
    <link rel="manifest" href="media/favicon.ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="media/favicon.ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8"/>
    <meta name="description" content=">>Prometheus Racing<< Formel 1 in der
    Schule Team des Kardial-von-Galen Gymnasium Münster. Wir nehmen als Senior
    Team am Wettbewerb teil."/>
    <meta name="keywords" content="F1inSchools, Formel 1 in der Schule, KvG,
    Kardinal von Galen Gymnasium, Prometheus, Prometheus Racing"/>
    <meta name="author" content="Prometheus Racing Team"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
      </script>
    <![endif]-->

    <script src="js/main.js"></script>
  </head>
  <body>
    <div class="grid-container">
      <div class="logo"><img class="img-logo" src="media/logo.png"></div>
      <div class="teaser teaserimg"><!--div id="teaser"--><!--/div--><img class="teaserimg" src="media/banner-web.svg" width="100%"></div>
      <div class="nav">
        <div class="topnav" id="myTopnav">
          <a href="/" class="<?php if ($queryString == "") { echo "active"; } ?>">Startseite</a>
          <a href="?about" class="<?php if ($queryString == about) { echo "active"; } ?>">Wettbewerb</a>
          <a href="?about_us" class="<?php if ($queryString == about_us) { echo "active"; } ?>">Über uns</a>
          <a href="?sponsors" class="<?php if ($queryString == sponsors) { echo "active"; } ?>">Sponsoren</a>
          <!--a href="?galery" class="<!?php if ($queryString == galery) { echo "active"; } ?>">Galerie</a-->
          <a href="?contact" class="<?php if ($queryString == contact) { echo "active"; } ?>">Kontakt</a>
          <a href="javascript:void(0);" class="icon nopadding" onclick="navonoff()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </div>
      <div class="content">
        <?php
          if ($queryString == about) {
            include 'pages/about.php';
          } elseif ($queryString == about_us){
            include 'pages/about_us.php';
          } elseif ($queryString == sponsors){
            include 'pages/sponsors.php';
          } elseif ($queryString == galery){
            include 'pages/galery.php';
          } elseif ($queryString == contact){
            include 'pages/contact.php';
          } elseif ($queryString == impressum){
            include 'pages/impressum.php';
          } else {
            include 'pages/home.php';
          }

        ?>
        <div class="sponsor-shadow">
          <h2>Unsere Sponsoren</h2>
          <div class="sponsor-img">
            <li class="sponsor-list"><a href="https://www.e-spirit.com/" target="_blank"><img class="content-img-sponsor" src="media/e-Spirit_Logo_RGB_Web.png"></a></li>
            <li class="sponsor-list"><a href="https://www.westerholt.net/" target="_blank"><img class="content-img-sponsor" src="media/Westerholt.png"></a></li>
            <li class="sponsor-list"><a href="https://www.fahrschule-imort.de/" target="_blank"><img class="content-img-sponsor" src="media/imort.jpg"></a></li>
            <li class="sponsor-list"><a href="https://www.cnc-manufaktur-bruessow.de/" target="_blank"><img class="content-img-sponsor" src="media/bruessow.png"></a></li>
            <li class="sponsor-list"><a href="http://www.lackierteam-lennartz.de/" target="_blank"><img class="content-img-sponsor" src="media/lennartz.png"></a></li>
            <li class="sponsor-list"><a href="https://www.fh-muenster.de/index.php" target="_blank"><img class="content-img-sponsor" src="media/logo_fh_trans.png"></a></li>
          </div>
          <br>
          <p>
          </p>
        </div>
      </div>
      <div class="footer">
        <p>&copy; 2019 by Prometheus<br>
          <a href="?impressum">Impressum</a><br><br>
          <a class="socialicon" href="https://twitter.com/PrometheusKvG" target="_blank"><img src="media/twitter.svg" width="50px"></a>
          <a class="socialicon" href="https://instagram.com/prometheusracing" target="_blank"><img src="media/instagram.svg" width="50px"></a>
          <a class="socialicon" href="https://fb.me/PrometheusKvG" target="_blank"><img src="media/facebook.svg" width="50px"></a>
        </p>
      </div>
    </div>
  </body>
  <script src="js/main.js"></script>
</html>
