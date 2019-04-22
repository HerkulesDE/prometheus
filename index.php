<?php
  $path = $_SERVER['REQUEST_URI'];
  $path = ($path===false) ? '' : substr($path, 1);
?>

<!DOCTYPE html>
<html>
<? include 'layouts/head.php' ?>

  <body class='page'>
    <? include 'layouts/header.php' ?>
    <?php
      if ($path == '') {
        include 'shared/teaser.php';
      }
    ?>
    <div class="page--content">
      <? include 'content.php' ?>
    </div>
    <? include 'shared/sponsors.php' ?>
    <? include 'layouts/footer.php' ?>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
