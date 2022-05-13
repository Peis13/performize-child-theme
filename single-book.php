<?php

/* Template Name: Book Template */

get_header();

?>

<div class="custom-template-content">

    <?php
    $args = array(
        'post_type'      => 'book',
        'posts_per_page' => 10,
    );

    $loop = new WP_Query($args);
    while ( $loop->have_posts() ) {
        $loop->the_post();
        ?>
        <div class="entry-content">
            <?php the_title(); ?>
            <?php the_content(); ?>
        </div>
        <?php
    }
    ?>
    
</div>

<aside class="widget-area custom-sidebar">

	<?php dynamic_sidebar( 'custom-sidebar' ); ?>
    
</aside>

<?php

get_footer();