<?php
    session_start();
    
	
	 unset($_SESSION['UseraAme']);
     unset($_SESSION['Password']);
	
    echo "<script>window.alert('Loged Out');</script>";
    echo "<script>window.location.href='index.php'</script>";
?>