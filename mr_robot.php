<?php

$mysqli = NEW MySQLi('localhost', 'root', '', 'video_games');

$resultSet = $mysqli->query("SELECT DISTINCT Genre FROM video_games");
//echo "testing";

?>

<select name = "genres">
<?php
while($rows = $resultSet->fetch_assoc())
{
	$Genre = $rows['Genre'];
	echo "<option value = '$Genre'>$Genre</option>";
}
?>
</select>