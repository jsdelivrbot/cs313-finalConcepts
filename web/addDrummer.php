<?php
require("dbConnect.php");
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add a Drummer</title>
	<link rel="stylesheet" type="text/css" href="hello.css">
	<script>
		function revealMessage(theClass){
			document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
		}

		function hideMessage(theClass){
			document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
		}
	</script>
</head>

<body>
<div>

<h1>Add a Drummer</h1>
<a href="drummers.php">View Drummer's Setups</a>

<form id="mainForm" action="addDrummer.php" method="POST">

	<label for="name">Name</label><br/>
	<input  title="First and last name" type="text" id="name" name="name" 
	onfocus="revealMessage('name1');" onblur="hideMessage('name1');" required></input>
    <i class='name1' style="visibility: hidden;">Enter first name and last name with one space in between</i>
	<br /><br />

	<label for="drumCompany">Drum Sponsor</label><br />
	<select id="drumCompany" name="drumCompany" required>
		<option value="">Please Select</option>
		<option value="Pearl">Pearl</option>
		<option value="DW">DW</option>
		<option value="Yamaha">Yamaha</option>
		<option value="Mapex">Mapex</option>
		<option value="Sonor">Sonor</option>
		<option value="Tama">Tama</option>
		<option value="Ludwig">Ludwig</option>
		<option value="Gretsch">Gretsch</option>
		<option value="PDP">PDP</option>
		<option value="Ddrum">Ddrum</option>
		<option value="C&C">C&C</option>
		<option value="Craviotto">Craviotto</option>
	</select>
	<br /><br />

	<label for="kit">Drum Kit Model</label><br />
	<input type="text" id="kit" name="kit" onfocus="revealMessage('kit');" 
	onblur="hideMessage('kit');" required></input>
    <i class='kit' style="visibility: hidden;">Enter a kit model</i>
	<br /><br />
	
	<label for="kick">Kick Drum Size</label><br />
	<input type="text" id="kick" name="kick" onfocus="revealMessage('kick');" 
	onblur="hideMessage('kick');" required></input>
    <i class='kick' style="visibility: hidden;">Enter kick drum size in this format: diameterxdepth</i>
	<br /><br />

	<label for="mt1">Mounted Tom</label><br />
	<input type="text" id="mt1" name="mt1" onfocus="revealMessage('mt1');" 
	onblur="hideMessage('mt1');" required></input>
    <i class='mt1' style="visibility: hidden;">Enter tom size in this format: diameterxdepth</i>
	<br /><br />

	<label for="mt2">Mounted Tom</label><br />
	<input type="text" id="mt2" name="mt2" onfocus="revealMessage('mt2');" 
	onblur="hideMessage('mt2');"></input>
	<i class='mt2' style="visibility: hidden;">Enter tom size in this format: diameterxdepth</i>
	<br /><br />

	<label for="mt3">Mounted Tom</label><br />
	<input type="text" id="mt3" name="mt3" onfocus="revealMessage('mt3');" 
	onblur="hideMessage('mt3');"></input>
	<i class='mt3' style="visibility: hidden;">Enter tom size in this format: diameterxdepth</i>
	<br /><br />

	<label for="ft1">Floor Tom</label><br />
	<input type="text" id="ft1" name="ft1" onfocus="revealMessage('ft1');" 
	onblur="hideMessage('ft1');" required></input>
	<i class='ft1' style="visibility: hidden;">Enter tom size in this format: diameterxdepth</i>
	<br /><br />

	<label for="ft2">Floor Tom</label><br />
	<input type="text" id="ft2" name="ft2" onfocus="revealMessage('ft2');" 
	onblur="hideMessage('ft2');"></input>
	<i class='ft2' style="visibility: hidden;">Enter tom size in this format: diameterxdepth</i>
	<br /><br />

	<label for="snare">Snare Size and Name</label><br />
	<input type="text" id="snare" name="snare" onfocus="revealMessage('snare');" 
	onblur="hideMessage('snare');" required></input>
    <i class='snare' style="visibility: hidden;">Enter snare in this format: diameterxdepth description</i>
	<br /><br />

	<label for="side">Side Snare Size and Name</label><br />
	<input type="text" id="side" name="side" onfocus="revealMessage('side');" 
	onblur="hideMessage('side');"></input>
    <i class='side' style="visibility: hidden;">Enter snare in this format: diameterxdepth description</i>
	<br /><br />

	<label for="cymbalCompany">Cymbal Sponsor</label><br />
	<select id="cymbalCompany" name="cymbalCompany" required>
		<option value="">Please Select</option>
		<option value="Meinl">Meinl</option>
		<option value="Sabain">Sabain</option>
		<option value="Zildjian">Zildjian</option>
		<option value="Dream">Dream</option>
		<option value="Istanbul Agop">Istanbul Agop</option>
		<option value="Paiste">Paiste</option>
		<option value="Istanbul Mehmet">Istanbul Mehmet</option>
		<option value="Bosphorous">Bosphorous</option>
		<option value="TRX">TRX</option>
		<option value="Soultone">Soultone</option>
		<option value="Murat Diril">Murat Diril</option>
	</select>
	<br /><br />

	<label for="ride">Ride Cymbal Name</label><br />
	<input type="text" id="ride" name="ride" onfocus="revealMessage('ride');" 
	onblur="hideMessage('ride');" required></input>
    <i class='ride' style="visibility: hidden;">Enter the ride cymbal's series and description; no company name</i><br/>
	<label for="sride">Ride Cymbal Size</label><br />
	<input type="text" id="sride" name="sride" onfocus="revealMessage('sride');" 
	onblur="hideMessage('sride');" required></input>
    <i class='sride' style="visibility: hidden;">Enter the ride cymbal's size</i>
	<br /><br />

	<label for="hats">Hi-Hat Name</label><br />
	<input type="text" id="hats" name="hats" onfocus="revealMessage('hats');" 
	onblur="hideMessage('hats');" required></input>
    <i class='hats' style="visibility: hidden;">Enter the high-hat's series and description; no company name</i><br/>
	<label for="shats">Hi-Hat Size</label><br />
	<input type="text" id="shats" name="shats" onfocus="revealMessage('shats');" 
	onblur="hideMessage('shats');" required></input>
    <i class='shats' style="visibility: hidden;">Enter the high-hat's size</i>
	<br /><br />

	<label for="crash">Crash Cymbal Name</label><br />
	<input type="text" id="crash" name="crash" onfocus="revealMessage('crash');" 
	onblur="hideMessage('crash');" required></input>
    <i class='crash' style="visibility: hidden;">Enter the crash cymbal's series and description; no company name</i><br/>
	<label for="scrash">Crash Cymbal Size</label><br />
	<input type="text" id="scrash" name="scrash" onfocus="revealMessage('scrash');" 
	onblur="hideMessage('scrash');" required></input>
    <i class='scrash' style="visibility: hidden;">Enter the crash cymbal's size</i>
	<br /><br />

	<input type="submit" value="Add to Database" />

</form>
</div>

<div>
	<?php
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$drumCompany = $_POST['drumCompany'];
		$cymbalCompany = $_POST['cymbalCompany'];
		$kit = $_POST['kit'];
		$kick = $_POST['kick'];
		$mt1 = $_POST['mt1'];
		$mt2 = $_POST['mt2'];
		$mt3 = $_POST['mt3'];
		$ft1 = $_POST['ft1'];
		$ft2 = $_POST['ft2'];
		$snare = $_POST['cymbalCompany'];
		$side_snare = $_POST['side'];
		$ride = $_POST['ride'];
		$ride_size = $_POST['sride'];
		$hats = $_POST['hats'];
		$hat_size = $_POST['shats'];
		$crash = $_POST['crash'];
		$crash_size = $_POST['scrash'];

		$query = 'INSERT INTO cymbal(name, size) VALUES(:ride, :ride_size)';
		$statement = $db->prepare($query);
		$statement->bindValue(':ride', $ride);
		$statement->bindValue(':ride_size', $ride_size);
		//print_r($statement);
		//$statement->debugDumpParams();
		$statement->execute();
		$ride_id = $db->lastInsertId('cymbal_id_seq');  

		$query = 'INSERT INTO cymbal(name, size) VALUES(:hats, :hat_size)';
		$statement = $db->prepare($query);
		$statement->bindValue(':hats', $hats);
		$statement->bindValue(':hat_size', $hat_size);
		//print_r($statement);
		//$statement->debugDumpParams();
		$statement->execute();
		$hats_id = $db->lastInsertId('cymbal_id_seq');

		$query = 'INSERT INTO cymbal(name, size) VALUES(:crash, :crash_size)';
		$statement = $db->prepare($query);
		$statement->bindValue(':crash', $crash);
		$statement->bindValue(':crash_size', $crash_size);
		//print_r($statement);
		//$statement->debugDumpParams();
		$statement->execute();
		$crash_id = $db->lastInsertId('cymbal_id_seq');

		$query = 'INSERT INTO cymbal_config(company, ride_id, hats_id, crash_id) VALUES(:cymbalCompany, :ride_id, :hats_id, :crash_id)';
		$statement = $db->prepare($query);
		$statement->bindValue(':cymbalCompany', $cymbalCompany);
		$statement->bindValue(':ride_id', $ride_id);
		$statement->bindValue(':hats_id', $hats_id);
		$statement->bindValue(':crash_id', $crash_id);
		//print_r($statement);
		//$statement->debugDumpParams();
		$statement->execute();
		$cymabl_id = $db->lastInsertId('cymbal_config_id_seq');

		$query = 'INSERT INTO drum_config(company, kit_model, kick, mount_tom1, mount_tom2, mount_tom3, floor_tom1, floor_tom2, snare, side_snare) 
			VALUES(:drumCompany, :kit, :kick, :mt1, :mt2, :mt3, :ft1, :ft2, :snare, :side_snare)';
		$statement = $db->prepare($query);
		$statement->bindValue(':drumCompany', $drumCompany);
		$statement->bindValue(':kit', $kit);
		$statement->bindValue(':kick', $kick);
		$statement->bindValue(':mt1', $mt1);
		$statement->bindValue(':mt2', $mt2);
		$statement->bindValue(':mt3', $mt3);
		$statement->bindValue(':ft1', $ft1);
		$statement->bindValue(':ft2', $ft2);
		$statement->bindValue(':snare', $snare);
		$statement->bindValue(':side_snare', $side_snare);
		//print_r($statement);
		//$statement->debugDumpParams();
		$statement->execute();
		$drum_id = $db->lastInsertId('drum_config_id_seq');

		$query = 'INSERT INTO drummer(name, drum_id, cymabl_id) VALUES(:name, :drum_id, :cymabl_id)';
		$statement = $db->prepare($query);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':drum_id', $drum_id);
		$statement->bindValue(':cymabl_id', $cymabl_id);
		//print_r($statement);
		//$statement->debugDumpParams();
		$statement->execute();
	}
	?>
</div>

</body>
</html>