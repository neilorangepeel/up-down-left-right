<header class="header" role="banner">

    <?php global $tt_options;
        $tt_settings = get_option( 'tt_options', $tt_options ); 
    ?>
    <?php if( $tt_settings['logo_url'] != '' ) : ?>
    <a href="<?php echo get_option('home'); ?>/" class="logo">
    <img src="<?php echo $tt_settings['logo_url']; ?>" alt="<?php bloginfo('name'); ?> Logo">
    </a>
    <?php else: ?>
    <a href="<?php echo get_option('home'); ?>/" class="logo">
    <h1><?php bloginfo('name'); ?></h1>
    </a>
    <?php endif; ?>

    <a href="#menu" class="navicon">Menu</a>

    <nav id="menu" class="nav" role="navigation">
        <?php wp_nav_menu(array('menu' => 'main_nav')); ?>
    </nav>

</header>
