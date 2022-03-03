<!doctype html>
<html lang="en">
<?php
   $pageTitle = 'Avon Beauty Products';
   $thisCase = 'avon-beauty';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>
<!-- content -->
<div id="avon" class="section dark">
  <link rel="stylesheet" href="<?php echo CSSPATH.'cases.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/case.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/avon.css?v=1.0' ?>">
  <script src="<?php echo SCRIPTPATH.'cases/case.js'?>"></script>
  <!-- menu --->
  <?php
     include_once $_SERVER['DOCUMENT_ROOT'].'/elements/cases-filter.php';
  ?>
  <!---->
  <div class="header">
    <div class="title-words c-fff t-100 t-w-800">Avon<br>Beauty Products</div>
  </div>
</div>
<div id="info" class="section">
  <div class="container left-padding fade-in animationWait">
    <div class="columns">
      <div class="col description">
        <!---->
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p>Design system revision and adaptation for Avon Beauty Products Company Russia.</p>
          <p>Certain components like logo patterns, color pallets, buttons, frames, shapes, and typography were provided as a part of UI kit by the global team. A detailed sitemap with 45+ web pages for desktop and mobile versions was developed. Some components needed to be revised due to the specifics of the Russian market. Several design elements like interactive catalogs, menu bars, page miniatures, pop-up menus, and others were made from scratch. Moreover, templates for triggered, service and advertising emails were designed.</p>
          <p>A described adaptation made the website more visually appealing, improved the navigation system, aesthetics, and functionality of the website.</p>
        </div>
        <!---->
      </div>
      <div class="col labels">
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p class="t-w-800 t-uppr">Client</p>
          <p>Avon Beauty Products Company</p>
        </div>
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p class="t-w-800 t-uppr">Services</p>
          <p>Design System<br>Web Design<br>Email Design</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!----->
<div class="section block-01">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-01@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-02">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-02@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-03">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-03@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-04">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-04@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-05">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-05@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-06">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-06@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-07">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-07@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-08">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/avon/pic-08@2x.jpg' ?>">
  <!----->
</div>
<!----->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/next-project.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/footer.php';
?>
</html>
