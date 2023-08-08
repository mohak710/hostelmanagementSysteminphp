
<html>
<body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>
<?php  
include "connection.php";?>
<?php include('sidebar_out.php'); ?>
   <div style="margin-left:16%">

<h2> Search your student </h2>
<br>
<br>
<form method="post" >
	<table>
	<tr>
	<td>Student Id</td> &nbsp&nbsp<td><input type="text" name="sid" ></td>
	</tr>
	<tr>
	<td>UserName</td><td><input type="text" name="uname" ></td>
	</tr>
	<tr>
	<td>Password</td><td><input type="text" name="pass" ><td>
	</tr>
	<tr>
		<td><input type="submit" name="change" value="Change UserName And Password"></td>
	</tr>
	<table>

</form>
<?php		
		if(isset($_POST['change']))
{	
$password=$_POST['pass'];	
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    
	echo "<script>window.alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');</script>";
    
}
else
{
	
	

	
	include "connection.php";
    $studid=$_POST['sid'];	
$sql="SELECT `UserName`, `Password` FROM `student` WHERE `StudentId`='$studid'";

if($result = mysqli_query($connection, $sql))
{

		if(mysqli_num_rows($result) > 0)
		{
			
			$uname=$_POST['uname'];
			
			$studid=$_POST['sid'];	

			$sql1="UPDATE `student` SET `UserName`='$uname',`Password`='$password' WHERE `StudentId`='$studid'";
			
			if($result1 = mysqli_query($connection, $sql1))
			{
				echo "<script>window.alert('username and password changed');</script>";
				echo "<script>window.location.href='http://localhost/hostel'</script>";
			}
       
        }
		else
		{
			echo "<script>window.alert('Invalid Stududent id');</script>";
		}
		
}

		
        
        
} 
    }

	
		
		
		 
		
	

    

?>

</div>
</body>
</html>



	</div>
	

</body>
</html>
