<!DOCTYPE html>
<html>
<?php include("header.html")?>
<body>
<?php
/* Grab all of our data from the form via $_POST */
$firstName   = $_POST['firstName'];
$gender      = $_POST['gender'];
$punctuation = $_POST['punctuation'];
$color       = $_POST['color'];
$animal      = strtolower($_POST['animal']);
$fear        = $_POST['fear'];
$pastVerb    = strtolower($_POST['pastVerb']);
$weapon      = $_POST['weapon'];
$times       = (int) $_POST['times'];
$swag        = $_POST['swag'];

/* If user gave no values for the following fields, fill in defaults */
if($color == "" || $color == null) {
  $color = "purple";
}
else {
  $color = strtolower($color);
}

if($weapon == "" || $weapon == null) {
  $weapon = "potato";
}
else {
  $weapon = strtolower($weapon);
}

/* If swaggy, add hashtags in front of all user inputted words */
if($swag == "swaggy") {
  $firstName = "#".$firstName;
  $color = "#".$color;
  $animal = "#".$animal;
  $fear = "#".$fear;
  $weapon = "#".$weapon;
}

/* Begin story */
print("<div id=\"container\">\n");
print("<p>Once upon a time, in a faraway land, there existed the young ");

/* Branch based on gender */
if($gender == "male") {
  print("prince ".$firstName.$punctuation."<br>\n");
  print("He was a good prince, adorning all the land with ".$color." buildings, ".$color." festivities, and ".$color." ".$animal."s".$punctuation."<br>\n");
  print("All the land was happy with fair prince ".$firstName.$punctuation."<br>\n");
  print("On one cloudy day though...".$color." disaster struck".$punctuation."<br>\n");
  print("Out of nowhere, a giant ".$color." ".$fear." appeared from the woods to the north".$punctuation."<br>\n");
  print("All the townspeople ".$pastVerb." and came running to prince ".$firstName." for help".$punctuation."<br>\n");
  print("He ran out of his ".$color." castle to face the beast and pulled out his weapon: a ".$color." ".$weapon.$punctuation."<br>\n");
  print("The ".$fear." sneered at prince ".$firstName.", to which the prince responded by striking the ".$fear." with his ".$weapon.$punctuation."<br>\n");
  for($i = 0; $i < $times; $i += 1) {
    print("And he struck again".$punctuation."<br>\n");
  }
}
else {
  print("princess ".$firstName.$punctuation."<br>\n");
  print("She was a good princess, adorning all the land with ".$color." buildings, ".$color." festivities, and ".$color." ".$animal."s".$punctuation."<br>\n"); 
  print("All the land was happy with fair princess ".$firstName.$punctuation."<br>\n");
  print("On one cloudy day though...".$color." disaster struck".$punctuation."<br>\n");
  print("Out of nowhere, a giant ".$color." ".$fear." appeared from the woods to the north".$punctuation."<br>\n");
  print("All the townspeople ".$pastVerb." and came running to princess ".$firstName." for help".$punctuation."<br>\n"); 
  print("She ran out of her ".$color." castle to face the beast and pulled out her weapon: a ".$color." ".$weapon.$punctuation."<br>\n");
  print("The ".$fear." sneered at princess ".$firstName.", to which the princess responded by striking the ".$fear." with her ".$weapon.$punctuation."<br>\n");
  for($i = 0; $i < $times; $i += 1) {
    print("And he struck again".$punctuation."<br>\n");
  }
}

/* Finish up */
print("</p>\n<p><a href=\"index.html\">Try Again?</a></p>");
?>
<?php include("footer.html")?>
</body>
</html>
