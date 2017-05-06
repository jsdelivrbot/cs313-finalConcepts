<DOCTYPE html>
<html>
<head>
    <title>PHP Form Processing</title>
    <link rel="stylesheet" type="text/css" href="prove_03.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="prove_03.js"></script>
</head>

<body background="http://blog.chron.com/houstongamer/files/2012/12/Headphones_wireless.jpg">

    <a href="browse.php">
        <img src="http://www.techforever.co.uk/wp-content/uploads/2014/01/headphones-smile.jpg"
             alt="Headphone Logo" id="logo" />
    </a>

    <h1><strong>Headphoners-</strong><em>We've got the bass</em></h1><br />
    <br />
    <br />
    <br />
   Inventory:<br />
        <div>
            Bose QuietComfort Wireless Headphones, Cost:$350<br /> 
            <button type="button" onclick="addCart('Bose QuietComfort Wireless Headphones', 350, 1)">Add to Cart</button><br />
            Beats Solo3 Wireless Headphones, Cost:$220<br />
            <button type="button" onclick="addCart('Beats Solo3 Wireless Headphones', 220, 2)">Add to Cart</button><br />
            Skullcandy Wireless Headphones, Cost:$190<br />
            <button type="button" onclick="addCart('Skullcandy Wireless Headphones', 190, 3)">Add to Cart</button><br />
            Ncredible1 Wireless Heaphones, Cost:$130<br />
            <button type="button" onclick="addCart('Ncredible1 Wireless Headphones', 130, 4)">Add to Cart</button><br />
            BOHM Wireless Headphones, Cost:$90<br />
            <button type="button" onclick="addCart('BOHM Wireless Headphones', 90, 5)">Add to Cart</button><br />
            Powerbeats3 Wireless Earbuds, Cost:$150<br />
            <button type="button" onclick="addCart('Powerbeats3 Wireless Earbuds', 150, 6)">Add to Cart</button><br />
            Bose SoundSport Wireless Earbuds, Cost:$90<br />
            <button type="button" onclick="addCart('Bose SoundSport Wireless Earbuds', 90, 7)">Add to Cart</button><br />
            Skullcandy XTfree Wireless Earbuds, Cost:$70<br />
            <button type="button" onclick="addCart('Skullcandy XTfree Wireless Earbuds', 70, 8)">Add to Cart</button><br />
            <br />
            <a href="cart.php"><button type="button">View Your Cart</button></a>
        </div>
</body>
</html>
