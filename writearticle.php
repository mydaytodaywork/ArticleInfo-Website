<!DOCTYPE HTML>
<head>
<title>Write To Us</title>
</head>
<?php 
	include("includes/header.php");
	include("includes/connection.php");

	//process the request
	if(isset($_POST['send'])){
		$parainfo=htmlentities($_POST['article']);
		$author=htmlentities($_POST['username']);
		$kind=htmlentities($_POST['kind']);
		$branch=htmlentities($_POST['branch']);
		$links=htmlentities($_POST['links']);
		$title=htmlentities($_POST['title']);
		
		$title=str_replace("'","\'",$title);
		$parainfo=str_replace("'","\'",$parainfo);
		$author=str_replace("'","\'",$author);
		$links=str_replace("'","\'",$links);

		$t=time();
		$timest=date("Y-m-d h:i:s",$t);
		$query="insert INTO `requests`(`parainfo`, `author`, `subtime`, `kind`, `branch`, `links`,`title`) VALUES ('{$parainfo}','{$author}','{$timest}','{$kind}','{$branch}','{$links}','{$title}')";
		//echo $query;
		$result=mysqli_query($connection,$query);
		echo "<h2><center>Successfully Sent!!!!</center></h2>";
	}

?>
<div class="wrap">
<?php include("includes/articleform.php"); ?>
</div>
<?php include("includes/footer.php"); ?> 
</body>
</html>
