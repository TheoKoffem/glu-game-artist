<div class="comment-container p-5">
    <div class="comments bg-gray-200 p-3">
        <h2 class="text-2xl font-bold pb-5">Beoordelingen</h2>
        <?php foreach($article['content']['comments'] as $comment){ 
                if($article['editable']||$comment['editable'])
                {
                    echo "<form action=''. method='post'>
                    <input type='text' value='".$comment['id']."' name='comment_id' hidden>
                    <input type='submit' value='Verwijder' name='delete_comment' class='text-red-500'>
                    <form>";
                }
            ?>
            <div class="comment-box flex flex-col bg-white p-2 my-2">
                <p class="comment-text"><?php echo $comment['comment']; ?></p>
                <p class="user text-gray-600"><?php echo $comment['username'] . " - Rating: " . $comment['rating']; ?></p>
            </div>
        <?php } ?>
    </div>
</div>
</div>