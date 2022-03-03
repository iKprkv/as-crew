<!doctype html>
<html lang="en">
<?php
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/database.php';
   $pageTitle = 'Blog';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/head.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/header.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/nav.php';
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/popup.php';
?>
<div id="list" class="section">
  <link rel="stylesheet" href="<?php echo CSSPATH.'admin/blog/list.css?v=1.0' ?>">
  <!-- <script src="<?php echo SCRIPTPATH.'/blog/index.js' ?>"></script> -->
  <!---->
  <div class="container">
    <div class="title-words t-100 t-w-800">Post list</div>
  </div>
  <!---->
  <div class="container wide">
    <?php
      use SleekDB\Store;
      $postStore = new Store('posts', $dataDir, $configuration);
      $posts = $postStore->findAll();
      echo '<pre>';
      print_r($posts);
      echo '</pre>';

      function drawPostsList($data) {
        echo '
        ';
        foreach ( $data as $value ) {
          echo '
          <div class="post">
            <div class="thumbnail" style="background-image: url('.$value['thumbnail'].')">
            </div>
            <div class="post-text">
              <div class="post-title">
                <div class="text t-22 c-0d0d0d t-w-800 t-lh-1-6">
                    <p>'.$value['_id'].': '.$value['title'].'</p>
                </div>
              </div>
              <input value="edit" type="submit">
              <input value="Del" type="submit">
            </div>
          </div>
          ';
        }
        echo '

        ';
      }
    ?>
    <div class="container left-padding">
      <div class="text posts-list padding-30-0">
        <?php drawPostsList($posts); ?>
      </div>
    </div>
  </div>
</div>
<?php
   include_once $_SERVER['DOCUMENT_ROOT'].'/elements/footer.php';
?>
</html>
