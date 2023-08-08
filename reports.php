<?php
session_start();
if(!isset($_SESSION['studentId']))
{
    echo "<script>window.alert('you have to Login First');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
?>
<html>
    <head>
        <title>
            Reports
        </title>
        <script>
            function fetchReport()
            {
                var english=document.getElementById("english").value;
                var science=document.getElementById("science").value;
                xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange= function() {
                    if(this.readyState == 4 && this.status == 200)
                    {
                        document.getElementById("reportDiv").innerHTML=this.responseText;
                    }
                };
                xmlHttp.open("GET","Include/reportAjax.inc.php?english="+english+"&science="+science,true);
                xmlHttp.send();
            }
        </script>
    </head>
    <body>
        <div align="center">
            <?php 
            if($_SESSION['userType']=='admin')
            {
                echo "<a href='#'>Report</a>";
            }
            ?>
            <a href="marksDetails.php">Marks</a>
            <a href="logout.php">LogOut</a>
        </div>
        <table border="1" align="center">
            <th colspan="3" align="center">
                Select Your Choice.
            </th>
            <tr>
                <td>English</td>
                <td>Science</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="number" name="english" id="english"></td>
                <td><input type="number" name="science" id="science"></td>
                <td><input type="submit" name="submit" id="submit" value="SUBMIT" onclick="fetchReport()"></td>
            </tr>
        </table>
        <div id="reportDiv">
        </div>
    </body>
</html>