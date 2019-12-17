  <?php

    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
      die ('Please do not load this page directly. Thanks!');

    if ( post_password_required() ) { ?>
      This post is password protected. Enter the password to view comments.
    <?php
      return;
    }
  ?>

  <?php if ( have_comments() ) : ?>
    
    <h4 class="comments-header-num" id="comments"><i aria-hidden="true" data-icon="("></i> <?php comments_number('No Responses', 'One Response', '% Responses' );?></h4>

    <ol class="commentlist">
       <?php $args = array(
        'avatar_size'       => 280
      ); ?>
      
       <?php wp_list_comments( $args, $comments ); ?> 
    </ol>
    
   <?php else : // this is displayed if there are no comments so far ?>

    <?php if ( comments_open() ) : ?>
      <!-- If comments are open, but there are no comments. -->

     <?php else : // comments are closed ?>

    <?php endif; ?>
    
  <?php endif; ?>

  <?php if ( comments_open() ) : ?>

  <div id="respond">

    <h4 class="comments-header-reply"><i aria-hidden="true" data-icon="("></i> <?php comment_form_title( 'Leave your comment', 'Relpy to %s!' ); ?></h4>

    <div class="cancel-comment-reply">
      <?php cancel_comment_reply_link('<i aria-hidden="true" data-icon="x"></i> cancel reply'); ?>
    </div>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
      <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

      <?php if ( is_user_logged_in() ) : ?>

        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

      <?php else : ?>

        <div>
          <input type="text" name="author" id="author" class="author" value="<?php echo esc_attr($comment_author); ?>" size="30" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> placeholder="Name:"/>
          <label for="author" class="screenreader">Name <?php if ($req) echo "(required)"; ?></label>
        </div>

        <div>
          <input type="text" name="email" id="email" class="email" value="<?php echo esc_attr($comment_author_email); ?>" size="30" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> placeholder="Email: (will not be published)"/>
          <label for="email" class="screenreader">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label>
        </div>

        <div>
          <input type="text" name="url" id="url" class="url" value="<?php echo esc_attr($comment_author_url); ?>" size="30" tabindex="3" placeholder="Website:"/>
          <label for="url" class="screenreader">Website</label>
        </div>

      <?php endif; ?>

      <!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

      <div>
        <textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" placeholder="Write your message here..."></textarea>
      </div>

      <div>
        <input name="submit" type="submit" id="submit" class="btn" tabindex="5" value="Submit" />
        <?php comment_id_fields(); ?>
      </div>
      
      <?php do_action('comment_form', $post->ID); ?>

    </form>

    <?php endif; // If registration required and not logged in ?>
    
  </div>

  <?php endif; ?>
