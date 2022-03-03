<!doctype html>
<html lang="en">
<?php
   $pageTitle = 'Cover 360&#176;';
   $thisCase = 'cover360&#176;';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>
<!-- content -->
<div id="cover360" class="section">
  <link rel="stylesheet" href="<?php echo CSSPATH.'cases.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/case.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/cover360.css?v=1.0' ?>">
  <script src="<?php echo SCRIPTPATH.'cases/case.js'?>"></script>
  <!-- menu --->
  <?php
     include_once $_SERVER['DOCUMENT_ROOT'].'/elements/cases-filter.php';
  ?>
  <!---->
  <div class="header">
    <div class="title-words t-100 t-w-800">Cover 360&#176;</div>
  </div>
</div>
<div id="info" class="section">
  <div class="container left-padding fade-in animationWait">
    <div class="columns">
      <div class="col description">
        <!---->
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p>Panoramic 360&#176; illustration for Expvoskhod.</p>
          <p>This illustration was made without any documentation and it wasn't someone's order. We just wanted to make it for a project which we are a part of. There were lots of debates about the ethical aspects of the illustration. Eventually, it became the main picture for all social networks and stands. A huge poster with this illustration was also printed and posted on a large traveler's exhibition in Expocenter in 2020.</p>
        </div>
        <!---->
      </div>
      <div class="col labels">
        <div class="text t-19 t-lh-1-6 t-w-n c-0d0d0d">
          <p class="t-w-800 t-uppr">Client</p>
          <p>Expvoskhod</p>
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
  <img class="imageCase adapt fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/cover360/pic-01@2x.jpg' ?>">
  <!----->
  <div class="quote fade-in animationWait">
    <div class="text t-lh-1-33 t-30 t-w-800">
      There were lots of debates about<br> the ethical aspects of the illustration
    </div>
  </div>
  <!----->
</div>
<!----->
<div class="section block-02">
  <!----->
  <img class="imageCase adapt fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/cover360/pic-02@2x.jpg' ?>">
  <!----->
  <div class="text fade-in animationWait">
    <div class="t-lh-1-6 t-19 t-w-n">The illustration is devoted to the upcoming trip. The whole team is going to a trip to Latin America next year. Also they traveled from Moscow to Bali in 2016/17. So, you can find Tibetan monks, Kazakh shaman, deer, Eskimo... Try to make it out!</div>
  </div>
  <!----->
</div>
<!----->
<div class="section block-03">
  <!----->
  <img class="imageCase adapt fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/cover360/pic-03@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-04">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
  <style>
  #panorama {
      width: 100%;
      height: 1080px;
  }
  @media screen and (max-width: 900px) {
    #panorama {
        width: 100%;
        height: 70vh;
    }
  }
  </style>
  <div id="panorama"></div>
  <script>
  pannellum.viewer('panorama', {
      "type": "equirectangular",
      "mouseZoom": false,
      "showControls": false,
      "compass": false,
      "panorama": "https://ikprkv.github.io/as-crew/html/beta/img/cases/cover360/360_3.jpg",
      "autoLoad": true
  });
  </script>
  <!----->
</div>
<!----->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/next-project.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/footer.php';
?>
</html>
