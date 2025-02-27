<?php
function islamic_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'islamic-theme')
    ));

    $widget_areas = array(
        'notices-widget' => 'Notices Widget Area',
        'prayer-times-widget' => 'Prayer Times Widget Area',
        'quran-verse-widget' => 'Quran Verse Widget Area',
        'hadith-widget' => 'Hadith Widget Area',
        'gallery-widget' => 'Gallery Widget Area'
    );

    foreach ($widget_areas as $id => $name) {
        register_sidebar(array(
            'name' => __($name, 'islamic-theme'),
            'id' => $id,
            'description' => __($name, 'islamic-theme'),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        ));
    }
}
add_action('after_setup_theme', 'islamic_theme_setup');

function islamic_theme_scripts() {
    wp_enqueue_style('islamic-theme-fonts', 'https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Scheherazade+New&display=swap');
    wp_enqueue_style('islamic-theme-style', get_stylesheet_uri());
    wp_enqueue_script('islamic-theme-clock', get_template_directory_uri() . '/js/clock.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'islamic_theme_scripts');