<!doctype html>
<html lang="en">
<?php
   $pageTitle = 'TWOOWT';
   $thisCase = 'twoowt';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>
<!-- content -->
<div id="twoowt" class="section dark">
  <link rel="stylesheet" href="<?php echo CSSPATH.'cases.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/case.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/twoowt.css?v=1.0' ?>">
  <script src="<?php echo SCRIPTPATH.'cases/case.js'?>"></script>
  <!-- menu --->
  <?php
     include_once $_SERVER['DOCUMENT_ROOT'].'/elements/cases-filter.php';
  ?>
  <!---->
  <div class="header">
    <div class="title-words t-100 t-w-800 c-fff">TWOOWT</div>
  </div>
</div>
<div id="info" class="section">
  <div class="container left-padding fade-in animationWait">
    <div class="columns">
      <div class="col description">
        <!---->
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p>More than happy to share our new project that we made for a cool Russian TWOOWT ski brand.</p>

          <p>A custom design for the pro rider Sam Alender ski model. Sam flies on this video and does much more here <a class="c-0d0d0d" target="_blank" href="https://www.instagram.com/twoowtskis/">@twoowtskis</a>.</p>

          <p>The original request was for a bright design in comics style. Everything just started with cars and girls in pin-up style and then panda comes into play. Why panda? We don't have the exact answer, but we think it makes the game.</p>

          <p>Overall, it's is great to know that product with our design is going to travel all over the world and  see the best ski parks. Great project, great feelings.</p>
        </div>
        <!---->
      </div>
      <div class="col labels">
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p class="t-w-800 t-uppr">Client</p>
          <p>TWOOWT</p>
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
<!-- for video -->
<script>
  $(document).ready(function(){
    $('video').click(function(){
       $(this).get(0).paused ? $(this).get(0).play() : $(this).get(0).pause();
    });
    if (window.innerWidth <= 900) {
      $('video').attr('poster','<?php echo IMGPATH.'/cases/twoowt/mobile/video@2x.jpg' ?>')
    }
  });
</script>
<div class="section block-video fade-in animationWait">
  <!----->
  <video width="100%" poster="<?php echo IMGPATH.'/cases/twoowt/video@2x.jpg' ?>">
    <source src="<?php echo VIDEOPATH.'/TWOOWT.mp4' ?>" type="video/mp4">
  </video>
  <!----->
</div>
<!---->
<div class="section block-01 cols">
  <!----->
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/twoowt/pic-01a@2x.jpg' ?>">
  </div>
  <div class="space"></div>
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/twoowt/pic-01b@2x.jpg' ?>">
  </div>
  <!----->
</div>
<!----->
<div class="section block-02 cols">
  <!----->
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/twoowt/pic-02a@2x.jpg' ?>">
  </div>
  <div class="space"></div>
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/twoowt/pic-02b@2x.jpg' ?>">
  </div>
  <!----->
</div>
<!----->
<div class="section block-03">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/twoowt/pic-03@2x.jpg' ?>">
  <!----->
</div>
<!----->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/next-project.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/footer.php';
?>
</html>
