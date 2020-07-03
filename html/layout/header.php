<body>
    <header class="header md:h-full w-full md:h-100 md:flex z-50">
        <div class="container-fluid mx-auto w-full flex md:items-center">
            <div class="row flex md:justify-between flex-col md:flex-row w-full md:items-center">
                <div class="col logo toggle flex justify-between md:mr-5 items-center">
                <!-- Logo -->
                <a href="./"><img src="img/logo.png" alt="logo" class="w-250"></a>
                    <!-- Responsive menu toggle button -->
                    <div id="toggle" class="toggle-button md:hidden cursor-pointer">
                        <img src="img/menu.svg" alt="menu" class="w-8">
                    </div>
                </div>
                <!-- Filter Form -->
                    <div class="menu p-5 md:p-0 md:flex md:justify-between flex-col md:flex-row w-full md:h-full hidden bg-white">
                    <div class="col filter flex items-center justify-center flex-col md:flex-row">
                        <form action="" class="m-0 flex flex-col md:flex-row items-center w-full" method="get">
                            <select id="periode" name="f_period" class="p-2 w-full md:w-auto">
                                <option value="" selected>Periode</option>
                            </select>
                            <select id="les" name="f_klas" placeholder="Les" class="p-2 w-full md:w-auto">
                                <option value="" selected>Les</option>
                            </select>
                            <select id="tag" name='filter' placeholder="tag" class="p-2 w-full md:w-auto">
                            <option value="" selected>Tag</option>
                            </select>
                            <button type="submit" class="bg-orange-500 text-white p-2 rounded-md w-full md:w-button">Filteren</button>
                        </form>
                    </div>
                    <div class="upload block md:hidden py-5 ">
                        <h2 class="font-bold text-center p-5 text-lg">Upload</h2>
                        <div class="filter">
                            <form action="utils/upload_index.php" class="m-0 flex flex-col items-center" method="post">
                                <select id="les" name="klas" class="p-2 w-full" required>
                                </select>
                                <select id="periode" name="period" placeholder="Les" class="p-2 w-full" required>
                                </select>
                                <button type="submit" class="bg-orange-500 text-white p-2 rounded-md w-button">Verzenden</button>
                            </form>
                        </div>
                    </div>
                    <div class="menu p-5 md:p-0 md:flex md:justify-end flex-col md:flex-row w-full md:h-full hidden bg-white">
                    <div class="col buttons flex items-center flex-col md:flex-row">
                    <a href="?logout" class="w-full md:w-auto"><button id="logout" class="bg-orange-500 text-white p-2 rounded-md mb-1 md:mb-0 md:mx-1 w-full md:w-button">Uitloggen</button></a>
                    <a href="admin.php" class="w-full md:w-auto"><button id="admin" class="bg-green-500 text-white p-2 rounded-md md:mx-1 w-full md:w-button">Admin</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>