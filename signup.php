<?php
include_once 'conn.php';

$userexists = false;
$pass = false;

if (isset($_POST['save']))
{
// variables for input data
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $username= $_POST['username'];
  $password = $_POST['password'];
  $passwordrepeat=$_POST['passwordrepeat'];

  if($password != $passwordrepeat){
    $pass = true;
  } else {
    $password=password_hash($password,PASSWORD_DEFAULT);
    $sql= sprintf("SELECT Username FROM users where Username= '%s'", mysqli_real_escape_string($conn, $username));
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $userexists = true;
        } else {
        $sql = sprintf("INSERT INTO users(Name,Surname,Username,Password) VALUES('%s','%s','%s','%s')",  mysqli_real_escape_string($conn, $name),  
         mysqli_real_escape_string($conn, $surname),  
        mysqli_real_escape_string($conn, $username),   
        mysqli_real_escape_string($conn, $password));
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        die(header("Location: login.php"));
      }
  }
    
  
}

?>


<!DOCTYPE html>
<html>
 <link rel="icon" href="images/cvet.png" type="images" sizes="16x16">
<style>

html { 
       background: url('images/pozadina.jpg') no-repeat center center fixed;  
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
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
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
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
    padding-top: 50px;
        background-color: rgba(0,0,0,0.4);
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body onload="document.getElementById('id01').style.display='block'" style="width:auto;">



<div id="id01" class="modal">
  <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
  <form method="post" class="modal-content">


  <?php if ($userexists): ?>
     <div class="container" style="color:white; background: #f44336"> <b> Username already registered! </b></div>      
  <?php elseif ($pass): ?>
      <div class="container" style="color:white; background: #f44336"> <b> Passwords do not match!</b></div>      
      <?php endif; ?>


  

    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>


      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" id="name" required>

      <label for="surname"><b>Surname</b></label>
      <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>

      <label for="usrrname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="pass" required>

      <label for="password-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="passwordrepeat" id="rpass" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>


      <div class="clearfix">
        <button type="button" onclick="location.reload();location.href='index.php'"  class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="save">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
/*var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
<!--
<?php
/*include_once 'login2.php';
if(isset($_POST['save']))
{
// variables for input data
$name=$_POST['name'];
$surname=$_POST['surname'];
$username= $_POST['username'];
$password = $_POST['password'];
$passwordrepeat=$_POST['passwordrepeat'];
 echo"<script>
            $('#name').val('".$name."');
            $('#surname').val('".$surname."');
            $('#username').val('".$username."');
          </script>";

          if($password!=$rpassword) {
            echo "<script>
              $('#pass').attr('type','text').val('Passwords do not match!').css('color','red');
              $('#rpass').attr('type','text').val('Passwords do not match!').css('color','red');

              $('#pass').click(function(){
               $(this).attr('type','password').css('color','black').val('');
     });
      $('#rpass').click(function(){
               $(this).attr('type','password').css('color','black').val('');
     });

            </script>";
                    } else {
            $password=password_hash($password,PASSWORD_DEFAULT);
             $sqlmail= sprintf("SELECT Username FROM users where Username= '%s'", mysqli_real_escape_string($conn, $username));
             $query=mysqli_query($conn,$sqlmail);

             if(mysqli_num_rows($query)>0) {
               echo "
               <script>
               $('#username').val('Username already registered!').css('color','red');
                           $('#username').click(function(){
                             if($(this).val() == 'Username already registered!'){
                                $(this).css('color','black').val('');
                             }
                      });
                  
               </script>";
           
             } else {
               $sql = sprintf("INSERT INTO users(Name,Surname,Username,Password) VALUES('%s','%s','%s','%s')",  mysqli_real_escape_string($conn, $name),  
                 mysqli_real_escape_string($conn, $surname),   
                mysqli_real_escape_string($conn, $username),   
                mysqli_real_escape_string($conn, $password));
              mysqli_query($conn,$sql);
              echo "<script>
              window.location.href=\"login.html\";
              </script>";
            }
          }

          mysqli_close($conn);
        }
*/?> -->

</html>
