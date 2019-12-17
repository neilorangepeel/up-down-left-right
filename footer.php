  <footer class="footer" role="contentinfo">

    <?php include (TEMPLATEPATH . '/_/parts/social-icons.php' ); ?>

    <?php global $tt_options;
        $tt_settings = get_option( 'tt_options', $tt_options ); 
    ?>
    
    <small class="copyright">
        <?php if( $tt_settings['author_credits'] ) : ?>Made with <i class="heart" aria-hidden="true" data-icon="0"><span class="screenreader">Love</span></i> by <a href="http://tinktank.in">Tink Tank</a><br><?php endif; ?> &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>
    </small>

  </footer>

<?php wp_footer(); ?>

</body>

</html>
