<nav class="h-12 relative px-4 py-4 flex justify-between items-center bg-white">
    <div class="w-[260px] h-[10%]">
        <img class="w-[50%]" src='<?php echo URLROOT . "/public/images/carrefour2.jpg"; ?>' alt="LogoCarrefour">
    </div>
    <div class="lg:hidden flex">
        <span>
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </span>
        <span>
            <a class="cart-icon px-6 text-sm text-blue-600 font-bold rounded-xl transition duration-200" href="">
                <div class="absolute  right-7 z-10   text-xs font-bold px-1 py-0.5 rounded-sm">12</div>
                <svg class="h-9 lg:h-10 p-2 mt-[-0.9rem] text-gray-500" aria-hidden="true" focusable="false"
                    data-prefix="far" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-9x">
                    <path fill="currentColor"
                        d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z">
                    </path>
                </svg>
            </a>
        </span>
    </div>
    <ul
        class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-sm text-blue-600 hover:font-bold  hover:text-blue-900" href="#">Home</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-blue-600 hover:font-bold hover:text-blue-900" href="#">Categories</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-blue-600 hover:font-bold  hover:text-blue-900" href="#">Product</a></li>



    </ul>
    <?php if(isset($_SESSION['username'])) : ?>
    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-red-600 font-bold  rounded-xl transition duration-200"
        href="#">
        <span class="flex items-center">
            <img class="w-5 mr-2" src='<?php echo URLROOT . "/public/images/la-personne.png"; ?>' alt="Login Image">
            <span><?php echo $_SESSION['username'] ?></span>
        </span>
    </a>
    <?php else : ?>
    <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-red-600 font-bold  rounded-xl transition duration-200"
        href="#">
        <span class="flex items-center">
            <img class="w-5 mr-2" src='<?php echo URLROOT . "/public/images/Login.png"; ?>' alt="Login Image">
            <span>Sign In</span>
        </span>
    </a>

    <a class="hidden lg:inline-block py-2 px-6   text-sm text-blue-600 font-bold rounded-xl transition duration-200"
        href="#">
        <span class="flex items-center">
            <img class="w-5 mr-2" src='<?php echo URLROOT . "/public/images/la-personne.png"; ?>' alt="Login Image">
            <span>Sign Up</span>
        </span>
    </a>
    <?php endif; ?>
    <div class="cart-icon">
        <span
            class="cart-icon-button lg:inline-block py-2 px-6 text-sm text-blue-600 font-bold rounded-xl transition duration-200">
            <div id="cart-count" class="absolute right-7 z-10 text-xs font-bold px-1 py-0.5 rounded-sm">0</div>
            <svg class="h-9 lg:h-10 p-2 text-gray-500" aria-hidden="true" focusable="false" data-prefix="far"
                data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                class="svg-inline--fa fa-shopping-cart fa-w-18 fa-9x">
                <path fill="currentColor"
                    d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z">
                </path>
            </svg>
        </span>
    </div>




</nav>
<!-- =================mobile menu=============== -->

<!-- ================carte menu================= -->

<div id="" class="carte-menu absolute right-0 z-50 w-[30%] h-[100vh] bg-white hidden overflow-y-auto ">
    <button class="cart-close">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
            </path>
        </svg>
    </button>

    <!-- Ajoutez le contenu de votre carte-menu ici -->

    <div id="cart-menu">
        <div class="mt-7 mx-24 w-80 bg-white shadow rounded">
            <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                style="background-image: url('https://images.pexels.com/photos/7989741/pexels-photo-7989741.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
                <div class="flex justify-between"> <input type="checkbox" /> <button class="text-white hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg> </button> </div>
                <div> <span
                        class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium select-none">
                        available </span> </div>
            </div>
            <div class="p-4 flex flex-col items-center">
                <p class="text-gray-400 font-light text-xs text-center"> Hammond robotics </p>
                <h1 class="text-gray-800 text-center mt-1">Item name</h1>
                <p class="text-center text-gray-800 mt-1">€1299</p>
            </div>
        </div>
    </div>
</div>
<!-- ================carte menu end================= -->
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <div class="w-[90%] h-[10%] ">
                <img class="w-[50%]" src='<?php echo URLROOT . "/public/images/carrefour2.jpg"; ?>' alt="LogoCarrefour">
            </div>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="#">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="#">Categories</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                        href="#">Product</a>
                </li>

            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">

                <a class="block px-4 py-3 mb-3 leading-loose text-red-500 text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl"
                    href="#">
                    <span class="flex items-center">
                        <img class="w-5 mr-2" src='<?php echo URLROOT . "/public/images/Login.png"; ?>'
                            alt="Login Image">
                        <span>Sign In</span>
                    </span>
                </a>

                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-blue-600 text-center  font-semibold    rounded-xl"
                    href="#">
                    <span class="flex items-center">
                        <img class="w-5 mr-2" src='<?php echo URLROOT . "/public/images/la-personne.png"; ?>'
                            alt="Login Image">
                        <span>Sign Up</span>
                    </span>
                </a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2024</span>
            </p>
        </div>

    </nav>
</div>