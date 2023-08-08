<html>
<body>
<?php include('sidebar_student.php');?>
<div style="margin-left:16%">
<div align=center><h1> Guest Entry</h1>

**************************
</div>

<br>
<br>


<?php
    include "connection.php";
    
		
		
$sql="SELECT `name`, `contact`, `reason`, `Student_id` FROM `guest`";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
       echo "<table border=2 align=center>";
            echo "<tr>";
                echo "<th>Student Id</th>";
                echo "<th>Full Name</th>";
				echo "<th>ContactNo</th>";
				echo "<th>reason</th>";
				
			
               
            echo "</tr>";
			while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
				echo "<td>" . $row['Student_id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['contact'] . "</td>";
				echo "<td>" . $row['reason'] . "</td>";
				
            echo "</tr>";
        }
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