<?php

session_start();
if (isset($_SESSION["username"])) {
    header('Location: index.php');
}


include_once 'conn.php';

$userexists = true;
$wrongpass = false;

if (isset($_POST['save']))
{
// variables for input data

  $username = $_POST['username'];
  $password = $_POST['password'];
   $sql= sprintf("SELECT * FROM users WHERE Username= '%s'", mysqli_real_escape_string($conn, $username));
   $result=mysqli_query($conn,$sql);

   if (mysqli_num_rows($result) > 0) {
    $sqlp="SELECT Password from users where Username='".$username."'";
    $query1=mysqli_query($conn,$sqlp);
    $array=mysqli_fetch_array($query1);
    if(password_verify($password,$array[0])){
     $_SESSION["username"] = $username;
     die(header("Location: index.php"));
 	} else {
 		$wrongpass = true;
 	}	
   } else {
     $userexists = false;
   }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html { 
        background: url('images/pozadina.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
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

.signupbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #4CAF50;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
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
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
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
 <link rel="icon" href="images/cvet.png" type="images" sizes="16x16">
</head>
<body onload="document.getElementById('id01').style.display='block'" style="width:auto;">

<h2></h2>

<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
   <!-- <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>-->

    <?php if (!$userexists): ?>
        <div class="container" style="color:white; background: #f44336"> <b>Username doesn't exist! </b></div>
    <?php elseif ($wrongpass): ?>
    	<div class="container" style="color:white; background: #f44336"> <b> Wrong password!</b></div>
    <?php endif; ?>

    <div class="container">
      <h1>Log In</h1>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="save">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="location.reload();location.href='index.php'" class="cancelbtn">Cancel</button>
       <button type="button" onclick="location.reload();location.href='signup.php'" class="signupbtn">Sign Up</button>
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
/*window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/
</script>

</body>
</html>
