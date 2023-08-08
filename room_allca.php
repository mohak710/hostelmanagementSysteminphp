<html>
<body>
<?php include('sidebar.php');
 include ('connection.php');?>
<div style="margin-left:16%">

<br>
<br>
<?php		

$sql="SELECT `RoomNO`,`StudentId` FROM `student` where `RoomNO`=0";



if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=10>";
		echo "<tr>";
                echo "<th>Student Id</th>";
                
                
                echo "<th>room no</th>";
               
            echo "</tr>";
		
        while($row = mysqli_fetch_array($result)){
				echo "<tr>";
                echo "<td>" . $row['StudentId'] . "</td>";
				if($row['RoomNO'] =0 )
				{
					echo "<td> Room Allocated</td>";
				}
				else
				{
				echo "<td> Room  not Allocated</td>";
				}
                
                echo "</tr>" ;
                
           
        }
		
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        
		echo "<script>window.alert('All Students are allocated with there room.');</script>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
	
?>
<div style="margin-right:70%"> 
    <form method="post">
	Student Id &nbsp&nbsp<input type="text" name="sid" required>
	<input type="submit" name="submit" value="Submit">
</form>
</div>
<?php		

if(isset($_POST['submit']))
    {
$studid=$_POST['sid'];	


$sql1="UPDATE `student` SET `RoomNO`='$studid'+100 WHERE `StudentId`='$studid'";

if($result1 = mysqli_query($connection, $sql1)){
    
} 
	}	
?>
</div>
</body>
</html>