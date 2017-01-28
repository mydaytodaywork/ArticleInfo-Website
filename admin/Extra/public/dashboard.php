<?php
    include("includes/header.php");
?>
<hr>
<hr>
<div class="row">
    <div class="col-lg-8">
	<div class="box">
	    <header>
	    </header>
	    <div class="body" id="trigo" style="height: 250px;"></div>
	</div>
    </div>
    <div class="col-lg-4">
	<div class="box">
	    <div class="body">
		<table class="table table-condensed table-hovered sortableTable">
		    <thead>
			<tr>
			    <th>Country <i class="fa sort"></i></th>
			    <th>Visit <i class="fa sort"></i></th>
			    <th>Time <i class="fa sort"></i></th>
			</tr>
		    </thead>
		    <tbody>
			<tr class="active">
			    <td>Andorra</td>
			    <td>1126</td>
			    <td>00:00:15</td>
			</tr>
			<tr>
			    <td>Belarus</td>
			    <td>350</td>
			    <td>00:01:20</td>
			</tr>
			<tr class="danger">
			    <td>Paraguay</td>
			    <td>43</td>
			    <td>00:00:30</td>
			</tr>
			<tr class="warning">
			    <td>Malta</td>
			    <td>547</td>
			    <td>00:10:20</td>
			</tr>
			<tr>
			    <td>Australia</td>
			    <td>560</td>
			    <td>00:00:10</td>
			</tr>
			<tr>
			    <td>Kenya</td>
			    <td>97</td>
			    <td>00:20:00</td>
			</tr>
			<tr class="success">
			    <td>Italy</td>
			    <td>2450</td>
			    <td>00:10:00</td>
			</tr>
		    </tbody>
		</table>
	    </div>
	</div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
	<div class="box">
	    <header>
		
	    </header>
	    <div id="calendar_content" class="body">
		<div id='calendar'></div>
	    </div>
	</div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
                    <div id="right" class="bg-light lter">
                        <!-- .well well-small -->
                        
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                       
                        <!-- /.well well-small -->
                        <!-- .well well-small -->
                        <div class="well well-small dark">
                            <span>Default</span><span class="pull-right"><small>20%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-info" style="width: 20%"></div>
                            </div>
                            <span>Success</span><span class="pull-right"><small>40%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-success" style="width: 40%"></div>
                            </div>
                            <span>warning</span><span class="pull-right"><small>60%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                            </div>
                            <span>Danger</span><span class="pull-right"><small>80%</small></span>
                        
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
                            </div>
                        </div>                    </div>
                    <!-- /#right -->
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


            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>
            <!-- Screenfull -->


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.dashboard();
                    });
                </script>

            <script src="assets/js/style-switcher.js"></script>
        </body>

</html>
