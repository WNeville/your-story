<!DOCTYPE html>
<html>
<?php include("header.html")?>
<body>
<?php
$firstName   = $_POST['firstName'];
$gender      = $_POST['gender'];
$punctuation = $_POST['punctuation'];
$color       = $_POST['color'];
$animal      = $_POST['animal'];
$swag        = $_POST['swag'];

if($swag == "swaggy") {
  $firstName = "#".$firstName;
  $color = "#".$color;
  $animal = "#".$animal;
}

print("<p>Once upon a time, in a faraway land, there existed the young ");

if($gender == "male") {
  print("prince ".$firstName.$punctuation."<br>\n");
  print("He was a good prince, adorning all the land with ".$color." buildings, ".$color." festivities, and ".$color." ".$animal."s".$punctuation."<br>\n"); 
}
else {
  print("princess ".$firstName.$punctuation."<br>\n");
  print("She was a good princess, adorning all the land with ".$color." buildings, ".$color." festivities, and ".$color." ".$animal."s".$punctuation."<br>"); 
}

?>
<?php include("footer.html")?>
</body>
</html>
