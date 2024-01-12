


$(document).ready(function(){


    function draw(){
        $.ajax({
            url: URLROOT + '/bills/display',
            type: 'GET',
            success: function(response){
                console.log(response);
                let data = JSON.parse(response);
                $('tbody').html('');
                let row = "";
                let element = "";
                data.array.forEach(e => {
                    row = $("<tr>",{class: h-10});
                    for (const [key, value] of Object.entries(element)) {
                        element = $("<td>", {class: "border-black border-2 rounded-sm"});
                        element.html(value);
                        row.append(element);
                    }

                    element = $("<td>", {class: "h-10 border-black border-2 flex justify-evenly item-center rounded-sm"});
                    button = $("<button", {class: "delete-button", type: "button"});
                    button.attr('data-id', `${e.id}`);
                    value = "DELETE";
                    element.append(button);

                    button = $("<button>", {class: "edit-button", type: "button"});
                    button.attr('data-id',`${e.idbill}`);
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

    $(document).on('submit','#form', function(e){
        $('#submit').val('SUBMIT');
    });


    $(document).on('submit', '#form', function(e){
        e.preventDefault();
        let formData = new formData(this);
        if($("#submit").val() == 'SUBMIT'){
            $.ajax({
                url : URLROOT + '/bills/add',
                type: 'POST',
                data: formData,
                contentType: false,
                Cache: false,
                processData:false,
                success: function(response){
                    draw();


                    $('#idBill').val('');
                    $('#date').val('');
                    $('#LineItems').val('');
                    $('#totalAmounts').val('');
                    $('#refferences').val('');
                    $('#idClient').val('');
                }
            });
        } else {
            $.ajax({
                url: URLROOT + '/bills/edit',
                type: 'POST',
                data: formData,
                contentType: false,
                Cache: false,
                processData:false,
                success: function(response){
                    draw();
                }
            });


            $(document).on('click','.edit-button', function(){
                let id = $(this).data('id');
                $.ajax({
                    url: URLROOT + '/bills/get' + id,
                    type: 'GET',
                    success: function(response){
                        let data = JSON.parse(response);
                        $('#submit').val('EDIT');


                        $('#idBill').val(data.idbill);
                        $('#date').val(data.date);
                        $('LineItems').val(data.LineItems);
                        $('totalAmounts').val(data.totalAmounts);
                        $('refferences').val(data.refferences);
                        $('idClient').val(data.idClient);
                    }
                });
            });

            $(document).on('click', '.delete-button', function(){
                let id = $(this).data('id');
                $.ajax({
                    url: URLROOT + '/bills/remove/' + id,
                    type: 'GET',
                    success: function(response){
                        draw();
                    }
                });
            });
        }
    });
});
