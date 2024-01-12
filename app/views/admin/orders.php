<?php require APPROOT . '/views/inc/sidebarAdmin.php'; ?>

<div class="w-full xl:w-10/12 mb-12 mb-[400px] px-4 mx-auto ">
    <div class="relative flex flex-col min-w-0 break-words  w-full mb-6 shadow-lg rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0 bg-[#0077b6] ">
            <div class="flex flex-wrap items-center text-white ">
                <div class="relative  w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">Orders</h3>
                </div>
               
            </div>
        </div>

        <div class="block w-full overflow-x-auto font-bold text-black">
            <table class="items-center bg-transparent w-full border-collapse ">
                <thead>
                    <tr>
                        <th
                            class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Id Order
                        </th>
                        <th
                            class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Date
                        </th>
                        <th
                            class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Line Items
                        </th>
                        <th
                            class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Tolal Amount
                        </th>
                        
                        <th
                            class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Actions
                        </th>

                    </tr>
                </thead>



            </table>
        </div>
    </div>
</div>