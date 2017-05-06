<?php 
session_start();
$cartItem = array("Name" => $_POST["itemName"], "Cost" => $_POST["itemPrice"], "Qty" => $_POST["itemQty"], "Key" => $_POST["itemNum"]);
$num = $_POST["itemNum"];
//Check if the item is already in the cart, if so increment the Qty by one.
if (array_key_exists("item$num", $_SESSION)) {
    $_SESSION["item$num"]["Qty"] += 1;
    $count = count($_SESSION);
} else {
    $_SESSION["item$num"] = $cartItem;
    $count = count($_SESSION);
}
?>