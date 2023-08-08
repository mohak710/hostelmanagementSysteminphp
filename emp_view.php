<html>
<body>
<?php include('sidebar.php'); ?>
   <div style="margin-left:15%" >
	


 <div id="page-wrapper">
 
 <div align=center><h2> List of Employee </h2></div>
<?php
    include "connection.php";
   
		
		
$sql="SELECT `Name`, `Email`, `contact`, `job`, `jobb_start`, `eno`, `sal` FROM `emp`";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 align=center>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Full Name</th>";
				echo "<th>ContactNo</th>";
				
				echo "<th>Email</th>";
				echo "<th>Job</th>";
				echo "<th>Jod start date</th>";
				
				echo "<th>Salary</th>";
				
               
            echo "</tr>";
			while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['eno'] . "</td>";
				echo "<td>" . $row['Name'] . "</td>";
				echo "<td>" . $row['contact'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "<td>" . $row['job'] . "</td>";
				echo "<td>" . $row['jobb_start'] . "</td>";
				echo "<td>" . $row['sal'] . "</td>";
				
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        
    } 
} else{
    echo mysqli_error($connection);
        }
    
?>

</div>
</body>
</html>