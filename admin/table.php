<script src="assets/js/jquery.min.js"></script>
<?php 
    include("includes/header.php"); 
    include("includes/connection.php");


    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="delete from requests where requestid=$id";
        $result=mysqli_query($connection,$query);
    }

    if(isset($_POST['data_database'])){
        $id=htmlentities($_POST['dltid']);
        $branch=htmlentities($_POST['branch']);
        $kind=htmlentities($_POST['kind']);
        $author=htmlentities($_POST['author']);
        $timer=htmlentities($_POST['timer']);
        $title=htmlentities($_POST['title']);
        $links=htmlentities($_POST['links']);
        $shortinfo=htmlentities($_POST['shortinfo']);
        $information=htmlentities($_POST['information']);
        $coded=htmlentities($_POST['coded']);
        $keywords=htmlentities($_POST['keywords']);


        $author=str_replace("'","\'",$author);
        $title=str_replace("'","\'",$title);
        $links=str_replace("'","\'",$links);
        $shortinfo=str_replace("'","\'",$shortinfo);
        $information=str_replace("'","\'",$information);
        $coded=str_replace("'","\'",$coded);
        $keywords=str_replace("'","\'",$keywords);

        //delete from request
        $query="delete from requests where requestid=$id";
        $dlt=mysqli_query($connection,$query);
        //branch
        $query="select branchid from branch_table where branch='{$branch}'";
        $bresult=mysqli_query($connection,$query);
        $brow=mysqli_fetch_row($bresult);
        $branchid=$brow[0];
        $query="UPDATE `branch_table` SET `counter`=counter+1 WHERE branchid=$branchid";
        $bresult=mysqli_query($connection,$query);

        //kind
        $query="select kindid from kind_table where kind='{$kind}'";
        $bresult=mysqli_query($connection,$query);
        $brow=mysqli_fetch_row($bresult);
        $kindid=$brow[0];
        $query="UPDATE `kind_table` SET `counter`=counter+1 WHERE kindid=$kindid";
        $bresult=mysqli_query($connection,$query);

        //insert
        //add kkwyword insertion
        $query="INSERT INTO `posts`(`branchid`, `kindid`, `topic`, `shortinfo`, `longinfo`, `author`, `links`, `subtime`, `code_data`,`keywords`) VALUES (
        $branchid,$kindid,'{$title}','{$shortinfo}','{$information}','{$author}','{$links}','{$timer}','{$coded}','{$keywords}')";
        $iresult=mysqli_query($connection,$query);
    }
    
    $query="SELECT `requestid`, `parainfo`, `author`, `title`, `subtime`, `kind`, `branch`, `links` FROM `requests`";
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
                        <th>Author</th>
                        <th>Branch</th>
                        <th>Kind</th>
                        <th>Title</th>
                        <th>Submitted Time</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                            <?php 
                                while($row=mysqli_fetch_row($result)){
                                echo "<tr>
                                        <td>$row[2]</td>
                                        <td>$row[6]</td>
                                        <td>$row[5]</td>
                                        <td>$row[3]</td>
                                        <td>$row[4]</td>
                                        <td><a href='form-verification.php?id={$row[0]}'>View</a></td>
                                        <td><a href='table.php?delete={$row[0]}'>Delete</a></td>
                                    </tr>";
                                }
                            ?>
                            
                    </tbody>                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!--End Datatables-->
<?php include("includes/footer.php"); ?>

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
                                A
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

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.26.6/js/jquery.tablesorter.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

            <!--Bootstrap -->
            <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
            <!-- MetisMenu -->
            <script src="assets/lib/metismenu/metisMenu.js"></script>


            <!-- Metis core scripts -->
            <script src="assets/js/core.js"></script>
            <!-- Metis demo scripts -->
            <script src="assets/js/app.js"></script>

                <script>
                    $(function() {
                      Metis.MetisTable();
                      Metis.metisSortable();
                    });
                </script>
        </body>

</html>
