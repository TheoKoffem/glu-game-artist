<div class="desc-container p-5">
    <div class="description bg-gray-200 p-3">
        <h2 class="text-2xl font-bold pb-5">Beschrijving</h2>
        <?php
        if(isset($item['txt'])){
        ?>
            <p><?php echo $item['txt']; ?></p>
            <a href='article.php?id=<?php echo $_GET['id']."&deletetxt=1&txt=" .$item['id'];?> '>Delete</a>
        <?php   
        } else {
            ?>
            <p>-</p>
            <?php
        }
        ?>
    </div>
</div>