<?php

/**
 * Crate custom taxonomy for your website .
 * @package textName .
 */

function create_genre_taxonomy()
{
    $labels = [
        'menu_name'         => __('Genre', 'aquila'),
        'name'              => _x('Genres', 'taxonomy general name', 'aquila'),
        'singular_name'     => _x('Genre', 'taxonomy singular name', 'aquila'),
        'search_items'      => __('Search Genres', 'aquila'),
        'popular_items'     => __('Popular Writers', 'aquila'),
        'all_items'         => __('All Genres', 'aquila'),
        'parent_item'       => __('Parent Genre', 'aquila'),
        'parent_item_colon' => __('Parent Genre:', 'aquila'),
        'name_field_description' => __('Name Field description ', 'aquila'),
        'slug_field_description' => __('Slug Field description ', 'aquila'),
        'parent_field_description' => __('Parent Field description ', 'aquila'),
        'desc_field_description' => __('Desc Field description ', 'aquila'),
        'edit_item'         => __('Edit Genre', 'aquila'),
        'view_item'         => __('View Genre', 'aquila'),
        'update_item'       => __('Update Genre', 'aquila'),
        'add_new_item'      => __('Add New Genre', 'aquila'),
        'new_item_name'     => __('New Genre Name', 'aquila'),
        'separate_items_with_commas' => __('Separete Genres with commas', 'aquila'),
        'add_or_remove_items'  => __('Add or remove Genre', 'aquila'),
        'choose_from_most_used'=> __('Chose from most used Genre', 'aquila'),
        'not_found'         => __('not Found Genre', 'aquila'),
        'no_terms'         => __('No terms Genre', 'aquila'),
        'filter_by_item'         => __('Filter Genre by item ', 'aquila'),
        'items_list_navigation'         => __('Genres list navigation', 'aquila'),
        'items_list'         => __('Genres list ', 'aquila'),
        'most_used'         => __('Most used Genres', 'aquila'),
        'back_to_items'         => __('Back to Genres', 'aquila'),
        'item_link'         => __('Genre Link', 'aquila'),
        'item_link_description'         => __('Genre Link Description', 'aquila'),
    ];
    $args   = [
        'labels'             => $labels,
        /**
         * (string[]) An array of labels for this taxonomy.
         * @see https://developer.wordpress.org/reference/functions/get_taxonomy_labels/
         * By default, Tag labels are used for non-hierarchical taxonomies, and Category labels are used for hierarchical taxonomies.
         *
         */
        'description'        => __('Movie Genre description ', 'aquila'), // (string) A short descriptive summary of what the taxonomy is for.
        'public'             => true, // bool , The default settings of $publicly_queryable, $show_ui, and $show_in_nav_menus are inherited from $public.
        'publicly_queryable' => true, // (bool) Whether the taxonomy is publicly queryable. If not set, the default is inherited from $public
        'hierarchical'       => true, // (bool) Whether the taxonomy is hierarchical. Default false.
        'show_ui'            => true, // (bool) Whether to generate and allow a UI for managing terms in this taxonomy in the admin. default $public
        'show_in_menu'       => true, // (bool) Whether to show the taxonomy in the admin menu .  If false, no menu is shown. $show_ui must be true
        'show_in_nav_menus'  => true, // (bool) Makes this taxonomy available for selection in navigation menus. default $public
        'show_in_rest'       => true, // (string) To change the base url of REST API route. Default is $taxonomy.
//          "rest_base" => "https://URL",  // (string) To change the base url of REST API route. Default is $taxonomy.
//          'rest_namespace'    => "stirng",  // (string) To change the namespace URL of REST API route. Default is wp/v2.
//          'rest_controller_class'   => "Rest_controller_class",  //(string) (optional) REST API Controller class name. Default: WP_REST_Terms_Controller
        'show_tagcloud'      => true, // (bool) Whether to list the taxonomy in the Tag Cloud Widget controls . default $show_ui (default true).
        'show_in_quick_edit' => true, // (bool) Whether to show the taxonomy in the quick/bulk edit panel. default $show_ui (default true).
        'show_admin_column'  => true, // (bool) Whether to display a column for the taxonomy on its post type listing screens. Default false.
//          'meta_box_cb' => "Callback_function_name" ,
/**
 *  (bool|callable) Provide a callback function for the meta box display. If not set, post_categories_meta_box() is used for hierarchical taxonomies, and post_tags_meta_box() is used for non-hierarchical. If false, no meta box is shown.
 */
//          'meta_box_sanitize_cb' => "Callback_function_name" ,
/**
 *  (callable) Callback function for sanitizing taxonomy data saved from a meta box. If no callback is defined, an appropriate one is determined based on the value of $meta_box_cb.
 */
// 'capabilities' => [
//     // $taxonomy['slug'] = genre;
//     'manage_terms'  =>   'manage_'.$taxonomy['slug'],
//     'edit_terms'    =>   'edit_'.$taxonomy['slug'],
//     'delete_terms'  =>   'delete'.$taxonomy['slug'],
//     'assign_terms'  =>   'assign_'.$taxonomy['slug'],
// ] , // custom capability .
// 'rewrite'  => [
//     'slug', //(string) Customize the permastruct slug. Defaults to $post_type key.
//     'with_front', //(bool) Whether the permastruct should be prepended with WP_Rewrite::$front. Default true.
//     'feeds', // (bool) Whether the feed permastruct should be built for this post type. Default is value of $has_archive.
//     'pages' , // (bool) Whether the permastruct should provide for pagination. Default true.
//     'ep_mask' , // (int) Endpoint mask to assign. If not specified and permalink_epmask is set, inherits from $permalink_epmask. If not specified and permalink_epmask is not set, defaults to EP_PERMALINK.
// ],
/**
 * (bool|array) Triggers the handling of rewrites for this taxonomy. Default true, using $taxonomy as slug. To prevent rewrite, set to false. To specify rewrite rules, an array can be passed with any of these keys:
 *
*/
//'query_var'           => true,
/**
 * (string|bool) Sets the query var key for this taxonomy.
 * Default $taxonomy key. If false, a taxonomy cannot be loaded at ?{query_var}={term_slug}.
 *  If a string, the query ?{query_var}={term_slug} will be valid.
 *
 *
 * */
// 'update_count_callback' => '_update_post_term_count', //
/**
 * (callable) Works much like a hook, in that it will be called when the count is updated. Default _update_post_term_count() for taxonomies attached to post types, which confirms that the objects are published before counting them. Default _update_generic_term_count() for taxonomies attached to other object types, such as users.
 */
//      "default_term"      => [] , // (string|array) Default term to be used for the taxonomy.
    'sort'         => true , // (bool) Whether terms in this taxonomy should be sorted in the order they are provided to wp_set_object_terms(). Default null which equates to false.
//      'args'      => [],  // (array) Array of arguments to automatically use inside wp_get_object_terms() for this taxonomy.
//            '_builtin'             => true , // (bool) This taxonomy is a "built-in" taxonomy. INTERNAL USE ONLY! Default false.
    ];

    register_taxonomy('genre', [ 'movies' ], $args);
    /**
     * @param taxonomy (string) (Required) Taxonomy key, must not exceed 32 characters.
     * @param object_type (array|string) (Required) Object type or array of object types with which the taxonomy should be associated.
     * @param args (array|string) (Optional) Array or query string of arguments for registering a taxonomy.
     *
     */
}
add_action('init', 'create_genre_taxonomy');
