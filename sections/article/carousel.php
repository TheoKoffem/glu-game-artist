<div class="container mx-auto md:mb-0 mb-20">
<div class="container-article flex w-full p-5 md:flex-row flex-col">
    <div class="carousel-container flex items-center w-full md:w-3/5 p-2">
        <div class="carousel w-full" data-flickity='{ "wrapAround": true }'>
            <?php 
            //loops through content
             foreach($article['content']['items'] as $item){
                if(isset($item['img'])){
                    ?>
                    <div class="carousel-cell" id="<?php ?>">
                        <img src="<?php echo $item['img']; ?>" alt="image">
                        <a href='article.php?id="<?php echo $_GET['id']."&deleteimg=1&img=".$item['id']; ?>"' class="text-red-500">Delete</a>
                    </div>
                    <?php
                }
            }?>
        </div>
    </div>
    <div class="info-container md:w-2/5 w-full fixed left-0 bottom-500 md:static w-full z-50">
        <div class="mobile-toggle md:hidden bg-gray-200 flex justify-center z-50 relative">
            <button id="toggle-button-mobile"><img src="img/up.png" alt="^" ></button>
        </div>
        <div class="details bg-gray-200 px-3 md:p-3">
            <h2 class="text-2xl font-bold"><?php echo $article['publisher']['name']; ?></h2>
            <ul>
                <li>Naam: <?php echo $article['publisher']['username']; ?></li>
                <li>Klas: <?php echo $article['publisher']['class']; ?></li>
                <li>Periode <?php echo $article['period']; ?></li>
                <li>Les: <?php echo $article['content']['info']['les'] ?></li>
                <li class="inline-block">Tags:</li>
                <?php
                foreach($article['content']['info']['tags'] as $tag)
                {
                    if($article['editable']){ 
                    echo "<div class='tag inline-block mr-1'>". $tag['name'] ."
                        <form action='' method='post' class='inline-block m-0'>
                            <input type='hidden' name='delete_tag' value='".$tag['id']."' hidden>
                            <input type='submit' value='X'>
                        </form>
                    </div>";
                    }
                }
                ?>
            </ul>
            <?php if($article['editable']){ 
            if(isset($_GET['error'])){
                if($_GET['error']=='filesize'){
                    echo "<script>
                     alert('Your file hasn\'t been uploaded because it was too big.');
                    </script>";
                }
            }                
                ?>
            <div class="admin-options">
                    <form method="post" action="article.php?id=<?php echo $_GET['id'];?>" class="flex items-center">
                    Public:<br>
                    <label for="yes" class="mx-1">Yes</label>
                    <input type="radio" id="yes" name="public" value="1"><br>
                    <label for="no" class="mx-1">No</label>
                    <input type="radio" id="no" name="public" value="0"><br>
                    <input type="submit" class="mx-1">
                    </form>
            </div>
            <div class="buttons">
                <a href='upload.php?a=<?php echo $_GET['id']; ?>&delete=1'><button class="bg-red-500 text-white p-2 rounded-md m-1 w-full">Verwijder</button></a>
                <a href='upload.php?a=<?php echo $_GET['id']; ?>'><button class="bg-green-500 text-white p-2 rounded-md m-1 w-full">Upload</button></a>
            </div>
            <?php }?>
        </div>
        <?php if($user['role']!=3){ ?>
        <div class="comment bg-gray-200 px-3 md:p-3 md:mt-5">
            <h2 class="text-2xl font-bold pb-5">Beoordeel</h2>
            <form method="post" class="flex flex-col items-end m-0">
                <textarea name="comment" id="comment" rows="5" class="w-full" required></textarea>
                <label for="rating">Rating:</label><input type="number" placeholder="1" name="rating" max="10" min="1" required class="rounded-md">
                <button type="submit" class="bg-green-500 text-white p-2 rounded-md my-2 w-full md:w-auto">Verzenden</button>
            </form>
        </div>
        <?php } ?>
    </div>
</div>