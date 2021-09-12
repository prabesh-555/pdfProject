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
$sql_query ="INSERT INTO teacher_reg(first_name,last_name,pass_word,e_mail,phone_Num,subjects) VALUES ('".$first_name."','".$last_name."','".$pass_word."','".$e_mail."','".$phone_Num."','".$subjects."')";
if(mysqli_query($conn, $sql_query))
{
header("Location: teacher_index.php");
exit();
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
            <form action="teacher_login_code.php" method="POST">
              <div class="form-group">
                <input type="email" class="form-control mr-2" name="e_mail" placeholder="Email *"/>
               </div>
               <div class="form-group">
                <input type="password" class="form-control mr-2" name="pass_word" placeholder="Password *"/>
                </div>
                </br>
                <button class="mr-2" name="log_in" type="submit" >Login</button>
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
                                      <option>Engineering Mathematics I</option>
                                      <option>Physics</option>
                                      <option>Thermal Science</option>
                                      <option> Engineering Drawing</option>
                                      <option>Programming in C</option>
                                      <option>Basic Electrical Engineering</option>
                                      <option>Engineering Mathmatics II</option>
                                       <option> Chemistry</option>
                                       <option>Object Oriented Programming in C++</option>
                                       <option>Communication Technique</option>
                                       <option>Mechanical workshop</option>
                                        <option>Applied Mechanics(Statics)</option>
                                        <option>Engineering Mathmatics III</option>
                                         <option>Civil Engineering Materials</option>
                                        <option>Fluid Mechanics</option>
                                        <option>Building Technology</option>
                                        <option>Basic Electronics Engineering</option>
                                        <option>Applied Mechanics(Dynamics)</option>
                                        <option>Numerical Methods</option>
<option>Strength of Materials</option>
<option>Hydraulics</option>
<option>Surveying I</option>
<option>Engineering Geology</option>
<option>Surveying II</option>
<option>Survey Field Project</option>
<option>Water Resources Engineering I</option>
<option>Structural Analysis I</option>
<option>Soil Mechanics</option>
<option>Water Supply Engineering</option>
<option>Probability and Statics</option>
<option>Water Resources Engineering II</option>
<option>Foundation Engineering</option>
<option>Structural Analysis</option>
<option>Sanitary Engineering</option>
<option>Engineering Hydrology</option>
<option>Transportation Engineering I</option>
<option>Design of Steel and Timber structures</option>
<option>Design of R.C.C Structures</option>
<option>Estimating and Valuation</option>
<option>Engineering Econimics Elective I</option>
<option>Tranportation Engineering II</option>
<option>Construction Project Management</option>
<option>Professional Practice</option>
<option>Elective II</option>

<option>Communication Techniques</option>
<option>Problem Solving Techniques</option>
<option>Basic Engineering Engineering</option>
<option>Programming in C</option>
<option>Network Theory</option>
<option>Mathmatical Foundations of Computer Science</option>
<option>Electronics Devices</option>
<option>Engineering Drawing</option>
<option>Object Oriented Programming</option>
<option>Logic Circuits</option>
<option>Data Structure and Algorithms</option>
<option>Probability and Queuing Theory</option>
<option>Web Technology</option>
<option>Electronic Crcuits and Instrumentation</option>
<option>Microprossesor and Assembly Language Programming</option>
<option>Programming in JAVA</option>
<option>Database Management System</option>
<option>Software Engineering Fundamantals</option>
<option>Project I</option>
<option>Applied Operating System</option>
<option>Numericals Methods</option>
<option>Computer Organization and Artitecture</option>
<option>Organization and Management</option>
<option>Signals,Systems and Processings</option>
<option>Principles of Communication</option>
<option>Computer Graphics</option>
<option>Compueter Networks</option>
<option>Intelligent Systems</option>
<option>Information Systems</option>
<option>Object Oreinted Design and Modelling through UML</option>
<option>Project II</option>
<option>Multimedia System</option>
<option>ICT Project Management</option>
<option>Business Process and IT Strategy</option>
<option>Network Programming</option>
<option>Telecommunications</option>
<option>Mobile and Wireless Communication/option>
<option>Engineering Economics</option>
<option>Social and professional Issues in IT</option>
<option>Project III</option>
<option>Communication Technique</option>
<option>Programming in C</option>
<option>Basic Electrical Engineering</option>
<option>Mechanical Workshop</option>
<option>Engineering Drawing</option>
<option>Object Oriented Programming in C++</option>
<option>Thermal Science</option>
<option>Applied Mechanics</option>
<option>Data Structure and Algorithm</option>
<option>Electrical Engineering Material</option>
<option>Electronic Devices</option>
<option>Logic Circuits</option>
<option>Instrumentation</option>
<option>Electronic Circuits</option>
<option>Theory of Computation</option>
<option>Microprossesors</option>
<option>Numericals Methods</option>
<option>Microprossesors System and Interfacing</option>
<option>Operating System</option>
<option>Computer Graphics</option>
<option>Integrated Digital Electronics</option>
<option>Probability and Statistics</option>
<option>Simulation and Modeling</option>
<option>Data Communication</option>
<option>Data Management System</option>
<option>Object Oriented Software Engineering</option>
<option>Minor Projects</option>
<option>Engineering Economics</option>
<option>Digital Signal Processing</option>
<option>Computer Architecture</option>
<option>Computer Network</option>
<option>Organization and Management</option>
<option>Artificial Intelligence</option>
<option>Image Processing and Pattern Recognition</option>

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
