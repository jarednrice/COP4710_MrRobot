<?php include "mr_robot.php";

if(isset($_POST['search-location']))
	$field1 = $_POST['search-location'];


$query = mysqli->query("CREATE VIEW Game AS SELECT Title, Publisher_Name, Developer_Name FROM video_games WHERE video_games.Title = '$field1'");
$query2 = mysqli->query("SELECT Game.Title, publishers.Location, developers.Location FROM ((Game INNER JOIN publishers ON Game.Publisher_Name = publisher.Publisher_Name) INNER JOIN developers ON Game.Developer_Name = developer.Developer_Name)";

	$result = '<table border="0" cellpadding="6" cellspacing="6" class="curve">';
    	$result .= '<thead>';
    	$result .= '<tr>';
    	$result .= '<th> <div align="right"><span class="font">Title</span></div></th>';
    	$result .= '<th> <div align="right"><span class="font">Publisher Location</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">Developer Location</span></div></th>';
	$result .= '</tr>';
	$result .= '</thead>';
while($row = $query2->fetch_assoc())
{
    $result .= '<tr>';
    $result .= '<th><div align="left"><span class="font">'.$row['video_games.Title'].'</span></div></th>';
    $result .= '<td><div align="left"><span class="font">'.$row['publishers.Location'].'</span></div></td>'; 
    $result .= '<th><div align="left"><span class="font">'.$row['developers.Location'].'</span></div></th>'; 
    $result .= '</tr>';
}

$result .= '</table>';
echo $result;



?>