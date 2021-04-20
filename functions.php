<?php

//css and js files
/* Amar & Sofia enqued stylesheets along with scripts to style the website in a better and more stylish way. 
the stylesheets enqued are used also to make the slider work properly.*/

function gt_setup(){

    
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . "/css/font-awesome.css");
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/css/bootstrap.css");

    wp_enqueue_style('flexslider', get_stylesheet_directory_uri() . "/css/flexslider.css");

    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), );
    wp_enqueue_script('script', get_theme_file_uri('/js/script.js'), NULL, microtime(), true);
    wp_enqueue_script('jquery', get_theme_file_uri('/js/jquery.js'), NULL, microtime(), true);

    wp_enqueue_script('flexslider', get_theme_file_uri('/js/jquery.flexslider-min.js'), NULL, microtime(), true);

    wp_enqueue_script('owl.carousel', get_theme_file_uri('/js/owl.carousel.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');




//Custom Post Types
function news_post_type(){
    register_post_type('news',[
        'labels'=>[
            'name'=>'News',
            'singular_name'=>'news',
            'add_new'=>'Add New'
        ],
        'public'=>true,
        'show_ui'=>true,
        'show_in_nav_menus'=>true,
        'show_in_menu'=>true,
        'menu_position'=>1,
        'taxonomies'=>array('category'),
        'rewrite'=>[
            'slug'=>'news',
            'with_front'=>true
        ],
        'has_archive'=>true,
        'supports'=>array('title', 'editor', 'thumbnail', 'category')
    ]);
}
add_action('init', 'news_post_type');


//taxonomy
function news_taxonomy(){
    register_taxonomy('news_category', 
    'news',
    [
    'labels'=>[
    'name'=>'News Categories',
    'singular_name'=>'news Category'
    ],
    'public'=>true,
    'show_ui'=>true,
    'show_in_nav_menu'=>true,
    'show_in_menu'=>true,
    'show_admin_column'=>true,
    'rewrite'=>[
    'slug'=>'newscategory',
    'with_front'=>true
    ]
    ]
   );
}
add_action('init', 'news_taxonomy');


//thumbnail images
add_theme_support("post-thumbnails");
add_theme_support("widgets");


//excerpt length
/* Sofia - Excerpt length functioner behövdes så att 
inte allt innehåll skulle visas i Blog*/
function fix_excerpt_length($length){
    return 25;
}
add_filter("excerpt_length", "fix_excerpt_length");
//excerpt more
function excerpt_more_content($more){
    return '...';
}
add_filter("excerpt_more", "excerpt_more_content");

//menus
/* Sofia - Funktioner används i stället för att 
skriva ut en lista i nav. Det blir också 
lättare att ändra menyn skulle det behövas. */
function register_all_my_menus(){
    register_nav_menus([
        "header-menu"=>"header-menu"
    ]);
    
/* Amar - created footer menus to navigate easily throught the website.
footer-menu1 was the main menu of the website and footer-menu2 was categories of the posts*/
     register_nav_menus([
        "footer-menu1"=>"footer-menu1"
      
    ]);
    register_nav_menus([
        "footer-menu2"=>"footer-menu2"
      
    ]);
}
add_action("init", "register_all_my_menus");

//sidebar
/* Sofia - Function för att kalla in sidebar i Blog. 
Den gör det snabbare att navigera bland olika sorters inlägg
och söka efter inlägg.*/
function blog_sidebar(){
    register_sidebar([
        "name"=>"Blog Sidebar",
        "id"=>"blog-sidebar"
    ]);
}
add_action("widgets_init", "blog_sidebar");


//custom images sizes
/* Amar- puts those to adjust the images sizes in the slider and repeater of göteborg.php and stockholm.php.*/

add_image_size('product_image_small', 200, 200, true);
add_image_size('product_image_large', 700, 700, false);
add_image_size('slider', 1000, 500, false);




?>