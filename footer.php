<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootWp
 */

?>


</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">
try {
    Typekit.load();
} catch (e) {}
</script>

</body>

</html>