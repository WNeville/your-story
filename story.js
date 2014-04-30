/* JavaScript file for Assignment 5 Interactive Fiction */

/* validateForm() - a function to validate a form's user input fields before submitting it to PHP*/
function validateForm() {
  var myForm = document.forms["values"];
  var errorMessage = "<p>";

  //If the firstName, animal, or pastVerb text fields in the HTML form are left blank, then print
  //an error message in a div on the page, and do NOT submit the form to PHP.
  if(myForm["firstName"].value === null || myForm["firstName"].value === "") {
    errorMessage += "Please enter a first name.<br>";
  } 

  if(myForm["animal"].value === null || myForm["animal"].value === "") {
    errorMessage += "Please enter an animal.<br>";
  }
  
  if(myForm["pastVerb"].value === null || myForm["pastVerb"].value === "") {
    errorMessage += "Please enter a verb in the past tense.<br>";
  }

  errorMessage += "</p>";

  if(errorMessage != "<p></p>") {
    document.getElementById("errorDiv").innerHTML = errorMessage;
    return false;
  }
  
  return true;
}
