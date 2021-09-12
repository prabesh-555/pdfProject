<?php
if(isset($_POST['s_ave']))
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
    $first_name =$_POST["first_name"];
    $last_name =$_POST["last_name"];
    $pass_word =$_POST["pass_word"];
    $e_mail =$_POST["e_mail"];
    $phone_Num =$_POST["phone_Num"];
    $subjects =$_POST["subjects"];
$sql="SELECT * from registration where (e_mail='$e_mail')";
      $res=mysqli_query($conn,$sql);
   if (mysqli_num_rows($res) > 0) {
       $row = mysqli_fetch_assoc($res);
       if($e_mail==$row['e_mail'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
    else{
      $error[] ='Failed : Something went wrong';
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
            <form action="teacher_login_code.php" method="POST">
              <div class="form-group">
                <input type="email" class="form-control mr-2" name="e_mail" placeholder="Email *"/>
               </div>
               <div class="form-group">
                <input type="password" class="form-control mr-2" name="pass_word" placeholder="Password *"/>
                </div>
                </br>
                <button class="mr-2" type="submit" >Login</button>
            </form>
          </div>
        </br>
          <div class="col-md-8 register-right">
             <form action="#" method="post" enctype ="multipart/form-data" id="reg-form"> 
                  <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <h3 class="register-heading">Apply as a Teacher</h3>
                      <div class="row register-form "id='reg-form'>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="text" class="form-control" required name="first_name"  placeholder="First Name *"id="first_name">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" required name="last_name" placeholder="Last Name *"id="last_name" >
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" required name="pass_word" placeholder="Password *"id="pass_word"onChange="onChange()">
                              </div>
                              <div class="form-group">
                                  <input type="password" class="form-control" required name="repeat_pass" placeholder="Confirm Password *"id="repeat_pass"onChange="onChange()">
                                   <small id=confirm_error></small>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input type="email" required name="e_mail"  class="form-control" placeholder="Email *"id="e_mail">
                              </div>
                              <div class="form-group">
                                  <input type="text" minlength="10" maxlength="10" required name="phone_Num" class="form-control" placeholder="Phone *"id="phone_Num">
                              </div>
                              <div class="form-group">
                                  <select required name="subjects" class="form-control">
                                      <option class="hidden"selected disabled>Select your Subject</option>
                                      <option>BE-IT</option>
                                      <option>BE-Civil</option>
                                      <option>BE-Computer</option>
                                  </select>
                              </div>
                              <input type="submit" class="btnRegister" name="s_ave" value="Register"/>
                          </div>
                      </div>
                      </div>                
                  </div>
              </form>
              </div>
              </div>
<script>
var pass_word = document.getElementById("pass_word")
  , repeat_pass = document.getElementById("repeat_pass");

function validatepass_word(){
  if(pass_word.value != repeat_pass.value) {
    repeat_pass.setCustomValidity("Passwords Don't Match");
  } else {
    repeat_pass.setCustomValidity('');
  }
}
pass_word.onchange = validatepass_word;
repeat_pass.onkeyup = validatepass_word;
    </script>
    </body>
              </html>
