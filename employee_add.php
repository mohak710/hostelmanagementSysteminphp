
<html>
<body>
<?php include('sidebar.php'); ?>
   <div style="margin-left:30%">



 <div id="page-wrapper">
        
                <h1> New Admission Of Employee</h1>
            
            
        

         Admission Information
             <table>       
                        <form method="post" >
            <th colspan="2">
                
            </th>
            <tr>
                <td>Name :-</td>
                <td><input type="text" name="fname" style="width:260px;"required></td>
            </tr>
			 
			 <tr>
                <td>Contact No. :-</td>
                <td><input type="number" name="Contact" style="width:260px;" required></td>
             </tr>
			 <tr>
				<td>Email :-</td>
                <td><input type="email" name="emailId" style="width:260px;"required></td>
            
			</tr>
			 
			 
			 <tr>
                <td>job :-</td>
                <td><input type="text" name="job" style="width:260px;"required></td>
            </tr>
            <tr>
                <td>salary :-</td>
                <td><input type="number" name="sal" style="width:260px;"required></td>
            </tr>
			 
			
                
                <td align="center"><input type="submit" name="submit" value="Register"></td>
            </tr>
            </form>
			</table>
                                        
	</div>
	</div>
<?php	
include "connection.php";
    if(isset($_POST['submit']))
    {
        $name=$_POST['fname'];
		
		$Contact=$_POST['Contact'];
		
		$mail=$_POST['emailId'];
		$job=$_POST['job'];
		$sal=$_POST['sal'];
		
		
$sqlQuery="INSERT INTO `emp`(`Name`, `Email`, `contact`, `job`, `sal`) VALUES ('$name','$mail','$Contact','$job','$sal')";


        $fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
            echo "<script>window.alert('Data Inserted Succesfully..');</script>";
            
			
        }
        else
        {
           echo "<script>window.alert('Data Insertion Failed');</script>";
            //echo "<script>window.location.href='../registrationForm.php'</script>";
			die(mysqli_error($connection));
        
        }
    }
?>
</body>
</html>
