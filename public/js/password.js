$(document).ready(function(){

    $(document).on('submit', '#myForm', function(e){
        e.preventDefault();
        let email = $('#email').val();
        $.ajax({
            url: URLROOT + "/passwords/get/" + email,
            type: "GET",
            success: function (response) {
              console.log(response);
              let data = JSON.parse(response);
              $('#link').val(URLROOT + "/password/update/" + data.idUser);

                const serviceID = "service_g1kafbw";
                const templateID = "template_bsycykd";

                // send the email here
                emailjs.sendForm(serviceID, templateID, "#myForm").then(
                    (response) => {
                    console.log("SUCCESS!", response.status, response.text);
                    alert("SUCCESS!");
                    },
                    (error) => {
                    console.log("FAILED...", error);
                    alert("FAILED...", error);
                    }
                );
            },
          });

    })
    

})