<div class="section">
  <div class="container">
    <div class="back-to-top t-19 c-c3c3c3 t-lh-1-6 t-w-800 c-0d0d0d t-a-center  fade-in animationWait">Back to top</div>
  </div>
  <link rel="stylesheet" href="<?php echo CSSPATH.'core/next-project.css?v=1.0'?>">
<?php
   function getNextProject($case) {
     $nextData = array(
       array('almette', "Almette"),
       array('antistatique', "Antistatique"),
       array('avon-beauty', "Avon Beauty Products"),
       array('collection-of-logos', "Collection of logos"),
       array('cover360', "Cover 360&#176;"),
       array('k-beauty', "K-Beauty"),
       array('vacuum', "Vacuum"),
       array('vera', '"Vera" fund'),
       array('runnersfix', "RunnersFix"),
       array('runnersfix-web', "RunnersFix"),
       array('pwc', "Future Megacity PWC-2018"),
       array('pole', "Pole Positions Moscow")
     );
     //print_r($nextData[4][1]);
     $random = rand(0,(count($nextData)-1));
     if ( $nextData[$random][0] == $case ) {
       //echo '<script>alert('.$nextData[$random][0].'='.$case.')</script>';
       $random = rand(0,(count($nextData)-1));
       echo getNextProject($case);
     }
     else {
       $nextProjectBody = '
       <div class="'.$nextData[$random][0].'">
         <a href="/pages/cases/'.strtolower($nextData[$random][0]).'.php" class="next-project t-100 t-lh-1 t-w-800 t-a-center fade-in animationWait">Next project</a>
         <div class="next-area">
           <a href="/pages/cases/'.strtolower($nextData[$random][0]).'.php" class="project-name t-30 c-2c2c2c t-lh-3-33 t-w-800 t-a-center underline fade-in animationWait">'.$nextData[$random][1].'</a>
           <div class="next-cover" id="'.strtolower($nextData[$random][0]).'"></div>
         </div>
       </div>';
       return $nextProjectBody;
    }
   };
   echo getNextProject($thisCase);
?>
</div>
