<!doctype html>
<html lang="en">
<?php
   $pageTitle = 'Vera foundation';
   $thisCase = 'vera';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>
<!-- content -->
<div id="vera" class="section">
  <link rel="stylesheet" href="<?php echo CSSPATH.'cases.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/case.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/vera.css?v=1.0' ?>">
  <script src="<?php echo SCRIPTPATH.'cases/case.js'?>"></script>
  <!-- menu --->
  <?php
     include_once $_SERVER['DOCUMENT_ROOT'].'/elements/cases-filter.php';
  ?>
  <!---->
  <div class="header">
    <div class="title-words t-100 t-w-800">Vera foundation</div>
  </div>
</div>
<div id="info" class="section">
  <div class="container left-padding fade-in animationWait">
    <div class="columns">
      <div class="col description">
        <!---->
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p>A series of illustrations for the “Vera” foundation. All the illustrations are based on a true stories. The main idea that sick people in hospices needs not so much treatment as care and support. A healthy atmosphere and communication with relatives are much more important.</p>
          <p>We would like to think that this doesn’t happen, and these are only fictional stories, but…</p>
        </div>
        <!---->
      </div>
      <div class="col labels">
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p class="t-w-800 t-uppr">Client</p>
          <p>Vera foundation</p>
        </div>
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p class="t-w-800 t-uppr">Services</p>
          <p>Illustration</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!----->
<div class="section block-01">
  <!----->
  <div class="text t-lh-1-33 t-30 t-w-800  fade-in animationWait">
    Not an easy project which took lots<br>
    of emotions and effort…
  </div>
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-01@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-02">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-02@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-03">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-03@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-04">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-04@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-05">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-05@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-06">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-06@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-07">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-07@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-08">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-08@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-09">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-09@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-10">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-10@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-11">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/vera/pic-11@2x.jpg' ?>">
  <!----->
</div>
<!-- for video -->
<script>
  $(document).ready(function(){
    $('video').click(function(){
       $(this).get(0).paused ? $(this).get(0).play() : $(this).get(0).pause();
    });
  });
</script>
<div class="section block-12 fade-in animationWait">
  <!----->
  <video width="100%" poster="<?php echo IMGPATH.'/cases/vera/pic-12@2x.jpg' ?>">
    <source src="<?php echo VIDEOPATH.'/vera_fund.mov' ?>" type="video/mp4">
  </video>
  <p class="t-12 c-c3c3c3">Video made by Maxim Lakutin</p>
  <!----->
</div>
<!----->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/next-project.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/footer.php';
?>
</html>
