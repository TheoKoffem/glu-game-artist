<?php
SESSION_START();
include('utils/api_connect.php');
include('utils/delete_project.php');
include('utils/delete_img.php');
include('utils/delete_text.php');
include('utils/delete_comment.php');
include('utils/delete_tag.php');
include('utils/add_tag.php');
include('utils/post_comment.php');
include('utils/article_public.php');

$user = $api['user_info'];
$article = $api['articles'][0];
$miscs = $api['miscs'];

include_once "layout/head.php";
include_once "layout/header.php";
?>
    <main class="crumbs-comp">
    <?php include_once "sections/article/carousel.php";?>
    <?php
    // if($article['editable']){
    //     if(isset($_GET['error'])){
    //         if($_GET['error']=='filesize'){
    //             echo "<script>
    //              alert('Your file hasn\'t been uploaded because it was too big.');
    //             </script>";
    //         }
    //     }
    //     echo "<a href='article.php?id=".$_GET['id']."&delete=1'>
    //             Delete
    //         </a><br>";
    //     echo "<a href='upload.php?a=".$_GET['id']."'>
    //             Upload
    //         </a>";

    //     echo "<form method=\"post\" action=\"article.php?id=".$_GET['id']."\">
    //         Public: <br>
    //         <input type=\"radio\" id=\"yes\" name=\"public\" value=\"1\">
    //         <label for=\"\">Yes</label><br>
    //         <input type=\"radio\" id=\"no\" name=\"public\" value=\"0\">
    //         <label for=\"no\">No</label><br>
    //         <input type=\"submit\">
    //     </form>";

    //     foreach($article['content']['items'] as $item){
    //         if(isset($item['img'])){
    //             echo "
    //             <div class='project-image'>
    //                 <img src='".$item['img']."' alt='p-img' width='100%'>
    //                 <a href='article.php?id=".$_GET['id']."&deleteimg=1&img=".$item['id']."'>
    //                     Delete
    //                 </a>
    //             </div>
    //             ";
    //         }else if(isset($item['txt'])){
    //             echo "
    //             <div class='project-info'>
    //                 <p>".$item['txt']."</p>
    //                 <a href='article.php?id=".$_GET['id']."&deletetxt=1&txt=".$item['id']."'>
    //                     Delete
    //                 </a>
    //             </div>
    //             ";
    //         }
    //     }
    //     echo "<h3>Add a tag</h3>
    //     <form method='post' action=''>
    //         Tag <br>
    //         <select name='tag_add'>";      
    //     foreach($miscs['tags'] as $tag)
    //     {
    //         echo "<option value='".$tag['id']."'>".$tag['tag']."</option>";
    //     }
    //     echo "
    //     </select required><br><br>
    //     <input type='submit'>
    //     </form>";
    // }else{
    //     foreach($article['content']['items'] as $item){
    //         if(isset($item['img'])){
    //             echo "
    //             <div class='project-image'>
    //                 <img src='".$item['img']."' alt='p-img' width='100%'>
    //             </div>
    //             ";
    //         }else if(isset($item['txt'])){
    //             echo "
    //             <div class='project-info'>
    //                 <p>".$item['txt']."</p>
    //             </div>
    //             ";
    //         }
    //     }
    // }
    // ?>
    <?php
    include_once "sections/article/description.php";
    // comment field
    // if($user['role']!=3){
    //     echo'<h3>Comment</h3>
    //     <form method="post" action="">
    //         Comment :<textarea name="comment" required></textarea><br>
    //         Rating: <input type="number" name="rating" max="10" min="0" required><br>
    //         <input type="submit">
    //     </form>';
    // }
    include_once "sections/article/comments.php";
    ?>
    </main>
<?php include_once "layout/footer.php" ?>