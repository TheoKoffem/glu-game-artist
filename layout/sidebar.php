<aside class="w-1/4 hidden md:flex">
    <div class="container-sb h-full w-full p-5">
        <div class="student">
            <div class="name py-2">
                <p class="text-center"><?php echo $user['name']; ?></p>
            </div>
            <div class="e-mailname py-2">
                <p class="text-center text-gray-600"><?php echo $user['username']; ?></p>
            </div>
            <div class="class py-2">
                <p class="text-center text-gray-600"><?php echo $user['class']; ?></p>
            </div>
        </div>
        <hr>
        <div class="upload">
            <h2 class="font-bold text-center p-5 text-lg">Upload</h2>
            <div class="filter px-5">
                <form action="utils/upload_index.php" class="m-0 flex flex-col items-center" method="post">
                    <select id="les" name="klas" class="p-2 w-full" required>
                        <?php
                            foreach($miscs['lessons'] as $les)
                            {
                                echo "<option value='".$les['id']."'  required>".$les['lesson']."</option >";
                            }
                        ?>
                    </select>
                    <select id="periode" name="period" placeholder="Les" class="p-2 w-full" required>
                        <?php
                            for($i = 1; $i<=16; $i++)
                            {
                                echo "<option value='$i'> Periode $i</option>";
                            }
                        ?>
                    </select>
                    <button type="submit" class="bg-orange-500 text-white p-2 rounded-md w-button">Verzenden</button>
                </form>
            </div>
        </div>
    </div>
</aside>