<?php get_header(); the_post(); ?>

    <header class="post-header">
        <a class="home-link" href="<?php bloginfo('home') ?>"><i aria-hidden="true" data-icon="/"></i><span class="screenreader home">Home</span></a>
        <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><i aria-hidden="true" data-icon=":"></i> <?php the_time('d/m/Y'); ?></time>
    </header>

    <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <section class="featured-image" style="background-image: url('<?php echo $image[0]; ?>')"></section>
    <?php else: ?>
    <section class="minus-image"></section>
    <?php endif; ?>

    <main class="main center-wrap" role="main">

        <article <?php post_class('article'); ?>>
            <h1 class="title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <p class="tags"><?php the_tags('#',' #'); ?></p>
            <?php include (TEMPLATEPATH . '/_/parts/pagination.php' ); ?>

            <section class="comments-wrap animated" id="comments_wrap">
                <?php comments_template(); ?>
            </section>
        </article>

    </main>

<?php get_footer(); ?>
