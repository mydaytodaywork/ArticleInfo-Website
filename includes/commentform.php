<div class="comments-area">
		<h3><img src="images/r-blog.png" title="comment">Leave a comment</h3>
			<form method="post" action="article.php?fetch=<?php echo $fetch ?>" >
				<p>
					<label>Name</label>
					<span>*</span>
					<input type="text" value="" name="name" required>
				</p>
				<p>
					<label>Email</label>
					<span>*</span>
					<input type="text" value="" name="email" required>
				</p>
				<p>
					<label>Comment</label>
					<span>*</span>
					<textarea required name="comment"></textarea>
				</p>
				<p>
					<input type="submit" value="Post" name="comment_submit">
				</p>
			</form>		
</div>