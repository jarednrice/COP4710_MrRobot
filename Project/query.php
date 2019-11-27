<?php include "mr_robot.php";
/*mysql_connect('localhost', 'root', '');
mysql_select_db('video_games');*/


/*$sql = "SELECT * FROM video_games";
$result = mysql_query($sql);*/

$query = $mysqli->query("SELECT * FROM video_games");

if(isset($_POST['genres']))
	$dropdown1 = $_POST['genres'];
if(isset($_POST['drugCategory']))
	$dropdown2 = $_POST['platforms'];
if(isset($_POST['drugCategory']))
	$dropdown3 = $_POST['esrb_rating'];


$query .= " WHERE Genre LIKE = '%$dropdown1%' && Platform LIKE = '%$dropdown2%' && ESRB_Rating  = '$dropdown3'"; 

	$result = '<table border="0" cellpadding="6" cellspacing="6" class="curve">';
    $result .= '<thead>';
    $result .= '<tr>';
    $result .= '<th> <div align="right"><span class="font">Title</span></div></th>';
    $result .= '<th> <div align="right"><span class="font">Publisher Name</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">Developer Name</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">Reviews</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">ESRB Rating</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">Platform</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">Release Date</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">Price</span></div></th>';
	$result .= '<th> <div align="right"><span class="font">Genre</span></div></th>';
    $result .= '</tr>';
    $result .= '</thead>';




while($row = mysql_fetch_array($query))
{
	$result .= '<tr>';
    $result .= '<th><div align="left"><span class="font">'.$row['Title'].'</span></div></th>';
    $result .= '<td><div align="left"><span class="font">'.$row['Publisher_Name'].'</span></div></td>'; 
    $result .= '<th><div align="left"><span class="font">'.$row['Developer_Name'].'</span></div></th>'; 
    $result .= '<th><div align="left"><span class="font">'.$row['Reviews'].'</span></div></th>';
    $result .= '<th><div align="left"><span class="font">'.$row['ESRB_Rating'].'</span></div></th>';
    $result .= '<th><div align="left"><span class="font">'.$row['Platform'].'</span></div></th>';
    $result .= '<th><div align="left"><span class="font">'.$row['Release_Date'].'</span></div></th>';
    $result .= '<th><div align="left"><span class="font">'.$row['Price'].'</span></div></th>';
    $result .= '<th><div align="left"><span class="font">'.$row['Genre'].'</span></div></th>';
    $result .= '</tr>';
}

$result .= '</table>';
echo $result;

?>
