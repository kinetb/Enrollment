<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Enrollment</title>
</head>
<body>
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><img src="image/lourdeslogo.jpg" alt="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  
                 
                    
                  
                 
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

 -->







    <!-- navbar end -->
    <h1 class="BSITh1">BSIT Enrollment</h1>
    <button id="enrollb" class="enrollb">Enroll</button>


















   
<div class="login" id="login">
    <br>
        <h1>Log in </h1><br>    
<form method="post" class="loginform">
  <div class="mb-3">
    <label for="InputUname" class="form-label">Username</label>   
    <input type="text" class="form-control" id="InputUname"  name="username" required>
    </div>
    <br>
  <div class="mb-3">
    <label for="InputUname" class="form-label">Email</label>   
    <input type="email" class="form-control" id="InputEmail"  name="email" required>
    </div>
    <br>
  <div class="mb-3">
    <label for="InputPassword" class="form-label">Password</label>   
    <input type="text" class="form-control" id="InputPassword"  name="password" required>
    </div>
    </form>
    <br>
    <button type="submit" class="submitin" name="inbutton">Log in</button>
    <br><br>
    <a href="forgot.php" class="forgot">Forgot password?</a>
    <p>Don't have an account? <a href="signin" class="signin">Sign in</a></p>
</div>
    <!-- <table class="table1">
        <thead>
            <tr>
                <th>
                    
                </th>
            </tr>
        </thead>
    </table> -->
   <script src="index.js"></script>
    
</body>
</html>