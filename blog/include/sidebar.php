<?php include "database/config.php" ;?>
<link href="css/style.css" rel="stylesheet">
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