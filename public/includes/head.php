<?php
  include_once("info.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= $Lang; ?>" xml:lang="<?= $Lang; ?>" class="scroll-smooth">

<head>

  <!-- TWITTER -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="<?= $Host_Site; ?>">
  <meta name="twitter:title" content="<?= $Company_Name; ?>">
  <meta name="twitter:description" content="<?= $Description_Site; ?>">
  <meta name="twitter:creator" content="<?= $Company_Name; ?>">
  <meta name="twitter:image" content="/images/facebook/facebook.jpg">

  <!-- FACEBOOK -->
  <meta property="og:site_name" content="<?= $Company_Name; ?>" />
  <meta property="og:url" content="<?= $Host_Site; ?>" />
  <meta property="og:title" content="<?= $Company_Name; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?= $Description_Site; ?>" />
  <meta property="og:image" content="/images/facebook/facebook.jpg" />
  <meta property="og:image:width" content="1024" />
  <meta property="og:image:height" content="538" />

  <!-- METAS-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="<?= $Description_Site; ?>" />
  <meta name="keywords" content="<?= $Keywords_Site; ?>" />
  <meta name="autor" content="<?= $Company_Name; ?>" />

  <title><?= $Company_Name; ?></title>

  <!-- STYLES-->
  <link rel="stylesheet" type="text/css" href="./css/styles.css" />

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="57x57" href="./images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="./images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon/favicon-16x16.png">
  <link rel="manifest" href="./images/favicon/manifest.json">
  <meta name="msapplication-config" content="./images/favicon/browserconfig.xml" />
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <Link rel="shortcut icon" href="./images/favicon/favicon.ico" />

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400..700&family=Outfit:wght@300..700&display=swap" rel="stylesheet">

  <!-- MANIFEST -->
  <link rel="manifest" href="./public/manifest.json">

  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>
<body class="bg-surface-100 text-dark-200 leading-normal">
