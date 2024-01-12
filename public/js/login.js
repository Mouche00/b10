$(document).ready(function(){

    $(document).on('submit', '#form', function(e){
        e.preventDefault();
        let formData = new FormData(this);
        
            $.ajax({
                url: URLROOT + '/login/login',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData:false,
                success: function(response){
                    if(response == "1"){
                        window.location.replace(URLROOT + "/admin/products");
                    }else if(response == "0"){
                        window.location.replace(URLROOT + "/home");
                    }
                
                }
            });
        
    });

    // $(document).on('click', '.edit-button', function(){
    //     let id = $(this).data('id');
    //     $.ajax({
    //         url: URLROOT + '/products/get/' + id,
    //         type: 'GET',
    //         success: function(response){
    //             let data = JSON.parse(response);
    //             $('#submit').val('EDIT');

    //             $('#id').val(data.id);
    //             $('#name').val(data.name);
    //             $('#address').val(data.address);

    //         }
    //     });
    // });


})