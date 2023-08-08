
<html>
<body>
<?php include('sidebar.php'); 
include "connection.php";?>
   <div style="margin-left:16%">

<h2> All Student List</h2>
<?php
//$sql = "SELECT id, firstname, lastname FROM MyGuests";
$sql = "SELECT `StudentId`, `fee`, `Fname`, `Mname`, `Lname` FROM `student`";


if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 align=left>";
            echo "<tr>";
                echo "<th>Student Id</th>";
                echo "<th>Full Name</th>";
                echo "<th>Fee</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['StudentId'] . "</td>";
                echo "<td>" . $row['Fname'] . " ",$row['Mname'] ." ",$row['Lname'] ."</td>";
                echo "<td>" . $row['fee'] . "</td>";
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



	</div>
	

</body>
</html>
