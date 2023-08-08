
<html>
<body>
<?php 
session_start();
include('sidebar_student.php'); ?>
   <div style="margin-left:30%">



 <div id="page-wrapper">
        
                <h1> Guest Entry</h1>
            
            
        

         
             <table>       
                        <form method="post" >
            
            <tr>
                <td>Full Name :-</td>
                <td><input type="text" name="fullname" required></td>
            </tr>
			 
			 
			 <tr>
                <td>Contact No. :-</td>
                <td><input type="Number" name="Contact" required></td>
             </tr>
			
			 
                <td>Reason :-</td>
                <td><input type="text" name="reason" required></td>
            </tr>
            
			 <tr>
               
			
                
                <td align="center"><input type="submit" name="submit" value="Register"></td>
            </tr>
            </form>
			</table>
                                        
	</div>
	
	<?php
    include "connection.php";
    
	$stud=$_SESSION['studentId'];
	if(isset($_POST['submit']))
    {	
		
		$reason=$_POST['reason'];
				$contact=$_POST['Contact'];
				$fullname=$_POST['fullname'];
	
                
				
				$sql="INSERT INTO `guest`(`name`, `contact`, `reason`, `Student_id`) VALUES ('$fullname','$contact','$reason','$stud')";

					if($result = mysqli_query($connection, $sql))
					{
					
					echo "<script>window.alert('Record Added');</script>";	
					echo "<script>window.location.href='http://localhost/hostel/guest_add_student.php';</script>";	

					}
					else
					{
							echo mysqli_error($connection);
					}
				
           
         
	}
	
?>
</div>
</body>
</html>
