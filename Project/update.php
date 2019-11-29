<?php include "mr_robot.php";


if(isset($_POST['']))
	$field1 = $_POST[''];
if(isset($_POST['']))
	$field2 = $_POST[''];
if(isset($_POST['']))
	$field3 = $_POST[''];
if(isset($_POST['']))
	$field4 = $_POST[''];
if(isset($_POST['']))
	$field5 = $_POST[''];
if(isset($_POST['']))
	$field6 = $_POST[''];
if(isset($_POST['']))
	$field7 = $_POST[''];
if(isset($_POST['']))
	$field8 = $_POST[''];
if(isset($_POST['']))
	$field9 = $_POST[''];

$update = " UPDATE video_games SET Publisher_Name = '$field2' && Developer_Name = '$field3' && Reviews = '$field4' && ESRB_Rating = '$field5' && Platform = '$field6' && Release_Date = '$field7' && Price = '$field8' && Genre = '$field9' WHERE Title = '$field1'";

if (mysqli_query($mysqli, $update)) {
      echo "Record updated successfully";
} else {
      echo "Error: " . $update . "<br>" . mysqli_error($mysqli);
}


?>