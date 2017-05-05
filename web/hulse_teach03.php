<?php
 $name = $_POST['Name'];
 $email = $_POST['Email'];
 $major = $_POST['major'];
 $comments = $_POST['comments'];
 $continents = array("North America", "South America", "Europe", "Asia", "Australia", "Africa", "Antarctica");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Week 11 : Problem 1</title>
   </head>
   <body>
   		Name: <?php echo $name; ?>
		Email Address: <a href="mailto:<?php echo $email; ?> "></a>
		Major: <?php echo $major; ?>
	 	Comments: <?php echo $comments; ?>
	 	Continents: <?php if(isset($_POST['continents[]'])){
	 	foreach($continents as $value){
	 	if(in_array($value, $_POST['continents[]']))
	 	  echo $value;
	 	}
	 	}
	 	?>
   </body>
</html>