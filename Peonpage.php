<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="clock_style.css">
  
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="w3.css">


<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>

<body onload="startTime()">



<?php 
session_start();
include('sidebar_Peon.php'); 
date_default_timezone_set("Asia/Calcutta");

if(!isset($_SESSION['Peon_Username']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
	
}
?>

<div style="margin-left:16%">

<?php

include "connection.php";
$sql="SELECT `StudentId` FROM `student`";
$count=0;
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
		{
			while($row = mysqli_fetch_array($result))
			{
			$count++;
			}
		}
	}
}
$sql1="SELECT `RoomNO` FROM `student`";
$count_room=0;
if($result1 = mysqli_query($connection, $sql1)){
    if(mysqli_num_rows($result1) > 0){
		{
			while($row = mysqli_fetch_array($result1))
			{
				if(!$row['RoomNO']==NULL)
				{
				$count_room++;
				}
			}
		}
	}
}

?>
<div class="panel panel-primary">
      <div class="panel-heading">Total Student in hostel</div>
      <div class="panel-body"><?php echo $count ?></div>
    </div>
	
	



<div style="background-color:#6a6a6a" align=center>
<font color="white" style="font-size:230px;"><b id="txt"></b></font><br>
<font color="white" style="font-size:40px;"><?php echo date("l jS  F ")?></font>
</div>


   
</body>
</html>	