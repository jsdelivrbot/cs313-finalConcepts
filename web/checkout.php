<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Form Processing</title>
    <script type="text/javascript" src="hulse03.js"></script>
    <link rel="stylesheet" type="text/css" href="prove_03.css" />
    <script type="text/javascript" src="prove_03.js"></script>

</head>
<body background="http://blog.chron.com/houstongamer/files/2012/12/Headphones_wireless.jpg">
<form name="form" action="confirmation.php" method="post">
	<div class="personalInfo" onload="clearForm(this.form)"> 
			Personal Information:<br />
            Address:<br />
            <div>
                <input onfocus="revealMessage('Address');" onblur="hideMessage('Address');" oninput="validateInput(this.value, 'address');"
                       type="text" name="address" /><br />
                <i class="address" style="visibility:hidden">Invalid Address</i><br />
                <span class='Address'>Enter your address</span><br />
            </div>
            City:<br />
            <div>
                <input onfocus="revealMessage('City');" onblur="hideMessage('City');" oninput="validateInput(this.value, 'city');"
                       type="text" name="city" /><br />
                <i class="city" style="visibility:hidden">Invalid City</i><br />
                <span class='City'>Enter your city</span><br />
            </div>
            State:<br />
            <div>
                <input onfocus="revealMessage('State');" onblur="hideMessage('State');" oninput="validateState(this.value, 'state');"
                       type="text" name="state" /><br />
                <i class="state" style="visibility:hidden">Invalid State</i><br />
                <span class='State'>Enter your state abbreviation</span><br />
            </div>
            Zip:<br />
            <div>
                <input onfocus="revealMessage('zipcode');" onblur="hideMessage('zipcode');" oninput="validateZip(this.value, 'zip');"
                       type="text" name="zip" /><br />
                <i class="zip" style="visibility:hidden">Invalid Zip Code</i><br />
                <span class='zipcode'>Enter your zip</span><br />
            </div>
    </div>
<input type="submit" value="Place Order" />
</form>
</body>
</html>