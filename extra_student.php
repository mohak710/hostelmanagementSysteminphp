
<html>
<body>

<?php 
session_start();
include('sidebar_student.php'); 
include "connection.php";
?>
   <div style="margin-left:16%">
	<div>
	<h4>Current Data</h4>
	</div>
	            
<?php
	$gym1=0;
	$gym=0;
	$lib=0;
	$lib1=0;
	
	
 $studid=$_SESSION['studentId'];	
$sql = "SELECT `StudentId`, `RoomNO`, `Fname`, `Mname`, `Lname`,`gym`, `library` FROM `student` WHERE `UserName`='$studid'";


if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=2 align=left>";
            echo "<tr>";
                echo "<th>Student Id</th>";
                echo "<th>Full Name</th>";
                echo "<th>applied in Gym</th>";
				echo "<th>applied in Lirary</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['StudentId'] . "</td>";
                echo "<td>" . $row['Fname'] . " ",$row['Mname'] ." ",$row['Lname'] ."</td>";
                
				if($row['gym']==1)
				{
					$gym_name="yes";
					$gym1=1500;
				}
				else
				{
					$gym_name="no";
				}
				if($row['library']==1)
				{
					$lib_name="yes";
					$lib1=1500;
				}
				else
				{
					$lib_name="no";
				}
				echo "<td>" . $gym_name . "</td>";
				echo "<td>" . $lib_name . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} 
?>
<br>
<br>
<br>
<br>

<div>
	<h4>Update data</h4>
	</div>
<form method="post">

	<br>
	<input type="checkbox" name="gym" value="1"> Gym
	<br>
  <input type="checkbox" name="lib" value="1"> Library
  <br>
  
	
	<input type="submit" name="submit" value="Register">
</form>
<?php
    
    if(isset($_POST['submit']))
    {	
        $gym=0;
        $lib=0;
		
		if(isset($_POST['gym']))
		{
			$gym=1;
		}
		if(isset($_POST['lib']))
		{
			$lib=1;
		}
		if(!$gym == 1 )
		{
			$gym=0;
			$feeg=0;
		}
		else{$feeg=1500;}
		if(!$lib==1)
		{
			$lib=0;
			$feel=0;
		}
        else{$feel=1500;}
		 $fee_E=$feeg+$feel;
		 $temp=$gym1+$lib1;
		 $fee=$fee_E-$temp;
		if($fee<0)
		{
			$fee=0;
		}
		
		$sql="UPDATE `student` SET `extra_fee`='$fee',`gym`='$gym',`library`='$lib' WHERE `UserName`='$studid'";
		
		if($result = mysqli_query($connection, $sql))
		{
		echo "<script>window.alert('Record Updated');</script>";
		
		} else{
        echo "No records matching your query were found.";
		echo mysqli_error($connection);
		}
	} else{
    echo mysqli_error($connection);
    }
?>



</div>
</body>
</html>

