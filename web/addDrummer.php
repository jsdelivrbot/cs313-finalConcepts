<?php
require("dbConnect.php");
$db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add a Drummer</title>
	<link rel="stylesheet" type="text/css" href="hello.css">
</head>

<body>
<div>

<h1>Add a Drummer</h1>
<a href="drummers.php">View Drummer's Setups</a>

<form id="mainForm" action="addDrummer.php" method="POST">

	<label for="name">Name</label><br/>
	<input type="text" id="name" name="name"></input>
	<br /><br />

	<label for="drumCompany">Drum Sponsor</label><br />
	<input type="text" id="drumCompany" name="drumCompany"></input>
	<br /><br />

	<label for="kit">Drum Kit Model</label><br />
	<input type="text" id="kit" name="kit"></input>
	<br /><br />
	
	<label for="kick">Kick Drum Size</label><br />
	<input type="text" id="kick" name="kick"></input>
	<br /><br />

	<label for="toms">Tom Sizes and Info</label><br />
	<input type="text" id="toms" name="toms"></input>
	<br /><br />

	<label for="snare">Snare Size and Name</label><br />
	<input type="text" id="snare" name="snare"></input>
	<br /><br />

	<label for="cymbalCompany">Cymbal Sponsor</label><br />
	<input type="text" id="cymbalCompany" name="cymbalCompany"></input>
	<br /><br />

	<label for="ride">Ride Cymbal Name</label><br />
	<input type="text" id="ride" name="ride"></input><br />
	<label for="sride">Ride Cymbal Size</label><br />
	<input type="text" id="sride" name="sride"></input>
	<br /><br />

	<label for="hats">Hi-Hat Name</label><br />
	<input type="text" id="hats" name="hats"></input><br />
	<label for="shats">Hi-Hat Size</label><br />
	<input type="text" id="shats" name="shats"></input>
	<br /><br />

	<label for="crash">Crash Cymbal Name</label><br />
	<input type="text" id="crash" name="crash"></input><br />
	<label for="scrash">Crash Cymbal Size</label><br />
	<input type="text" id="scrash" name="scrash"></input>
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
		$toms = $_POST['toms'];
		$snare = $_POST['cymbalCompany'];
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
		$statement->execute();
		$ride_id = $db->lastInsertId('cymbal_id_seq');  

		$query = 'INSERT INTO cymbal(name, size) VALUES(:hats, :hat_size)';
		$statement = $db->prepare($query);
		$statement->bindValue(':hats', $hats);
		$statement->bindValue(':hat_size', $hat_size);
		$statement->execute();
		$hats_id = $db->lastInsertId('cymbal_id_seq');

		$query = 'INSERT INTO cymbal(name, size) VALUES(:crash, :crash_size)';
		$statement = $db->prepare($query);
		$statement->bindValue(':crash', $crash);
		$statement->bindValue(':crash_size', $crash_size);
		$statement->execute();
		$crash_id = $db->lastInsertId('cymbal_id_seq');

		$query = 'INSERT INTO cymbal_config(company, ride_id, hats_id, crash_id) VALUES(:cymbalCompany, :ride_id, :hats_id, :crash_id)';
		$statement = $db->prepare($query);
		$statement->bindValue(':cymbalCompany', $cymbalCompany);
		$statement->bindValue(':ride_id', $ride_id);
		$statement->bindValue(':hats_id', $hats_id);
		$statement->bindValue(':crash_id', $crash_id);
		$statement->execute();
		$cymabl_id = $db->lastInsertId('cymbal_config_id_seq');

		$query = 'INSERT INTO drum_config(company, kit_model, kick, toms, snare) VALUES(:drumCompany, :kit, :kick, :toms, :snare)';
		$statement = $db->prepare($query);
		$statement->bindValue(':drumCompany', $drumCompany);
		$statement->bindValue(':kit', $kit);
		$statement->bindValue(':kick', $kick);
		$statement->bindValue(':toms', $toms);
		$statement->bindValue(':snare', $snare);
		$statement->execute();
		$drum_id = $db->lastInsertId('drum_config_id_seq');

		$query = 'INSERT INTO drummer(name, drum_id, cymabl_id) VALUES(:name, :drum_id, :cymabl_id)';
		$statement = $db->prepare($query);
		$statement->bindValue(':name', $name);
		$statement->bindValue(':drum_id', $drum_id);
		$statement->bindValue(':cymabl_id', $cymabl_id);
		$statement->execute();
	}
	?>
</div>

</body>
</html>