
<html>
<head>
        
		
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    </head>
<body>
<?php include('sidebar.php');
include "connection.php";?>
   <div style="margin-left:30%">



 <div id="page-wrapper">
        
                <h1> Meal Updater</h1>
					
        

			
             <table>       
                        <form method="post" enctype="multipart/form-data" >
            <th colspan="2">
                <b>Monday</b>
            </th>
			 <tr>
                <td>Break Fast Menu :-</td>
                <td><input type="text" name="m_break_fast" required> 
            </tr>
            <tr>
                <td>Lunch Menu</td>
                <td><input type="text" name="m_lunch" required>
            </tr>
			
			 <tr>
                <td>Dinner Menu :-</td>
                <td><input type="text" name="m_dinner"required>
            </tr>
			<th colspan="2">
                <b>Tuesday</b>
            </th>
			 <tr>
                <td>Break Fast Menu :-</td>
                <td><input type="text" name="t_break_fast"required> 
            </tr>
            <tr>
                <td>Lunch Menu</td>
                <td><input type="text" name="t_lunch" required>
            </tr>
			
			 <tr>
                <td>Dinner Menu :-</td>
                <td><input type="text" name="t_dinner"required>
            </tr>
			<th colspan="2">
                <b>Wednesday</b>
            </th>
			 <tr>
                <td>Break Fast Menu :-</td>
                <td><input type="text" name="w_break_fast"required> 
            </tr>
            <tr>
                <td>Lunch Menu</td>
                <td><input type="text" name="w_lunch" required>
            </tr>
			
			 <tr>
                <td>Dinner Menu :-</td>
                <td><input type="text" name="w_dinner"required>
            </tr>
			<th colspan="2">
                <b>Thursday</b>
            </th>
			 <tr>
                <td>Break Fast Menu :-</td>
                <td><input type="text" name="th_break_fast"required> 
            </tr>
            <tr>
                <td>Lunch Menu</td>
                <td><input type="text" name="th_lunch" required>
            </tr>
			
			 <tr>
                <td>Dinner Menu :-</td>
                <td><input type="text" name="th_dinner"required>
            </tr>
			<th colspan="2">
                <b>Friday</b>
            </th>
			 <tr>
                <td>Break Fast Menu :-</td>
                <td><input type="text" name="fri_break_fast"required> 
            </tr>
            <tr>
                <td>Lunch Menu</td>
                <td><input type="text" name="fri_lunch" required>
            </tr>
			
			 <tr>
                <td>Dinner Menu :-</td>
                <td><input type="text" name="fri_dinner"required>
            </tr>
			<th colspan="2">
                <b>Saturday</b>
            </th>
			 <tr>
                <td>Break Fast Menu :-</td>
                <td><input type="text" name="sat_break_fast"required> 
            </tr>
            <tr>
                <td>Lunch Menu</td>
                <td><input type="text" name="sat_lunch" required>
            </tr>
			
			 <tr>
                <td>Dinner Menu :-</td>
                <td><input type="text" name="sat_dinner"required>
            </tr>
			<th colspan="2">
                <b>Sunday</b>
            </th>
			 <tr>
                <td>Break Fast Menu :-</td>
                <td><input type="text" name="sun_break_fast"required> 
            </tr>
            <tr>
                <td>Lunch Menu</td>
                <td><input type="text" name="sun_lunch" required>
            </tr>
			
			 <tr>
                <td>Dinner Menu :-</td>
                <td><input type="text" name="sun_dinner"required>
            </tr>
			 
			
                
                <td align="left"><input type="submit" name="submit" value="Register"></td>
            </tr>
            </form>
			</table>
                                        
	</div>
	</div>
	<?php
    
    if(isset($_POST['submit']))
    {
        

		$m_lunch=$_POST['m_lunch'];
		$m_break_fast=$_POST['m_break_fast'];
		$m_dinner=$_POST['m_dinner'];
		$t_lunch=$_POST['t_lunch'];
		$t_break_fast=$_POST['t_break_fast'];
		$t_dinner=$_POST['t_dinner'];
		$w_lunch=$_POST['w_lunch'];
		$w_break_fast=$_POST['w_break_fast'];
		$w_dinner=$_POST['w_dinner'];
		$th_lunch=$_POST['th_lunch'];
		$th_break_fast=$_POST['th_break_fast'];
		$th_dinner=$_POST['th_dinner'];
		$fri_lunch=$_POST['fri_lunch'];
		$fri_break_fast=$_POST['fri_break_fast'];
		$fri_dinner=$_POST['fri_dinner'];
		$sat_lunch=$_POST['sat_lunch'];
		$sat_break_fast=$_POST['sat_break_fast'];
		$sat_dinner=$_POST['sat_dinner'];
		$sun_lunch=$_POST['sun_lunch'];
		$sun_break_fast=$_POST['sun_break_fast'];
		$sun_dinner=$_POST['sun_dinner'];
		
		
		$sql1="DELETE FROM `meal`";
		if($result = mysqli_query($connection, $sql1)){}
		
		
		
		
		$sql="INSERT INTO `meal`(`Mon_lunch`, `Mon_breakfast`, `Mon_dinner`, `Tues_lunch`, `Tues_breakfast`, `Tues_dinner`, `Wed_lunch`, `Wed_breakfast`, `Wed_dinner`, `Thu_lunch`, `Thu_breakfast`, `Thu_dinner`, `Fri_lunch`, `Fri_breakfast`, `Fri_dinner`, `sat_Lunch`, `sat_breakfast`, `sat_dinner`, `sun_lunch`, `sun_breakfast`, `sun_dinner`) VALUES ('$m_lunch','$m_break_fast','$m_dinner','$t_lunch','$t_break_fast','$t_dinner','$w_lunch','$w_break_fast','$w_dinner','$th_lunch','$th_break_fast','$th_dinner','$fri_lunch','$fri_break_fast','$fri_dinner','$sat_lunch','$sat_break_fast','$sat_dinner','$sun_lunch','$sun_break_fast','$sun_dinner')";

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
	

</body>
</html>
