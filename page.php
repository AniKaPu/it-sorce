<?php get_header(); ?>
<?php get_template_part('partials/pagehero') ?>

<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col">
            <div class="page-content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; else : ?>
                    <p><?php esc_html_e( 'Strona w budowie' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>   

<?php get_footer(); ?>
