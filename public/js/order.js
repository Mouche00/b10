



$(document).ready(function(){


    
    function draw(){
        $.ajax({
            url: URLROOT + '/orders/display',
            type: 'GET',
            success: function(response){
                console.log(response);
                let data = JSON.parse(response);
                $('tbody').html('');
                let row = "";
                let element = "";
                data.array.array.forEach(e => {
                    row = $("<tr>",{class: h-10});
                    for (const [key, value] of Object.entries(element)) {
                        element = $("<td>", {class: "border-black border-2 rounded-sm"});
                        element.html(value);
                        row.append(element);
                    }

                    element = $("<td>", {class: "h-10 border-black border-2 flex justify-evenly item-center rounded-sm"});
                    element = $("<button", {class: "delete-button", type: "button"});
                    button.attr('data-id', `${e.id}`);
                    value = "DELETE";
                    element.append(button);

                    button = $("<button>", {class: "edit-button", type: "button"});
                    button.attr('data-id',`${e.idorder}`);
                    value = "EDIT";
                    button.html(value);
                    element.append(button);

                    row.append(element);

                    $('tbody').append(row);

                    
                });
            }
        });


    }


    draw();

    $(document).on('submit', '#form', function(e){
        e.preventDefault();
        let formData = new formData(this);
        if($("#submit").val() == 'SUBMIT'){
            $.ajax({
                url: URLROOT + '/orders/add',
                type: 'POST',
                data: formData,
                contentType: false,
                Cache: false,
                processData:false,
                success: function(response){
                    draw();


                    $('#idOrder').val('');
                    $('#idClient').val('');
                }
            });
        } else {

            $.ajax({
                url: URLROOT + '/orders/edit',
                type: 'POST',
                data:formData,
                contentType:false,
                Cache:false,
                processData:false,
                success: function(response){
                    draw();
                }
            });



            $(document).on('click','.edit-button', function(){
                let id = $(this).data('id');
                $.ajax({
                    url: URLROOT + '/orders/get' + id,
                    type: 'GET',
                    success: function(response){
                        let data = JSON.parse(response);
                        $('#submit').val('EDIT');


                        $('#idOrder').val(data.idorder);
                        $('#idClient').val(data.idClient);


                    }
                });
            });

            $(document).on('click', '.delete-button', function(){
                let id = $(this).data('id');
                $.ajax({
                    url: URLROOT + '/orders/remove' + id,
                    type: 'GET',
                    success: function(response){
                        draw();
                    }
                });
            });

        }
    });


});