<div class="pagination-single group">

    <div class="newer" title="newer">
        <?php next_post_link('%link','«'); ?>
    </div>

    <div class="go-home">
        <a class="home-link" href="<?php bloginfo('home') ?>" title="home"><i aria-hidden="true" data-icon="/"></i><span class="screenreader home">Home</span></a>
    </div>

    <div class="comments-btn" id="comments_btn">
        <a href="#" title="comments"><i aria-hidden="true" data-icon="("></i><span class="screenreader">Show comments</span></a>
    </div>

    <div class="older" title="older">
        <?php previous_post_link('%link','»'); ?>
    </div>

</div>
