<?php
  SESSION_START();
  $index = true;
  $_SESSION['article_id'] = "";
  include('utils/api_connect.php');
  $user = $api['user_info'];
  if(isset($api['articles'])){
    $articles = $api['articles'];
  }
  $miscs = $api['miscs'];
  function select_item_first($array, $item, $string){
    foreach($array as $field){
      if(isset($field[$item])){
        return $field[$string];
      }
    }
    return "uploads/error.png";
  }
  include_once "layout/head.php";
  
?>
    <?php
      include_once "layout/header.php";
    ?>
<main class="flex">
<?php include_once "layout/sidebar.php"; ?>
    <section class="cards w-full md:w-3/4 overflow-y-scroll">
      <div class="gallery flex w-full p-5 justify-center flex-wrap">
      <?php
      // Laadt alle cards 
      if(isset($articles))
      {
        foreach($articles as $article){
          ?>
          <a href='article.php?id=<?php echo $article['id']?>' class="card" data-toggle='galleryModal'>
          <div class="imagegallery-img bg-gray-200 rounded-lg m-2 text-center flex flex-col justify-between p-5">
              <div class="top">
                  <p class="periode">Periode: <?php echo $article['period']; ?></p>
                  <p class="les">Les: <?php echo $article['content']['info']['les']; ?></p>
              </div>
                  <div class="middle">
                  <p class="thumbnail"><img src="<?php echo select_item_first($article['content']['items'], 'img', 'img') ?>" alt=""></p>
              </div>
              <div class="bottom">
                  <p class="user">Gebruiker: <?php echo $article['publisher']['name']; ?></p>
                  <p class="klas"><?php echo $article['publisher']['class']; ?></p>
              </div>
          </div>
      </a>
      <?php
        }
    }
      ?>
      </div><!-- .end Gallery wrapper -->
    </section>
    </main>
<?php include_once "layout/footer.php";?>