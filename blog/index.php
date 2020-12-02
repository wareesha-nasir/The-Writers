<?php
include("database/config.php");
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
 <?php include("include/header.php"); ?>
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
                <img src="resources/bitcoin.jpg" class="card-img" style="width: 100%; height:100%">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <a href="#" style="color: rgb(8, 101, 138);; font-weight:600;"><h2 class="card-title">Bitcoin. A New Challenge</h2></a>
                  <i class="fa fa-user-o" aria-hidden="true" style="color:#444;">Wareesha</i>&nbsp;
                    <i class="fa fa-calendar-o" aria-hidden="true" style="color: #444;"> Feb 20,2020 </i>
                  <p class="card-text" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    </p>
                    <button class="btn btn-outline-secondary" type="button" 
                   >Read</button>
                   </div>
              </div>
            </div>
        </div>
        <div class="card mb-3" id="main-card" style="max-width: 80%; margin-left:10%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="resources/corona.jpg" class="card-img" alt="..." style="width: 100%; height:100%; ">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <a href="#" style="color: rgb(8, 101, 138); font-weight:600;"><h2 class="card-title">Bitcoin. A New Challenge</h2></a>
        <i class="fa fa-user-o" aria-hidden="true" style="color:#444;">Wareesha</i>&nbsp;
         <i class="fa fa-calendar-o" aria-hidden="true" style="color: #444;"> Feb 20,2020 </i>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                     <button class="btn btn-outline-secondary" type="button" 
                    >Read</button>
        
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
                <a href="#" style="color: rgb(8, 101, 138); font-weight:600;"><h2 class="card-title">Machine Learning</h2></a>
        <i class="fa fa-user-o" aria-hidden="true" style="color:#444;">Wareesha</i>&nbsp;
         <i class="fa fa-calendar-o" aria-hidden="true" style="color: #444;"> Feb 20,2020 </i>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                     <button class="btn btn-outline-secondary" type="button" 
                   ><a href="login.php">Read </a></button>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!--side-bar-->
    <div class="col-md-4 col-sm-12">
        <div class="side-bar">
            <div class="search-section">
              <h2>Search</h2>
              <form method="POST" action="">
                <input type="search" placeholder="search..." name="search-item" class="text" >
              </form>
            </div>
            <?php
            function show(){
              global $conn;
              $query="SELECT * FROM category";
              $result=mysqli_query($conn, $query);
              while($row=mysqli_fetch_assoc($result)){
                $cat_title=$row['cat_title'];
                echo "<ul id='topic-list'>
                <li><a href='#'>{$cat_title}</a></li>
              </ul>";
            }
          }
            ?>
            <div class="topic">
              <h2>Topics</h2>
              <?php show()?>
               
            </div>
          </div>
    </div>

  
</div>
</body>
</html>