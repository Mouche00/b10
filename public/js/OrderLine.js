

$(document).ready(function(){

    const URLROOT = "http://localhost/carrefour";

   

    function draw(){
        $.ajax({
            url: URLROOT + '/orderLine/display',
            type: 'GET',
            success: function(response){
                console.log(response);
                let data = JSON.parse(response);
                $('tbody').html('');
                let row = "";
                let element = "";
                data.forEach(e => {
                    row = $("<tr>", {class: "h-10"});
                    for (const [key, value] of Object.entries(e)) {
                        element = $("<td>", {class: "border-black border-2 rounded-sm"});
                        element.html(value);
                        row.append(element);
                    }
                    element = $("<td>", {class: "h-10 border-black border-2 flex justify-evenly items-center rounded-sm"});
                    button = $("<button>", {class: "delete-button", type: "button"});
                    button.attr('data-idOrderLine', `${e.idOrderLine}`);
                    value = "DELETE";
                    button.html(value);
                    element.append(button);

                    button = $("<button>", {class: "edit-button", type: "button"});
                    button.attr('data-idOrderLine', `${e.idOrderLine}`);
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

    $(document).on('click', '#add-button', function(){
        $('#submit').val('SUBMIT');
    });

    $(document).on('submit', '#form', function(e){
        e.preventDefault();
        let formData = new FormData(this);
        if($("#submit").val() == 'SUBMIT'){
            $.ajax({
                url: URLROOT + '/orderLine/add',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(response){
                    draw();

                    $('#idOrderLine').val('');
                    $('#qty').val('');
                    $('#idProduct').val('');
                    $('#idBill').val('');
                    $('#idOrder').val('');
                }
            });
        } else {
            $.ajax({
                url: URLROOT + '/orderLine/edit',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(response){
                    draw();
                }
            });
        }
    });

    $(document).on('click', '.edit-button', function(){
        let idOrderLine = $(this).data('idOrderLine');
        $.ajax({
            url: URLROOT + '/orderLine/get/' + idOrderLine,
            type: 'GET',
            success: function(response){
                let data = JSON.parse(response);
                $('#submit').val('EDIT');
                $('#idOrderLine').val(data.idOrderLine);
                $('#qty').val(data.qty);
                $('#idProduct').val(data.idProduct);
                $('#idBill').val(data.idBill);
                $('#idOrder').val(data.idOrder);
            }
        });
    });

    $(document).on('click', '.delete-button', function(){
        let idOrderLine = $(this).data('idOrderLine');
        $.ajax({
            url: URLROOT + '/orderLine/remove/' + idOrderLine,
            type: 'GET',
            success: function(response){
                draw();
            }
        });
    });

})