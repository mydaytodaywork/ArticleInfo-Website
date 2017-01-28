<!DOCTYPE HTML>
<head>
<title>Compiled</title>
</head>
<?php 
	include("includes/header.php");
	include("includes/connection.php");

	$query="SELECT postid,p.branchid,p.kindid,topic,shortinfo,longinfo,author,subtime FROM posts p ";
	if(isset($_GET['branch'])){
		$branch=$_GET['branch'];
		$query.=",branch_table b where b.branchid=p.branchid and b.branch='{$branch}'";
	}
	if(isset($_GET['kind'])){
		$kind=$_GET['kind'];
		$query.=",kind_table k where k.kindid=p.kindid and k.kind='{$kind}'";
	}

	if(isset($_POST['article_search_button'])){
		$keyword=$_POST['article_search'];
		$query="SELECT postid,p.branchid,p.kindid,topic,shortinfo,longinfo,author,subtime FROM posts p where keywords like('%$keyword%') or topic like ('%$keyword%')";
	}
	$result=mysqli_query($connection,$query);
	

	//pagination
	$perpage=5;
	if(!isset($_GET['page']) || $_GET['page']==1){
		$current_page=1;
		$counter=mysqli_num_rows($result);
		$pages=intval($counter/$perpage);
		if(($counter%$perpage)!=0) $pages++;
		$query.=" order by postid desc limit $perpage";
	}else{
		$current_page=$_GET['page'];
		$pages=$_GET['totalpages'];
		
		//left over---- arrange 10 numbers per page then next page
		
		$start=($current_page-1)*$perpage;
		$query.=" order by postid desc limit $start,$perpage";
	}


	//echo $pages;
	$result=mysqli_query($connection,$query);
	//echo $query;
?>

<div class="wrap">
	<div class="main">
		<div class="content">

			<?php while($row=mysqli_fetch_row($result)){ ?>
			<div class="box1">
   				 <h3><a href="article.php?fetch=<?php echo urlencode($row[0]); ?>" style="color:green"> <?php echo $row[3]; ?></a> <span class="comments" style="font-size: 15px"><?php echo $row[6];?>	</span>
   				 &nbsp;&nbsp;<span style="font-size: 12px"><?php echo " ".$row[7]; ?> </span> </h3>

				<div class="data">
				    <span> <?php echo " ".$row[4]." "; ?><a href="article.php?fetch=<?php echo urlencode($row[0]); ?>">Continue reading >>></a></span>
				</div>

			</div>
			<?php } ?>

			<div class="page_links">
					<div class="page_numbers">
					    <ul>
						    <?php
						    	$i=1;
						    	while($i<=$pages){
									echo "<li ";
									if($i==$current_page) echo "class='active'";
									echo " ><a href='index.php?page=$i&totalpages=$pages";
									if(isset($_GET['branch']))
										echo "&branch=$branch";
									if(isset($_GET['kind']))
										echo "&kind=$kind";
									echo "'>$i</a></li>";
									$i++;
								}
								//echo "<li><a href='#'>... Next</a>";
							?>
						</ul>
					</div>	

				<div class="clear"></div>
				<div class="page_bottom">
					<p>Back To : <a href="#">Top</a> |  <a href="index.php">Home</a></p>
				</div>

			</div>
	</div>


<?php include("includes/sidebar.php"); ?>

</div>
</div>
<?php include("includes/footer.php"); ?> 
</div>
</body>
</html>
