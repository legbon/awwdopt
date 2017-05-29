<?php require('header.php') ?>

<div id="content">
	<?php 
		if( !isset($posts) || sizeof($posts) == 0 ) {
			echo "No posts found";
		}
	?>

	<?php // Begin Foreach
		foreach($posts as $post) {
	?>

		<div class="post">
			<div class="post-thumbnail">
				<img src="<?=$post['image'];?>" class="thumbnail" />
			</div>
			<div class="post-body">
				<div class="post-title">
					<p> <?=$post['title']?> </p>
				</div>
				<div class="post-subtitle">
					<p> <?=$post['posted_by']?> </p>
				</div>
				<div class="post-content">
					<p> <?=$post['content']?> </p>
				</div>
			</div>
		</div>

	<?php // End Foreach
		}
	?>

</div>

<?php require('footer.php') ?>