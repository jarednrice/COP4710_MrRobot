<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('video_games');


$sql = "SELECT * FROM video_games";
$result = mysql_query($sql);

echo "<select name='genres'>";
echo "<select name='platforms'>";
echo "<select name='esrb_rating'>";


while($row = mysql_fetch_array($result))
{
echo "<option value='" . $row['genres'] ."'>" . $row['genres'] ."</option>";
echo "<option value='" . $row['platforms'] ."'>" . $row['platforms'] ."</option>";
echo "<option value='" . $row['esrb_rating'] ."'>" . $row['esrb_rating'] ."</option>";
}

echo "</select>";

?>
