<?php global $tt_options;
  $tt_settings = get_option( 'tt_options', $tt_options ); 
?>

<section class="social-icons">

  <?php if( $tt_settings['email_address'] != '' ) : ?>
  <a class="email" href="mailto:<?php echo $tt_settings['email_address']; ?>" title="Email"><i aria-hidden="true" data-icon="5"></i><span class="screenreader">Email</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['twitter_url'] != '' ) : ?>
  <a class="twitter" href="<?php echo $tt_settings['twitter_url']; ?>" title="Twitter"><i aria-hidden="true" data-icon="t"></i><span class="screenreader">Twitter</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['facebook_url'] != '' ) : ?>
  <a class="facebook" href="<?php echo $tt_settings['facebook_url']; ?>" title="Facebook"><i aria-hidden="true" data-icon="f"></i><span class="screenreader">Facebook</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['google_url'] != '' ) : ?>
  <a class="google" href="<?php echo $tt_settings['google_url']; ?>" title="Google+"><i aria-hidden="true" data-icon="g"></i><span class="screenreader">Google+</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['vimeo_url'] != '' ) : ?>
  <a class="vimeo" href="<?php echo $tt_settings['vimeo_url']; ?>" title="Vimeo"><i aria-hidden="true" data-icon="v"></i><span class="screenreader">Vimeo</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['youtube_url'] != '' ) : ?>
  <a class="youtube" href="<?php echo $tt_settings['youtube_url']; ?>" title="YouTube"><i aria-hidden="true" data-icon="y"></i><span class="screenreader">YouTube</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['instagram_url'] != '' ) : ?>
  <a class="instagram" href="<?php echo $tt_settings['instagram_url']; ?>" title="Instagram"><i aria-hidden="true" data-icon="i"></i><span class="screenreader">Instagram</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['flickr_url'] != '' ) : ?>
  <a class="flickr" href="<?php echo $tt_settings['flickr_url']; ?>" title="Flickr"><i aria-hidden="true" data-icon="3"></i><span class="screenreader">Flickr</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['dribbble_url'] != '' ) : ?>
  <a class="dribbble" href="<?php echo $tt_settings['dribbble_url']; ?>" title="Dribbble"><i aria-hidden="true" data-icon="d"></i><span class="screenreader">Dribbble</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['pinterest_url'] != '' ) : ?>
  <a class="pinterest" href="<?php echo $tt_settings['pinterest_url']; ?>" title="Pinterest"><i aria-hidden="true" data-icon="p"></i><span class="screenreader">Pinterest</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['github_url'] != '' ) : ?>
  <a class="github" href="<?php echo $tt_settings['github_url']; ?>" title="GitHub"><i aria-hidden="true" data-icon="h"></i><span class="screenreader">GitHub</span></a>
  <?php endif; ?>

  <?php if( $tt_settings['linkedin_url'] != '' ) : ?>
  <a class="linkedin" href="<?php echo $tt_settings['linkedin_url']; ?>" title="LinkedIN"><i aria-hidden="true" data-icon="n"></i><span class="screenreader">LinkedIN</span></a>
  <?php endif; ?>

  <a class="rss" href="<?php bloginfo('rss2_url'); ?>" title="RSS"><i aria-hidden="true" data-icon="r"></i><span class="screenreader">RSS</span></a>
  
</section>
