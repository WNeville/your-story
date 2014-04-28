<!DOCTYPE html>
<html>
<?php include("header.html")?>
<body>
<?php
$firstName   = $_POST['firstName'];
$gender      = $_POST['gender'];
$punctuation = $_POST['punctuation'];
$color       = strtolower($_POST['color']);
$animal      = strtolower($_POST['animal']);
$fear        = $_POST['fear'];
$swag        = $_POST['swag'];

if($swag == "swaggy") {
  $firstName = "#".$firstName;
  $color = "#".$color;
  $animal = "#".$animal;
  $fear = "#".$fear;
}

print("<p>Once upon a time, in a faraway land, there existed the young ");

if($gender == "male") {
  print("prince ".$firstName.$punctuation."<br>\n");
  print("He was a good prince, adorning all the land with ".$color." buildings, ".$color." festivities, and ".$color." ".$animal."s".$punctuation."<br>\n");
  print("All the land was happy with fair prince ".$firstName.$punctuation."<br>");
  print("On one cloudy day though...".$color." disaster struck".$punctuation."<br>");
  print("Out of nowhere, a giant ".$color." ".$fear." appeared from the woods to the north".$punctuation."<br>"); 
}
else {
  print("princess ".$firstName.$punctuation."<br>\n");
  print("She was a good princess, adorning all the land with ".$color." buildings, ".$color." festivities, and ".$color." ".$animal."s".$punctuation."<br>"); 
  print("All the land was happy with fair prince ".$firstName.$punctuation."<br>");
  print("On one cloudy day though...".$color." disaster struck".$punctuation."<br>");
  print("Out of nowhere, a giant ".$color." ".$fear." appeared from the woods to the north".$punctuation."<br>");
}

?>
<?php include("footer.html")?>
</body>
</html>
