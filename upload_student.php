<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/notes.css">
    <link rel="stylesheet"href="./assets/css/button.css">
</head>
  <body >
  <header class="super_container sticky-top">
    <div class="container">
      <nav class=" heightNavbar navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">ER Drive Notes</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-center">
            <li class="nav-item active">
              <a class="nav-link" href="teacher_index.php" > Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  mx-1">
              <a class="nav-link" href="teacher_notes.php" >Notes</a>
            </li>
            <li class="nav-item  mx-1">
              <a class="nav-link" href="teacher_QuestionBank.php" >Question Bank</a>
            </li>
            <li class="nav-item  mx-1">
              <a class="nav-link" href="#">About Us</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 d-none" id="search" type="search" placeholder="Search"
              aria-label="Search">
            <button onmouseover="hideSearchBox()" class="btn my-2 my-sm-0" type="submit"><i
                class="fas fa-search"></i></button>
        </div>
        </form>
        <div class="dropdown">
          <button class="dropbtn"><i class="fa fa-user-circle fa-1x"></i></button>
          <div class="dropdown-content">
            <a href="#">My profile</a>
            <a href="upload_student.php">Upload a file</a>
            <a href="#">Settings</a>
            <a href="index.php">Logout</a>
          </div>
        </div>

    </div>
    </nav>
    </div>
  </header>
<div class="container">
<form action="upload.php" method="post"enctype="multipart/form-data">
<div class="row pt-3">
    <label for="fileName" class="col-form-label">FILE NAME</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="N_notes" placeholder="File Name">
    </div>
  </div>
  <div class=" row py-3">COURSES
  </div>
  <div class="row p-3">
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="BE-IT" name="N_courses">
      <label class="form-check-label" for="BE-IT">
      BE-IT
      </label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="BE-CIVIL" name="N_courses">
      <label class="form-check-label" for="BE-CIVIL">
      BE-CIVIL
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="BE-COMPUTER" name="N_courses">
      <label class="form-check-label" for="COMPUTER">
      BE-COMPUTER
      </label>
      </div>
    </div>
  </div> 
<div class=" row  py-3">SEMESTER 
</div>
  <div class="row p-3">
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="1st" name="N_semester">
      <label class="form-check-label" for="1st">
      1st
      </label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="2nd" name="N_semester">
      <label class="form-check-label" for="2nd">
      2nd
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="3rd" name="N_semester">
      <label class="form-check-label" for="3rd">
      3rd
      </label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="4th" name="N_semester">
      <label class="form-check-label" for="4th">
      4th
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="5th" name="N_semester">
      <label class="form-check-label" for="5th">
      5th
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="6th" name="N_semester">
      <label class="form-check-label" for="6th">
      6th
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="7th" name="N_semester">
      <label class="form-check-label" for="7th">
      7th
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="8th" name="N_semester">
      <label class="form-check-label" for="8th">
      8th
      </label>
      </div>
    </div>
  </div>
<div class=" row  py-3">SUBJECTS    
</div>
<div class="row p-3">
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="DATABASE" name="N_subjects">
      <label class="form-check-label" for="DATABASE">
      DATABASE
      </label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio"  value="SOFTWARE" name="N_subjects">
      <label class="form-check-label" for="SOFTWARE">
      SOFTWARE
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="MICROPROCESSOR" name="N_subjects">
      <label class="form-check-label" for="MICROPROCESSOR">
      MICROPROCESSOR
      </label>
      </div>
    </div>
    <div class="col-sm">
       <div class="form-check">
      <input class="form-check-input" type="radio" value="MATH IV" name="N_subjects">
      <label class="form-check-label" for="MATH IV">
      MATH IV
      </label>
      </div>
    </div>
</div>
<div class=" row  py-3">FILE TYPE    
</div>
<div class="row p-3">
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="Notes" name="text_file">
      <label class="form-check-label" for="Notes">
      Notes
      </label>
      </div>
    </div>
    <div class="col-sm">
      <div class="form-check">
      <input class="form-check-input" type="radio" value="questionBank" name="text_file">
      <label class="form-check-label" for="Question Bank">
      Question Bank
      </label>
      </div>
    </div>
</div>
SELECT FILE TO UPLOAD:
<div class="row mt-2">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
</div>
</form>
 </div>
  <footer class="my-4">
    <div class="rowColor">
      <div class="container">
        <div class="row">
          <div class="col  md-4">
              <div class="text-center">
                <ul>
                 <li class="footerColor">About Us</li> 
                 <li class="footerColor">Our mission is to provide a Notes and Question Banks to anyone.</li> 
                </ul>
              </div>
          </div>
          <div class="col  md-4">
            <div class="text-center">
              <ul>
                <li class="footerColor">Email:*******@gmail.com</li>
                <li class="footerColor">Phone no: +977-*******</li>
              </ul>
            </div>
        </div>
           <div class="col  md-4">
            <div class="text-center">
              <ul>
              </ul>
            </div>
          </div>
        </div>
      </div>
        <div class="text-center pb-2">
          <strong id="dateNow"></strong>
        </div>
    </div>
  </footer>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/mystyle.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/69abd925db.js" crossorigin="anonymous"></script>
</body>
</html>