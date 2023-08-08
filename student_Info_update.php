<?php session_start();?>
<html>
<body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
</head>
<?php include('sidebar_student.php'); 
include "connection.php";?>
   <div style="margin-left:16%">

<?php 


?>
<html>
<body>

   



 <div id="page-wrapper">
        
                <h1> Update Admission details</h1>
            
            
        

         Admission Information
             <table>       
                        <form method="post">
            <th colspan="2">
                Details for Student
            </th>
            <tr>
                <td>First Name :-</td>
                <td><input type="text" name="fname" required></td>
            </tr>
			 <tr>
                <td>Middle Name :-</td>
                <td><input type="text" name="mname" required></td>
            </tr>
			 <tr>
                <td>last Name :-</td>
                <td><input type="text" name="lname" required></td>
            </tr>

			 <tr>
                <td>Contact No. :-</td>
                <td><input type="text" name="Contact" required></td>
             </tr>
			 <tr>
				<td>Email :-</td>
                <td><input type="email" name="emailId" required></td>
            
			</tr>
			 <tr>
                <td>Date of Birth :-</td>
                <td><input type="date" name="dob" required></td>
            </tr>
			 <tr>
                <td>12th/10th percentage :-</td>
                <td><input type="Number" name="mark" required></td>
            </tr>
			 
			<tr>
                <td>Address :-</td>
                <td><input type="text" name="addr" required><td>
			</tr>
			<tr>
				<td colspan=2>
				<label for="Attach Your Image">Upload Your Photo</label>
				<input type="file"  name="fileupload" accept="image/*"/></td>
				
				
            </tr>
			
                
                <td align="center"><input type="submit" name="submit" value="Register"></td>
            </tr>
            </form>
			</table>

                                        
	</div>
	
	

</body>
</html>
<?php
    include "connection.php";
     

    

		
	
 

	if(isset($_POST['submit']))
    {
			
			$file_dir = "C:\wamp\www\hostel\Image";

 foreach($_FILES as $file_name => $file_array) {
 echo "path: ".$file_array['tmp_name']."<br/>\n";
 $photo=$file_array['tmp_name'];
 $photo_name=$file_array['name'];
echo $photo_name;


 if (is_uploaded_file($file_array['tmp_name'])) {
 move_uploaded_file($file_array['tmp_name'],
 "$file_dir/".$file_array['name'])
 or die ("Couldn't move file");
 echo "File was moved!";
 } else {
 echo "No file found.";
 }
 }
 
			
			
        $fname=$_POST['fname'];
		if(!preg_match("/[a-zA-Z'-]/",$fname)) 
		{ die ("invalid first name");}
		$mname=$_POST['mname'];
		if(!preg_match("/[a-zA-Z'-]/",$mname)) 
		{ die ("invalid middle name");}
		$lname=$_POST['lname'];
		if(!preg_match("/[a-zA-Z'-]/",$lname)) 
		{ die ("invalid last name");}
		$roomno=0;
		$Contact=$_POST['Contact'];
	//	if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $Contact))
		//{
		//echo "Invalid Number!";
		//}
		$addr=$_POST['addr'];
		$mail=$_POST['emailId'];
		$dob=$_POST['dob'];
		$mark=$_POST['mark'];
		$studid=$_SESSION['studentId'];	
		 
		
		$dob=$_POST['dob'];
		//$file = addslashes(file_get_contents($_FILES["pic"]["tmp_name"])); 
       // $sign=$_POST['sign'];
        $fee=10000;
		$gym=0;
		$lib=0;
		
		
		
$sqlQuery="UPDATE `student` SET `Fname`='$fname',`Mname`='$mname',`Lname`='$lname',`ContactNo`='$Contact',`Address`='$addr',`Email`='$mail',`Mark`='$mark',`dob`='$dob',`photo_name`='$photo_name' WHERE `UserName`='$studid'";



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



</div>
</body>
</html>




