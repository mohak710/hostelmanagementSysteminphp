<?php
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['studentId']);
	
    echo "<script>window.alert('Loged Out');</script>";
    echo "<script>window.location.href='index.php'</script>";
?>