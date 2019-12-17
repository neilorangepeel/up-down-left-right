<?php get_header(); the_post(); ?>

    <section class="featured-image" style="background-image: url(<?php bloginfo('template_directory'); ?>/_/_images/404.svg);"></section>

    <main class="error-page">
        
        <h1>404 Error page not found<br>Try looking in another castle </h1>
        <a class="home-link" href="<?php bloginfo('home') ?>"><i aria-hidden="true" data-icon="/"></i><span class="screenreader home">Home</span></a>

    </main>

<?php get_footer(); ?>
