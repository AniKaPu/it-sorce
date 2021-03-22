<?php get_header(); ?>
    <div class="page-title">
		<h1>Aktualności</h2>
	</div>
	<div class="page-content">
		<div class="container">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-12 col-md-4 mb-3">
                        <div class="news__item">
                            <div class="news__item__thumbnail">
                                <?php echo get_the_post_thumbnail() ?>
                            </div>
                            <div class="news__item__content news__item__content--bordered">
                                <div class="news__item__texts">
                                    <h2 class="news__item__texts__title mb-2"><?php the_title()  ?></h2>
                                    <p class="news__item__texts__excerpt f-second"><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>
                                </div>
                                <div class="text-md-right mt-2">
                                    <a href="<?php echo esc_url(get_permalink()) ?>"" class="news__item__link">czytaj więcej</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
		</div>
	</div>

<?php get_footer(); ?>