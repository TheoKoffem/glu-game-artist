<div class="container mx-auto md:mb-0 mb-20">
<div class="container-article flex w-full p-5 md:flex-row flex-col">
    <div class="carousel-container flex items-center w-full md:w-3/5 p-2">
        <div class="carousel w-full" data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell"><img src="img/logo.png" alt="logo"></div>
            <div class="carousel-cell"><img src="img/google.png" alt="logo"></div>
        </div>
    </div>
    <div class="info-container md:w-2/5 w-full fixed left-0 bottom-500 md:static w-full">
        <div class="mobile-toggle md:hidden bg-gray-200 p-2 flex justify-center z-50 relative">
            <button id="toggle-button-mobile"><img src="img/up.png" alt="^" ></button>
        </div>
        <div class="details bg-gray-200 p-3">
            <h2 class="text-2xl font-bold pb-5">Lange titel voor item</h2>
            <ul>
                <li>Naam: ahaakmat@glu.nl</li>
                <li>Klas: Leraar</li>
                <li>Periode 6</li>
                <li>Les: Visualiseren</li>
                <li>Tags:</li>
            </ul>
            <div class="buttons p-2">
                <form action="" method="" class="form-delete">
                    <button type="submit" class="bg-red-500 text-white p-2 rounded-md md:mx-1 w-full">Verwijder</button>
                </form>
                <form action="" method="" class="form-upload">
                    <button type="submit" class="bg-green-500 text-white p-2 rounded-md md:mx-1 w-full">Upload</button>
                </form>
            </div>
        </div>
        <div class="comment bg-gray-200 p-3 md:mt-5">
            <h2 class="text-2xl font-bold pb-5">Beoordeel</h2>
            <form action="" class="flex flex-col items-end m-0">
                <textarea name="comment" id="comment" rows="5" class="w-full"></textarea>
                <button type="submit" class="bg-green-500 text-white p-2 rounded-md my-2 w-full md:w-auto">Verzenden</button>
            </form>
        </div>
    </div>
</div>