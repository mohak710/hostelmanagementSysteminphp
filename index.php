<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 100%;
  height: 100%;
  border-radius: 90%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: red;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
img {
  float: left;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<?php include('navigation.php');?>
<h2 align="center"><br><br><br><br><br>Click the button according to Login</h2>
<div align="center">
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" align="center">Login Admin</button>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" align="center">Login Student</button>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;" align="center">Login Peon</button>
</div>
<div id="id01" class="modal">
  <form method="post" action="Include/login.inc.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
	<table>
	<tr>
	<td>
	<div class="imgcontainer" >
      <img src="img_avatar2.png" width="50px" height="300px" alt="Admin" class="avatar"style="margin-right:15px;">
    </div>
	</td>
	<td>
    <div class="container" style="margin-left:48%">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="Username">Login</button>
    </div>
	
	<div class="container" >
		<table>
		<tr>
		<td width="350">
		<button type="button" onclick="window.location.href='admissionstudent.php'"><b>Register</button>
		</td>
		<td width="350">
		<button type="button" onclick="window.location.href='forgot_change_password.php'"><b>Forgot/Change Username and Passwrod</button>
		</td>
		</tr>
		</table>
	</div>
	</div>
    </td>
	</tr>
	</table>
  </form>
</div>

<div id="id02" class="modal">
  
<form method="post" action="Include/loginAdmin.inc.php">
    <div class="imgcontainer" >
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
	<table>
	<tr>
	<td>
	<div class="imgcontainer" >
      <img src="img_avatar2.png" width="50px" height="300px" alt="Admin" class="avatar"style="margin-right:15px;">
    </div>
	</td>
	<td>
	
    <div class="container" style="margin-left:50%">
		
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="adminuname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="adminpsw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
	</td>
	</tr>
	</table>

   
	<div>

  </form>
</div>
</div>
<div id="id03" class="modal">
  
<form method="post" action="Include/loginPeon.inc.php">
    <div class="imgcontainer" >
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>
	<table>
	<tr>
	<td>
	<div class="imgcontainer" >
      <img src="img_avatar2.png" width="50px" height="300px" alt="Admin" class="avatar"style="margin-right:15px;">
    </div>
	</td>
	<td>
	
    <div class="container" style="margin-left:50%">
		
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Puname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Ppsw" required>
        
      <button type="submit">Login</button>
      
    </div>
	</td>
	</tr>
	</table>

   
	<div>

  </form>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
