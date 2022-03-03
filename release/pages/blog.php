<!doctype html>
<html lang="en">
<?php
   $pageTitle = 'Blog';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>
<div id="blog" class="section">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/blog.css?v=1.0' ?>">
  <script src="<?php echo SCRIPTPATH.'/blog/index.js' ?>"></script>
  <!-- menu --->
  <div class="menu">
    <div class="as-logo"></div>
    <div class="secondary-nav">
      <div data-type="all" class="link t-19 t-w-800 t-uppr active">ALL <span>TOPICS</span></div>
      <div data-type="branding" class="link t-19 t-w-800 t-uppr">branding</div>
      <div data-type="uiux" class="link t-19 t-w-800 t-uppr">UI/UX</div>
      <div data-type="illustration" class="link t-19 t-w-800 t-uppr">Illustration</div>
      <div data-type="business" class="link t-19 t-w-800 t-uppr">Business</div>
      <div data-type="tools" class="link t-19 t-w-800 t-uppr">tools</div>
      <div data-type="working" class="link t-19 t-w-800 t-uppr">Working process</div>
    </div>
  </div>
  <!---->
  <div class="container wide">
    <div class="blog-list anim fade-in">
      <div class="col" data-r_num='5'>
      </div>
      <div class="col" data-r_num='10'>
      </div>
      <div class="col" data-r_num='7'>
      </div>
    </div>
    <div class="pagination">
      <div class="pages-list"></div>
    </div>
  </div>
</div>
<?php
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/footer.php';
?>
</html>
