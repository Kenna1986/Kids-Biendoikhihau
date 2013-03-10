<?php
class Bdkh_Kids
{
    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'themeSetup'));
        add_action('wp_print_styles', array($this, 'loadStyles'));
        add_action('wp_print_scripts', array($this, 'loadScripts'));
    }

    public function loadStyles()
    {
        wp_enqueue_style('global', get_template_directory_uri() . '/css/global.css');
    }

    public function loadScripts()
    {
        wp_enqueue_script('global', get_template_directory_uri() . '/js/modernizr-2.5.3.min-ck.js');
        wp_enqueue_script('jquery-lib', get_template_directory_uri() . '/js/jquery-1.8.2.js');
        wp_enqueue_script('script-ck', get_template_directory_uri() . '/js/script-ck.js');
    }

    public function themeSetup()
    {
        /*
         * Makes Twenty Twelve available for translation.
        *
        * Translations can be added to the /languages/ directory.
        * If you're building a theme based on Twenty Twelve, use a find and replace
        * to change 'twentytwelve' to the name of your theme in all the template files.
        */
        load_theme_textdomain('bdkh_kids', get_template_directory() . '/languages');

        // This theme styles the visual editor with editor-style.css to match the theme style.
        add_editor_style();

        // Adds RSS feed links to <head> for posts and comments.
        add_theme_support('automatic-feed-links');

        // This theme supports a variety of post formats.
        add_theme_support('post-formats', array( 'aside', 'image', 'link', 'quote', 'status'));

        // This theme uses wp_nav_menu() in one location.
        register_nav_menu('primary', __( 'Primary Menu', 'bdkh_kids' ));

        /*
         * This theme supports custom background color and image, and here
        * we also set up the default background color.
        */
//         add_theme_support( 'custom-background', array(
//             'default-color' => 'e6e6e6',
//         ) );

        // This theme uses a custom image size for featured images, displayed on "standard" posts.
        add_theme_support( 'post-thumbnails' );
//         set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
        add_image_size('slider', 645, 410, true);
        add_image_size('loop-thumbnail', 88, 88, true);
    }

    public function limitWords($string = '', $words = 10, $allowedTags = '<p>')
    {
        if ($string == '') {
            return;
        }
        else {
            $newString = explode(' ', $string);
            if (count($newString) > $words) {
                $newString = array_slice($newString, 0, $words);
            }
            $cleanString = implode(' ', $newString);
            return  strip_tags($cleanString, $allowedTags) . ' ...';
        }
    }
}

$kidsBdkh = new Bdkh_Kids();