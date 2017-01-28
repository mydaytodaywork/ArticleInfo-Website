<?php
  session_start();
  if(isset($_POST['signin'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query="select password,type,name from admin_table where username='{$username}'";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_row($result);
        //echo $row[0]." ".$row[1]." ".$row[2];
        if(mysqli_num_rows($result)==0 || $password!=$row[0])
            header("location:login.php?msg=Invalid Username or Password");
        
        $_SESSION['data_type']=$row[1];
        $_SESSION['data_name']=$row[2];   
    }
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Data Compiled</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="assets/lib/metismenu/metisMenu.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="assets/lib/animate.css/animate.css">

    <script>
        less = {
            env: "development",
            relativeUrls: false,
            rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="assets/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
    
  </head>

        <body class="  ">
            <div class="bg-dark dk" id="wrap">
                <div id="top">
                    <!-- .navbar -->
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container-fluid">
                    
                    
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <header class="navbar-header">
                                <a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" height="100%" alt="Nitrkl Data Compiled"></a>
                    
                            </header>
                    
                    
                    
                            <div class="topnav">
                                <div class="btn-group">
                                    <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-envelope"></i>
                                        <span class="label label-warning">5</span>
                                    </a>
                                    <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                                       class="btn btn-default btn-sm">
                                        <i class="fa fa-comments"></i>
                                        <span class="label label-danger">4</span>
                                    </a>
                                    <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                                       class="btn btn-default btn-sm"
                                       href="#helpModal">
                                        <i class="fa fa-question"></i>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="login.php" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                       class="btn btn-metis-1 btn-sm">
                                        <i class="fa fa-power-off"></i>
                                    </a>
                                </div>
                    
                            </div>
                    
                    
                    
                    
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    
                                <!-- .nav -->
                                <ul class="nav navbar-nav">
                                    <li><a href="dashboard.php">Dashboard</a></li>
                                    <li><a href="table.php">Requests</a></li>
                                    <li><a href="file.html">Users</a></li>
                                </ul>
                                <!-- /.nav -->
                            </div>
                        </div>

                    </nav>
                    <!-- /.navbar -->                        <header class="head">
                                <!-- /.search-bar -->
                            <div class="main-bar">
                                <h3>
              &nbsp;
            Nitrkl Data Compiled
          </h3>
                            </div>
                            <!-- /.main-bar -->
                        </header>
                        <!-- /.head -->
                </div>
                <!-- /#top -->
                    <div id="left">
                        <div class="media user-media bg-dark dker">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper bg-dark">
                                <a class="user-link" href="">
                                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
                                </a>
                        
                                <div class="media-body">
                                    <h5 class="media-heading"><?php echo $_SESSION['data_name']; ?></h5>
                                    <ul class="list-unstyled user-info">
                                        <li><a href="#">
                                          <?php 
                                              if($_SESSION['data_type']==1)
                                                  echo "Administrator";
                                              else if($_SESSION['data_type']==0)
                                                  echo "SuperAdmin";
                                          ?>
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- #menu -->
                        <ul id="menu" class="bg-blue dker">
                                  <li class="nav-divider"></li>
                                  <li class="">
                                    <a href="dashboard.php">
                                      <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                                    </a>
                                  </li>
                                  
                                  <li>
                                    <a href="notice-board.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Notice Board</span>
                                    </a>
                                  </li>

                                  <li>
                                    <a href="table.php">
                                      <i class="fa fa-table"></i>
                                      <span class="link-title">Tables</span>
                                    </a>
                                  </li>
                                  
                                  <li>
                                    <a href="newbranch.php">
                                      <i class="fa fa-font"></i>
                                      <span class="link-title">
                                    New Branch
                                  </span>  </a>
                                  </li>
                                  <li>
                                    <a href="newcategory.php">
                                      <i class="fa fa-map-marker"></i><span class="link-title">
                                    New Category
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="contact-us-requests.php">
                                      <i class="fa fa fa-bar-chart-o"></i>
                                      <span class="link-title">
                                    Contact Us Requests
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="calendar.php">
                                      <i class="fa fa-calendar"></i>
                                      <span class="link-title">
                                    Calendar
                                  </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="superadmin.php">
                                      <i class="fa fa-columns"></i>
                                      <span class="link-title">
                                        SuperAdmin Zone
                                    </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="blank.html">
                                      <i class="fa fa-square-o"></i>
                                      <span class="link-title">
                                          Blank Page
                                        </span>
                                    </a>
                                  </li>
                                  
                    </div>
                    <!-- /#left -->
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
<div class="col-lg-12">