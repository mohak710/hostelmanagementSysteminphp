<html>
<body>
<?php include('sidebar.php');?>
<div style="margin-left:16%">
<div align=center><h1> Meal Menu</h1>

**************************
</div>

<br>
<br>


<?php
    include "connection.php";
    
		
		
$sql="SELECT `Mon_lunch`, `Mon_breakfast`, `Mon_dinner`, `Tues_lunch`, `Tues_breakfast`, `Tues_dinner`, `Wed_lunch`, `Wed_breakfast`, `Wed_dinner`, `Thu_lunch`, `Thu_breakfast`, `Thu_dinner`, `Fri_lunch`, `Fri_breakfast`, `Fri_dinner`, `sat_Lunch`, `sat_breakfast`, `sat_dinner`, `sun_lunch`, `sun_breakfast`, `sun_dinner` FROM `meal`";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
       echo "<table border=2 align=center>";
            echo "<tr>";
				echo "<th>      </th>";
				echo "<th>Monday</th>";
                echo "<th>Tuesday</th>";
				echo "<th>Wednesday</th>";
				echo "<th>Thursday</th>";
                echo "<th>Friday</th>";
				echo "<th>Saturday</th>";
				echo "<th>Sunday</th>";
			echo "</tr>";
			
			while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
				echo "<td>Breakfast</td>";
				echo "<td>" . $row['Mon_breakfast'] . "</td>";
				echo "<td>" . $row['Tues_breakfast'] . "</td>";
				echo "<td>" . $row['Wed_breakfast'] . "</td>";
				echo "<td>" . $row['Thu_breakfast'] . "</td>";
				echo "<td>" . $row['Fri_breakfast'] . "</td>";
				echo "<td>" . $row['sat_breakfast'] . "</td>";
				echo "<td>" . $row['sun_breakfast'] . "</td>";	
            echo "</tr>";
			echo "<tr>";
                
				echo "<td>Lunch</td>";
				echo "<td>" . $row['Mon_lunch'] . "</td>";
				echo "<td>" . $row['Tues_lunch'] . "</td>";
				echo "<td>" . $row['Wed_lunch'] . "</td>";
				echo "<td>" . $row['Thu_lunch'] . "</td>";
				echo "<td>" . $row['Fri_lunch'] . "</td>";
				echo "<td>" . $row['sat_Lunch'] . "</td>";
				echo "<td>" . $row['sun_lunch'] . "</td>";
				
            echo "</tr>";
			echo "<tr>";
                
				echo "<td>Dinner</td>";
				echo "<td>" . $row['Mon_dinner'] . "</td>";
				echo "<td>" . $row['Tues_dinner'] . "</td>";
				echo "<td>" . $row['Wed_dinner'] . "</td>";
				echo "<td>" . $row['Thu_dinner'] . "</td>";
				echo "<td>" . $row['Fri_dinner'] . "</td>";
				echo "<td>" . $row['sat_dinner'] . "</td>";
				echo "<td>" . $row['sun_dinner'] . "</td>";
				
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