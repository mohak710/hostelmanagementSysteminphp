
<html>
<body>
<?php include('sidebar.php'); 
include "connection.php";?>
   <div style="margin-left:16%">

<h2> Search your student </h2>
<br>
<br>
<div style="margin-right:70%">
<form method="post">
	Enter StudentID &nbsp&nbsp<input type="text" name="sid" required>
	<br>
	<input type="checkbox" name="gym" value="1"> Gym
	<br>
  <input type="checkbox" name="lib" value="1"> Library
  <br>
  
	
	<input type="submit" name="submit" value="Register">
</form>
</div>
<?php
    
    if(isset($_POST['submit']))
    {
		$gym=0;
		$lib=0;
		
        $studid=$_POST['sid'];
		$gym=$_POST['gym'];
		$lib=$_POST['lib'];
		
		
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
		$fee=$feeg+$feel;
		
		$sql="UPDATE `student` SET `fee`=`fee`+'$fee',`gym`='$gym',`library`='$lib' WHERE `StudentId`=$studid";
		
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

