<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="w3.css">

<body>

<?php 

session_start();

include('sidebar.php'); 

if(!isset($_SESSION['UseraAme']))
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

include "redirect.html";?>
<div id="HTMLtoPDF">
<div class="panel panel-primary">
      <div class="panel-heading">Total Student in hostel</div>
      <div class="panel-body"><?php echo $count ?></div>
    </div>

<div class="panel panel-primary">
      <div class="panel-heading">Total number of room ooccupied of 100</div>
      <div class="panel-body"><?php echo $count_room ?></div>
    </div>

<div class="panel panel-primary">
      <div class="panel-heading">Number of room not alloted</div>
      <div class="panel-body"><?php echo $count-$count_room ?></div>
    
</div>
</div>
<a href="#" onclick="HTMLtoPDF()">Download PDF</a>

	<!-- these js files are used for making PDF -->
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</div>

     
</body>
</html>	