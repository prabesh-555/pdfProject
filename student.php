<?php
if(isset($_POST['save']))
{
$servername='localhost';
$username='root';
$pass='';
$database_name= 'register';
$conn=mysqli_connect($servername,$username,$pass,$database_name);
if(!$conn)
{
    die("Connection Failed:". mysqli_connect_error());
}
else{
    
    echo'database connection successfully.';
}
    $fName =$_POST["fName"];
    $lName =$_POST["lName"];
    $password =$_POST["password"];
    $email =$_POST["email"];
    $phoneNum =$_POST["phoneNum"];
    $dropdown =$_POST["dropdown"];
$sql_query ="INSERT INTO registration(fName,lName,password,email,phoneNum,dropdown) VALUES ('".$fName."','".$lName."','".$password."','".$email."','".$phoneNum."','".$dropdown."')";
if(mysqli_query($conn, $sql_query))
{
    header("Location:student_index.php");
}
else{
    echo'Not inserted.';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/register.css">
</head>
<body>
    <div class="container register">
        <div class="row ">
          <div class="col-md-4 my-auto mx-auto register-left">
            <img src="./assets/img/pngkit_teaching-icon-png_3812397.png" alt=""/>
            <p>Learn and Download</p>
            <form action="login_student.php" method="POST">
              <div class="form-group">
                <input type="email" class="form-control mr-2" name="email" placeholder="Email *"/>
               </div>
               <div class="form-group">
                <input type="password" class="form-control mr-2" name="password" placeholder="Password *"/>
            </div>
          </br>
                <button class="mr-2" type="submit" name="login" >Login</button>
        </form>
         </div>
        </br>
          <div class="col-md-8 register-right">
             <form action="#" method="post" enctype ="multipart/form-data" id="reg-form"> 
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <h3 class="register-heading">Apply as a Student</h3>
                      <div class="row register-form "id='reg-form'>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="text" class="form-control" required name="fName"  placeholder="First Name *"id="fName">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required name="lName" placeholder="Last Name *"id="lName" >
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" required name="password" placeholder="Password *"id="password"onChange="onChange()">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" required name="confirm_pass" placeholder="Confirm Password *"id="confirm_pass"onChange="onChange()">
                                   <small id=confirm_error></small>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="email" required name="email"  class="form-control" placeholder="Email *"id="email">
                              </div>
                              <div class="form-group">
                                  <input type="text" minlength="10" maxlength="10" required name="phoneNum" class="form-control" placeholder="Phone *"id="phoneNum">
                              </div>
                              <div class="form-group">
                                  <select required name="dropdown" class="form-control">
                                      <option class="hidden"selected disabled>Select your Course</option>
                                      <option>BE-IT</option>
                                      <option>BE-Civil</option>
                                      <option>BE-Computer</option>
                                  </select>
                              </div>
                              <input type="submit" class="btnRegister" name="save" value="Register"/>
                          </div>
                      </div>
                      </div>                
                  </div>
              </form>
              </div>
<script>
var password = document.getElementById("password")
  , confirm_pass = document.getElementById("confirm_pass");

function validatepassword(){
  if(password.value != confirm_pass.value) {
    confirm_pass.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_pass.setCustomValidity('');
  }
}
password.onchange = validatepassword;
confirm_pass.onkeyup = validatepassword;
    </script>
    </body>
              </html>
