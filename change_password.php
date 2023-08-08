
<html>
<body>
<?php include('sidebar.php'); 
include "connection.php";?>
   <div style="margin-left:16%">

<h2> Search your student </h2>
<br>
<br>
<form method="post">
	Enter Employee ID &nbsp&nbsp<input type="text" name="sid" required>
	
	update Salary<input type="text" name="fee" required>
	<input type="submit" name="submit" value="ADD">
</form>
<?php
    
    if(isset($_POST['submit']))
    {
        $studid=$_POST['sid'];


	
        $fee=$_POST['fee'];
		
		
		$sql="UPDATE `emp` SET `sal` = '$fee' where `eno` = '$studid'";

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

