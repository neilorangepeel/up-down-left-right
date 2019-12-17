<?php /* Template Name: Archives */ get_header(); the_post(); ?>

    <?php include (TEMPLATEPATH . '/_/parts/navigation.php' ); ?>

    <main class="main center-wrap" role="main">

        <article class="article">

            <h1 class="archive-title"><i aria-hidden="true" data-icon="<"></i><br><?php the_title(); ?></h1>
            
            <?php get_search_form(); ?>

            <div class="archive-item">
                <h2><i aria-hidden="true" data-icon="'" style="font-size: 0.7em;"></i> Tags:</h2>
                <div class="tag-cloud">
                <?php wp_tag_cloud( array(
                    'smallest'                  => 1, 
                    'largest'                   => 1,
                    'unit'                      => 'em',
                    'format'                    => 'list'
                ) ); ?>
                </div>
            </div>
            
            <div class="archive-item">
            <h2><i aria-hidden="true" data-icon=":" style="font-size: 0.8em;"></i> Archives by Month:</h2>
                <div class="archives-list">
                    <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
                </div>
            </div>

        </article>

    </main>

<?php get_footer(); ?>
