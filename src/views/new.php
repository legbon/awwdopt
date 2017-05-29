<?php require('header.php') ?>

<div id="content">
	<div class="postform">
		<form method="POST" action="/new">
			<div>
				<label for="title">Post Title</label> 
				<input type="text" name="title" id="title" />
			</div>
			<div>
				<label for="posted_by">Posted By</label> 
				<input type="text" name="posted_by" id="posted_by" />
			</div>
			<div>
				<label for="content">Post Content</label> 
				<textarea name="content" id="content">
				</textarea>
			</div>
			<div>
				<label for="image">Image</label> 
				<input type="text" name="image" id="image" />
			</div>
			<input type="submit" value="Post!"/>
		</form>
	</div>
</div>

<?php require('footer.php') ?>