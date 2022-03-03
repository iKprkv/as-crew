<!doctype html>
<html lang="en">
<?php
   $pageTitle = 'RunnersFix';
   $thisCase = 'runnersfix-web';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>
<!-- content -->
<div id="runnersfix" class="section">
  <link rel="stylesheet" href="<?php echo CSSPATH.'cases.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/case.css?v=1.0' ?>">
  <link rel="stylesheet" href="<?php echo CSSPATH.'/cases/runnersfix-web.css?v=1.0' ?>">
  <script src="<?php echo SCRIPTPATH.'cases/case.js'?>"></script>
  <?php
     include_once $_SERVER['DOCUMENT_ROOT'].'/elements/cases-filter.php';
  ?>
  <!---->
  <div class="header">
    <!---->
    <div class="video-wrapper">

    </div>
    <script>
      $(window).bind("load", function() {
        var is_safari = navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1 && navigator.userAgent.indexOf('Android') == -1;
        if (is_safari) {
          //alert('safari');
          setTimeout(
            function() {
              $(".header .video-wrapper").append('<picture id="header"><source srcset="http://aechubwa.beget.tech/videos/runnersFix_720p.mp4" type="video/mp4"><img preload src="<?php echo IMGPATH.'cases/runnersfix-web/header@2x.jpg' ?>"></picture>');
              $(".video .inline-video").html('<picture class="fade-in animationWait"><source srcset="http://aechubwa.beget.tech/videos/runnersFix_web.mp4" type="video/mp4"><img preload src="<?php echo IMGPATH.'cases/runnersfix-web/video.jpg' ?>"></picture>');
            }, 600);
        }
        else {
          setTimeout(function() {
            $(".header .video-wrapper").append('<video playsinline loop muted id="header"  poster="<?php echo IMGPATH.'cases/runnersfix-web/header@2x.jpg' ?>"><source src="http://aechubwa.beget.tech/videos/runnersFix_720p.mp4" type="video/mp4"></video>');
            document.getElementById('header').play();
            $(".video .inline-video").html('<video playsinline loop muted id="overview" class="fade-in animationWait"  poster="<?php echo IMGPATH.'cases/runnersfix-web/video.jpg' ?>"><source src="http://aechubwa.beget.tech/videos/runnersFix_web.mp4" type="video/mp4"></video>')
            document.getElementById('overview').play();
          }, 600);
        }
      });
    </script>
    <!---->
    <a class="widget" href="https://www.awwwards.com/sites/runnersfix" target="_blank">
        <svg width="53.08" height="171.358">
            <path class="js-color-bg" fill="black" d="M0 0h53.08v171.358H0z"></path>
            <g class="js-color-text" fill="white">
                <path d="M20.047 153.665v-1.9h3.888v-4.093h-3.888v-1.9h10.231v1.9h-4.59v4.093h4.59v1.9zM29.898 142.236c-.331.565-.784.997-1.359 1.294s-1.222.446-1.944.446c-.721 0-1.369-.149-1.943-.446a3.316 3.316 0 0 1-1.36-1.294c-.331-.564-.497-1.232-.497-2.002s.166-1.438.497-2.002a3.316 3.316 0 0 1 1.36-1.294c.574-.297 1.223-.445 1.943-.445.723 0 1.369.148 1.944.445a3.307 3.307 0 0 1 1.359 1.294c.331.564.497 1.232.497 2.002s-.166 1.438-.497 2.002m-1.703-3.347c-.435-.33-.967-.496-1.601-.496-.633 0-1.166.166-1.601.496-.433.332-.649.78-.649 1.346 0 .564.217 1.013.649 1.345.435.331.968.497 1.601.497.634 0 1.166-.166 1.601-.497.435-.332.649-.78.649-1.345.001-.566-.214-1.014-.649-1.346M22.911 134.852v-1.813h1.186a3.335 3.335 0 0 1-.951-1.009 2.423 2.423 0 0 1-.352-1.271c0-.682.19-1.229.57-1.645.381-.413.932-.621 1.652-.621h5.262v1.812h-4.721c-.419 0-.727.096-.921.285-.195.19-.292.447-.292.769 0 .302.115.58.35.833.234.254.577.458 1.03.613.454.156.993.234 1.616.234h2.938v1.813h-7.367zM29.898 125.136a3.314 3.314 0 0 1-1.359 1.294c-.575.297-1.222.445-1.944.445-.721 0-1.369-.148-1.943-.445a3.322 3.322 0 0 1-1.36-1.294c-.331-.565-.497-1.232-.497-2.002 0-.771.166-1.438.497-2.003a3.313 3.313 0 0 1 1.36-1.293c.574-.297 1.223-.446 1.943-.446.723 0 1.369.149 1.944.446s1.028.728 1.359 1.293.497 1.232.497 2.003c.001.769-.166 1.436-.497 2.002m-1.703-3.347c-.435-.331-.967-.497-1.601-.497-.633 0-1.166.166-1.601.497-.433.331-.649.778-.649 1.345 0 .564.217 1.013.649 1.344.435.332.968.498 1.601.498.634 0 1.166-.166 1.601-.498.435-.331.649-.779.649-1.344.001-.567-.214-1.014-.649-1.345M22.911 117.75v-1.812h1.199c-.419-.265-.742-.586-.972-.966s-.345-.784-.345-1.213c0-.272.05-.569.146-.892l1.682.336a1.429 1.429 0 0 0-.205.76c0 .576.261 1.048.783 1.418.521.37 1.342.557 2.461.557h2.617v1.812h-7.366zM29.812 111.252c-.391.511-.857.851-1.403 1.016l-.776-1.446c.381-.138.68-.329.893-.577.215-.249.321-.544.321-.885a1.2 1.2 0 0 0-.168-.658c-.112-.175-.294-.263-.548-.263-.225 0-.406.105-.548.313-.142.21-.291.534-.446.973-.019.068-.058.17-.117.307-.224.565-.506 1.004-.848 1.315-.34.313-.779.467-1.314.467-.381 0-.727-.102-1.039-.306a2.185 2.185 0 0 1-.744-.84 2.554 2.554 0 0 1-.279-1.207c0-.497.105-.949.314-1.359.211-.408.506-.725.886-.949l.993 1.082c-.43.292-.644.686-.644 1.184a.84.84 0 0 0 .154.504.471.471 0 0 0 .401.212c.176 0 .338-.103.49-.307.15-.205.334-.604.547-1.199.205-.564.474-1.001.805-1.308.332-.308.756-.46 1.271-.46.721 0 1.299.229 1.732.687s.65 1.057.65 1.797c.001.759-.194 1.396-.583 1.907M35.481 17.006l-4.782 14.969h-3.266l-2.584-9.682-2.584 9.682h-3.268l-4.782-14.969h3.713l2.673 10.276 2.525-10.276h3.445l2.524 10.276 2.674-10.276zM37.978 27.163c1.426 0 2.496 1.068 2.496 2.495 0 1.425-1.07 2.495-2.496 2.495-1.425 0-2.494-1.07-2.494-2.495-.001-1.427 1.069-2.495 2.494-2.495"></path>
            </g>
        </svg>
    </a>
    <div class="title-words t-100 t-w-800">RunnersFix</div>
  </div>
</div>
<div id="info" class="section">
  <div class="container left-padding fade-in animationWait">
    <div class="columns">
      <div class="col description">
        <!---->
        <div class="text t-19 t-lh-1-6 t-w-n">
          <p>Website design and development for Jon Mott, professional athlete, and personal running coach from Lakeland, FL.</p>
          <p>We were really excited about such an interesting project. We started with a website structure and competitors’ analysis. Highlighting the most important information, choosing the animation effects, searching for an appropriate font, designing various color schemes were the next crucial steps of this project. Overall, six color schemes and five different design concepts were created.</p>
          <p>To get the perfect look for a website we arranged a photoshoot with a client and prepared all photo and video materials. Mobile version, running tips page, feedback forms, and blog page were also implemented.</p>
          <p>See the result here <a href="https://runners-fix.com/" target="_blank">www.runners-fix.com</a></p>
        </div>
        <!---->
      </div>
      <div class="col labels">
        <div class="text t-19 t-lh-1-6 t-w-n ">
          <p class="t-w-800 t-uppr">Client</p>
          <p>RunnersFix</p>
        </div>
        <div class="text t-19 t-lh-1-6 t-w-n">
          <p class="t-w-800 t-uppr">Services</p>
          <p>Identity<br>
            Web Design<br>Development</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!----->
<div class="section block-01 video">
  <!----->
  <div class="inline-video fade-in animationWait">

  </div>
  <img class="imageCase adapt padding-top-148 fade-in animationWait" lazy-src="<?php echo IMGPATH.'cases/runnersfix-web/pic-01@2x.png' ?>">
  <!----->
</div>
<!----->
<div class="section block-02">
  <!----->
  <img class="imageCase fade-in padding-top-148  animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-02@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-03 dark">
  <!----->
  <img class="imageCase fade-in padding-top-148 adapt animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-03@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-04 ">
  <!----->
  <img class="imageCase fade-in padding-top-148 adapt animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-04@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-05 dark">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-05@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-06 dark cols">
  <!----->
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-06a@2x.jpg' ?>">
  </div>
  <div class="space"></div>
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-06b@2x.jpg' ?>">
  </div>
  <!----->
</div>
<!----->
<div class="section block-07 dark">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-07@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-08 cols">
  <!----->
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-08a@2x.jpg' ?>">
  </div>
  <div class="space"></div>
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-08b@2x.jpg' ?>">
  </div>
  <!----->
</div>
<!----->
<div class="section block-09 dark">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-09@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-10">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-10@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-11">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-11@2x.jpg' ?>">
  <!----->
</div>
<!----->
<div class="section block-12 cols">
  <!----->
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-12a@2x.jpg' ?>">
  </div>
  <div class="space"></div>
  <div>
    <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-12b@2x.jpg' ?>">
  </div>
  <!----->
</div>
<!----->
<div class="section ">
  <div class="custom-arrow prev">
    <svg xmlns="http://www.w3.org/2000/svg" width="20.85" height="31.969" viewBox="0 0 20.85 31.969">
        <path data-name="Path 17006" d="M-310.12 244.02a3.469 3.469 0 0 0-2.543-2.822 3.684 3.684 0 0 0-3.882.986q-3.6 3.59-7.173 7.2c-.764.767-1.534 1.528-2.314 2.3-.079-.073-.15-.134-.216-.2l-6.075-6.073c-1.157-1.155-2.28-2.345-3.485-3.448a3.764 3.764 0 0 0-5.509.544 3.793 3.793 0 0 0 .484 4.957l13.841 13.9a1.193 1.193 0 0 0 1.943-.017l9.244-9.282 4.6-4.614a3.849 3.849 0 0 0 1.085-3.431z" transform="rotate(-90 -275.532 -34.523)" style="fill:#fff"/>
    </svg>
  </div>
  <div class="custom-arrow next">
    <svg xmlns="http://www.w3.org/2000/svg" width="20.85" height="31.969" viewBox="0 0 20.85 31.969">
        <path data-name="Path 17006" d="M-310.12 244.02a3.469 3.469 0 0 0-2.543-2.822 3.684 3.684 0 0 0-3.882.986q-3.6 3.59-7.173 7.2c-.764.767-1.534 1.528-2.314 2.3-.079-.073-.15-.134-.216-.2l-6.075-6.073c-1.157-1.155-2.28-2.345-3.485-3.448a3.764 3.764 0 0 0-5.509.544 3.793 3.793 0 0 0 .484 4.957l13.841 13.9a1.193 1.193 0 0 0 1.943-.017l9.244-9.282 4.6-4.614a3.849 3.849 0 0 0 1.085-3.431z" transform="rotate(-90 -275.532 -34.523)" style="fill:#fff"/>
    </svg>
  </div>
  <div class="slider">
    <!----->
    <div>
      <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-13@2x.jpg' ?>">
    </div>
    <div>
      <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-14@2x.jpg' ?>">
    </div>
    <div>
      <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-15@2x.jpg' ?>">
    </div>
    <div>
      <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/pic-16@2x.jpg' ?>">
    </div>
    <!----->
  </div>
</div>
<!------>
<div class="section block-17">
  <!----->
  <img class="imageCase fade-in animationWait" lazy-src="<?php echo IMGPATH.'/cases/runnersfix-web/Run_gif.gif' ?>">
  <!----->
</div>
<!----->
<script>
  $('.section .slider').slick({
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    dots: false,
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: false,
  });
</script>
<!----->
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/next-project.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/elements/footer.php';
?>
</html>
