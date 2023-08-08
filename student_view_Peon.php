
<html>
<body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>
<?php include('sidebar_Peon.php'); 
include "connection.php";?>
   <div style="margin-left:16%">

<h2> Search your student </h2>
<br>
<br>
<div style="margin-right:80%">
<form method="post" action="Include/show_single_student.inc.php">
	Student Id &nbsp&nbsp<input type="text" name="sid" required>
	<input type="submit" name="submit" value="Search">
</form>
</div>
<h2> All Student List</h2>
<?php
//$sql = "SELECT id, firstname, lastname FROM MyGuests";
$sql = "SELECT `StudentId`, `RoomNO`, `Fname`, `Mname`, `Lname` FROM `student`";


if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 align=left>";
            echo "<tr>";
                echo "<th>Student Id</th>";
                echo "<th>Full Name</th>";
                echo "<th>room no</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['StudentId'] . "</td>";
                echo "<td>" . $row['Fname'] . " ",$row['Mname'] ." ",$row['Lname'] ."</td>";
                echo "<td>" . $row['RoomNO'] . "</td>";
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
