<!DOCTYPE HTML>
<head>
<title>Blog</title>
<style>
pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
}
code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px;
}
code, kbd, pre, samp {
    font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code, kbd, pre, samp {
    font-family: monospace, monospace;
    font-size: 1em;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.coded{
	border: 1px solid #fcc;
	padding: 20px;
	margin: 30px;
	background-color: #f5f5f5;
	border-radius: 10px;
	color: green;
}
</style>
<?php 
	include("includes/header.php");
	include("includes/connection.php");
	if(!isset($_GET['fetch']))
			header("location:index.php");

	$fetch=$_GET['fetch'];

	$query="UPDATE `posts` SET visits=visits+1 WHERE postid=$fetch";
	$result=mysqli_query($connection,$query);

	$query="SELECT `branchid`, `kindid`, `topic`, `longinfo`, `author`, `links`, `subtime`, `keywords`,`code_data` FROM `posts` WHERE postid=$fetch";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_row($result);

	if(isset($_POST['comment_submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comments=$_POST['comment'];
		$t=time();
		$cdate=date("Y-m-d h:i:s",$t);
		$query="INSERT INTO `comments_table`(`pid`, `name`, `comment`, `date_comment`, `email`) VALUES ('{$fetch}','{$name}','{$comments}','{$cdate}','{$email}')";
		$result=mysqli_query($connection,$query);
	}


?>
<div class="wrap">
	<div class="main">
		<div class="content">
			<div class="box1">
   				 <h3><a href="article.php?fetch=<?php echo $fetch; ?>"><?php echo $row[2]; ?></a></h3>
    				<span>By <?php echo $row[4]."  on ".$row[6]; ?><span class="comments"></span></span> 
			   
				<div class="blog-data">
				    <p>
				    	<?php echo "$row[3]"; ?>
				    </p>

				    <?php
				    	if($row[8]!=''){
				    		echo "<div class='coded'>";
				    		echo "<pre><code>$row[8]
							</code></pre></div>";
				    	}
				    ?>

				    <div>
				    <?php
				    	if($row[5]!=''){
				    		echo "<br/><br/><h3>Other Useful Links:</h3>";
				    		echo $row[5];
				    	}
				    ?>
				    </div>


				</div>
			<div class="clear"></div>
		</div>			
		<?php include("includes/commentform.php"); ?>
		<?php include("includes/postcomments.php"); ?>		
		
	</div>
	
			
 </div>
<?php include("includes/sidebar.php"); ?>

</div>
</div>	
			<?php include("includes/footer.php"); ?>	
  </div>
</body>
</html>