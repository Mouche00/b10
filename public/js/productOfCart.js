$(document).ready(function(){

   

    function draw(){
        $.ajax({
            url: URLROOT + '/productsOfCart/display/' + cartId,
            type: 'GET',
            success: function(response){
                console.log(response);
                let data = JSON.parse(response);
                console.log(data);
                $('#cart-count').html(`${data.length}`);
                console.log(data.length);

                let row = '';
                $('#cart-menu').html('');
                data.forEach(element => {
                    row = `<div class="mt-7 mx-24 w-80 bg-white shadow rounded">
                                <div class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                                    style="background-image: url('${URLROOT}/public/uploads/${element.picture}')">
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
                                    <p class="text-gray-400 font-light text-xs text-center"> ${element.name} </p>
                                    <h1 class="text-gray-800 text-center mt-1">${element.name}</h1>
                                    <p class="text-center text-gray-800 mt-1">€${element.price}</p>
                                </div>
                            </div>`;

                    $('#cart-menu').append(row);
                });
                


    
            }
        });
    }

    draw();

    $(document).on('click', '#add-button', function(){
        $('#submit').val('SUBMIT');
    });

    $(document).on('click', '.cart-add', function(e){
        e.preventDefault();
        let prodId = $(this).data('id');
        $.ajax({
            url: URLROOT + '/productsOfCart/add',
            type: 'POST',
            data: {
                prodId: prodId,
                cartId: cartId,
            },
            success: function(response){
                $('#cart-count').text(1);
            }
        });
    });

    $(document).on('click', '.edit-button', function(){
        let idProduct = $(this).data('idProduct');
        $.ajax({
            url: URLROOT + '/productOfCart/get/' + idProduct,
            type: 'GET',
            success: function(response){
                let data = JSON.parse(response);
                $('#submit').val('EDIT');

                $('#idProduct').val(data.idProduct);
                $('#idCart').val(data.idCart);

            }
        });
    });

    $(document).on('click', '.delete-button', function(){
        let idProduct = $(this).data('idProduct');
        $.ajax({
            url: URLROOT + '/productOfCart/remove/' + idProduct,
            type: 'GET',
            success: function(response){
                draw();
            }
        });
    });

})