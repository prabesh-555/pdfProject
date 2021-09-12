<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/notes.css">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet"href="./assets/css/button.css">
</head>

<body>
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
            <a href="upload_teacher.php">Upload a file</a>
            <a href="#">Edit file</a>
            <a href="#">Settings</a>
            <a href="index.php">Logout</a>
          </div>
        </div>

    </div>
    </nav>
    </div>
  </header>

  <div class="main" onmouseover="HideSearchBox()">
    <div class="container">
      <div class="card p-0 img-fluid border-0 ">
        <img class="card-img-top " src="assets/img/sharon-mccutcheon-eMP4sYPJ9x0-unsplash.jpg">
        <div class="card-img-overlay">
          <div class="pl-3 text-center">
            <p class="customTextOnImage">Learn and Download</p>
            <button class="btn btn-primary">Get Started</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="text-center cardText mt-5 pb-2 display-4">Courses</div>
      <div class="row mx-auto text-center">
        <div class="col-md-4 mx-auto">
          <div class="my-3">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">BE-IT</h4>
                <p class="card-text">Pokhara University</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mx-auto">
          <div class="my-3">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">BE-Computer</h4>
                <p class="card-text">Pokhara University</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mx-auto">
          <div class="my-3">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
              <img class="card-img-top" src="./assets/img/book.jpg" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">BE-CIVIL</h4>
                <p class="card-text">Pokhara University</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="text-center cardText mt-5 pb-2">
        <h1>Project Team Members</h1>
      </div>
      <div class="row my-auto">
        <div class="col-md-4">
          <div class="my-3 text-center">
            <div class="Customcard" style="max-width: 20rem;">
              <img class="circleImg mx-auto img-fluid" src="./assets/img/Minu.png" alt="">
              <div class="card-body">
                <small><em>Student</em></small>
                <p class="card-text"><dfn>Minu Thakur</dfn></p>
                <p>Studying at Everest Enginering College</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="my-3 text-center">
            <div class="Customcard" style="max-width: 20rem;">
              <img class="circleImg mx-auto img-fluid" src="./assets/img/Aditi.jpg" alt="">
              <div class="card-body">
                <small><em>Student</em></small>
                <p class="card-text"><dfn>Aditi Shakya</dfn></p>
                <p>Studying at Everest Enginering College</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="my-3 text-center">
            <div class="Customcard" style="max-width: 20rem;">
              <img class="circleImg mx-auto img-fluid" src="./assets/img/Reena.jpg" alt="">
              <div class="card-body">
                <small><em>Student</em></small>
                <p class="card-text"><dfn>Renna Mukhiya</dfn></p>
                <p>Studying at Everest Enginering College</p>
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
  <script src="./assets/js/bootstrap.min.js"></script>
  <script src="./assets/js/mystyle.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/69abd925db.js" crossorigin="anonymous"></script>
</body>

</html>