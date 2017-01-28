<!DOCTYPE HTML>
<head>
<title>Departments</title>
</head>
<?php
	include("includes/header.php");
	include("includes/connection.php");
?>
<style>
</style>
<div class="wrap" style="font-size: 20px; line-height: 25px;">
			<h1 style="color:orange; font-size: 30px; margin-top:10px; ">Branch</h1>
			<div class="box1">
   				 <ul>
				 	<?php
				 		$query="SELECT `branchid`, `branch`, `counter` FROM `branch_table` order by counter desc,branch";
				 		$result=mysqli_query($connection,$query);
				 		$count=1;
				 		while($row=mysqli_fetch_row($result)){
				 			echo "<li><a href='index.php?branch=".$row[1]."'><span class='category-name'>$count. $row[1] ($row[2])</span></a></li>";
				 			$count++;
				 		}
				 	?>
				</ul>

			</div>
</div>
<?php include("includes/footer.php"); ?> 
</div>
</body>
</html>
