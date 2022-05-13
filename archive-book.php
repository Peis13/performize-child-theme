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
    if( $loop->have_posts() ) {
        while ( $loop->have_posts() ) {
            $loop->the_post();
            ?>

            <div class="entry-content">
                <?php
                    the_title();
                    the_content();
                ?>
            </div>

            <div>Autore: <?= get_field('autore'); ?></div>
            <div>Titolo: <?= get_field('titolo'); ?></div>
            <div>Editore: <?= get_field('editore'); ?></div>
            <a href="<?php the_permalink() ?>">link</a> 

            <?php
        }
    }
    ?>
    
</div>

<aside class="widget-area custom-sidebar">

	<?php dynamic_sidebar( 'custom-sidebar' ); ?>
    
</aside>

<?php

get_footer();
