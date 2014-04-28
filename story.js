/* JavaScript file for Assignment 5 Interactive Fiction */

/* validateForm() - a function to validate a form's user input fields before submitting it to PHP*/
function validateForm() {
  var myForm = document.forms["values"];
  var errorMessage = "<p>";
  if(myForm["firstName"] == null || myForm["firstName"] == "") {
    errorMessage += "Please enter a first name.<br>";
  }
  
  if(myForm["color"] == null || myForm["color"] == "") {
    errorMessage += "Please enter a color.<br>";
  }

  if(myForm["animal"] == null || myForm["animal"] == "") {
    errorMessage += "Please enter an animal.<br>";
  }

  errorMessage += "</p>";

  if(errorMessage != "<p></p>") {
    document.getElementById("errorDiv").innerHTML = errorMessage;
    return false;
  }
  
  return true;
}
