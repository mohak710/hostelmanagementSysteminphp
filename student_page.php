<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><?php session_start();

include('sidebar_student.php');
?>

    
        
		
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style></head><body>
    
 
<div style="margin-left: 16%;">
<h1>Hi <?php echo $_SESSION['name']?></h1>
<?php if(!isset($_SESSION['studentId']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
	
}
else
{	
	include "connection.php";
    $studid=$_SESSION['studentId'];	
$sql="SELECT `RoomNO`, `Fname`, `Mname`, `Lname`, `ContactNo`, `Address`, `Email`, `UserName`, `Password`, `fee`, `Mark`, `dob`, `photo`, `photo_name`,`gym`,`library` FROM `student` WHERE `UserName`='$studid'";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 align=center>";
            
			while($row = mysqli_fetch_array($result)){
            $p="http://localhost/hostel/Image/";
				$pn=$row['photo_name'];
				$x="\\";
				$photo=$p.$x.$pn;
			echo "<tr>";
				echo "<td  width=10%>Student Id</td>";
                echo "<td width=90%>" . $studid. "</td>";
				
			
				echo " <td rowspan='11'><div align=top> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src='" . $photo. "'width=250px  height=50px style=float:right></div></td> ";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Full Name</td>";
                echo "<td>" . $row['Fname'] . " ",$row['Mname'] ." ",$row['Lname'] ."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>ContactNo</td>";
				echo "<td>" . $row['ContactNo'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Address</td>";
				echo "<td>" . $row['Address'] . "</td>";
				
				echo "</tr>";
				echo "<tr>";
				echo "<td>Email</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>UserName</td>";
				echo "<td>" . $row['UserName'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Password</td>";
				echo "<td>" . $row['Password'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Fee</td>";
				echo "<td>" . $row['fee'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Marks</td>";
				echo "<td>" . $row['Mark'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>dob</td>";
				echo "<td>" . $row['dob'] . "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>RoomNO</td>";
                echo "<td>" . $row['RoomNO'] . "</td>";
				echo "</tr>";
				
				
				
				//echo $photo=$p.$x.$pn;
				
				
				
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo mysqli_error($connection);
        }
    
}
?>

<div align="left">
</div>
</div>
   </body></html>