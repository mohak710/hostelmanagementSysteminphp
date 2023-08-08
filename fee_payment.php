
<html>

<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php

include "connection.php";
session_start();
if(isset($_POST['Back']))
 {
	 echo "<script>window.location.href='/hostel/fee_pay.php'</script>";
 }
if(isset($_POST['submit']))
{		
$studid=$_POST['id'];
		





	
	$fee=$_POST['fee'];
	$sql = "UPDATE `student` SET `fee`=`fee`-'$fee' WHERE `StudentId`='$studid'";
	if($res = mysqli_query($connection, $sql))
	{
		echo "<script>window.alert('you have paid $fee');</script>";
		$s=" ";
		$sql1 = "SELECT  `Fname`, `Mname`, `Lname` FROM `student` WHERE `StudentId`='$studid'";
		if($result = mysqli_query($connection, $sql1)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            
                $name =$row['Fname'].$s.$row['Mname'].$s.$row['Lname'] ;	
        }
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	}
	else
	{
		echo mysqli_error($connection);
	}
	
}

$sql2 = "SELECT  `fee` FROM `student` WHERE `StudentId`='$studid'";
		if($result = mysqli_query($connection, $sql2)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            
               if($row['fee']<0)
			   {
				   	$sq3 = "UPDATE `student` SET `fee`=0 WHERE `StudentId`='$studid'";
					if($res = mysqli_query($connection, $sq3))
					{
						echo "<script>window.alert('Please Insert valid amount.Amount less then current ');</script>";
						 echo "<script>window.location.href='fee_pay.php'</script>";
					}
			   }
        }
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
		}
		$sqlQuery = "INSERT INTO `invoice`(  `Stud_Id`, `Stud_name`, `fee`) VALUES ('$studid','$name','$fee')";
		$fireQuery=mysqli_query($connection,$sqlQuery);
        if($fireQuery)
        {
           $max="SELECT max(Id) FROM invoice";
		   if($result = mysqli_query($connection, $max)){
				if(mysqli_num_rows($result) > 0){
				{
					while($row = mysqli_fetch_array($result))
					{
						 echo $highest_id = $row[0];
					}
				}
			}
		}
		   
		   
        }
		
		}

?> 
<form method="post">  
                          <input type="submit" name="Back" value="Back" /> 
                                               </form>
<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>HMS</strong>
                        
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date  <?php

								echo date("Y-m-d h:i:sa");
							?></em>
							<br>
							
                    </p>
                    <p>
                        <!--  <em>Receipt #: 34522677W</em>-->
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt </h1>
                </div>
                
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th style="text-align: center">Id</th>
                            <th class="text-center">Price</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $name; ?> </td></em></td>
                            <td class="col-md-9" style="text-align: center"> <?php echo $studid; ?> </td>
                            <td class="col-md-1 text-center"><?php echo $fee; ?> </td></td>
                            
                        </tr>
                        
                        
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong><?php echo $fee; ?></strong></h4></td>
                        </tr>
						<tr>
						<td align=left><b>Signature</b></td>
						<td><img src="http://localhost/hostel/signature.png" width=150px height=140px></td>
						</tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>




