<?php
  define('CSSPATH','/styles/');
  define('IMGPATH','/images/');
  define('SCRIPTPATH','/scripts/');
  define('VIDEOPATH','/videos/');
  if (isset($pageTitle)) {
    $pageTitle = '| '.$pageTitle;
  }
  else {
    $pageTitle = '';
  }
?>
<head>
  <meta charset="utf-8">
  <title>A.S. Crew <?php echo $pageTitle ?></title>
  <meta name="description" content="Working in Progress">
  <meta name="author" content="AS-CREW">
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="Cache-control" content="public">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=no" />
  <link rel="apple-touch-icon" href="<?php echo IMGPATH.'/fav/apple-touch-icon.png' ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMGPATH.'/fav/apple-touch-icon-72x72.png' ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo IMGPATH.'/fav/apple-touch-icon-114x114.png' ?>">
  <link rel="shortcut icon" href="<?php echo IMGPATH.'/fav/favicon.png' ?>" type="image/png">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/reset.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/core.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/animation.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/loader.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/section.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/cursor.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/nav.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/popup.css?v=1.0' ?>">
  <link rel="preload" href="<?php echo IMGPATH.'/svg/loader.svg' ?>" as="image">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo CSSPATH.'slick/slick.css' ?>" />
  <script type="text/javascript" src="<?php echo SCRIPTPATH.'/slick/slick.min.js' ?>"></script>
  <script type="text/javascript" src="<?php echo SCRIPTPATH.'/slick/slick-init.js' ?>"></script>
  <script src="<?php echo SCRIPTPATH.'/core/loader.js' ?>"></script>
  <script src="<?php echo SCRIPTPATH.'/core/viewportAnimation.js' ?>"></script>
  <script src="<?php echo SCRIPTPATH.'/core/cursor.js' ?>"></script>
  <script src="<?php echo SCRIPTPATH.'/core/nav.js' ?>"></script>
  <script src="<?php echo SCRIPTPATH.'/core/popup.js' ?>"></script>
</head>
