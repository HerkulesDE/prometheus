<?php
  if ($path == about) {
    include 'pages/about.php';
  } elseif ($path == about_us){
    include 'pages/about_us.php';
  } elseif ($path == sponsors){
    include 'pages/sponsors.php';
  } elseif ($path == galery){
    include 'pages/galery.php';
  } elseif ($path == contact){
    include 'pages/contact.php';
  } elseif ($path == impressum){
    include 'pages/impressum.php';
  } else {
    include 'pages/home.php';
  }
?>
