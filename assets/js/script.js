// We start by selecting the elements we need to work with
let Add_Btn = document.querySelector("#Add_Btn"),
  Dark_Background = document.querySelector("#Dark_Background"),
  Add_Form = document.querySelector("#Add_Form"),
  Update_Form = document.querySelector("#Update_Form"),
  Main = document.querySelector("main"),
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
