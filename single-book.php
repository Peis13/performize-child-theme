<?php

get_header();

?>

<div class="custom-template-content">

    <?php
    if( have_posts() ) {
        while ( have_posts() ) {
            the_post();
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
