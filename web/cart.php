<DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="prove_03.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="prove_03.js"></script>
</head>
<body background="http://blog.chron.com/houstongamer/files/2012/12/Headphones_wireless.jpg">
	<a href="browse.php">
        <img src="http://www.techforever.co.uk/wp-content/uploads/2014/01/headphones-smile.jpg"
             alt="Headphone Logo" id="logo" />
    </a>
    <h1><strong>Shopping Cart-</strong><em>your purchases for review</em></h1>
    <br />
    <br />
    
    <?php
    	$total = 0;
    	session_start();
        echo "<div style='text-align:center;'>";

    	for($i = 0; $i < 9; $i++){
    		if (array_key_exists("item$i", $_SESSION)) {
    			echo "<h2>" . $_SESSION["item$i"]["Qty"] . " " . $_SESSION["item$i"]['Name'] . "</h2><br />";
                echo "<a href='cart.php'><button type='button' onclick='emptyCart(this.value)' value=$i>Remove item</button></a>";
    			$total += $_SESSION["item$i"]['Cost']*$_SESSION["item$i"]['Qty'];
			}
    	}
        echo "<h2>Total Cost: $total</h2>";
        echo "</div>";
    ?>  
    <a href="browse.php"><button type="button">Return to browse items</button></a> <a href="checkout.php"><button>Continue to checkout</button></a>
</body>