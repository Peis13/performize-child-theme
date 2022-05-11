<?php

/* Template Name: Custom Template */

get_header();

?>

<div class="custom-template-content">

    <?php the_content(); ?>
    
</div>

<aside class="widget-area custom-sidebar">

	<?php dynamic_sidebar( 'custom-sidebar' ); ?>
    
</aside>

<?php

get_footer();