
<?php $item = $template_args['item']; ?>
<?php $banner = $item['banner']; ?>
<?php if ($banner) : ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
			<div class="banner">
				<img src="<?= $banner ?>" alt="">
			</div>
			</div>
		</div>
	</div>

<?php endif ;?>