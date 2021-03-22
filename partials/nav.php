<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<nav class="navbar navbar-expand-md navbarDefault wrap-large" id="navbar" role="navigation">
    <div class="container-fluid p-0 navWrapper">
        <a class="logo" href="<?php echo get_home_url() ?>"><img src="<?php echo $logo[0]; ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nawigacja" aria-controls="nawigacja" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'menu',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'nawigacja',
            'menu_class' => 'nav navbar-nav ml-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>
        <a class="button button--round" href="">Sign up</a>
        <a class="button button--round" href="">Sign in</a>
	</div>
</nav>
