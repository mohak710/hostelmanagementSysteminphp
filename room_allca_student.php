<html>
<body>
<?php 
session_start();
include('sidebar_student.php');?>
<div style="margin-left:16%">

<br>
<br>

<?php
    include "connection.php";
    
		
$studid=$_SESSION['studentId'];	
$sql="SELECT `RoomNO` FROM `student` where `UserName`='$studid'";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<b>Your room Number is<b><br><br>";
        echo "<table style='width:100px; border: 1px solid black'>";
		echo "<tr>";
        while($row = mysqli_fetch_array($result)){
				
                echo "<th> " . $row['RoomNO'] . "</th>";
                
                
           
        }
		echo "</tr>" ;
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	
?>
</div>
</body>
</html>