<?php 
session_start();
$num = $_POST["num"];
	$_SESSION["item$num"]["Qty"] -= 1;
    if($_SESSION["item$num"]["Qty"] <= 0){ // if we remove the last item of one type we have to remove all its data
    	unset($_SESSION["item$num"]); 
    }
   echo "<script type='text/javascript'>console.log('item removed, refresh the page to see the change.');</script>"; 
?>