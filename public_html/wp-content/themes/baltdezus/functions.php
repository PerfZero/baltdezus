<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


function baltdezus_setup() {

	load_theme_textdomain( 'baltdezus', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );


	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'baltdezus' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'baltdezus_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	
	add_theme_support( 'customize-selective-refresh-widgets' );

	
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'baltdezus_setup' );

function baltdezus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'baltdezus_content_width', 640 );
}
add_action( 'after_setup_theme', 'baltdezus_content_width', 0 );


function baltdezus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'baltdezus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'baltdezus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'baltdezus_widgets_init' );

function baltdezus_scripts() {
	wp_enqueue_style( 'baltdezus-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'baltdezus-style', 'rtl', 'replace' );

	wp_enqueue_script( 'baltdezus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'baltdezus_scripts' );

require get_template_directory() . '/inc/custom-header.php';


require get_template_directory() . '/inc/template-tags.php';


require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function custom_breadcrumbs() {
    // Настройки
    $separator = ' &gt; ';
    $home = 'Главная';
    
    // Если не на главной странице
    if (!is_front_page()) {
        echo '<nav class="breadcrumbs">';
        echo '<a href="' . home_url() . '">' . $home . '</a>' . $separator;
        
        if (is_category() || is_single()) {
            the_category(' ' . $separator . ' ');
            if (is_single()) {
                echo $separator;
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
        
        echo '</nav>';
    }
}

