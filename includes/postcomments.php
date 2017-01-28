<?php
	$query="SELECT `name`, `comment`, `date_comment` FROM `comments_table` WHERE pid=$fetch order by cid desc";
	$result=mysqli_query($connection,$query);
	$number=mysqli_num_rows($result);
?>

<div class="box comment">
	    <h2><span>(<?php echo $number; ?>)</span> Comment's</h2>
	    <ul class="list">
	        <?php 
	        	while($crow=mysqli_fetch_row($result)){
	        ?>
	        <li>
	            <div class="data">
	                <div class="title"><?php echo $crow[0]; ?> <a href="#"> <?php echo $crow[2]; ?></a></div>
	                <p><?php echo $crow[1]; ?></p>
	            </div>
	            <div class="clear"></div>
	        </li>
			<?php } ?>
	    </ul>
<div class="clear"></div>