<?php

require "connection.php";

// $sql = 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <title>Enrollment</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><img src="image/loudeslogo.png" alt="logo" width= "70px" >Truth, Commitment and Excellence</a>
              <!-- <a href="#" class="tagline"> </a> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: blue; font-size: 23px;"></i></span>
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
                
              </div>
            </div>
          </nav>









    <!-- navbar end -->






    <!-- homestart -->
    <div class="HOME">
    <h1 class="BSITh1">BSIT Enrollment</h1>
    <button id="enrollb" class="enrollb">Student</button>
    <button id="admins" class="admins">Admin</button>

    </div>


<!-- student form -->
   
<div class="login" id="login">
    <!-- <br> -->
        <h1>Log in </h1>    
<form method="post" class="loginform">
  <div class="input">
    <label for="InputUname" class="form-label">Username</label>   
    <input type="text" class="form-control" id="InputUname"  name="username" required>
    </div>
    <!-- <br> -->
  <div class="input">
    <label for="InputUname" class="form-label">Email</label>   
    <input type="email" class="form-control" id="InputEmail"  name="email" required>
    </div>
    <!-- <br> -->
  <div class="input">
    <label for="InputPassword" class="form-label">Password</label>   
    <input type="text" class="form-control" id="InputPassword"  name="password" required>
    </div>
    
    <!-- <br> -->
    <button type="submit" class="submitin" name="inbutton">Log in</button>
    <br>
    <a href="forgot.php" class="forgot">Forgot password?</a>
    <p>Don't have an account? <a href="signin" class="signin">Sign in</a></p>
    </form>
</div>


<!-- home -->





<!-- admin -->


<div class="loginadmin" id="loginadmin">
    <br>
        <h1> Admin </h1>  
<form method="post" class="adminform">
  <div class="inputadmin">
    <label for="InputUname" class="form-label">Username</label>   
    <input type="text" class="form-control" id="InputUname"  name="username" required>
    </div>
    <br>
  <div class="inputadmin">
    <label for="InputUname" class="form-label">Email</label>   
    <input type="email" class="form-control" id="InputEmail"  name="email" required>
    </div>
    <br>
  <div class="inputadmin">
    <label for="InputPassword" class="form-label">Password</label>   
    <input type="text" class="form-control" id="InputPassword"  name="password" required>
    </div>
    
    <br>
    <button type="submit" class="submitin" name="inbutton">Submit</button>
    <br>
    
    </form>
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