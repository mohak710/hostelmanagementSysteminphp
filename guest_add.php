
<html>
<body>
<?php include('sidebar_Peon.php'); ?>
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
                <td>Student ID:-</td>
                <td><input type="text" name="sid" required></td>
				
            </tr>
			 <tr>
               
			
                
                <td align="center"><input type="submit" name="submit" value="Register"></td>
            </tr>
            </form>
			</table>
                                        
	</div>
	
	<?php
    include "connection.php";
    
		
	if(isset($_POST['submit']))
    {	
		$Stud=$_POST['sid'];
		$reason=$_POST['reason'];
				$contact=$_POST['Contact'];
				$fullname=$_POST['fullname'];
	$sql="SELECT `Studentid` FROM `student` WHERE `Studentid`='$Stud'";

	if($result = mysqli_query($connection, $sql))
	{
	
		if(mysqli_num_rows($result) > 0){
			
			while($row = mysqli_fetch_array($result)){
            
                
				
				$sql="INSERT INTO `guest`(`name`, `contact`, `reason`, `Student_id`) VALUES ('$fullname','$contact','$reason','$Stud')";

					if($result = mysqli_query($connection, $sql))
					{
					
					echo "<script>window.alert('Record Added');</script>";	
					echo "<script>window.location.href='http://localhost/hostel/guest_add.php';</script>";	
					
					
	
 
					}				

				
           
        }
        
        
        
    } else{
        echo "No Student id found.";
    }
	
} 
	}
	
?>
</div>
</body>
</html>
