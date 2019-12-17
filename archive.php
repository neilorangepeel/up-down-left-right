<?php get_header(); ?>

    <?php include (TEMPLATEPATH . '/_/parts/navigation.php' ); ?>

    <main class="main center-wrap" role="main">

        <?php if (have_posts()) : ?>
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php if (is_category()) { ?>

            <h1 class="archive-title"><i aria-hidden="true" data-icon="<"></i><br>Archive for - <?php single_cat_title(); ?></h1>

            <?php } elseif( is_tag() ) { ?>
            <h1 class="archive-title"><i aria-hidden="true" data-icon="<"></i><br>Archive for - <?php single_tag_title(); ?></h1>

            <?php } elseif (is_day()) { ?>
            <h1 class="archive-title"><i aria-hidden="true" data-icon="<"></i><br>Archive for <?php the_time('F jS, Y'); ?></h1>

            <?php } elseif (is_month()) { ?>
            <h1 class="archive-title"><i aria-hidden="true" data-icon="<"></i><br>Archive for <?php the_time('F, Y'); ?></h1>

            <?php } elseif (is_year()) { ?>
            <h1 class="archive-title"><i aria-hidden="true" data-icon="<"></i><br>Archive for <?php the_time('Y'); ?></h1>

            <?php } elseif (is_author()) { ?>
            <h1 class="archive-title"><i  aria-hidden="true" data-icon="<"></i><br>Author Archive</h1>

            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h1 class="archive-title"><i aria-hidden="true" data-icon="<"></i><br>Blog Archives</h1>

            <?php } ?>

            <?php get_search_form(); ?>

        <?php while ( have_posts() ) : the_post(); ?>

        <article <?php post_class('article'); ?>>

             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('', array('class' => 'featIMG')); ?></a>
             <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title (); ?></a></h2>
             <?php the_excerpt(); ?>

        </article>

        <?php endwhile;?>

        <?php else : ?>

            <h2>Nothing found</h2>

        <?php endif; ?>

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
