
<html>
<body >
<?php include('sidebar_out.php'); ?>
   <div style="margin-left:38%">



 <div style="margin-right:42%">
        
                <h1> New Admission</h1>
            
            
        

         
             <table border="0" >       
                        <form method="post"  action="Include/registerDataStudent.inc.php">
            <th colspan="2">
                Registration for Student
            </th>
            <tr>
                <td>First Name :-</td>
                <td><input type="text" name="fname" required width="10"></td>
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
                <td><input type="email" name="emailId" style="width:260px;"required></td>
            
			</tr>
			 <tr>
                <td>Date of Birth :-</td>
                <td><input type="date" name="dob" style="width:260px;"required></td>
            </tr>
			 <tr>
                <td>12th/10th percentage :-</td>
                <td><input type="Number" name="mark" style="width:260px;"required></td>
            </tr>
			 <tr>
                <td>UserName :-</td>
                <td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Password :-</td>
                <td><input type="password" name="password" required></td>
			</tr>
			<tr>
                <td>Address :-</td>
                <td><input type="text" name="addr" required></td>
			</tr>
			<tr>
				<td colspan=2>
				<label for="Attach Your Image">Attach Your Image:</label>
				<input type="file"  name="fileupload" style="height:60px;"accept="image/*"/></td>
				
				
            </tr>
			
                
                <td align="center" colspan=2><input type="submit" name="submit" style="width:460px;"value="Register"></td>
            </tr>
            </form>
			</table>
                                        
	</div>
	</div>
	</div>

</body>
</html>
