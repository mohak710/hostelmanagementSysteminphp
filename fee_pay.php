<?php 

session_start();
include('sidebar.php')
?>
<html>
<head>
        
		
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    </head>
<body>

   <div style="margin-left:16%">

<h2> Fee payment</h2>
<b><form method="post" action="fee_payment.php">
Enter Student ID<input type="number" name="id" required>
Enter Fee Student paid<input type="number" name="fee" required>
</b>
<br>
<br>


<input type="submit" name="submit" value="Pay fee">
</form>
<br>
<br>
<br>
<br>
<?php

include "connection.php";

//$sql = "SELECT id, firstname, lastname FROM MyGuests";


//$studid=$_SESSION['studentId'];
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
                echo "<td>" . $row['fee'] . " fee left</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}


?> 


</div>
</body>
</html>



	
