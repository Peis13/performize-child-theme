<?php

/**
 * Enqueue scripts and styles.
 */
function perf_enqueue_styles()
{
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'child-custom-style',
        get_stylesheet_directory_uri() . '/custom.css',
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'perf_enqueue_styles' );

/**
 * Register sidebars.
 */
function perf_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __( 'Sidebar di esempio', 'performize' ),
			'id'            => 'example-sidebar',
			'description'   => __( 'Prova sidebar.', 'performize' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
    
	register_sidebar(
		array(
			'name'          => __( 'Custom Sidebar', 'performize' ),
			'id'            => 'custom-sidebar',
			'description'   => __( 'Sidebar per custom template.', 'performize' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'perf_widgets_init' );


/**
 * Register menus.
 */
function perf_register_menu() //da back-office se non seleziono niente in 'Posizione di visualizzazione', viene mostrato comunque
{
    register_nav_menus(
        array(
            'custom-menu'  => __( 'Custom menu', 'performize' ),
        )
    );
}
add_action( 'after_setup_theme', 'perf_register_menu' );