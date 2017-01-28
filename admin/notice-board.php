<?php 
	include("includes/header.php");
	include("includes/connection.php");
	$query="SELECT `notice` FROM `notice_board`";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);
?>
<div class="row">
<div class="col-lg-6">
    <div class="box dark">
        <header>
            <div class="icons"><i class="fa fa-edit"></i></div>
            <h5>Notice Board</h5>
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
        	<?php echo $row[0]; ?>
        </div>
    </div>
</div>

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

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/jquery.uniform.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.3/jquery.tagsinput.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/autosize.js/1.18.17/jquery.autosize.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.2/js/bootstrap-switch.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.1/js/bootstrap-datepicker.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.0.1/js/bootstrap-colorpicker.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->
            <script src="assets/lib/screenfull/screenfull.js"></script>

                    <script src="/assets/lib/inputlimiter/jquery.inputlimiter.js"></script>
                    <script src="/assets/lib/validVal/js/jquery.validVal.min.js"></script>
                    <script src="/assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>

            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.formGeneral();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
