<?php 
  include("includes/header.php"); 
  include("includes/connection.php");
  if(isset($_POST['add_kind'])){
      $kind=$_POST['kind'];
      $query="INSERT INTO `kind_table`(`kind`, `counter`) VALUES ('{$kind}',0)";
      $result=mysqli_query($connection,$query);
      echo "<h3 style='color:green;'><center>Successfully Added: $kind</center></h3>";
  }
?>
<div class="row">
    <div class="col-lg-4">
        <div class="box">
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>ADD NEW Category</h5>
                <div class="toolbar">
                    <span class="label label-danger">
                        Category
                    </span>
                </div>
            </header>
            <div class="body clearfix">
                <blockquote>
                    <form method="post" action="newcategory.php">
                        Category <input type="text" required name="kind" style="margin-left:50px" /><br/><br/>
                        <div class="form-actions no-margin-bottom">
                            <input type="submit" name="add_kind" value="ADD Category" class="btn btn-primary">
                        </div>
                    </form>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
            <script src="assets/lib/jquery/jquery.js"></script>


            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>


            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
