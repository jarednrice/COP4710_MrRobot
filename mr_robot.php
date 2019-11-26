<?php

$mysqli = NEW MySQLi('localhost', 'root', '', 'video_games');

//$resultSet = $mysqli->query("SELECT DISTINCT Genre FROM video_games");
$resultSet2 = $mysqli->query("SELECT DISTINCT ESRB_Rating FROM video_games");

?>

<html>
<body text = "black">
	<p>Select a genre:</p>
	<p>(Hold control to select multiple genres)</p>
</body>
<!--genre dropmenu --> 
<select name = "genres" multiple size = 6>
	<option value = "shooter">Shooter</option>
	<option value = "survival">Survival</option>
	<option value = "puzzle">Puzzle</option>
	<option value = "rpg">RPG</option>
	<option value = "mmo">MMO</option>
	<option value = "adventure">Adventure</option>
</select>
<body text = "black">
	<p>Select an ESRB Rating:</p>
</body>
<!--esrb dropmenu -->
<select name = "esrb_rating">
<?php
while($rows = $resultSet2->fetch_assoc())
{
	$ESRB= $rows['ESRB_Rating'];
	echo "<option value = '$ESRB'>$ESRB</option>";
}
?>
</select>
</html>