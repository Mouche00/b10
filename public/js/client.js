$(document).ready(function(){

   

  

    $(document).on('submit', '#form', function(e){
        e.preventDefault();
        let formData = new FormData(this);
        
        $.ajax({
            url: URLROOT + '/clients/add',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){

                // window.location.replace(URLROOT + '/home');
                // console.log(response);
            }
        });

        $.ajax({
            url: URLROOT + '/login/logout',
            type: 'GET',
            success: function(response){
                // window.location.replace(URLROOT + "/home");
                // console.log(response);
            }
        });

        $.ajax({
            url: URLROOT + '/login/login',
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            success: function(response){
                // window.location.replace(URLROOT + "/home");
                console.log(response);
            }
        });
        
    });
});

   
