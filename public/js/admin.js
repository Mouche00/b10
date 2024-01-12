$(document).ready(function () {

  function draw() {
    $.ajax({
      url: URLROOT + "/admins/display",
      type: "GET",
      success: function (response) {
        console.log(response);
        let data = JSON.parse(response);
        $("#tbody").html("");
        let row = "";
        let element = "";
        let span = "";
        data.forEach((e) => {
          row = $("<tr>", { class: "h-10" });
          for (const [key, value] of Object.entries(e)) {
            if(key != 'password'){
                if(key=== 'profil'){

                    element = $("<td>", { class: "px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" });
                    element.html(`<img class="h-[100px] w-[100px]" src="${URLROOT}/uploads/${value}">`);
                    row.append(element);
                }else{
                  element = $("<td>", { class: "px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left" });
            element.html(value);
            row.append(element);  
                }

            
            
          }}
          element = $("<td>", {
            class:
              " h-full flex justify-evenly items-center rounded-sm",
          });
          button = $("<button>", { class: "delete-button", type: "button" });
          button.attr("data-id", `${e.idUser}`);
          value = `<img src="${URLROOT}/src/supprimer.png" class="h-4 sm:h-6 mt-10  " />`;
          button.html(value);
          element.append(button);
          span = $("<span>", { class: "" });
          span.attr("data-modal-target", `crud-modal`);
          span.attr("data-modal-toggle", `crud-modal`);
          button = $("<button>", { class: "edit-button", type: "button" });
          button.attr("data-id", `${e.idUser}`);
          value = `<img src="${URLROOT}/src/editer.png" class="h-4 sm:h-6 mt-10 " />`;
          button.html(value);
          span.html(button);
          element.append(span);

          row.append(element);

          $("#tbody").append(row);
        });
      },
    });
  }

  draw();

  $(document).on("click", "#add-button", function () {
    $("#submit").html("Ajouter");
    $("#id").val("");
    $("#name").val("");
    $("#username").val("");
    $("#email").val("");
    // $("#password").val("");
    $("#phone").val("");
    $("#adress").val("");
    $("#logo").val("");
  });

  $(document).on("submit", "#form", function (e) {
    e.preventDefault();
    let formData = new FormData(this);
        console.log(formData);
      $.ajax({
        url: URLROOT + "/admins/add",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          draw();

         
        },
      });
  });

  $(document).on("click", ".edit-button", function () {
    let id = $(this).data("id");
    $.ajax({
      url: URLROOT + "/admins/get/" + id,
      type: "GET",
      success: function (response) {
        let data = JSON.parse(response);
        $("#submit").html("Update");
        console.log(data);

        $("#id").val(data.idUser);
        $("#name").val(data.fullName);
        $("#username").val(data.username);
        $("#email").val(data.email);
        // $("#password").val(data.password);
        $("#phone").val(data.phone);
        $("#adress").val(data.adress);
        
      },
    });
  });

  $(document).on("click", ".delete-button", function () {
    let id = $(this).data("id");
    $.ajax({
      url: URLROOT + "/admins/remove/" + id,
      type: "GET",
      success: function (response) {
        draw();
      },
    });
  });
});
