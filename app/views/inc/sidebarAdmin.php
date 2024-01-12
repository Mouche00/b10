<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ========== Tailwind Css ========  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ========== AwesomeFonts Css ========  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>

    

</head>

<body>

    <section class=" flex items-center ">

        <!-- =========== Aside bar =========== -->
        <aside class="bg-[#0077b6] h-[100vh] w-[20%] sm:w-[320px] sm:p-5">
            <!-- ===== logo ===== -->

            <ul class="p-5 mt-10">


                <div class="flex items-center">
                    <img class="h-8 sm:w-8 w-full mr-2" src="<?php echo URLROOT; ?>/src/logo.png" alt="">
                    <h2 class="text-base sm:text-2xl font-bold sm:my-5 text-white">Admin Panel</h2>
                </div>




                <li class="my-2">
                    <a href="<?php echo URLROOT; ?>/admin/categories"
                        class="text-lg font-medium w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#03045e] bg-indigo-200 bg-opacity-20">
                        <img class="h-8 sm:w-8 w-full mr-4" src="<?php echo URLROOT; ?>/src/categories.png" alt=""><span
                            class="hidden sm:inline-block "> Categories</span></a>
                </li>


                <li class="my-2">
                    <a href="<?php echo URLROOT; ?>/admin/products"
                        class="text-lg font-medium w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#03045e] bg-indigo-200 bg-opacity-20">
                        <img class="h-8 sm:w-8 w-full mr-4" src="<?php echo URLROOT; ?>/src/boite.png" alt=""><span
                            class="hidden sm:inline-block">Products</span></a>
                </li>
                <li class="my-2">
                    <a href="<?php echo URLROOT; ?>/admin/users"
                        class="text-lg font-medium w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#03045e] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid "></i>
                        <img class="h-8 sm:w-8 w-full mr-4" src="<?php echo URLROOT; ?>/src/reglages.png" alt=""><span
                            class="hidden sm:inline-block">Users</span></a>
                </li>
                <li class="my-2">
                    <a href="<?php echo URLROOT; ?>/admin/orders"
                        class="text-lg font-medium w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#03045e] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid "></i>
                        <img class="h-8 sm:w-8 w-full mr-4" src="<?php echo URLROOT; ?>/src/order.png" alt=""><span
                            class="hidden sm:inline-block">Orders</span></a>
                </li>
                <li class="my-2">
                    <a href="<?php echo URLROOT; ?>/admin/bills"
                        class="text-lg font-medium w-[full] rounded-md h-[60px] text-white flex items-center p-5 group hover:text-[#03045e] bg-indigo-200 bg-opacity-20">
                        <i class="fa-solid "></i>
                        <img class="h-8 sm:w-8 w-full mr-4" src="<?php echo URLROOT; ?>/src/payment.png" alt=""><span
                            class="hidden sm:inline-block">Bills</span></a>
                </li>






                <li> <a href=""
                        class="bg-[#d62828] h-10 w-[50%] sm:w-full flex justify-center items-center rounded-lg text-white font-bold m-auto mt-10"><button
                            type="button"><i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180"></i></i> <span
                                class="hidden sm:inline-block">LOG
                                OUT</span></button></a></li>
            </ul>




        </aside>