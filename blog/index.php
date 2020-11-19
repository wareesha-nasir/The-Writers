<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogger</title>
  <link rel="stylesheet" href="css/nav.css">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body style="background-color: rgb(248, 246, 246);">
  <header>
    <div class="container-fluid nav-confluid">
      <input type="checkbox" name="" id="check">
      <!-- brandname -->
      <div class="logo-container">
        <h3 class="logo">The Writer</h3>
      </div>
      <!-- options-->
      <div class="nav-btn">
        <div class="nav-links">
          <ul>
            <li class="nav-link" style="--i: .6s">
              <a href="index.php">Home</a>
            </li>
            <li class="nav-link" style="--i: .85s">
              <a href="donate.php">Join</a>

            </li>
            <li class="nav-link" style="--i: 1.1s">
              <a href="signin.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="hamburger-menu-container">
        <div class="hamburger-menu">
          <div></div>
        </div>
      </div>
    </div>
  </header>
  <!-- /.container -->
  <!-- main image sec-->
  <div>
    <img src="resources/blog.jpg" style="width: 100%; height:500px;">
  </div>
  <!--content section-->
  
  <div class="row">
    <div class="col-md-8 col-sm-12">
        <h1 >RECENT POST</h1>
        <div class="card mb-3" id="main-card" style="width: 80%; margin-left:10%;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="resources/corona.jpg" class="card-img" style="width: 100%; height:100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
        </div>
        <div class="card mb-3" id="main-card" style="max-width: 80%; margin-left:10%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="resources/bitcoin.jpg" class="card-img" alt="..." style="width: 100%; height:100%; ">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
        <div class="card mb-3" id="main-card" style="width: 80%; margin-left:10%;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="resources/machine learning.jpg" class="card-img" style="width: 100%; height:100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="side-bar">
            <div class="search-section">
              <h2>Search</h2>
              <form method="POST" action="">
                <input type="search" placeholder="search..." name="search-item" class="text">
              </form>
            </div>
            <div class="topic">
              <h2>Topics</h2>
              <ul>
                <li><a href="#">Academics</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Social</a></li>
                <li><a href="#">Motivational</a></li>
              </ul>
            </div>
          </div>
    </div>
</div>
</body>

</html>