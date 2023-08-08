
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
	Enter Employee ID &nbsp&nbsp<input type="text" name="sid" required>
	
	
	<input type="submit" name="submit" value="DELETE">
</form>
</div>
<?php
    
    if(isset($_POST['submit']))
    {
        $studid=$_POST['sid'];


	
        
		
		
		$sql="DELETE FROM `emp` WHERE `eno`='$studid'";

		if($result = mysqli_query($connection, $sql))
		{
		echo "<script>window.alert('Record Updated');</script>";
		} else{
        echo "No records matching your query were found.";
		}
	} else{
    echo mysqli_error($connection);
    }
?>



</div>
</body>
</html>

