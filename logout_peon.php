<?php
    session_start();
    
	
	 unset($_SESSION['Peon_Username']);
     unset($_SESSION['Peon_Password']);
	
	
    echo "<script>window.alert('Loged Out');</script>";
    echo "<script>window.location.href='index.php'</script>";
?>