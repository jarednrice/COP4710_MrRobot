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
<!-- platform menu -->
<body text = "black">
	<p>Select a platform:</p>
	<p>(Hold control to select multiple platforms)</p>
</body>
<select name = "platforms" multiple size = 6>
	<option value = "Xbox One">Xbox One</option>
	<option value = "Xbox 360">Xbox 360</option>
	<option value = "PlayStation 4">PlayStation 4</option>
	<option value = "PlayStation 3">PlayStation 3</option>
	<option value = "Nintendo Switch">Nintendo Switch</option>
	<option value = "Wii U">Wii U</option>
	<option value = "PC">PC</option>
	<option value = "iOS">iOS</option>
	<option value = "Android">Android</option>
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
<!-- find game button -->
<body>
	<p></p>
	<input type = 'submit' name = 'find_games' value = 'Find Games'>
	<p>Or, find a specific game:</p>
	<!-- goes to search.php on search -->
	<form action ="search.php" method = "POST">
		<input type = "text" name = "search" placeholder = "Search">
		<button type = "submit" name = "submit-search">Find Game</button>
	</form>
</body>
</html>