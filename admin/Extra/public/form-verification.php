<?php
  include("includes/header.php");
  include("includes/connection.php");
  $id=$_GET['id'];
  $query="SELECT `parainfo`, `author`, `title`, `subtime`, `kind`, `branch`, `links` FROM `requests` WHERE requestid=$id";
  $result=mysqli_query($connection,$query);
  $answer=mysqli_fetch_row($result);
?>

        <div class="box">
            <header class="dark">
                <h5>Article Verification</h5>
                <!-- .toolbar -->
                    <!-- /.toolbar -->

            </header>
            <div id="collapse2" class="body">
                <form class="form-horizontal" id="popup-validation" action="table.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-lg-4">Branch</label>
                        <div class="col-lg-4">
                            <select name="branch" id="sport" class="validate[required] form-control">
                                <?php
                                	$query1="select branch from branch_table";
                                	$run=mysqli_query($connection,$query1);
                                	while($running=mysqli_fetch_row($run)){
                                		if($running[0]==$answer[5])
                                			echo "<option selected value='{$running[0]}'>$running[0]</option>";
                                		else
                                			echo "<option value='{$running[0]}'>$running[0]</option>";
                                	}
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Kind</label>
                        <div class="col-lg-4">
                            <select name="kind" id="sport" class="validate[required] form-control">
                                <?php
                                	$query1="select kind from kind_table";
                                	$run=mysqli_query($connection,$query1);
                                	while($running=mysqli_fetch_row($run)){
                                		if($running[0]==$answer[4])
                                			echo "<option selected value='{$running[0]}'>$running[0]</option>";
                                		else
                                			echo "<option value='{$running[0]}'>$running[0]</option>";
                                	}
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Author</label>

                        <div class=" col-lg-4">
                            <input value="<?php echo $answer[1]; ?>" class="validate[required] form-control" type="text"
                                   name="author" id="url1"/>
                        </div>
                    </div>

					<div class="form-group">
                        <label class="control-label col-lg-4">Submitted Time</label>
                        <div class=" col-lg-4">
                            <input value="<?php echo $answer[3]; ?>" class="validate[required] form-control" type="text"
                                   name="timer" id="url1"/>
                        </div>
                    </div>                  


					<div class="form-group">
                        <label class="control-label col-lg-4">Title</label>
                        <div class=" col-lg-4">
                            <textarea class="validate[required] form-control" type="text"
                                   name="title" id="url1"><?php echo $answer[2]; ?></textarea>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-lg-4">Links</label>
                        <div class=" col-lg-4">
                            <textarea class="validate[required] form-control" type="text"
                                   name="links" id="url1"><?php echo $answer[6]; ?></textarea>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-lg-4">Short Text(Homepage)</label>
                        <div class=" col-lg-4">
                            <textarea class="validate[required] form-control" type="text"
                                   name="shortinfo" id="url1" id="shorttextid" rows="10" cols="500"></textarea>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-lg-4">Write Up</label>
                        <div class=" col-lg-4">
                            <textarea class="validate[required] form-control" type="text"
                                   name="information" id="url1" rows="20" cols="500"><?php echo $answer[0]; ?></textarea>
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="control-label col-lg-4">Code (If any)</label>
                        <div class=" col-lg-4">
                            <textarea class=" form-control" type="text"
                                   name="coded" id="url1" rows="10" cols="500"></textarea>
                        </div>
                    </div> 

                    <input type="hidden" name="dltid" value="<?php echo $id; ?>"/>

                    <div class="form-actions no-margin-bottom">
                        <input type="submit" name="data_database" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- /.row -->

                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.outer -->
                </div>
                <!-- /#content -->
                    
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
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <script src="/assets/lib/jquery-validation/jquery.validate.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formValidation();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
