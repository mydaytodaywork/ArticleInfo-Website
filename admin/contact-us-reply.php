<?php 
      include("includes/header.php");
      include("includes/connection.php");      
      if(!isset($_GET['id']))
          header("location:contact-us-requests.php");

      $id=$_GET['id'];
      $query="SELECT `cno`,`name`, `email`, `institute`, `subject`, `message`, `received_time` FROM `contact_us_table` WHERE cno=$id";
      $result=mysqli_query($connection,$query);
      $row=mysqli_fetch_row($result);
?>



<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Message from <?php echo $row[1]; ?> </h5>
                <div class="toolbar">
                    <span class="label label-danger">
                        Message
                    </span>
                </div>
            </header>
            <div class="body clearfix">
                <blockquote>
                    <span style="color:green; font-size:17px;"><?php echo $row[3].", ".$row[6]; ?></span>
                    <b><h3><?php echo $row[4]; ?></h3></b>
                    <?php echo $row[5]; ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>


                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
               </div>   

<div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
<div class="col-lg-12">

<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <header>
                <h5>Reply to <?php echo $row[2]; ?> </h5>
                <div class="toolbar">
                    <span class="label label-danger">
                        Reply
                    </span>
                </div>
            </header>
            <div class="body clearfix">
                <blockquote>
                    <form method="post" action="contact-us-requests.php">
                        <textarea required name="reply" rows="6" cols="70"></textarea><br/><br/>
                        <input type="hidden" name="email" value="<?php echo $row[2]; ?>" />
                        <input type="hidden" name="cno" value="<?php echo $row[0]; ?>" />
                        <input type="hidden" name="subject" value="<?php echo $row[4]; ?>" />
                        <div class="form-actions no-margin-bottom">
                            <input type="submit" name="contact_us_reply" value="Reply" required class="btn btn-primary">
                        </div>
                        
                    </form>
                </blockquote>
            </div>
        </div>
    </div>
</div>

 <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
               </div>  
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

                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.4.1/holder.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <script src="/assets/lib/plupload/js/plupload.full.min.js"></script>
                    <script src="/assets/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
                    <script src="/assets/lib/jquery.gritter/js/jquery.gritter.min.js"></script>
                    <script src="/assets/lib/formwizard/js/jquery.form.wizard.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formWizard();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
