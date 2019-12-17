<?php get_header(); the_post(); ?>
    
    <?php include (TEMPLATEPATH . '/_/parts/navigation.php' ); ?>

    <main class="main center-wrap" role="main">

        <article <?php post_class('article'); ?>>
             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'featIMG')); ?></a>
             <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title (); ?></a></h1>
             <?php the_content(); ?>
        </article>

    </main>



<?php get_footer(); ?>
