<?php require('header.php') ?>

<div id="content">
	<div class="singlepost">
			<div class="singlepost-image">
				<img src="<?=$post['image'];?>" class="image" />
			</div>
			<div class="singlepost-body">
				<div class="singlepost-title">
					<p> <?=$post['title']?> </p>
				</div>
				<div class="singlepost-subtitle">
					<p> <?=$post['posted_by']?> </p>
				</div>
				<div class="singlepost-content">
					<p> <?=$post['content']?> </p>
				</div>
			</div>
		</div>
</div>

<?php require('footer.php') ?>