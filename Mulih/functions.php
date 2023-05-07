<?php
add_action('init', 'houses_post_types');

function houses_post_types()
{
    // Раздел вопроса - category_house
    register_taxonomy('category_house', ['houses'], [
        'label' => 'Раздел вопроса',
        // определяется параметром $labels->name
        'labels' => array(
            'name' => 'Categories',
            'singular_name' => 'Category',
            'search_items' => 'Search category',
            'all_items' => 'All categories',
            'parent_item' => 'Par. category',
            'parent_item_colon' => 'Par. category:',
            'edit_item' => 'Edit category',
            'update_item' => 'Update category',
            'add_new_item' => 'Add new category',
            'new_item_name' => 'New category',
            'menu_name' => 'Category',
        ),
        'description' => 'Description for categories',
        // описание таксономии
        'public' => true,
        'show_in_nav_menus' => false,
        // равен аргументу public
        'show_ui' => true,
        // равен аргументу public
        'show_tagcloud' => false,
        // равен аргументу show_ui
        'hierarchical' => true,
        'rewrite' => array('slug' => 'houses', 'hierarchical' => false, 'with_front' => false, 'feed' => false),
        'show_admin_column' => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    ]);
    register_post_type('houses', [
        'label' => null,
        'labels' => [
            'name' => 'House',
            // основное название для типа записи
            'singular_name' => 'House',
            // название для одной записи этого типа
            'add_new' => 'Add new',
            // для добавления новой записи
            'add_new_item' => 'Add new house',
            // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Edit the house',
            // для редактирования типа записи
            'new_item' => 'New house',
            // текст новой записи
            'view_item' => 'View houses',
            // для просмотра записи этого типа.
            'search_items' => 'Search houses',
            // для поиска по этим типам записи
            'not_found' => 'The house was not found',
            // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'The house was not fount in a trash',
            // если не было найдено в корзине
            'parent_item_colon' => '',
            // для родителей (у древовидных типов)
            'menu_name' => 'Houses',
            // название меню
        ],
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null,
        // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null,
        // добавить в REST API. C WP 4.7
        'rest_base' => null,
        // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => 'dashicons-admin-home',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor'],
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

}
function mulih_scripts()
{
    wp_enqueue_style('style-css', get_stylesheet_uri() . '/css/style.css');
    wp_enqueue_style('scss', get_template_directory_uri() . '/scss/style.scss');
    wp_enqueue_style('script', get_template_directory_uri() . '/script/script.js');
    wp_enqueue_style('countUp', get_template_directory_uri() . '/script/countUp.min.js');

    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('comment_text', 'wpautop');


}

add_action('wp_enqueue_scripts', 'mulih_scripts');

?>