<?php
  include "config.php";
  ?>
  <?php
  function add_category(){
  global $conn;
  if(isset($_POST['cat_add'])){
    if(empty($_POST['cat_title'])){
header("Location:../categories.php?Field_cannot_be_empty");
    }else{
      $cat_title=$_POST['cat_title'];
      $query="INSERT INTO category(cat_title) Values ('$cat_title')";
      $result= mysqli_query($conn, $query);
      if($result){
header('Location:../categories.php?category_add');
      }
    }
  }
}
add_category();
function show_category(){
  global $conn;
  $query="SELECT * FROM category";
  $result=mysqli_query($conn, $query);
  while($row=mysqli_fetch_assoc($result)){
    $cat_id = $row['cat_id'];
    $cat_title=$row['cat_title'];
    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
echo "<td> <a href='categories.php?delete_cat={$cat_id}'>Delete</a></td>";
echo "</tr>";
   }
}

function delete_category(){
  global $conn;
 if(isset($_GET['delete_cat'])){
   $del_cat=$_GET['delete_cat'];
 $query="DELETE FROM category WHERE cat_id=$del_cat";
 $result=mysqli_query($conn,$query);
 if (!$result) {
  die("Could not delete data " . mysqli_error($conn));
}
else{
  header("Location:categories.php?category_deleted");
}
 }
}
delete_category();
 function add_post(){
   global $conn;
   if(isset($_POST['publish'])){
     $post_title=$_POST['title'];
     $post_author=$_POST['author'];
     $post_category=$_POST['category'];
     $post_id=$_POST['category_id'];
     $post_content = mysqli_real_escape_string($conn,$_POST['content']);
     $date=date("l,d,F,Y");
     if (isset($_FILES['post_image'])) {
      $dir = "../images/";
      $target_file = $dir.basename($_FILES['post_image']['name']);
      if (move_uploaded_file($_FILES['post_image']['tmp_name'],$target_file)) {
        echo "Image was uploaded";
      }else{
        echo "Something went wrong while uploading image";
      }
    }
    $query="INSERT INTO post(post_title,post_category,post_category_id,post_content,post_author,post_date,post_image)
     Values('$post_title','$post_category','$post_id','$post_content','$post_author','$date','$target_file')";
   $res=mysqli_query($conn,$query);
   if($res){
    header("Location: ../posts.php?Post_added");
   }
   else{
     die("Could not send data " . mysqli_error($conn));
    header("Location: ../posts.php?source=add_new");
   }
  }
 }
add_post();
 

function show_posts(){
  global $conn;
  $query = "SELECT * FROM post";
  $result = mysqli_query($conn, $query);
 while ($row = mysqli_fetch_assoc($result)) {
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_author = $row['post_author'];
    $post_category = $row['post_category'];
    $post_category_id = $row['post_category_id'];
    $post_content = $row['post_content'];
    $post_image = $row['post_image'];
    $date = $row['post_date'];

    echo "<tr>";
    echo "<td>{$post_id}</td>";
    echo "<td>{$post_title}</td>";
    echo "<td>{$post_category}</td>";
    echo "<td>{$post_category_id}</td>";
    echo "<td>{$post_content}</td>";
    echo "<td>{$post_author}</td>";
    echo "<td>{$date}</td>";
    echo "<td><img src='images/{$post_image}' width='50px'></td>";
    echo "<td><a href='posts.php?approve_post=$post_id'>Approve</a></td>";
    echo "<td><a href='posts.php?unapprove_post=$post_id'>Unapprove</a></td>";
    echo "<td><a href='posts.php?edit_post=$post_id'>Edit</a></td>";
    echo "<td><a href='posts.php?delete_post=$post_id'>Delete</a></td>";
    echo "</tr>";

  }
}
?>