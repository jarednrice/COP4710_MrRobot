<?php

$mysqli = NEW MySQLi('localhost', 'root', '', 'video_games');

$resultSet = $mysqli->query("SELECT DISTINCT Genre FROM video_games");
$resultSet2 = $mysqli->query("SELECT DISTINCT ESRB_Rating FROM video_games");

?>

<html>
<body text = "black">
	<p>Select a genre:</p>
</body>

<select name = "genres">
<?php
while($rows = $resultSet->fetch_assoc())
{
	$Genre = $rows['Genre'];
	echo "<option value = '$Genre'>$Genre</option>";
}
?>
</select>

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