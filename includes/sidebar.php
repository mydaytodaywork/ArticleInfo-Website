<div class="sidebar">
	<div class="sidebar_top">
   	 	<h3 style="color:orange;">Branch</h3>
		<div class="sidebar_top_list">
			 <ul>
			 	<?php
			 		$query="SELECT `branchid`, `branch`, `counter` FROM `branch_table` order by counter desc,branch";
			 		$result=mysqli_query($connection,$query);
			 		$rows=mysqli_num_rows($result);
			 		//echo $rows;
			 		$count=5;
			 		while($row=mysqli_fetch_row($result) and $count>0){
			 			echo "<li><a href='index.php?branch=".$row[1]."'><span class='category-name'>$row[1]</span> <span class='count'>($row[2])</span><div class='clear'></div></a></li>";
			 			$count--;
			 		}
			 		if($rows>5) 
			 			echo "<li style='float:right'><a href='departments.php'><span class='category-name'>View all...</span> </a></li><br/>";
			 	?>
			</ul>
		</div>
	</div>
	<div class="latest_comments">
		<h3 style="color:orange;">Category</h3>
		<div class="sidebar_top_list">
			<ul>
			 	<?php
			 		$query="SELECT `kindid`, `kind`, `counter` FROM `kind_table` WHERE 1 order by counter desc limit 10";
			 		$result=mysqli_query($connection,$query);
			 		$rows=mysqli_num_rows($result);
			 		//echo $rows;
			 		$count=5;
			 		while($row=mysqli_fetch_row($result) and $count>0){
			 			echo "<li><a href='index.php?kind=".$row[1]."'><span class='category-name'>$row[1]</span> <span class='count'>($row[2])</span><div class='clear'></div></a></li>";
			 			$count--;
			 		}
			 		if($rows>5) 
			 			echo "<li style='float:right'><a href='categories.php'><span class='category-name'>View all...</span> </a></li><br/>";
			 	?>
			</ul>
		</div>
	</div>
</div>
<div class="clear"></div>