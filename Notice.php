<html>
<body>
<?php include('sidebar.php');?>
<div style="margin-left:16%">

<br>
<br>

<?php
    include "connection.php";
    
		
		
$sql="SELECT `info`, `heading` FROM `notice bourd`";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
		
                echo "<div align=center><h1>" . $row['heading'] . "</h1></div>";
                
                echo "<p>" . $row['info'] . "</p>";
           
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
	
?>
</div>
</body>
</html>