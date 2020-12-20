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
  <div class="row">
<div class="col-md-8 col-sm-12">
    <h1 >RECENT POST</h1>
  <!--content section-->
  <?php
  global $conn;
  $sql="SELECT * FROM post";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($res)){
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_category = $row['post_category'];
    $post_category_id = $row['post_category_id'];
    $post_content = $row['post_content'];
    $post_image = $row['post_image'];
    $date = $row['post_date'];
  ?> 
  
    <div class="card mb-3" id="main-card" style="width: 80%; margin-left:10%;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="admin/images/<?php echo $post_image; ?>" class="card-img" style="width: 100%; height:100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <a href="#" style="color: rgb(8, 101, 138);; font-weight:600;"><h2 class="card-title"><?php echo $post_title?></h2></a>
              <i class="fa fa-user-o" aria-hidden="true" style="color:#444;"><?php echo $post_author; ?></i>&nbsp;
                <i class="fa fa-calendar-o" aria-hidden="true" style="color: #444;"> <?php echo $date?> </i>
              <p class="card-text" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                </p>
                <button class="btn btn-outline-secondary" type="button" 
               >Read</button>
               </div>
          </div>
        </div>
    </div>

 <?php }
  ?>
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