<?php
SESSION_START();
include('utils/api_connect.php');
$user = $api['user_info'];
if($user['role']>2){
    header('Location: index.php');
}
?>
<html lang="en">
    <!-- <script src="js/animation.js"></script> -->
    <script src="src/js/jquery.js"></script>
    <?php
      include('layout/head.php');
      include('layout/header.php');
      include('utils/new_tag.php');
      include('utils/new_lesson.php');
      include('utils/destroy_tag.php');
      include('utils/destroy_lesson.php');
      include('utils/get_users.php');
      include('utils/upgrade_users.php');
      include('utils/downgrade_users.php');
      include('utils/api_connect.php');
      $miscs = $api['miscs'];
    ?>
    <main class="flex justify-center">
    <div class="container flex p-5 flex-col items-center">
        <h3>Tag toevoegen</h3>
        <form method="post" action="">
            Tag: <input type="text" name="new_tag">
            <button type="submit" value="submit" class="bg-orange-500 text-white p-2 rounded-md md:mx-1 w-full md:w-button">Submit</button>
        </form>

        <h3>Tag Verwijderen</h3>
        <form method="post" action="">
            Tag: <select id="tag" name="destroy_tag">
                <?php foreach($miscs['tags'] as $tag)
                {
                    echo "<option value='".$tag['id']."'>".$tag['tag']."</option>";
                }
                ?>
            </select>
            <button type="submit" value="submit" class="bg-orange-500 text-white p-2 rounded-md md:mx-1 w-full md:w-button">Submit</button>
        </form>

        <h3>Les toevoegen</h3>
        <form method="post" action="">
            Les: <input type="text" name="new_lesson" required>
            <button type="submit" value="submit" class="bg-orange-500 text-white p-2 rounded-md md:mx-1 w-full md:w-button">Submit</button>
        </form>

        <h3>Les Verwijderen</h3>
        <form method="post" action="">
            Les: <select id="les" name="destroy_lesson">
              <?php
                foreach($miscs['lessons'] as $les)
                {
                    if($les['id']!=1){
                        echo "<option value='".$les['id']."'>".$les['lesson']."</option>";
                    }
                }
              ?>
            </select required>            
            <button type="submit" value="submit" class="bg-orange-500 text-white p-2 rounded-md md:mx-1 w-full md:w-button">Submit</button>
        </form>

        <h3>Account naar leraar omzetten</h3>
        <form method="post">
            Account: <select name="upgrade_roll">
              <?php
                foreach($users as $new_user)
                {
                    if($new_user['role']==3){
                      echo "<option value='".$new_user['id']."'>Naam:".$new_user['name']." | Email:".$new_user['username']."</option>";
                    }
                }
              ?>
            </select required>
            <button type="submit" value="submit" class="bg-orange-500 text-white p-2 rounded-md md:mx-1 w-full md:w-button">Submit</button>
        </form>
        <?php
            if($user['role']==1){
                echo "<h3>Account naar student</h3>
                <form method='post'>
                    Account: <select name='downgrade_roll'>";
                        foreach($users as $new_user)
                        {
                            if($new_user['role']==2){
                            echo "<option value='".$new_user['id']."'>Naam:".$new_user['name']." | Email:".$new_user['username']."</option>";
                            }
                        }
                    echo "</select required>
                    <button type='submit' value='submit' class='bg-orange-500 text-white p-2 rounded-md md:mx-1 w-full md:w-button'>Submit</button>
                </form>";
            }
        ?>
    </div>
    </main>
</body>
</html>