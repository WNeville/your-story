<!DOCTYPE html>
<html>
<?php include("header.html")?>
<body>
<?php
$firstName   = $_POST['firstName'];
$gender      = $_POST['gender'];
$punctuation = $_POST['punctuation'];
$color       = $_POST['color'];
$swag        = $_POST['swag'];

$swagName = "";
$color = "";

if(swag == "swaggy") {
  $swagName = "#".firstName;
  $swagColor = "#".color;
}
else {
  $swagName = $firstName;
  $swagColor = $swagColor;
}

print("<p>Once upon a time, in a faraway land, there existed the young ");

if(gender == "male") {
  print("prince ".swagName.punctuation."\n");
  print("He was a good prince, adorning all the land with ".swagColor." buildings, ".swagColor." animals, and ".swagColor."festivities".punctuation); 
}
else {
  print("princess ".swagName.punctuation."\n");
  print("She was a good princess, adorning all the land with ".swagColor." buildings, ".swagColor." animals, and ".swagColor."festivities".punctuation); 
}

?>
<?php include("footer.html")?>
</body>
</html>
