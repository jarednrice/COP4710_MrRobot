<?php include "mr_robot.php";

if(isset($_POST['search-developer']))
	$field1 = $_POST['search-developer'];


$DR_query = $mysqli->query("SELECT AVG(video_games.Reviews) FROM video_games WHERE Developer_Name = '$field1'");

echo $DR_query

?>