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
</head>
  <body >
    <!-- header and navbar -->

    <header class="super_container sticky-top">
    <div class="container">
      <nav class=" heightNavbar navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">ER Drive Notes</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-center">
            <li class="nav-item ">
              <a class="nav-link" href="student_index.php" > Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  mx-1">
              <a class="nav-link" href="student_notes.php" >Notes</a>
            </li>
            <li class="nav-item active mx-1">
              <a class="nav-link" href="student_QuestionBank.php" >Question Bank</a>
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
    <div class="main">
    <div class="container">
      <div class="row text-center py-4">
        <div class="col py-2">
        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Courses
            </button>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
              <ul class="list-group list-group-flush ">
                <li class="list-group-item">
                  <input type="checkbox" name="group" id="group1" value="1" title="Main List" />
                  <label for="group1">BE-IT</label>
                </li>
                <li class="list-group-item">
                  <input type="checkbox" name="group" id="group2" value="1" title="Main List" />
                  <label for="group2">BE-Civil</label>
                </li>
                <li class="list-group-item">
                  <input type="checkbox" name="group" id="group3" value="1" title="Main List" />
                  <label for="group3">BE-Computer</label>
                </li>
              </ul>
              </div>
        </div>
        </div>
        <div class="col py-2">
          <div class="dropdown">
              <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Semester
              </button>
              <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                <ul class="list-group list-group-flush ">
                  <li class="list-group-item">
                    <input type="checkbox" name="group" id="group4" value="1" title="Main List" />
                    <label for="group4">1st</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" name="group" id="group5" value="1" title="Main List" />
                    <label for="group5">2nd</label>
                  </li>
                  <li class="list-group-item">
                    <input type="checkbox" name="group" id="group6" value="1" title="Main List" />
                    <label for="group6">3rd</label>
                  </li>
                </ul>
                </div>
              </div>
        </div>
        <div class="col py-2">
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Year
                </button>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item">
                      <input type="checkbox" name="group" id="group4" value="1" title="Main List" />
                      <label for="group4">2017</label>
                    </li>
                    <li class="list-group-item">
                      <input type="checkbox" name="group" id="group5" value="1" title="Main List" />
                      <label for="group5">2018</label>
                    </li>
                    <li class="list-group-item">
                      <input type="checkbox" name="group" id="group6" value="1" title="Main List" />
                      <label for="group6">2019</label>
                    </li>
                  </ul>
                  </div>
                </div>
        </div>  
        <div class="col py-2">
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Subject
                </button>
                <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item">
                      <input type="checkbox" name="group" id="group7" value="1" title="Main List" />
                      <label for="group7">ECI</label>
                    </li>
                    <li class="list-group-item">
                      <input type="checkbox" name="group" id="group8" value="1" title="Main List" />
                      <label for="group8">Maths</label>
                    </li>
                    <li class="list-group-item">
                      <input type="checkbox" name="group" id="group9" value="1" title="Main List" />
                      <label for="group9">Programming in C</label>
                    </li>
                  </ul>
                  </div>
                </div>
        </div> 
      </div>
            <div class="row mx-auto ">
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Database Management System</h4>
                          <p class="card-text">BE-IT</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Engeneering Mathematics-I</h4>
                          <p class="card-text">BE-IT</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                   
                </div>
              </div>
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Programming in JAVA</h4>
                          <p class="card-text">BE-IT</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                   
                </div>
              </div>
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Software Engeneering Fundamentals</h4>
                          <p class="card-text">BE-IT</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                   
                </div>
              </div>
            </div>        
            <div class="row mx-auto ">
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Numerical Methods</h4>
                          <p class="card-text">BE-CMP</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Structure and Analysis I</h4>
                          <p class="card-text">BE-CMP</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                   
                </div>
              </div>
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Applied Mechanics</h4>
                          <p class="card-text">BE-CIVIL</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                   
                </div>
              </div>
              <div class="col-md-3 mx-auto">
              <div class="my-3">
                <div class="card  bg-light mb-3" style="max-width: 16rem;">
                      <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h4 class="card-title">Communication Techiniques</h4>
                          <p class="card-text">BE-CIVIL</p>
                        </div>
                        <div class="ml-auto pr-4 pb-4 d-inline">
                          <a><i class="fas fa-link"></i></a>
                          <a><i class="fas fa-download"></i></a>
                        </div>
                    </div>
                   
                </div>
              </div>
            </div>        
    </div>
    </div>
    
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
      <footer>
        <div class="text-center mb-2 pb-2">
          <strong id="dateNow"></strong>
        </div>
      </footer>
    </div>
    




<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/mystyle.js"></script>
<script src="https://kit.fontawesome.com/69abd925db.js" crossorigin="anonymous"></script>
</body>
</html>