<?php
    $connection=mysqli_connect("localhost","root","","hostel");
    if(!$connection)
    {
        echo "connection Failed because of ".mysqli_connect_error();
    }
?>