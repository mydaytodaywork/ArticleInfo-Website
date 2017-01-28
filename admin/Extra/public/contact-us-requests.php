<?php 
  include("includes/header.php"); 
  include("includes/connection.php");

  if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="delete from contact_us_table where cno=$id";
        $result=mysqli_query($connection,$query);
  }

  
  if(isset($_POST['contact_us_reply'])){
        $reply=$_POST['reply'];
        $email=$_POST['email'];
        $cno=$_POST['cno'];
        $subj=$_POST['subject'];

        //mark it replied ..
        $query="UPDATE `contact_us_table` SET `marking`=1 WHERE cno=$cno";
        $result=mysqli_query($connection,$query);

        //send email
        //include("includes/replymail.php");


        //load to contact_us_reply
        $t=time();
        $timet=date('d-m-Y, H:i:s',$t);
        $query="INSERT INTO `contact_us_reply`(`cno`, `reply`, `reply_time`) VALUES ($cno,'{$reply}','{$timet}')";
        $result=mysqli_query($connection,$query); 
  }  


  $query="SELECT `cno`, `name`, `email`, `institute`, `subject`, `message`, `received_time`,`marking` FROM `contact_us_table`";
  $result=mysqli_query($connection,$query);


?>

   <div class="row">
            <div class="col-lg-12">
                  <div class="box">
                      <header>
                          <h5>Requests</h5>
                      </header>
                      <div id="collapse4" class="body">
                          <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                              <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Institute/Company</th>
                                  <th>Subject</th>
                                  <th>Received Time</th>
                                  <th>Message</th>
                                  <th>Reply</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                                      <?php 
                                          while($row=mysqli_fetch_row($result)){
                                            if($row[7]==1) continue;
                                          $msg=substr($row[5],0,100);
                                          $extra="";
                                          if(strlen($row[5])>100) $extra="....";
                                          echo "<tr>
                                                  <td>$row[1]</td>
                                                  <td>$row[2]</td>
                                                  <td>$row[3]</td>
                                                  <td>$row[4]</td>
                                                  <td>$row[6]</td>
                                                  <td>$msg $extra </td>
                                                  <td><a href='contact-us-reply.php?id={$row[0]}'>Reply</a></td>
                                                  <td><a href='contact-us-requests.php?delete={$row[0]}'>Delete</a></td>
                                                </tr>";
                                          }
                                      ?>
                                      
                              </tbody>                </table>
                      </div>
                  </div>
              </div>
          </div>

          <?php include("includes/footer.php"); ?>

            <!-- /#wrap -->
            <!-- /#footer -->
            <!-- #helpModal -->
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

                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.pie.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

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
