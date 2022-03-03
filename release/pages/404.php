<!doctype html>
<html lang="en">
<?php
  $pageTitle = 'Error 404';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>

<!-- 404 -->
<div id="error" class="section dark">
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/error.css?v=1.0' ?>">
  <div class="link">
    <a class="text t-19 c-fff t-lh-1 t-a-right t-w-n hold fade-in anim underline" href="/">Back to home</a>
  </div>
  <div class="text-wrapper">
    <div class="oops c-fff t-100 t-w-800 t-lh-1-2 fade-in hold anim">Oops!</div>
  </div>
  <div class="text-wrapper">
    <div class="text t-19 c-fff t-lh-3-3 t-a-right t-w-n hold fade-in anim">This page doesn’t exist</div>
  </div>
  <div>
    <img class="e404-word hold fade-in anim" src="<?php echo IMGPATH.'/404@2x.png' ?>">
  </div>
</div>
</body>
</html>
