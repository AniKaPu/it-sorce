<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page-title page-title--secondary">
			<h1><?php echo get_the_title() ?></h2>
		</div>
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col f-second">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
