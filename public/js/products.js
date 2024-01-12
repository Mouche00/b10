$(document).ready(function () {

  function draw() {
    $.ajax({
      url: URLROOT + "/products/display",
      type: "GET",
      success: function (response) {
        console.log(response);
        let data = JSON.parse(response);
        $("#tbody").html("");
        let row = "";
        let element = "";
        data.forEach((e) => {
          row = $("<tr>", { class: "h-10" });

          for (const [key, value] of Object.entries(e)) {
            if (key == "picture") {
              element = $("<td>", {
                class: "border-black border-none rounded-sm",
              });
              element.html(`<img src=${URLROOT}/public/uploads/${value}>`);
              row.append(element);
            } else {
              element = $("<td>", {
                class: "border-black border-none rounded-sm",
              });
              element.html(value);
              row.append(element);
            }
          }

          element = $("<td>", {
            class:
              "h-10 border-black border-none flex justify-evenly items-center rounded-sm",
          });
          button = $("<button>", {
            class:
              "delete-button" ,
            type: "button",
          });
          button.attr("data-id", `${e.idProduct}`);
          value = `<img src="${URLROOT}/src/supprimer.png" class="mt-10 h-5 sm:h-6" />` ;
          button.html(value);
          element.append(button);

          button = $("<button>", {
            class:
              "edit-button",
            type: "button",
          });
          button.attr("data-id", `${e.idProduct}`);
          value = `<img src="${URLROOT}/src/editer.png" class="mt-10 h-5 sm:h-6" />`;
          button.html(value);
          element.append(button);

          row.append(element);

          $("#tbody").append(row);
        });
      },
    });
  }

  draw();

  // ====================drop down ============
  $(document).on("click", "#add-button", function () {
    console.log("drop down");
    $.ajax({
      url: URLROOT + "/categories/display",

      type: "GET",

      success: function (response) {
        let data = JSON.parse(response);

        data = jQuery.makeArray(data);

        let html = "";

        data.forEach((e) => {
          html =
            "<option value=" + e.idCategory + " id=" + e.idCategory +">" + e.name +"</option>";
          $("#idCategory").append(html);
        });

        // console.log(data[1].id);

        // console.log(response);
      },
    });
  });
  // =====================================

  $(document).on("click", "#add-button", function () {
    $("#submit").val("SUBMIT");
  });

  $(document).on("submit", "#form", function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    if ($("#submit").val() == "SUBMIT") {
      $.ajax({
        url: URLROOT + "/products/add",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          draw();

          $("#name").val("");
          $("#qty").val("");
          $("#price").val("");
          $("#picture").val("");
        },
      });
    } else {
      $.ajax({
        url: URLROOT + "/products/edit",
        type: "POST",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
          draw();
        },
      });
    }
  });

  $(document).on("click", ".edit-button", function () {
    let id = $(this).data("id");
    $.ajax({
      url: URLROOT + "/products/get/" + id,
      type: "GET",
      success: function (response) {
        let data = JSON.parse(response);
        $("#submit").val("EDIT");

        $("#id").val(data.idProduct);
        $("#name").val(data.name);
        $("#qty").val(data.qty);
        $("#price").val(data.price);
        $("#idCategory").val(data.idCategory);
        $("#picture").val(data.picture);
      },
    });
  });

  $(document).on("click", ".delete-button", function () {
    let id = $(this).data("id");
    $.ajax({
      url: URLROOT + "/products/remove/" + id,
      type: "GET",
      success: function (response) {
        draw();
      },
    });
  });
});
