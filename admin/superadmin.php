<?php 
  include("includes/header.php");
  include("includes/connection.php");

  if($_SESSION['data_type']==1)
      die("You don't have permission to access this.");

  if(isset($_POST['add_admin'])){
      $name=$_POST['name'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $type=$_POST['type'];
      $typeno=1;
      if($type=='superadmin')
          $typeno=0;
      $query="INSERT INTO `admin_table`(`name`, `username`, `password`, `type`) VALUES ('{$name}','{$username}','{$password}','{$typeno}')";
      $result=mysqli_query($connection,$query);
      echo "<h2 style='color:green;'><center>New Admin Added !!!!!</center></h2>";
  }


  if(isset($_POST['update_notice'])){
      $notice=$_POST['notice'];
      $name=$_SESSION['data_name'];
      $query="UPDATE `notice_board` SET `admin_name`='{$name}',`notice`='{$notice}' where 1";
      $result=mysqli_query($connection,$query);
      echo "<h2 style='color:green;'><center>Notice Board Updated !!!!!</center></h2>";
  }

  if(isset($_GET['delete-admin'])){
      $username=$_GET['delete-admin'];
      $query="DELETE FROM `admin_table` WHERE `username`='{$username}'";
      $result=mysqli_query($connection,$query);
      echo "<h2 style='color:green;'><center>$username Removed.</center></h2>";
  }


  $query="SELECT `name`, `username` FROM `admin_table` WHERE type=1";
  $result=mysqli_query($connection,$query);

?>
<div class="row">
<div class="col-lg-6">
    <div class="box dark">
        <header>
            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Add New Admin</h5>
            <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
              </nav>
            </div>            <!-- /.toolbar -->
        </header>
        <div id="div-1" class="body">
            <form method="post" action="superadmin.php">
                  <div class="form-group">
                        <label class="control-label col-lg-4">Name</label>
                        <div class=" col-lg-8">
                            <input class="validate[required] form-control" type="text"
                                   name="name" id="url1"/>
                        </div>
                    </div>
                    <br/><br/><br/>
                    <div class="form-group">
                                  <label class="control-label col-lg-4">Username</label>
                                  <div class=" col-lg-8">
                                      <input class="validate[required] form-control" type="text" name="username" id="url1"/>
                                  </div>
                    </div>                  
                    <br/><br/>

                    <div class="form-group">                                  
                                  <label class="control-label col-lg-4">Password</label>
                                  <div class=" col-lg-8">
                                      <input class="validate[required] form-control" type="password" name="password" id="url1"/>
                                  </div>
                    </div> 
                    <br/><br/>

                    <div class="form-group">
                        <label class="control-label col-lg-4">type</label>
                        <div class=" col-lg-8">
                              <select name="type" id="sport" class="validate[required] form-control">
                                  <option selected value='admin'>Admin</option>";
                                  <option value='superadmin'>Super Admin</option>";
                              </select>
                        </div>
                    </div> 
                    <br/><br/>

                  <div class="form-actions no-margin-bottom">
                      <input type="submit" name="add_admin" value="Add Admin" class="btn btn-primary">
                  </div>

            </form>
        </div>
    </div>
</div>

<div class="row">
<div class="col-lg-6">
    <div class="box dark">
        <header>
            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Notice for Users</h5>
            <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
              </nav>
            </div>
        </header>
        <div id="div-1" class="body">
            <form method="post" action="superadmin.php">
                    <div class="form-group">
                        <div class=" col-lg-12">
                              <textarea rows="10" cols="40" class="validate[required] form-control" type="text" name="notice" id="url1"/></textarea>
                        </div>
                    </div> 

                    <div class="form-actions no-margin-bottom">
                      <input type="submit" name="update_notice" value="Update Notice Board" class="btn btn-primary" style="margin-top:12px" />
                    </div>
            </form>
        </div>
    </div>
</div>


<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">
    <div class="box dark">
        <header>
            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Delete Admin</h5>
            <!-- .toolbar -->
            <div class="toolbar">
              <nav style="padding: 8px;">
                  <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                      <i class="fa fa-minus"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-default btn-xs full-box">
                      <i class="fa fa-expand"></i>
                  </a>
              </nav>
            </div>
        </header>
        <div id="div-1" class="body">
            <div id="collapse4" class="body">
                <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                            <?php 
                                while($row=mysqli_fetch_row($result)){
                                echo "<tr>
                                        <td>$row[0]</td>
                                        <td>$row[1]</td>
                                        <td><a href='superadmin.php?delete-admin={$row[1]}'>Delete</a></td>
                                    </tr>";
                                }
                            ?>
                            
                    </tbody>                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>

</div></div></div>
<?php include("includes/footer.php"); ?>

        <div id="helpModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /#helpModal -->
            <!--jQuery -->
            <script src="assets/lib/jquery/jquery.js"></script>

                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

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

                <script>
                    $(function() {
                      Metis.metisSortable();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
