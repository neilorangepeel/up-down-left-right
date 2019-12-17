<?php get_header(); ?>
    
    <?php include (TEMPLATEPATH . '/_/parts/navigation.php' ); ?>

    <main class="main center-wrap" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <article <?php post_class('article'); ?>>

             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'featIMG')); ?></a>
             <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title (); ?></a></h2>
             <?php the_excerpt(); ?>

        </article>

        <?php endwhile;?>

        <div class="pagination-index group">
        
            <div class="newer">
                <?php previous_posts_link('« Newer') ?>
            </div>

            <div class="older">
                <?php next_posts_link('Older »') ?>
            </div>

        </div>

    </main>



<?php get_footer(); ?>
