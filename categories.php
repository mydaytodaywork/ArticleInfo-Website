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
				 		$query="SELECT `kindid`, `kind`, `counter` FROM `kind_table` WHERE 1 order by counter desc,kind";
				 		$result=mysqli_query($connection,$query);
				 		$count=1;
				 		while($row=mysqli_fetch_row($result)){
				 			echo "<li><a href='index.php?kind=".$row[1]."'><span class='category-name'>$count. $row[1] ($row[2])</span></a></li>";
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
