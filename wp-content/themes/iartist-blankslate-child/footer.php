</div>
<footer id="footer">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> - <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>

<script src="<?php echo get_stylesheet_directory_uri() . '/script.js'; ?>"></script>
<?php wp_footer(); ?>
</body>
</html>