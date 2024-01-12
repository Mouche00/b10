<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- hero-section -->
<section
    class="relative bg-[url(<?php echo URLROOT . '/public/images/home.png'; ?>)] bg-blur-xl bg-cover bg-center bg-no-repeat">


    <div class="relative   px-4 py-52 sm:px-6  lg:h-screen  lg:px-8">
        <div class="  ltr:sm:text-left rtl:sm:text-right">
            <h1 class="text-white text-4xl font-extrabold sm:text-8xl">
                Discover

                <strong class="text-blue-600">shopping </strong>

            </h1>

            <h1 class="pt-6 text-white text-4xl font-extrabold sm:text-8xl">
                <strong class="text-red-600">Exellent </strong>
                with us!
            </h1>

            <div class="mt-14 flex flex-wrap gap-4 text-center">


                <a href="#"
                    class="block w-full rounded bg-white px-24 py-3 text-sm font-medium text-rose-600 shadow hover:bg-inherit hover:border-solid hover:border-2 border-sky-500  hover:text-white-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>
<!-- hero-section-end -->

<!-- acheter par categories -->
<h1 class=" text-4xl font-extrabold sm:text-5xl my-14  pl-4">
    Acheter par catégorie</h1>
<section class=" mt-8 pt-4 bg-blue-100">

    <div id="categorie" class="overflow-x-auto whitespace-nowrap">
        <!-- Première image avec deux mots au-dessus -->
        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">

            <a href="">
                <img class="w-[100%] h-[100%]" src="<?php echo URLROOT . '/public/images/mode.png'; ?>" alt="Image 1">
                <div class="text-center mt-2">

                    <p class="text-sm">Mode et Accessoires</p>
                </div>
            </a>
        </div>

        <!-- Deuxième image avec trois mots au-dessus -->
        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <a href="">
                <img class="w-[100%] h-[100%]" src="<?php echo URLROOT . '/public/images/electronique.jpg'; ?>"
                    alt="Image 1">
                <div class="text-center mt-2">

                    <p class="text-sm">Électronique et Technologie</p>
                </div>
            </a>
        </div>

        <!-- Ajoutez plus d'images selon vos besoins -->
        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <a href="">
                <img class="w-[100%] h-[100%]" src="<?php echo URLROOT . '/public/images/instrument.jpg'; ?>"
                    alt="Image 1">
                <div class="text-center mt-2">

                    <p class="text-sm">Instruement Musical</p>
                </div>
            </a>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <a href="">
                <img class="w-[100%] h-[100%]" src="<?php echo URLROOT . '/public/images/maisonJardain.jpg'; ?>"
                    alt="Image 1">
                <div class="text-center mt-2">

                    <p class="text-sm">Maison et Jardin</p>
                </div>
            </a>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <img class="w-[100%] h-[100%]" src="https://via.placeholder.com/150" alt="Image 1">
            <div class="text-center mt-2">
                <p class="font-bold">Image 1</p>
                <p class="text-sm">Description 1</p>
            </div>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <img class="w-[100%] h-[100%]" src="https://via.placeholder.com/150" alt="Image 1">
            <div class="text-center mt-2">
                <p class="font-bold">Image 1</p>
                <p class="text-sm">Description 1</p>
            </div>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <img class="w-[100%] h-[100%]" src="https://via.placeholder.com/150" alt="Image 1">
            <div class="text-center mt-2">
                <p class="font-bold">Image 1</p>
                <p class="text-sm">Description 1</p>
            </div>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <img class="w-[100%] h-[100%]" src="https://via.placeholder.com/150" alt="Image 1">
            <div class="text-center mt-2">
                <p class="font-bold">Image 1</p>
                <p class="text-sm">Description 1</p>
            </div>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <img class="w-[100%] h-[100%]" src="https://via.placeholder.com/150" alt="Image 1">
            <div class="text-center mt-2">
                <p class="font-bold">Image 1</p>
                <p class="text-sm">Description 1</p>
            </div>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <img class="w-[100%] h-[100%]" src="https://via.placeholder.com/150" alt="Image 1">
            <div class="text-center mt-2">
                <p class="font-bold">Image 1</p>
                <p class="text-sm">Description 1</p>
            </div>
        </div>

        <div class="inline-block ml-2 mr-8 w-[300px] h-[400px]">
            <img class="w-[100%] h-[100%]" src="https://via.placeholder.com/150" alt="Image 1">
            <div class="text-center mt-2">
                <p class="font-bold">Image 1</p>
                <p class="text-sm">Description 1</p>
            </div>
        </div>

    </div>
</section>
<!-- acheter par categories end -->

<!-- Vos achats en magasin -->
<h1 class=" text-4xl font-extrabold sm:text-5xl my-14 pl-4">
    Vos achats en magasin</h1>

<section class=" mx-auto flex flex-wrap justify-center">

    <!-- Première carte -->
    <div class="w-full md:w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-6">
            <div>
                <p class="text-lg font-bold"> Trouvez le magasin plus prochede chez vous!</p>

            </div>
            <img class="w-24 h-24 object-cover rounded" src="<?php echo URLROOT . '/public/images/carre2.jpg'; ?>" alt="
                Image 1">
        </div>
    </div>

    <!-- Deuxième carte -->
    <div class="w-full md:w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-6">
            <div>
                <p class="text-lg font-bold">Faites le plien d'économies dans votre magasin</p>

            </div>
            <img class="w-24 h-24 object-cover rounded" src="<?php echo URLROOT . '/public/images/carre3.jpg'; ?>"
                alt="Image 2">
        </div>
    </div>

    <!-- Troisième carte -->
    <div class="w-full md:w-1/3 p-4">
        <div class="bg-white rounded-lg shadow-md flex items-center justify-between p-6">
            <div>
                <p class="text-lg font-bold">Faites le plien de bons plans grace a nos catalogue!</p>

            </div>
            <img class="w-24 h-24 object-cover rounded" src="<?php echo URLROOT . '/public/images/carre1.jpg'; ?>"
                alt="Image 3">
        </div>
    </div>

</section>

<!-- deuxieme section vos achats en magasin  -->

<section class=" mb-4 flex sm:flex-nowrap bg-blue-100">

    <!-- Première carte -->
    <div class="w-[40%] md:w-1/3 py-4">
        <div class=" flex items-center  ">
            <img class="wy-24 h-24 object-cover rounded"
                src="<?php echo URLROOT . '/public/images/carre3-removebg-preview.png'; ?>" alt="
                Image 1">
            <div>
                <p class="text-lg font-bold text-blue-600"> Trouvez un magasin </p>

            </div>

        </div>
    </div>

    <!-- Deuxième carte -->
    <div class="w-[40%] md:w-1/3 py-4">
        <div class=" flex items-center  ">
            <img class="wy-24 h-24 object-cover rounded"
                src="<?php echo URLROOT . '/public/images/support-removebg-preview.png'; ?>" alt="Image 2">
            <div>
                <p class="text-lg font-bold text-blue-600">Obtenir de l'aide</p>

            </div>

        </div>
    </div>

    <!-- Troisième carte -->
    <div class="w-[40%] md:w-1/3 py-4">
        <div class=" flex items-center  ">
            <img class="wy-24 h-24 object-cover rounded"
                src="<?php echo URLROOT . '/public/images/chat-removebg-preview.png'; ?>" alt="Image 3">
            <div>
                <p class="text-lg font-bold text-blue-600">Telecharger l'application</p>

            </div>

        </div>
    </div>

    <!-- quatrieme carte -->

    <div class="w-[40%] md:w-1/3 py-4">
        <div class=" flex items-center  ">
            <img class="wy-24 h-24 object-cover rounded"
                src="<?php echo URLROOT . '/public/images/message-removebg-preview.png'; ?>" alt="Image 3">
            <div>
                <p class="text-lg font-bold text-blue-600"">Consulter la FAQ</p>

            </div>

        </div>
    </div>

</section>

<!-- deuxieme section vos achats en magasin end  -->

<!-- Vos achats en magasin end -->

<!-- Marques de confiance -->

<h1 class=" text-4xl font-extrabold sm:text-5xl my-14 pl-4">

                    Marques de confiance</h1>
                <section class=" mt-10 pt-4">
                    <div id="marque" class="overflow-x-auto whitespace-nowrap">
                        <!-- Première image avec deux mots au-dessus -->
                        <div class="inline-block mr-8 w-[10%] ">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/aicha.png'; ?>"
                                alt="Image 1">

                        </div>

                        <!-- Deuxième image avec trois mots au-dessus -->
                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/dari.png'; ?>"
                                alt="Image 2">

                        </div>

                        <!-- Ajoutez plus d'images selon vos besoins -->
                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/lesieur.jpg'; ?>"
                                alt="Image 2">

                        </div>

                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/oulmas.png'; ?>"
                                alt="Image 2">

                        </div>

                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/sba3.png'; ?>"
                                alt="Image 2">

                        </div>

                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/dari.png'; ?>"
                                alt="Image 2">

                        </div>
                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/lesieur.jpg'; ?>"
                                alt="Image 2">

                        </div>
                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/aicha.png'; ?>"
                                alt="Image 2">

                        </div>
                        <div class="inline-block mr-8 w-[10%]">
                            <img class="w-[100%]" src="<?php echo URLROOT . '/public/images/sba3.png'; ?>"
                                alt="Image 2">

                        </div>
                    </div>
                </section>



                <?php require APPROOT . '/views/inc/footer.php'; ?>