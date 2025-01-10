// We start by selecting the elements we need to work with
let Add_Btn = document.querySelector("#Add_Btn"),
  Dark_Background = document.querySelector("#Dark_Background"),
  Add_Form = document.querySelector("#Add_Form"),
  Update_Form = document.querySelector("#Update_Form"),
  Table = document.querySelector("#Product_Table");
/////////////////////////////////////////
// We add an event listener to the Add_Btn. This button is used to add a new product
// When the button is clicked, the Show_Add_Form function is called
Add_Btn.addEventListener("click", Show_Add_Form);
// This function is used to show the Add_Form
function Show_Add_Form() {
  // We change the class of the Dark_Background and Add_Form elements to "Shown"
  Dark_Background.classList = "Shown Dark_Background";
  Add_Form.classList = "Shown Add_Form";
}
/////////////////////////////////////////
// This function is used to show the Update_Form
// It is called when the Edit button is clicked
function Show_Update_Form() {
  Dark_Background.classList = "Shown Dark_Background";
  Update_Form.classList = "Shown Add_Form";
}
/////////////////////////////////////////
// We add an event listener to the Dark_Background
// When the Dark_Background is clicked, the Add_Form and Update_Form are hidden
Dark_Background.addEventListener("click", function () {
  Dark_Background.classList = "Hidden";
  Add_Form.classList = "Hidden";
  Update_Form.classList = "Hidden";
});
/////////////////////////////////////////////////////////
// We add an event listener to the Add_Form
// When the form is submitted, the Add_Product function is called
Add_Form.addEventListener("submit", function (e) {
  // We prevent the default behavior of the form
  e.preventDefault();
  // We create an object with the data we want to send to the
  // server. The data is the values of the input fields
  var data = {
    Product_ID: $("#Product_ID").val(),
    Product_Name: $("#Product_Name").val(),
    Product_Description: $("#Product_Description").val(),
    Price: $("#Price").val(),
  };
  // We send the data to the server using AJAX
  // The parameters are the type of request, the url of the server,
  // the data we want to send, and a function that is called when the
  // request is successful
  $.ajax({
    type: "post",
    url: "add.php",
    data: data,
    success: function (response) {
      // We change the innerHTML of the Table to the response we get from the server
      // The response is the updated table
      Table.innerHTML = response;
    },
  });
  // We hide the Dark_Background and Add_Form
  Dark_Background.classList = "Hidden";
  Add_Form.classList = "Hidden";
});
/////////////////////////////////////////////////////////
// We add an event listener to the Update_Form
// When the form is submitted, the Update_Product function is called
Update_Form.addEventListener("submit", function (e) {
  e.preventDefault();
  var data = {
    Product_ID: $("#Product_ID2").val(),
    Product_Name: $("#Product_Name2").val(),
    Product_Description: $("#Product_Description2").val(),
    Price: $("#Price2").val(),
  };
  $.ajax({
    type: "post",
    url: "update.php",
    data: data,
    success: function (response) {
      Table.innerHTML = response;
    },
  });
  Dark_Background.classList = "Hidden";
  Update_Form.classList = "Hidden";
});
/////////////////////////////////////////////////////////
// This function is used to delete a product
// It is called when the Delete button is clicked
function Delete(Product_ID) {
  var data = {
    Product_ID: Product_ID,
  };
  $.ajax({
    type: "post",
    url: "delete.php",
    data: data,
    success: function (response) {
      Table.innerHTML = response;
    },
  });
}
/////////////////////////////////////////////////////////
// This function is used to show the Update_Form
// It is called when the Edit button is clicked
function Edit(Product_ID) {
  Show_Update_Form();
  var data = {
    Product_ID: Product_ID,
  };
  $.ajax({
    type: "post",
    url: "Search.php",
    data: data,
    success: function (response) {
      var product = JSON.parse(response);
      $("#Product_ID2").val(product.Product_ID);
      $("#Product_Name2").val(product.Product_Name);
      $("#Product_Description2").val(product.Product_Description);
      $("#Price2").val(product.Price);
    },
  });
}
/////////////////////////////////////////////////////////
// This function is used to search for products
// It is called when the Search button is clicked
function Search_Product() {
  var data = {
    Search: $("#Search").val(),
  };
  $.ajax({
    type: "post",
    url: "search.php",
    data: data,
    success: function (response) {
      Table.innerHTML = response;
    },
  });
}
/////////////////////////////////////////////////////////
