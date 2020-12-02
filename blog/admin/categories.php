<?php 
include 'includes/header.php';
include 'includes/config.php';
?>

    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/navigation.php'; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to the Administration Panel
                        </h1>
					<div class="col-sm-6">
						<form action="includes/functions.php" method="post">
							<div class="form-group">
								<input type="text" name="cat_title" placeholder="Category Title" class="form-control">
							</div>
							<div class="form-group">
								<a href="#"><input type="submit" name="cat_add" value="Add Category" class="btn btn-primary"></a>
							</div>
						</form>

                        </div>
                    </div>
                    <div class="row">
               	<div class="col-sm-6">
               <table class="table table-bordered table-striped table-hover">
                 <thead>
                   <th>Category ID</th>
                   <th>Category Title</th>
                    <th>Delete</th>
                 </thead>
                 <tbody>
                   <?php show_category(); ?>
                 </tbody>
               </table>
						</div>
                <!-- /.row -->
            </div>
        </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
